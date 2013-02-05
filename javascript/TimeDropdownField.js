(function($) {
	$('.timedropdown .presets-trigger').entwine({
		onclick: function(e) {
			this.parent().find('select.presets').click();
		}
	});
	
	$('.timedropdown select.presets').entwine({
		onchange: function(e) {
			// Change the input to our new value
			if(this.val()) this.parent().find(':input').val(this.val());
			// Reset preset value afterwards
			this.val('');
		}
	});
}(jQuery));