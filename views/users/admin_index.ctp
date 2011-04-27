<div class="users index">

	<div class="page-heading">
		<h2>Users</h2>
		<div class="toolbar">
			<?php echo $this->Admin->add_link(array('controller' => 'users', 'action' => 'add')); ?>
		</div>
	</div>

	<ul class="sortable" id="sortable">
		<?php foreach ($users as $user){ ?>
			<li id="project_<?php echo $user['User']['id']; ?>">
				<span class="listitem"><?php echo $user['User']['username']; ?> (<?php echo $user['User']['role']; ?>)</span>
				<span class="tools">
					<?php
						/*
							Check there is more than one user before displaying the delete button;
							if there is only one we can't allow them to delete it or the CMS will be inaccessible.
						*/
						if ($total > 1) {
							echo $this->Admin->delete_link(array('action'=>'ajax_delete', $user['User']['id']));
						}
						echo $this->Admin->edit_link(array('action' => 'edit', $user['User']['id']));
					?>
				</span>
			</li>
		<?php } ?>
	</ul>

</div>