<script type="text/javascript">
$(function() {
	$("#sortable").sortable({
		handle: '.drag',
		helper: 'original',
		opacity: 0.8,
		axis: 'y',
		revert: true,
		update: function(event, ui) {
			var item_id = ui.item.attr('id');
			var newOrder = $('#sortable').sortable('toArray');
			var position = jQuery.inArray(item_id, newOrder);
			$.post('<?php echo Router::url(array('controller' => $controller, 'action' => 'save_order')); ?>' + '/' + item_id, {'data[<?php echo Inflector::classify($controller); ?>][order]' : position});
		}
	});
});
</script>