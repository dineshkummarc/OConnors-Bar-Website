<div id="navigation-tabs">
	<ul>
		<li><?php echo $this->Html->link('Logout', '/admin/users/logout'); ?></li>
		<li><?php echo $this->Html->link('User Management', '/admin/users', array('class' => $menu->highlight('/^\/admin\/users*/'))); ?></li>
		<li><?php echo $this->Html->link('Content Management', '/admin', array('class' => $menu->highlight("/^((?!file_management|users|seo).)*$/"))); ?></li>
	</ul>
</div>