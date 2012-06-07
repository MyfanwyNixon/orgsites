// Equal heights plugin
(function(a){a.fn.equalHeights=function(d,c){var b=0;b=(d)?d:0;this.each(function(){if(a(this).height()>b){b=a(this).height();}});if((c)&&b>c){b=c;}return this.each(function(){a(this).height(b).css("overflow","auto");});};})(jQuery);

$(document).ready(function() {
	
	// Setup the lightbox for any internal image links
	//setupZoom();
	
	// Make options boxes the same height
	$(".section-options p.desc").equalHeights();
});
