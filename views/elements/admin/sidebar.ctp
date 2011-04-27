<ul id="sidebar">
	<li>
		<h2>Content Management</h2>
		<ul>
			<li><?php echo $html->link('Content', array('controller' => 'pages', 'action' => 'index')); ?></li>
			<li><?php echo $html->link('Events', array('controller' => 'events', 'action' => 'index')); ?></li>
			<li><?php echo $html->link('Image Gallery', array('controller' => 'albums', 'action' => 'index')); ?></li>
			<li><?php echo $html->link('Menus', array('controller' => 'menus', 'action' => 'index')); ?></li>
		</ul>
	</li>
	<li>
		<h2>Subscriber Management</h2>
		<ul>
			<li><?php echo $html->link('Subscribers', array('controller' => 'subscribers', 'action' => 'index')); ?></li>
		</ul>
	</li>
</ul>