<?php
/* SVN FILE: $Id$ */

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html', 'Javascript');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array('Page');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title'));
		$this->render(join('/', $path));
	}
	
	/* */
	/* build the homepage content */
	/* */
	function index() {
		
		// get the page content
		$this->Page->recursive = -1;
		$page = $this->Page->read(null, 1);
		$this->set('page', $page);
		
		// set the page title
		$this->set('title_for_layout', $page['Page']['meta_title']);
		
		// get the next 3 x upcoming events
		$this->loadModel('Event');
		$latestUpcomingEvents = $this->Event->find('all', array('conditions' => array('Event.start_date>NOW()'), 'order' => 'Event.start_date asc', 'limit' => 3));
		$this->set('latestUpcomingEvents', $latestUpcomingEvents);
		
	}
	
	/* 
	 * build page content based on the slug passed to the action as the first argument after the controller
	 */
	function view() {
		
		$path = func_get_args();
		
		$exceptions = array(
			'contact-us' => 'contact-us',
			'traditional-irish-music-sessions-at-oconnors-bar-ballycastle' => 'traditional-irish-music-sessions-at-oconnors-bar-ballycastle',
			'oconnors-bar-merchandise' => 'oconnors-bar-merchandise'
		);
		
		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		} else {
			$page = $this->Page->find('first', array('conditions' => array('Page.slug' => $path[0])));
		
			if(!empty($page)) {
				$this->set('title_for_layout', $page['Page']['meta_title']);
				$this->set('page', $page);
				
				if(in_array($path[0], $exceptions)) {
					// check to see if this is the merchandise page
					// if so, return the merchandise gallery images
					if($path[0]=='oconnors-bar-merchandise'):
						$this->loadModel('Album');
						
						$albums = $this->Album->find(
							'first',
							array(
								'conditions' => array(
									'slug' => 'oconnors-bar-merchandise'
								),
								'contain' => array(
									'Image' => array(
										'order' => 'Image.order asc'
									)
								)
							)
						);
						
						$this->set('albums', $albums);
					endif;
					
					// render the custom view
					$this->render($exceptions[$path[0]]);
				} else {
					$this->render('common');
				}
			} else {
				$this->redirect('/');
			}
		}
		
	}
	
	function admin_clear_cache() {
		$this->autoRender = false;
    	$cachePaths = array('js', 'css', 'menus', 'views', 'persistent', 'models', '');
		foreach($cachePaths as $config) {
			clearCache(null, $config);
		}
		$this->flashSuccess(__('Cache cleared successfully.', true), array('controller' => 'pages', 'action' => 'home'));
	}

	function admin_home() {
		// empty function used to didplay the admin welcome page
	}
	
	function admin_index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}
	
	function admin_add() {
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'page'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'page'));
			}
		}
		
		$pages = array('0' => '-- Top Level Content --');
		$pages = array_merge($pages, $this->Page->find('list'));
		$this->set(compact('pages'));
	}

	function admin_edit($id = null) {
		if (!empty($this->data)) {
			if ($this->Page->save($this->data)) {
				$this->flashSuccess(sprintf(__('The %s has been saved', true), 'page'), array('action' => 'index'));
			} else {
				$this->flashWarning(sprintf(__('The %s could not be saved. Please, try again.', true), 'page'));
			}
		}
		if (empty($this->data)) {
			$this->idEmptyRedirect($id, array('action' => 'index'));
			$this->data = $this->Page->read(null, $id);
			
			$pages = array('0' => '-- Top Level Content --');
			$pages = array_merge($pages, $this->Page->find('list'));
			$this->set(compact('pages'));
		}
	}
	
}

?>