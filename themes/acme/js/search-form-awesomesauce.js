(function ($) {
	Drupal.behaviors.blockContentDetailsSummaries = {
		attach: function (content) {
			console.log('Hello. I show up when the search is visible');
		}
	};
})(jQuery);