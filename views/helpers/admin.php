<?php
class AdminHelper extends Helper {
	var $helpers = array('Html');
 
	/**
	 * Highlight a menu option based on path
	 *
	 * A menu path gets passed and it compares to requestd path and sets the call to be highlighted.
	 * Use regular preg expressions in the pattern matching.
	 *
	 * @param path for which the nav item should be highlighted
	 * @param optional normal class to be returned, default empty
	 * @param optional highlight class to be returnd, default active
	 * @return returns the proper class based on the url
	 */
	function highlight($path, $normal = '', $selected = 'active') {
		$class = $normal;
		$currentPath = substr($this->Html->here, strlen($this->Html->base));
		if (preg_match($path,$currentPath)){
			$class .= " ".$selected;
		}
		return $class;
    }
	
	function edit_link($url){
		return $this->Html->link(
			$this->Html->image("admin/edit.jpg", array("alt" => "Edit")), 
			$url, 
			array('class' => 'tip', 'title' => 'Edit this record', 'escape' => false)
		); 
	}
	
	function add_link($url){
		return $this->Html->link(
			$this->Html->image("admin/add.jpg", array("alt" => "Add")), 
			$url, 
			array('class' => 'tip', 'title' => 'Add a new record', 'escape' => false)
		); 
	}
	
	function delete_link($url){
		return $this->Html->link(
			$this->Html->image("admin/delete.jpg", array('alt' => 'Delete')), 
			$url, 
			array('class' => 'tip delete', 'title' => 'Delete this record', 'escape' => false)
		); 
	}

	function fade_delete_link($url){
		return $this->Html->link(
			$this->Html->image("admin/delete.jpg", array('alt' => 'Delete')), 
			$url, 
			array('class' => 'tip fadeDelete', 'title' => 'Delete this record', 'escape' => false)
		); 
	}

	function translate_link($url){
		return $this->Html->link(
			$this->Html->image('admin/translate.png', array('alt' => 'Translate')),
			$url,
			array('class' => 'tip', 'title' => 'Translate to a different language', 'escape' => false)
		);
	}
	
	function list_link($url){
		return $this->Html->link(
			$this->Html->image('admin/list.jpg', array('alt' => 'List')),
			$url,
			array('class' => 'tip', 'title' => 'List of records', 'escape' => false)
		);
	}

	function gallery_link($url) {
		return $this->Html->link(
			$this->Html->image('admin/gallery.jpg', array('alt' => 'Gallery')),
			$url,
			array('class' => 'tip gallery', 'title' => 'View gallery images', 'escape' => false)
		);
	}

	function range_link($url) {
		return $this->Html->link(
			$this->Html->image('admin/ranges.jpg', array('alt' => 'Range')),
			$url,
			array('class' => 'tip range', 'title' => 'View ranges for this region', 'escape' => false)
		);
	}

}
?>