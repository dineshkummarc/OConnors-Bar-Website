<?php
class MenusController extends AppController {

	var $name = 'Menus';
	
	function index() {
		
		$this->loadModel('Page');
		$this->Page->recursive = -1;
		$page = $this->Page->read(null, 5);
		$this->set('page', $page);
		
		// set the page title
		$this->set('title_for_layout', $page['Page']['title']);
		
		$this->set('menu', $this->Menu->find('first', array('order' => 'Menu.created desc')));
		
	}
	
	function admin_index() {
		$this->Menu->recursive = 0;
		$this->paginate = array(
			'order' => 'Menu.created desc'
		);
		
		$this->set('food_menus', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Menu->create();
			if ($this->Menu->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'menu'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'menu'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!empty($this->data)) {
			if ($this->Menu->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'menu'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'menu'));
			}
		}
		if (empty($this->data)) {
			$this->idEmptyRedirect($id, array('action' => 'index'));
			$this->data = $this->Menu->read(null, $id);
		}
	}
	
	
}
?>