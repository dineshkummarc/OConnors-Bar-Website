<div class="subscribers index">
	<div class="page-heading">
		<h2><?php __('Subscribers');?></h2>
	</div>

		<?php if (!empty($subscribers)):?>
		<ul class="sortable clearfix" id="sortable">
		<?php foreach ($subscribers as $subscriber): ?>
				<li id="<?php echo $subscriber['Subscriber']['id'];?>">
					<span class="listitem"><?php echo  $subscriber['Subscriber']['name']; ?></span>
					<span class="tools">
					<?php echo $this->Admin->delete_link(array('action' => 'ajax_delete', $subscriber['Subscriber']['id'])); ?>
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $subscriber['Subscriber']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'subscribers')); ?>
<?php echo $this->element('admin/pagination'); ?>
