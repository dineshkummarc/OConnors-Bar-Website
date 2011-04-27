<?php
class FrontHelper extends Helper {

	var $helpers = array('Html');
 
	/**
	 *	Searches through content using a regular expression to find a 
	 *	placeholder that signifys content should be broken into two pieces.
	 *
	 *	@param $regex The expression to use while searching.
	 *	@param $content The content to search for the regex pattern.
	 *	@return array
	 */
	function moreLink($regex, $content) {
		if (preg_match($regex, $content, $matches)) {
			$content = explode($matches[0], $content, 2);
		} else {
			$content = array($content);
		}

		return $content;
    }

}
?>