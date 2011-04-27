<?php
class SubscribersController extends AppController {

	var $name = 'Subscribers';
	
	var $components = array('Email');
	
	function subscribe($success = null) {
		if (!empty($this->data)) {
			// format the DOB
			$this->data['Subscriber']['dob'] = $this->data['Subscriber']['year'] . '-' . $this->data['Subscriber']['month'] . '-' . $this->data['Subscriber']['day'] . ' 00:00:00';
			
			if( ($this->data['Subscriber']['day']) && ($this->data['Subscriber']['month']) && ($this->data['Subscriber']['year']) ) {
				$this->Subscriber->create();
				if ($this->Subscriber->save($this->data)) {
					$this->flashSuccess(sprintf(__('The %s has been saved', true), 'subscriber'), array('action' => 'subscribe', true));
				} else {
					$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscriber'), array('action' => 'subscribe', false));
				}
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscriber'), array('action' => 'subscribe', false));
			}
		} else {
			$this->set('success', $success);
		}
	}
	
	function unsubscribe() {
		
		$success = false;
		
		if(!empty($this->data)):
			// unsubscribe the user and return a success
			if( $this->Subscriber->updateAll(array('Subscriber.unsubscribed' => 1), array('Subscriber.email' => $this->data['Subscriber']['email'])) ) {
				$success = true;
			} else {
				$success = false;
			}
		endif;
		
		$this->set('success', $success);
	}
	
	function subscriber_update($test = 0) {
		
		$this->autoRender = false;
		Configure::write('debug', 2);
		$subscribers = $this->Subscriber->find('all', array('conditions' => array('Subscriber.unsubscribed' => 0)));
		$this->set('subscribers', $subscribers);
		
		$this->loadModel('Event');
		//$events = $this->Event->find('all', array('conditions' => array('Event.start_date>NOW()'), 'order' => 'Event.start_date asc', 'limit' => 3));
		$events = $this->Event->find('all', array('conditions' => array('Event.start_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 8  DAY)'), 'order' => 'Event.start_date asc', 'limit' => 10));
		$this->set('upcomingEvents', $events);
		
		$this->_emailConfiguration();
		
		// setup test subscriber set
		if($test):
			$subscribers = array(
				0 => array(
					'Subscriber' => array(
						'id' => 1,
						'name' => 'Ricky Steamboat McAlister',
						'email' => 'ricky.mcalister@googlemail.com',
						'dob' => '1981-08-08 00:00:00',
						'unsubscribed' => 0,
						'created' => '2011-04-27 21:54:37',
						'modified' => '2011-04-27 21:54:37'
					)
				),
				1 => array(
					'Subscriber' => array(
						'id' => 2,
						'name' => 'Cormac OConnor',
						'email' => 'info@oconnorsbar.ie',
						'dob' => '1981-08-08 00:00:00',
						'unsubscribed' => 0,
						'created' => '2011-04-27 21:54:37',
						'modified' => '2011-04-27 21:54:37'
					)
				)
			);
		endif;
		
		foreach($subscribers as $subscriber):
			$this->Email->to = "<" . $subscriber['Subscriber']['email'] .">";
	    	$this->Email->subject = 'Upcoming Events at O\'Connor\'s Bar, Ballycastle';
			$this->Email->replyTo = "O\'Connor\'s Bar Ballycastle <noreply@oconnorsbar.ie>";
			$this->Email->from = "O\'Connor\'s Bar Ballycastle <noreply@oconnorsbar.ie>";
	    	$this->Email->template = 'subscriber_update';
			$this->Email->sendAs = 'both';
			
			if($this->Email->send()) {
				echo "Email Sent Successfully to " . $subscriber['Subscriber']['email'] . "\n";
			} else {
				/* Check for SMTP errors. */
				$this->set('smtp-errors', $this->Email->smtpError);
				
				echo "<br /><br />";
		
				var_dump($this->Email->smtpError);
				
				echo "> > Error Sending Email to " . $subscriber['Subscriber']['email'] . "\n";
			}

			$this->Email->reset();
		endforeach;
	}
	
	function subscriber_update_debug() {
		
		$this->autoRender = false;
		Configure::write('debug', 2);
		$subscribers = $this->Subscriber->find('all', array('conditions' => array('Subscriber.unsubscribed' => 0)));
		$this->set('subscribers', $subscribers);
		
		$subscribers = array(
			0 => array(
				'Subscriber' => array(
					'id' => 1,
					'name' => 'Ricky Steamboat McAlister',
					'email' => 'ricky.mcalister@googlemail.com',
					'dob' => '1981-08-08 00:00:00',
					'unsubscribed' => 0,
					'created' => '2011-04-27 21:54:37',
					'modified' => '2011-04-27 21:54:37'
				)
			),
			1 => array(
				'Subscriber' => array(
					'id' => 2,
					'name' => 'Cormac OConnor',
					'email' => 'info@oconnorsbar.ie',
					'dob' => '1981-08-08 00:00:00',
					'unsubscribed' => 0,
					'created' => '2011-04-27 21:54:37',
					'modified' => '2011-04-27 21:54:37'
				)
			)
		);
		
		$this->loadModel('Event');
		$events = $this->Event->find('all', array('conditions' => array('Event.start_date BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 8  DAY)'), 'order' => 'Event.start_date asc', 'limit' => 10));
		$this->set('upcomingEvents', $events);
		
		pr($events);
		
		echo "<br /> * * * * * * * * * * * * * * * </br />";
		
		pr($subscribers);
	}
	
	function admin_index() {
		$this->Subscriber->recursive = 0;
		$this->paginate = array(
			'order' => 'created desc'
		);
		$this->set('subscribers', $this->paginate());
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Subscriber->create();
			if ($this->Subscriber->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'subscriber'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscriber'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!empty($this->data)) {
			if ($this->Subscriber->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'subscriber'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'subscriber'));
			}
		}
		if (empty($this->data)) {
			$this->idEmptyRedirect($id, array('action' => 'index'));
			$this->data = $this->Subscriber->read(null, $id);
		}
	}
	
	
}
?>
