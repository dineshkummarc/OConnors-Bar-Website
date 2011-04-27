<div class="albums index">
	<div class="page-heading">
		<h2><?php __('Albums');?></h2>
		<div class="toolbar">
				<?php echo $this->Admin->add_link(array('action' => 'add')); ?>
		</div>
	</div>

		<?php if (!empty($albums)):?>
		<ul class="sortable_images clearfix" id="sortable">
		<?php foreach ($albums as $album): ?>
				<li id="<?php echo $album['Album']['id'];?>">
					<span class="drag tip" title="Drag to change order"></span>
					<span class="listitem"><?php echo $this->Html->image($album['Album']['thumbnail'], array('class' => 'thumbnail')); ?></span>
					<span class="tools">
					<?php echo $this->Admin->delete_link(array('action' => 'ajax_delete', $album['Album']['id'])); ?>
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $album['Album']['id'])); ?>
					<?php echo $this->Admin->gallery_link(array('controller' => 'images', 'action' => 'index', $album['Album']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'albums')); ?>
<?php echo $this->element('admin/pagination'); ?>
