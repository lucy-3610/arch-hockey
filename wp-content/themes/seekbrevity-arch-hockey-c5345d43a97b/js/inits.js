/*
Thunder Bolt 2 - Java Script 
Copyright 2016, Ben Gathard of Brevity
Author URI: http://seekbrevity.com/
08/15/2016

Initialize all universal javascript functions
@package Thunder_Bolt_2
Updated Version: 1.0
 
TABLE OF CONTENTS: 
1.0 - Sidr mobile nav
2.0 - Sticky Nav 
3.0 - Magnific Popup 
4.0 - Gallery Layout
5.0 - Viewport Height Div
6.0 - Equal Heights
7.0 - Sitemap Drawer
*/
 
 
//1.0 - Sidr mobile nav 
$(document).ready(function() {
	$('#mobile-nav').sidr({
	name: 'mobile-navigation',
	side: 'left'
	});
/*
	$("#body").on("click",function(e) {
      $.sidr('close', 'mobile-navigation');
  });
*/
  
  // Responsive View Port Resets
	var width = $(window).width();
	$(window).resize(function(){
	   if($(this).width() != width){
	      width = $(this).width();
	      $.sidr('close', 'mobile-navigation');
	   }
	});
});

$(document).ready(function() {
	$('.header-search-trigger').click(function() {
		$('#body').toggleClass('search-active');
	});
});

//2.0 - Sticky Nav  
$(document).ready(function() {
	var $document = $(document),
	    className = 'sticky-header';
	    $headerHeight = $('#header-wrapper').outerHeight();
	    width = $(window).width();
	
	$(window).resize(function(){
	  if($(this).width() != width){
	    $headerHeight = $('#header-wrapper').outerHeight();
	  }
	});

	$document.scroll(function() {
  if ($document.scrollTop() >= $headerHeight * 2) {
    // user scrolled 50 pixels or more;
    // do stuff
    $('#page').addClass(className);
  } else {
    $('#page').removeClass(className);
  }
});
});

//3.0 - Magnific Popup
$(document).ready(function() {
		
	$('.popup-modal').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#username',
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});
	
	$('.popup-video').magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
	
		fixedContentPos: false
	});
	
	$('.popup-gallery').magnificPopup({
		delegate: 'a.image-link',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('data-name') + '<small>'+ item.el.attr('data-title') +'</small>';
			}
		}	
	});
	
	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
	});
	
});


//4.0 - Gallery Layout
$( document ).ready(function() { 
	$('.gallery .grid .grid-block:nth-child(9n+1)').addClass("med left");
	$('.gallery .grid .grid-block:nth-child(9n+2)').addClass("large right");
	$('.gallery .grid .grid-block:nth-child(9n+3)').addClass("med left");
	$('.gallery .grid .grid-block:nth-child(9n+4)').addClass("tall left both");
  $('.gallery .grid .grid-block:nth-child(9n+5)').addClass("tall wide");
	$('.gallery .grid .grid-block:nth-child(9n+6)').addClass("tall");
	$('.gallery .grid .grid-block:nth-child(9n+7)').addClass("wide left");
	$('.gallery .grid .grid-block:nth-child(9n+8)').addClass("single left");
	$('.gallery .grid .grid-block:nth-child(9n+9)').addClass("single left");
 });


//5.0 - Viewport Height Div
//Make all divs with class ".viewport-height" full screen
function resizeDiv() {
vpw = $(window).width();
vph = vpw * .5;
vpmh = $(window).height() - 180;
	$(".viewport-height").css({"height": vpmh + "px"});
}

//Run scripts on Load
$(document).ready(function(){
	resizeDiv();
});
//Run scripts on Resize
var width = $(window).width();
$(window).resize(function(){
   if($(this).width() != width){
      width = $(this).width();
      resizeDiv();
   }
});


//6.0 - Equal Heights 
(function( $ ) {
  $.fn.equalHeights = function() {
    this.css('height', 'auto');
    var max = 0;
    var curr;
    //find max height
    this.each(function(){
      curr = $(this).height();
      if(max < curr) {
        max = curr;
      }
    });
 		// set the max height
		this.height(max);
    return this;
  }
}( jQuery ));

/*
var $elements = $('.equal-height');
$elements.equalHeights();

$(window).on('resize', function(){
  $elements.equalHeights();
});
*/




//7.0 - Sitemap Drawer
$( document ).ready(function() {
	var el = $('#sitemap-wrapper'),
			autoHeight = el.css('height', 'auto').height();
			el.css('height', '0');
	
	var width = $(window).width();
	$(window).resize(function(){
	   if($(this).width() != width){
      width = $(this).width();
      autoHeight = el.css('height', 'auto').height();
	    el.css('height', '0');
	    $('#footer-sitemap-trigger').removeClass('active');
	   }
	});
	
			
	el.css('height', '0');
	$('#footer-sitemap-trigger').click(function(){
		$('#footer-sitemap-trigger').toggleClass('active');
    if(el.height() == 0){
      el.animate({height: autoHeight});
      if ($(window).width() > 767) {
      	$("html, body").animate({ scrollTop: $(document).height() }, 500);
      }
    }else{
      el.animate({height: '0'});
		}
  });
});


