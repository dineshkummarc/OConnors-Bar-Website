<?php
class MenuHelper extends Helper {
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
		if (preg_match($path, $currentPath)){
			$class .= " ".$selected;
		}
		return $class;
    }

}
?>