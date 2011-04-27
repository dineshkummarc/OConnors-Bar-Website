<div class="<?php echo $pluralVar;?> index">
	<div class="page-heading">
		<h2><?php echo "<?php __('{$pluralHumanName}');?>";?></h2>
		<div class="toolbar">
			<?php echo "\t<?php echo \$this->Admin->add_link(array('action' => 'add')); ?>\n"; ?>
		</div>
	</div>

	<?php echo "\t<?php if (!empty(\${$pluralVar})):?>\n" ?>
		<ul class="sortable clearfix" id="sortable">
		<?php echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n"; ?>
				<li id="<?php echo "<?php echo \${$singularVar}['{$modelClass}']['{$primaryKey}'];?>"; ?>">
					<span class="drag tip" title="Drag to change order"></span>
					<span class="listitem"><?php echo"<?php echo  \${$singularVar}['{$modelClass}']['{$displayField}']; ?>"; ?></span>
					<span class="tools">
					<?php echo "<?php echo \$this->Admin->delete_link(array('action' => 'ajax_delete', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n"; ?>
					<?php echo "<?php echo \$this->Admin->edit_link(array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n"; ?>
					</span>
				</li>
		<?php echo "<?php endforeach; ?>\n"; ?>
		</ul>
	<?php echo "<?php endif; ?>\n"; ?>
</div>
<?php echo "<?php echo \$this->element('admin/sorting_js', array('controller' => '{$pluralVar}')); ?>\n"; ?>
<?php echo "<?php echo \$this->element('admin/pagination'); ?>\n"; ?>