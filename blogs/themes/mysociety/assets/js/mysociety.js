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
  } else if (type === 'desktop') {
    //do desktop stuff
  }else {
    return;
  }
}


// slider - has nice swipey business on mobile
function slider(){
  //iterate over all the sliders on the page
  $('.featured-gallery > ul').each(function(i){
    //cache slider id
    var slider_id = $(this).attr('id');

    //make bullets and nav
    var slider_size = $('li', $(this)).length,
        bullets = '';
    if(slider_size > 1){
      //make bullets
      for (var i = 0; i < slider_size; i++){
        bullets += '<em>&bull;</em>';
      }
      //add next/prev buttons and bullets to page
      var $slider_nav = $('<nav><button id="slider_prev_'+slider_id+'">prev</button><span id="slider_bullets_'+slider_id+'">'+bullets+'</span><button id="slider_next_'+slider_id+'">next</button></nav>');
      $(this).after($slider_nav);
    }

    //show the rest of the li's
    $('li', $(this)).show();

    
    //bind clicks
    $('#slider_next_'+slider_id).on('click', function(){window.slider_id.next();});
    $('#slider_prev_'+slider_id).on('click', function(){window.slider_id.prev();});

    var bullets_elems = $slider_nav.find('em');

    //make all the sliders
    window.slider_id = new Swipe($(this)[0], {
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
  });
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
    //set type based on media query
    if (Modernizr.mq('only screen and (max-width:47.9375em)')) { type = 'mobile';}
    else { type = 'desktop'; }
    //call loader function
    loader(type);
  }
  mqtest(type);
  
  //on window resize, run the mqtest again (which in turn will run the loader again)
  $(window).resize(function(){
    mqtest(type);
  });

  /*
   * set the slider going
   */
  slider();


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
});