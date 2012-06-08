// Equal heights plugin
(function(a){a.fn.equalHeights=function(d,c){var b=0;b=(d)?d:0;this.each(function(){if(a(this).height()>b){b=a(this).height();}});if((c)&&b>c){b=c;}return this.each(function(){a(this).height(b).css("overflow","auto");});};})(jQuery);
// Temp col count fix
var tempcolfix=function(){var a=$(".section-options ul").removeClass("four_up").removeClass("three_up").removeClass("two_up").children("li").length;var b="three_up";if(a%3===0){b="three_up";}else{if(a%4===0){b="four_up";}else{if(a%2===0){b="two_up";}}}$(".section-options ul").addClass(b);};

$(document).ready(function() {
	
// Setup the lightbox for any internal image links
	//setupZoom();
	
// Make options boxes the same height
	tempcolfix();
	$(".section-options p.desc").equalHeights();
	$(".section-options h3").equalHeights();
	

// Homepage specific scripts
	if($('body').hasClass('homepage')){
		
		var productList = $('.product-list');
		var filters = $('.product-filters a');
		
		// Count down for ordering the products in the same order as loaded
		var orderCountdown = productList.children('li').length * 4;
		
		productList.isotope({
			itemSelector : 'li',
			layoutMode : 'fitRows',
			getSortData : {
				for_orgs : function( $elem ) {
					if($elem.hasClass('for_orgs')){ return orderCountdown--; }
					else{ return 0; }
				},
				for_public : function( $elem ) {
					if($elem.hasClass('for_public')){ return orderCountdown--; }
					else{ return 0; }
				},
				for_volunteers : function( $elem ) {
					if($elem.hasClass('for_volunteers')){ return orderCountdown--; }
					else{ return 0; }
				},
				for_international : function( $elem ) {
					if($elem.hasClass('for_international')){ return orderCountdown--; }
					else{ return 0; }
				}
			}
		});
		
	}
});
