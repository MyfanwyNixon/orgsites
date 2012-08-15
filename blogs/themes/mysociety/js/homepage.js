$(document).ready(function() {
	
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
	
	
	// When hovering a filter fade the products not in this class
	var filterProductsHover = function(){
		
		productList.children('li').removeClass('blur');
		$('.product-filters').removeClass('filtered');
		$(this).removeClass('selected');
		
		var productClass = $(this).attr('class');
		
		productList
			.removeClass('for_orgs')
			.removeClass('for_public')
			.removeClass('for_volunteers')
			.removeClass('for_international')
			.children(':not(li.'+productClass+')')
			.addClass('blur');
			
		productList.isotope({ 
			filter : "",
			sortBy : productClass,
			sortAscending : false
		});
		
		selectFilter();
		$(this).addClass('selected');
	};
	
	// When leaving a filter fade all the products back in
	var filterProducts = function(){
			//productList.children('li').removeClass('blur');
	};
	
	// Select a filter
	var selectFilter = function(){
		
		// Remove selected class from all filters
		$('.product-filters a').removeClass('selected');
		
		// Get class to filter by
		var productClass = $(this).attr('class');
		
		// Select the clicked filter
		$(this).addClass('selected');
		
		// Add class to filters to fade all non-selected filters
		$('.product-filters').addClass('filtered');
		
		// Filter the products
		//productList.isotope({ filter: '.'+productClass });
		productList.addClass(productClass);
		
		return false;
	}
	
	// Setup for HoverIntent
	var hi_config = {    
		over: filterProductsHover,
		out: filterProducts,
		interval: 300,
		sensitivity: 5
	};
	
	
	$('.product-filters a').hoverIntent(hi_config);
	$('.product-filters a').on('click', selectFilter);
		
		
});