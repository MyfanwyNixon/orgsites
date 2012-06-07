// Equal heights plugin
(function(a){a.fn.equalHeights=function(d,c){var b=0;b=(d)?d:0;this.each(function(){if(a(this).height()>b){b=a(this).height();}});if((c)&&b>c){b=c;}return this.each(function(){a(this).height(b).css("overflow","auto");});};})(jQuery);
// Temp col count fix
tempcolfix=function(){var a=$(".section-options ul").removeClass("four_up").removeClass("three_up").removeClass("two_up").children("li").length;var b="four_up";if(!a%3){b="three_up";}else{if(!a%4){b="four_up";}else{if(!a%2){b="two_up";}}}$(".section-options ul").addClass(b);};

$(document).ready(function() {
	
	// Setup the lightbox for any internal image links
	//setupZoom();
	
	// Make options boxes the same height
	$(".section-options p.desc").equalHeights();
	tempcolfix();
	
});
