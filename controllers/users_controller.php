<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');

	function beforeFilter(){
		parent::beforeFilter();

		/* Un-comment this line to enable you to add a new admin user if none exist on your local db. */
		/* $this->Auth->allow('*'); */

		$this->set('roles', $this->User->access_groups());
	}
	
	function admin_login() {
		$this->layout = 'admin_login';
		$this->set('title_for_layout', 'Login');
	}

	function admin_logout() {
		$this->redirect($this->Auth->logout());
	}

	function admin_index() {
		$this->User->recursive = 0;
		$total = $this->User->find('count');
		$users = $this->User->find('all');
		$this->set(compact('users', 'total'));
	}

	function admin_add() {
		if (!empty($this->data)){
			$this->User->create();
			if ($this->User->save($this->data)){
				$this->flashSuccess('The user has been saved', 'index');
			} else {
				$this->flashWarning('The user could not be saved. Please, try again.');
			}
		}
	}

	function admin_edit($id = null) {
		$this->idEmptyRedirect($id, 'index');
		if (!empty($this->data)){
			if ($this->User->save($this->data)){
				$this->flashSuccess('The user has been saved', array('action'=>'index'));
			} else {
				$this->flashWarning('The user could not be saved. Please, try again.');
			}
		}
		if (empty($this->data)){
			$this->data = $this->User->read(null, $id);
		}
	}
}
?>