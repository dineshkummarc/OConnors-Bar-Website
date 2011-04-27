<?php
App::import('Lib', 'upload');

class AttachmentBehavior extends ModelBehavior { 

	/**
	 * Files that have been uploaded / attached; used for fallback functions.
	 *
	 * @access private
	 * @var array
	 */
	private $__attached = array();
	
	/**
	 * All user defined attachments; images => model.
	 *
	 * @access private
	 * @var array
	 */
	private $__attachments = array();
	
	/**
	 * The default settings for attachments.
	 *
	 * @access private
	 * @var array
	 */
	private $__defaults = array(
		'uploadDir' => 'img',
	);
	
	private $__metadata = array();
	/**
	 * Initialize uploader and save attachments.
	 *
	 * @access public
	 * @uses UploaderComponent
	 * @param object $Model
	 * @param array $settings
	 * @return boolean
	 */
	public function setup(&$Model, $settings = array()) {
		if (!empty($settings) && is_array($settings)) {
			foreach ($settings as $field => $attachment) {
				$this->__attachments[$Model->alias][$field] = array_merge($this->__defaults, $attachment);
				if(isset($attachment['metadata']) && is_array($attachment['metadata'])){
					$this->__metadata[$Model->alias][$field] = $attachment['metadata'];
					unset($attachment['metadata']);
				}
			}
		}
	}
	
	/**
	 * Deletes any files that have been attached to this model.
	 *
	 * @access public
	 * @param object $Model
	 * @return boolean
	 */
	public function beforeDelete(&$Model) {
		$data = $Model->read(null, $Model->id);
		
		if (!empty($data[$Model->alias])) {
			foreach ($data[$Model->alias] as $field => $value) {
				if (is_file(WWW_ROOT . $value)) {
					unlink(WWW_ROOT . $value);
				}
			}
		}
		
		return true;
	}
	
	/**
	 * Before validation occurs, find images that are to keep existing values and set it to the data array, so validation will not fail.
	 * This only happens when a record is being edited
	 * @access public
	 * @param object $Model
	 * @return boolean
	 */
	
	function beforeValidate(&$Model){
		if (!empty($Model->data[$Model->alias])) {
			foreach ($Model->data[$Model->alias] as $file => $data) {
				if (isset($this->__attachments[$Model->alias][$file])) {
					/* If editing */
					if ($Model->id) {
						// If we want to keep existing value we check for radio group with filename_keep_existing
						if(isset($Model->data[$Model->alias][$file.'_keep_existing']) && ($Model->data[$Model->alias][$file.'_keep_existing'] == true)){
							$existing_value = $Model->field($file);
							$Model->data[$Model->alias][$file] = $existing_value;
							unset($this->__attachments[$Model->alias][$file]);
						}
					}
				}
			}
		}
		return true;
	}
	
	/**
	 * Before saving the data, try uploading the image, if successful save to database.
	 *
	 * @access public
	 * @param object $Model
	 * @return boolean
	 */
	public function beforeSave(&$Model) {
		if (!empty($Model->data[$Model->alias])) {
			foreach ($Model->data[$Model->alias] as $file => $data) {
				if (isset($this->__attachments[$Model->alias][$file])) {				
					$attachment = $this->__attachments[$Model->alias][$file];
					$this->Uploader = new upload($data);
					if ($this->Uploader->uploaded) {
						// if upload is successful, set the variables required for manipulation of file
						if (!empty($attachment['uploadDir'])) {
							$attachment['uploadDir'] = rtrim($attachment['uploadDir'], "/");
							$this->Uploader->uploadDir = $attachment['uploadDir'];
							unset($attachment['uploadDir']);
						}
						
						/* loop through remaining settings */
						foreach($attachment as $key => $value){
							$this->Uploader->$key = $value;
						}
						
						// Upload file and attach to model data
						$this->Uploader->process(WWW_ROOT. $this->Uploader->uploadDir);
						if ($this->Uploader->processed) {
							/* if editing, remove existing file */
							if($Model->id){
								$original_file = $Model->field($file);
								if (is_file(WWW_ROOT . $original_file)) {
									unlink(WWW_ROOT . $original_file);
								}
							}
							
							/* Add any extra metadata to be saved to the data array */
							if(!empty($this->__metadata[$Model->alias][$file])){
								foreach($this->__metadata[$Model->alias][$file] as $meta_field => $value){
									if(!empty($this->Uploader->$value)){
										$Model->data[$Model->alias][$meta_field] = $this->Uploader->$value;
									}
								}
							}
							
							$Model->data[$Model->alias][$file] = $this->Uploader->uploadDir. '/' . $this->Uploader->file_dst_name;
							$this->__attached[$file][$file] = $this->Uploader->uploadDir. '/' . $this->Uploader->file_dst_name;
							$this->Uploader->clean();
						} else {
							$Model->invalidate($file);
							$Model->validationErrors[$file] = $this->Uploader->error;
							$this->__deleteAttached($file);
							$this->log($this->Uploader->log);
							return false;
						}
					}
				}
			}
		}
		return true;
	}
	
	/**
	 * Applies dynamic settings to an attachment.
	 *
	 * @access public
	 * @param string $model
	 * @param string $file
	 * @param array $settings
	 * @return void
	 */
	public function update($model, $file, $settings) {
		if (isset($this->__attachments[$model][$file])) {
			$this->__attachments[$model][$file] = array_merge($this->__attachments[$model][$file], $settings);
		}
	}
	
	/**
	 * Delete all attached images if attaching fails midway.
	 * 
	 * @access private
	 * @param string $file
	 * @return void
	 */
	private function __deleteAttached($file) {
		if (!empty($this->__attached[$file])) {
			foreach ($this->__attached[$file] as $column => $path) {
				if (is_file(WWW_ROOT . $path)) {
					unlink(WWW_ROOT . $path);
				}
			}
		}
	}
	
}