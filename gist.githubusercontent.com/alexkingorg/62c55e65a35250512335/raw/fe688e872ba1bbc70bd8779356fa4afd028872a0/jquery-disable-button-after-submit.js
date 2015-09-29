jQuery(function($) {
	// set data-after-submit-value on input:submit to disable button after submit
	$(document).on('submit', 'form', function() {
		var $form = $(this),
			$button,
			label;
		$form.find(':submit').each(function() {
			$button = $(this);
			label = $button.data('after-submit-value');
			if (typeof label != 'undefined') {
				$button.val(label).prop('disabled', true);
			}
		});
	});
});
