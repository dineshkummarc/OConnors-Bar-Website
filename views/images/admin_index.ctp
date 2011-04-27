<div class="images index">
	<div class="page-heading">
		<h2><?php __('Images');?></h2>
		<div class="toolbar">
				<?php echo $this->Admin->add_link(array('action' => 'add', $album['Album']['id'])); ?>
		</div>
	</div>

		<?php if (!empty($images)):?>
		<ul class="sortable_images clearfix" id="sortable">
		<?php foreach ($images as $image): ?>
				<li id="<?php echo $image['Image']['id'];?>">
					<span class="drag tip" title="Drag to change order"></span>
					<span class="listitem"><?php echo $this->Html->image($image['Image']['thumbnail'], array('class' => 'thumbnail')); ?></span>
					<span class="tools">
					<?php echo $this->Admin->delete_link(array('action' => 'ajax_delete', $image['Image']['id'])); ?>
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $image['Image']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'images')); ?>
<?php echo $this->element('admin/pagination'); ?>
