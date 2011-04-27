<div class="pages index">
	<div class="page-heading">
		<h2><?php __('Pages');?></h2>
	</div>

		<?php if (!empty($pages)):?>
		<ul class="sortable clearfix" id="sortable">
		<?php foreach ($pages as $page): ?>
				<li id="<?php echo $page['Page']['id'];?>">
					<span class="listitem"><?php echo  $page['Page']['title']; ?></span>
					<span class="tools">
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $page['Page']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'pages')); ?>
<?php echo $this->element('admin/pagination'); ?>
