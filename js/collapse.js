(function($) {
	$(document).ready(function() {
		$(".wpsc_top_level_categories > li:has(ul)").prepend("<span class=\"CatExpander\">[+]</span>");
		$(".CatExpander").css( 'cursor', 'pointer' );
		$(".CatExpander").toggle(function() {
			$(this).html( '[-]' );
		}, function() {
			$(this).html( '[+]' );
		});
		$(".CatExpander").click(function() {
			$(this).toggleClass("CatExpanded").siblings("ul").slideToggle(500);
			return false;
		}).eq(0).addClass("CatExpanded").end().slice(1).siblings("ul").hide();
		
	});
})(jQuery);
