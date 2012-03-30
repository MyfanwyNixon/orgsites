//load in mobile/desktop assets
function loader(type){
  if (type === 'mobile') {
    Modernizr.load([
      {
        //h5bp helpers
        load: '/wp-content/themes/mysociety/assets/js/helper.js',
        complete: function(){
          MBP.scaleFix();
          MBP.hideUrlBarOnLoad();
        }
      },
      {
        //mobile slider js
        load: '/wp-content/themes/mysociety/assets/js/libs/swipe.js',
        complete: function(){
          mob_slider();
        }
      }
    ]);
  } else if (type === 'desktop') {
    //do desktop stuff
  }else {
    return;
  }
}

function mob_slider(){
  //iterate over all the sliders on the page
  $('.featured-gallery').each(function(i){
    //cache slider id
    var slider_id = $(this).attr('id');
    // make all the sliders
    window.slider_id = new Swipe($(this)[0]);
    //show the rest of the li's
    $('li', $(this)).show();
    //add next/prev buttons
    $(this).after('<button id="slider_next_'+slider_id+'">next</button>');
    $(this).after('<button id="slider_prev_'+slider_id+'">prev</button>');
    //bind clicks
    $('#slider_next_'+slider_id).on('click', function(){window.slider_id.next();});
    $('#slider_prev_'+slider_id).on('click', function(){window.slider_id.prev();});
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