<?php
class EventsController extends AppController {

	var $name = 'Events';
	var $uses = array('Event', 'Page');
	
	function index() {
		
		$this->Page->recursive = -1;
		$page = $this->Page->read(null, 3);
		$this->set('page', $page);
		
		// set the page title
		$this->set('title_for_layout', $page['Page']['title']);
		
		$latestUpcomingEvents = $this->Event->find('all', array('conditions' => array('Event.start_date>NOW()'), 'order' => 'Event.start_date asc', 'limit' => 3));
		$this->set('latestUpcomingEvents', $latestUpcomingEvents);
		
		$upcomingEvents = $this->Event->find('all', array('conditions' => array('Event.start_date>NOW()'), 'order' => 'Event.start_date asc'));
		$this->set('upcomingEvents', $upcomingEvents);
		
	}
	
	function admin_index() {
		$this->Event->recursive = 0;
		$this->paginate = array(
			'order' => 'Event.start_date desc'
		);
		$this->set('events', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'event'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'event'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!empty($this->data)) {
			if ($this->Event->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'event'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'event'));
			}
		}
		if (empty($this->data)) {
			$this->idEmptyRedirect($id, array('action' => 'index'));
			$this->data = $this->Event->read(null, $id);
		}
	}
	
	
}
?>