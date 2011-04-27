$(document).ready(function() {
	/**
	 *	Generates a tooltip element for anything
	 *	marked with a class of 'tip'.
	 */
	$('.tip').tooltip({
		effect: 'fade',
		tip: '#tooltip',
		position: 'top right',
		opacity: 0.85
	});

	/**
	 *	Deletes a record by accessing a URL via AJAX,
	 *	then slides that element up.
	 */
	$('a.delete').bind('click', function(e) {
		var elem = $(this);
		var thisUrl = $(this).attr('href');

		if (confirm('Are you sure you want to delete this record?')) {
			$.ajax({
				dataType: 'json',
				success: function(data) {
					if (data.message == 'Record Deleted') {
						elem.parents('li').slideUp('slow', function() {
							$(this).remove();
						});
					} else {
						alert('Error: ' + data.message);
					}
				},
				url: thisUrl
			});
		}

		e.preventDefault();
	});
	
	/**
	 * Initiates a Datepicker drop down
	 */
	$(".datepicker").datepicker({ 
		showAnim: 'slideDown',
		dateFormat: 'yy-mm-dd 15:00'
	});
});