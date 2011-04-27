<script type="text/javascript"> 
    tinyMCE.init({ 
        mode : "textareas",
        theme : "advanced", 
	    theme_advanced_buttons1 : "bold,italic,underline,separator,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,code", 
	    theme_advanced_buttons2 : "", 
	    theme_advanced_buttons3 : "", 
	    theme_advanced_toolbar_location : "top", 
	    theme_advanced_toolbar_align : "left", 
        convert_urls : false 
    }); 
</script>

<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Page', true)); ?></legend>
		<?php
			echo $this->Form->input('page_id', array('label' => 'Parent'));
			echo $this->Form->input('title');
			echo $this->Form->input('meta_title');
			echo $this->Form->input('meta_description');
			echo $this->Form->input('meta_keywords');
			echo $this->Form->input('body', array('style' => 'height: 400px;'));
			echo $this->Form->input('published', array('checked' => 'checked'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>