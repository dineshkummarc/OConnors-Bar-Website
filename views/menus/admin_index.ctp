<div class="menus index">
	<div class="page-heading">
		<h2><?php __('Menus');?></h2>
		<div class="toolbar">
				<?php echo $this->Admin->add_link(array('action' => 'add')); ?>
		</div>
	</div>

		<?php if (!empty($food_menus)):?>
		<ul class="sortable clearfix" id="sortable">
		<?php foreach ($food_menus as $food_menu): ?>
				<li id="<?php echo $food_menu['Menu']['id'];?>">
					<span class="listitem"><?php echo  $food_menu['Menu']['title']; ?></span>
					<span class="tools">
					<?php echo $this->Admin->delete_link(array('action' => 'ajax_delete', $food_menu['Menu']['id'])); ?>
					<?php echo $this->Admin->edit_link(array('action' => 'edit', $food_menu['Menu']['id'])); ?>
					</span>
				</li>
		<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</div>
<?php echo $this->element('admin/sorting_js', array('controller' => 'menus')); ?>
<?php echo $this->element('admin/pagination'); ?>
