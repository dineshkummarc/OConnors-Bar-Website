<?php
class AppController extends Controller {

	var $helpers = array('Session', 'Html', 'Form', 'Menu', 'Front');
	var $components = array(
		'RequestHandler',
		'Auth',
		'Session',
		'Referer',
		'DebugKit.Toolbar',
		//'Security'
	);
	
	function beforeFilter() {
		$this->_configureAuthComponent();
		if($this->RequestHandler->isAjax()){
			Configure::write('debug', 0);
			$this->layout = 'ajax';
			$this->Security->validatePost = false;
		}
		
		if($this->_isAdminPanel()){
			$this->layout = 'admin';
			$this->helpers[] = 'Admin';
		}
	}

	function _configureAuthComponent() {
		$this->Auth->authError = 'Please login to access this area.';

		if ($this->_isAdminPanel()) {
			$this->Auth->userScope = array('User.role' => 'admin');
			$this->Auth->loginAction = array('admin' => true, 'controller' => 'users', 'action' => 'login');
			$this->Auth->loginRedirect = array('admin' => true, 'controller' => 'pages', 'action' => 'home');
		} else {
			$this->Auth->allow('*');
		}
	}
	
	function _emailConfiguration() {
		// setup preferred email configuration details
		
		/* SMTP Options */
		$this->Email->smtpOptions = array(
			'port'=>'465',
			'timeout'=>'60',
			'host' => 'ssl://smtp.gmail.com:465',
			'username'=>'oconnorsballycastle@gmail.com',
			'password'=>'celtic456'
		);
		
		/* Set preferred delivery method */
		// $this->Email->delivery = 'smtp';
		$this->Email->delivery = 'mail';
	}
	
	/**
	 * Checks the value of the admin routing and returns whether the application
	 * is being accessed from an admin action or not.
	 */
	protected function _isAdminPanel() {
		if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
			return true;
		}
		return false;
	}

	/**
	 * Sets up successful session flash message for view
	 *	@param string $msg
	 *	@param string $url
	 *	@return bool exits
	 */
	function flashSuccess($msg, $url = null){
		$this->Session->setFlash($msg, 'flash/success');
		if(!empty($url)):
			$this->redirect($url, null, true);
		endif;
	}

	/**
	 * Sets up warning session flash message for view
	 *	@param string $msg
	 *	@param string $url
	 *	@return bool exits	 */
	function flashWarning($msg, $url = null){
		$this->Session->setFlash($msg, 'flash/warning');
		if(!empty($url)):
			$this->redirect($url, null, true);
		endif;
	}

	/**
	 * Checks that an id exists
	 *	@param int $id
	 *	@param string $msg
	 *	@param string $url
	 */
	function idEmptyRedirect($id, $url = null){
		if(empty($id)):
			$this->flashWarning('Invalid ID', $url);
		endif;
	}

	/**
	 * Deletes a file via an ajax call
	 *	@return a json encoded array of data containing either an error message or the saved data
	 */
	
	function admin_ajax_delete($id = null) {
		$this->autoRender = false;
		if (!$this->RequestHandler->isGet() || !$this->RequestHandler->isAjax()) {
			exit;
		}
		if (!$id || !is_numeric($id)) {
			echo json_encode(array('message' => 'Invalid ID'));
			exit;
		}
		if ($this->{$this->modelClass}->delete($id)) {
			echo json_encode(array('message' => 'Record Deleted'));
			exit;
		}
		echo json_encode(array('message' => 'Record Not Deleted'));
		exit;
	}

	/**
	 * Updates the sequence of files.
	 * Expects an ajax call and an id parameter to be passed via post.
	 *	@return a json encoded array of data containing either an error message or the saved data
	 */
	function admin_save_order($id = null) {
		if (!$this->RequestHandler->isPost() || !$this->RequestHandler->isAjax()) {
			exit;
		}
		if (!is_numeric($id) || !isset($this->data[$this->modelClass]['order'])) {
			exit;
		}
		$this->autoRender = false;
		$this->{$this->modelClass}->id = $id;
		echo json_encode($this->{$this->modelClass}->save($this->data, true, array('order')));
	}
	
}
?>
