// Equal heights
(function(a){a.fn.equalHeights=function(d,c){var b=0;b=(d)?d:0;this.each(function(){if(a(this).height()>b){b=a(this).height();}});if((c)&&b>c){b=c;}return this.each(function(){a(this).height(b).css("overflow","auto");});};})(jQuery);
// Temp col count fix
var tempcolfix=function(){var a=$(".section-options ul").removeClass("four_up").removeClass("three_up").removeClass("two_up").children("li").length;var b="three_up";if(a%3===0){b="three_up";}else{if(a%4===0){b="four_up";}else{if(a%2===0){b="two_up";}}}$(".section-options ul").addClass(b);
    $(".section-features ul.two_up li:nth-child(odd)").addClass('clear');$(".product-options-casestudy ul li:nth-child(odd)").addClass('clear');
};

// IE6 PNG fix - http://allinthehead.com/retro/338/supersleight-jquery-plugin
jQuery.fn.supersleight=function(a){a=jQuery.extend({imgs:true,backgrounds:true,shim:"x.gif",apply_positioning:true},a);return this.each(function(){if(jQuery.browser.msie&&parseInt(jQuery.browser.version,10)<7&&parseInt(jQuery.browser.version,10)>4){jQuery(this).find("*").andSelf().each(function(d,f){var b=jQuery(f);if(a.backgrounds&&b.css("background-image").match(/\.png/i)!==null){var c=b.css("background-image");var h=c.substring(5,c.length-2);var g=(b.css("background-repeat")==="no-repeat"?"crop":"scale");var e={filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+h+"', sizingMethod='"+g+"')","background-image":"url("+a.shim+")"};b.css(e);}if(a.imgs&&b.is("img[src$=png]")){var e={width:b.width()+"px",height:b.height()+"px",filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+b.attr("src")+"', sizingMethod='scale')"};b.css(e).attr("src",a.shim);}if(a.apply_positioning&&b.is("a, input")&&(b.css("position")===""||b.css("position")==="static")){b.css("position","relative");}});}});};

// iPhone ZoomFix https://gist.github.com/901295
(function(e){var c="addEventListener",b="gesturestart",g="querySelectorAll",f=[1,1],d=g in e?e[g]("meta[name=viewport]"):[];function a(){d.content="width=device-width,minimum-scale="+f[0]+",maximum-scale="+f[1];e.removeEventListener(b,a,true);}if((d=d[d.length-1])&&c in e){a();f=[0.25,1.6];e[c](b,a,true);}}(document));
// media query change


    var widthChange = function(mq) {
        var productList = $('.product-list');
        if (mq.matches) {
        // window width is at least 60em
            // Make options boxes the same height
            $(".section-options p.desc").equalHeights();
            $(".section-options h3").equalHeights();
            $(".section-features li").equalHeights();
            $(".product-options-casestudy li").equalHeights();
            
            // Homepage specific scripts
            if($('body').hasClass('home')){
                
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
        }
        else {
            // window width is less than 500px
            
            
        }
    };
    
$(document).ready(function() {
    
    tempcolfix();
    
    var productList = $('.product-list');
    var filters = $('.product-filters a');
    

    $('.people_list').hide();

    
    // Homepage specific scripts
    if($('body').hasClass('home')){
        
        
        productList.children('li').each(function() {
            var head_link = $(this).find('h3 a');
            
            // Change main link on single facet projects to go directly
            if($(this).find('p.sections a').length === 1){
                var n_url = $(this).find('p.sections a').attr('href');
                head_link.attr('href', n_url);
            }
            
            // On clicking anywhere on the LI go to the main link href
            $(this).on('click', function(){
                window.location = head_link.attr('href');
                return false;
            });
        });
    }
    
    
// Setup the lightbox for any internal image links
    setupZoom();
});

$(window).load(function() {
    
    if($('body').hasClass('teampage')){
        
        $(".people_list").show().isotope({
            itemSelector : 'li',
            layoutMode : 'masonry',
            //sortBy: 'random',
            getSortData : {
                "core_mix" : function ( $elem ) {
                    var ret_val = 0;
                    
                    if($elem.find("a[name='steiny']").length > 0){
                        ret_val = 0;
                    } else if($elem.find("a[name='louisecrow']").length > 0){
                        ret_val = 1;
                    } else if($elem.find("a[name='matthew']").length > 0){
                        ret_val = 2;
                    } else if($elem.find("a[name='mark']").length > 0){
                        ret_val = 3;
                    } else {
                        ret_val = Math.floor(Math.random() * 20) + 4;
                    }
                    return ret_val;
                }
            },
            sortBy: 'core_mix'
        });
        
    }

    // media query event handler
    if (window.matchMedia) {
        var mq = window.matchMedia("(min-width: 60em)");
        mq.addListener(widthChange);
        widthChange(mq);
    }
});