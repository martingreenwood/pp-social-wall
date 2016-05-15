//var cards = jQuery(".ppsw-card");
//for(var i = 0; i < cards.length; i++){
//    var target = Math.floor(Math.random() * cards.length -1) + 1;
//    var target2 = Math.floor(Math.random() * cards.length -1) +1;
//    cards.eq(target).before(cards.eq(target2));
//}

jQuery(function() {

	var $grid = jQuery('.grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
	});

	// change size of item by toggling gigante class
	//$grid.on( 'click', '.grid-item', function() {
	//  $(this).toggleClass('gigante');
	  // trigger layout after item size changes
	//  $grid.isotope('layout');
	//});

	var ppsw_card_width = jQuery('.ppsw-card').width();

	$grid.isotope('shuffle');

	jQuery(window).resize(function() {
		
		ppsw_card_width = jQuery('.ppsw-card').width();
		jQuery('.ppsw-card').height(ppsw_card_width);
		
		//console.log(ppsw_card_width);

		$grid.isotope('layout');
	
	}).resize();


	//jQuery('.grid').isotope({
		
		// set itemSelector so .grid-sizer is not used in layout
	//	itemSelector: '.grid-item',
	//	percentPosition: true,
	//	masonry: {
			// use element for option
	//		columnWidth: '.grid-sizer'
	//	}
	//});

});