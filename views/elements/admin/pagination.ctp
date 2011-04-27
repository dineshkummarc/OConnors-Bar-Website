<div class="pagination">
	<p><?php echo $this->Paginator->counter(array('format' => 'Page %page% of %pages%')); ?></p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< previous', array(), null, array('class' => 'disabled')); ?>
		|
		<?php echo $this->Paginator->numbers(); ?>
		|
		<?php echo $this->Paginator->next('next >>', array(), null, array('class' => 'disabled')); ?>
	</div>
</div>