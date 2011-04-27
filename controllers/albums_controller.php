<?php
class AlbumsController extends AppController {

	var $name = 'Albums';

	function index() {
		
		$this->loadModel('Page');
		$this->Page->recursive = -1;
		$page = $this->Page->read(null, 7);
		$this->set('page', $page);
		
		// set the page title
		$this->set('title_for_layout', $page['Page']['title']);
		
		$albums = $this->Album->find(
			'all',
			array(
				'contain' => array(
					'Image' => array(
						'order' => 'Image.order asc'
					)
				)
			)
		);
		$this->set('albums', $albums);
		
	}
	
	function admin_index() {
		$this->Album->recursive = 0;
		$this->set('albums', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid album', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('album', $this->Album->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Album->create();
			if ($this->Album->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'album'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'album'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flashWarning(sprintf(__('Invalid %s ID. Please, try again.', true), 'album'), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Album->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'album'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'album'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Album->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for album', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Album->delete($id)) {
			$this->Session->setFlash(__('Album deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Album was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>