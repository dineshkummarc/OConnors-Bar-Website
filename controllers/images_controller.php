<?php
class ImagesController extends AppController {

	var $name = 'Images';

	function admin_index($album_id = null) {
		if (!$album_id) {
			$this->flashWarning(sprintf(__('Invalid %s ID. Please, try again.', true), 'album'), array('controller' => 'albums', 'action' => 'index'));
		}
	
		$this->Image->recursive = -1;
		$this->paginate = array(
			'conditions' => array(
				'Image.album_id' => $album_id
			)
		);
		
		$this->set('album', $this->Image->Album->read(null, $album_id));
		$this->set('images', $this->paginate());
	}

	function admin_add($album_id = null) {
		if (!$album_id && empty($this->data)) {
			$this->flashWarning(sprintf(__('Invalid %s ID. Please, try again.', true), 'album'), array('controller' => 'albums', 'action' => 'index'));
		}
		
		if (!empty($this->data)) {
			$this->Image->create();
			if ($this->Image->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'image'), array('action' => 'index', $this->data['Image']['album_id']));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'album'));
			}
		} else {
			$this->data['Image']['album_id'] = $album_id;
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid image', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Image->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'image'), array('action' => 'index', $this->data['Image']['album_id']));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'album'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Image->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for image', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Image->delete($id)) {
			$this->Session->setFlash(__('Image deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Image was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>