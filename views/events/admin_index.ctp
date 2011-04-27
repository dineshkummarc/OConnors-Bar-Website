<div class="events index">
	<div class="page-heading">
		<h2><?php __('Events');?></h2>
		<div class="toolbar">
				<?php echo $this->Admin->add_link(array('action' => 'add')); ?>
		</div>
	</div>

		<?php if (!empty($events)):?>
		<ul class="sortable clearfix" id="sortable">
		<?php foreach ($events as $event): ?>
				<li id="<?php echo $event['Event']['id'];?>">
					<span class="listitem"><?php echo  $event['Event']['title'] . " ( " . $event['Event']['start_date'] . " ) "; ?></span>
					<span class="tools">
					<?php echo $this->Admin->delete_link(array('action' => 'ajax_delete', $event['Event']['id'])); ?>
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $event['Event']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'events')); ?>
<?php echo $this->element('admin/pagination'); ?>
