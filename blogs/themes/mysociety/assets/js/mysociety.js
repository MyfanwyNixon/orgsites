//load in mobile/desktop assets
function loader(type){
  if (type === 'mobile') {
    Modernizr.load([
      {
        //h5bp helpers
        load: '/wp-content/themes/mysociety/assets/js/helper.js',
        complete: function(){
          MBP.scaleFix();
        }
      }
    ]);

    //reset/remove stray stuff that might be left over from
    //desktop (only really worth it from the window.resize())
    $('article.homepage .project_product-section nav').remove();
    $('article.homepage .project_product-section .project_product-section-inner > *').css({
      position: 'static',
      visibilty: 'visible'
    });
    $('.tabs').children().show();
  } else if (type === 'desktop') {
    //homepage tab inners
    slider('article.homepage .project_product-section .project_product-section-inner');

    /*
     * Basic Tabs - only for desktop
     * no hash (and therefore bookmarking) or history
     */
    var $tabs = $('.tabs').children();
    //hide all but first tab
    $tabs.not(':first-child').hide();
    //set the first tabnav a to be active
    $('#tab-nav li:first-child a').addClass('active');

    //set up clicks
    $('#tab-nav').on('click', 'a', function(e){
      e.preventDefault();
      var href = $(this).attr('href'),
        //trim
        start = href.indexOf('#'),
        targetid = href.slice(start, href.length);
      //hide/show tabs
      $tabs.not($(targetid)).hide();
      $(targetid).show();
      //modify the tabnav
      $('#tab-nav a').removeClass('active');
      $(this).addClass('active');
    });
  } else {
    return;
  }
}


// slider - has nice swipey business on mobile
// BUG: can't do more than one on a page :/ XXXXXXXXXXXXXXXXX
function slider(elem){
  //iterate over all the sliders on the page
  $(elem).each(function(index){
    //cache slider id
    var slider_id = $(this).attr('id');

    //make bullets and nav
    var slider_size = $(this).children().length,
        bullets = '';
    if(slider_size > 1){
      //make bullets
      for (var i = 0; i < slider_size; i++){
        bullets += '<em>&bull;</em>';
      }
      //add next/prev buttons and bullets to page
      var $slider_nav = $('<nav><button id="slider_prev_'+slider_id+'" class="slider_prev">prev</button><span id="slider_bullets_'+slider_id+'">'+bullets+'</span><button id="slider_next_'+slider_id+'" class="slider_next">next</button></nav>');
      $slider_nav.hide();
      $(this).after($slider_nav);
      $slider_nav.fadeIn();
    }else{
      //if no more than 1 slider, exit
      return;
    }

    //show the rest of the children
    $(this).children().show();

    // var bullets_elems = $slider_nav.find('em');

    //make all the sliders
    window.slider_id = new Swipe($(this)[index], {
      continuous: true,
      //move the bullets
      callback: function(pos, e) {
        // this isn't working :S
        // var i = bullets_elems.length;
        // while (i--) {
          // bullets_elems[i].removeClass('on');
        // }
        // bullets_elems[pos].addClass('on');
      }
    });

    //bind clicks
    $('#slider_next_'+slider_id).on('click', function(){window.slider_id.next();});
    $('#slider_prev_'+slider_id).on('click', function(){window.slider_id.prev();});
  });
  //rinse and repeat
}

//generic re-usable hide or show with class states
function hideShow(elem, trig, height) {
  elem.toggleClass(function() {
    if ($(this).is('.open')) {
      $('div', this).fadeOut(1000);
      $(this).animate({'height':0}, 1000, function(){
        $(this).removeClass('open');
        //animate this
        trig.removeClass('active').addClass('inactive');
      });
      //need scrollTo elem offset
      return 'closed';
    } else {
      $('div', this).fadeIn(1000);
      $(this).animate({'height':height}, 1000, function(){
        $(this).removeClass('closed');
        //animate this
        trig.addClass('active').removeClass('inactive');
      });
      //need scrollTo elem offset
      return 'open';
    }
  });
}


$(function(){
  var $html = $('html');

  $html.removeClass('no-js').addClass('js');
  
  $('input, textarea').placeholder();


  //test for window size and load stuff
  var type = '';
  function mqtest(type){
    //set type based on media query (max-width: 767px)
    //we use 767 as tablet (well ipad) starts at 768px
    if (Modernizr.mq('only screen and (max-width:47.9375em)')) { type = 'mobile';}
    else { type = 'desktop'; }
    //call loader function
    loader(type);
  }
  mqtest(type);
  

  /*
   * set the sliders going
   */
  //featured gallery
  slider('.featured-gallery > ul');
  //force the height of the ul back to what it should be.
  //this is so when swipe.js modifies the height, even if
  //the images haven't fully loaded we still have the right size
  $('.featured-gallery > ul').height(219);

  /*
   * Examples hide show - bit of a fudge but it works
   */
  var init_example_products_h = $('#example_products').height()+32;
  var init_example_projects_h = $('#example_projects').height()+32;

  $('.product-examples div').hide();
  $('.product-examples').height(0).addClass('closed');
  $('.examples-link').addClass('inactive');

  $('.examples-link').on('click',function(e){
    e.preventDefault();
    var href = $(this).attr('href'),
        //stupid IE sometimes adds the full uri into the href attr, so trim
        start = href.indexOf('#'),
        targetid = href.slice(start, href.length),
        h_var = '';

    if(targetid === '#example_projects'){
      hideShow($(targetid), $(this), init_example_projects_h);
    }else if(targetid === '#example_products'){
      hideShow($(targetid), $(this), init_example_products_h);
    } 
  });


  /*
   * Skip to nav
   */
  $('#skip-to-nav').on('click', function(e){
    e.preventDefault();
    var menuoffset = $('#nav-wrapper').offset().top;
    $('html, body').animate({scrollTop:menuoffset}, 1000);
  });

  /*
   * Skip to top
   */
  $('#skip-to-top').on('click', function(e){
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 1000);
  });


  /*
   * On window resize, run some things again
   */
  $(window).resize(function(){
    // do the mqtest again (which in turn will run the loader again)
    mqtest(type);
  });
});