/* Author: 

*/


jQuery(document).ready(function() {
	if(Modernizr.cssanimations && Modernizr.csstransforms3d){
		$('#banner')
			.addClass('animated')
			.html('<div class="anim-bg countryside"></div><div class="anim-bg2 train"></div><div class="anim-frame train"></div><div class="anim-people people1"></div>');
		if(Modernizr.touch){
			$('#banner').live('tap', function(event) {
				$(this).toggleClass('tapplay');
			});
		}
	}
});





















