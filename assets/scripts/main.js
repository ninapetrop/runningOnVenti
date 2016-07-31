/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
				$(window).scroll(function(){
					var wScroll = $(this).scrollTop();

					console.log(wScroll);
				});

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
				// this numbers indicate the index position of the slides to animate in and out. by default starts in 0 for the slide that will be animated out and 1 for the slide that will be animated in
				var slideNumber = 0,// current slide. visible slide
				    nextSlide = 1,// next slide
				    exerptNumber = 0, // current exerpt
				    nextExerpt = 1, // next exerpt

				    // the DOM elements
				    wrapper = $("#slider-wrapper"),
				    exerptWrapper = $("#exerpt-wrapper"),

				    // menu elements
				    menuLi = $("#menu li"),

				    // slides
				    slides = $(".slide"),
				    totalSlides = slides.length,
				    exerpts = $(".exerpt"),
				    totalExerpts = exerpts.length,

				    // define a dynamic pause time just in case
				    pauseTime = 5,
				    // define the slide animation duration
				    duration = 1,
				    // timer function that will be paused on mouse event, mainly mouse over. this also will be killed on click event
				    timerFunction = TweenLite.delayedCall(pauseTime, changeSlide),

				    // boolean to inform if there's a slide currently animating. useful for the click events. if a slide is animating the click event won't work as expected, it won't trigger the function to change the slide. if no slide is animating the slide corresponding to the button's index will be animated
				    slideAnimating = false;

				// set the initial position of the slides to the left of the container. the first slide won't be considered because is the visible slide when the effect starts
				TweenLite.set(slides.not(":eq(0)"), {autoAlpha: 0});
				TweenLite.set(menuLi[0], {backgroundColor:"red"});

				function changeSlide()
				{
				  // set the boolean to indicate that a slide is currently animating. prevents the click button to call the function while a slide is animating
				  slideAnimating = true;

				  var menuLine = new TimelineLite();

				  console.log( "slide out => " + slideNumber + " and exerpt =>" + exerptNumber );
				  console.log( "slide IN => " + nextSlide + " and exerpt =>" + nextExerpt + "\n" );
				  // this will animate the menu item background color
				  menuLine
				    .set(menuLi[slideNumber],
				      {
				        backgroundColor:"grey", className:"+=active"
				      },0)
				    .to(menuLi[nextSlide], duration,
				      {
				        backgroundColor:"red", className:"+=active"
				      },0);

				  // this will animate the currently visible slide to the far left.
				  TweenLite.to(slides[slideNumber], duration,
				    {
				      autoAlpha: 1,
				      onComplete:function()
				      {
				        // the slide animation is complete. change the boolean to indicate that no slide is animating. the click event on a button will trigger the animation on the corresponding slide
				        slideAnimating = false;

				        // if the mouse is over during the slide animation it should be paused right after being created and resumed once the mouse leaves the container to resume the autoplay feature.
				        // here there's has to be some conditional logic to prevent the timer to start again if the mouse is over the container, for that check the special class added to the
				        timerFunction.restart(true);

				        // check if the mouse is on the element, therefore the timer function should be paused immediately. the mouseover event pauses the timer function, but if mouse goes over the container while the slide was animating the timer function will start even with the mouse in the container. to prevent that a class is added to the container, if it has that class the timer should be paused.
				        if( wrapper.hasClass( "mouse-over" ) )
				        {
				          timerFunction.pause();
				        }

				        // finally set the slide that was animated out to the far right of the container
				        TweenLite.set(this.target, {autoAlpha: 0});
				      }// ON COMPLETE CALLBACK END
				    });//CURRENTLY VISIBLE SLIDE ANIMATION END

				  // for exerpts
				  TweenLite.to(exerpts[exerptNumber], duration,
				    {
				      autoAlpha: 1,
				      onComplete:function()
				      {
				        // the slide animation is complete. change the boolean to indicate that no slide is animating. the click event on a button will trigger the animation on the corresponding slide
				        slideAnimating = false;

				        timerFunction.restart(true);


				        if( exerptWrapper.hasClass( "mouse-over" ) )
				        {
				          timerFunction.pause();
				        }

				        // finally set the slide that was animated out to the far right of the container
				        TweenLite.set(this.target, {autoAlpha: 0});
				      }// ON COMPLETE CALLBACK END
				    });//CURRENTLY VISIBLE SLIDE ANIMATION END

				  // NEXT SLIDE ANIMATION START
				  TweenLite.to(slides[nextSlide], duration,
				    {
				      autoAlpha: 1
				    });

				  // NEXT Exerpt ANIMATION START
				  TweenLite.to(exerpts[nextExerpt], duration,
				    {
				      autoAlpha: 1
				    });

				  //
				  if( nextSlide < totalSlides -1 )
				  {
				    // set the index of the slide that will be animated-out in the next execution
				    slideNumber = nextSlide;

				    // set the index of the slide that will be animated-in in hte next execution
				    nextSlide++;
				  }
				  else
				  {
				    // set the index of the slide that will be animated-out in the next execution
				    slideNumber = nextSlide;
				    // if the visible slide is the last one set the index for the slide that will be animated-in to 0, that means the first slide
				    nextSlide = 0;
				    console.log("first slide!!");
				  }

				  //
				  if( nextExerpt < totalExerpts -1 )
				  {
				    // set the index of the slide that will be animated-out in the next execution
				    exerptNumber = nextExerpt;

				    // set the index of the slide that will be animated-in in hte next execution
				    nextExerpt++;
				  }
				  else
				  {
				    // set the index of the slide that will be animated-out in the next execution
				    exerptNumber = nextExerpt;
				    // if the visible slide is the last one set the index for the slide that will be animated-in to 0, that means the first slide
				    nextExerpt = 0;
				    console.log("first exerpt!!");
				  }


				}

				/*
				---------------------------------------------------
				    MOUSE OVER AND OUT EVENTS
				---------------------------------------------------
				*/
				// in order to check if the mouse is over when the slide is animating add a class to the container.

				wrapper.mouseover(function(e)
				{
				  TweenLite.set(this, {className:"+=mouse-over"});
				  timerFunction.pause();
				});

				wrapper.mouseout(function(e)
				{
				  TweenLite.set(this, {className:"-=mouse-over"});
				  timerFunction.play();
				});

				exerptWrapper.mouseover(function(e)
				{
				  TweenLite.set(this, {className:"+=mouse-over"});
				  timerFunction.pause();
				});

				exerptWrapper.mouseout(function(e)
				{
				  TweenLite.set(this, {className:"-=mouse-over"});
				  timerFunction.play();
				});



				/*
				---------------------------------------------------
				        MENU ITEM CLICK EVENT
				---------------------------------------------------
				*/
				$.each(menuLi, function(i,e)
				{
				  var hoverLine = new TimelineLite({paused:true});

				  hoverLine.to(e, 0.3, {backgroundColor:"red"});

				  e.hoverLine = hoverLine;
				});

				menuLi.click(function(e)
				{
				  console.log( slideAnimating );

				  // get the button being clicked index position. this will be set as the slide to be animated.
				  var btnIndex = menuLi.index(this);

				  // if there's no slide animating pause the timer function. select the button's index and set the slide number according to it. call the function to animate in the corresponding slide and finally restart the timer fuction to cntinue with the autoplay feature. also avoid executing the function if the user clicks on the button corresponding to the currently visible slide
				  if(!slideAnimating && btnIndex !== slideNumber)
				  {
				    // pause the timer function. with this avoid the slide being animated out too soon. if the timer has advanced for some time the slider being animated-in by the click event, will be visible for less time than the expected. unwanted behaviour. the timer function will be restarted in the change slide function so the pause time between slides animations will be the usual one.
				    timerFunction.pause();

				    // set the correct index to show the slide corresponding to the button being clicked. otherwise the slide animated in will be the next one sequentially and not necesarly the one indicated by the button's index position
				    nextSlide = btnIndex;
				    nextExerpt = btnIndex;

				    // call the function to change animate the slides
				    changeSlide();
				    changeExerpt();
				  }
				})
				// hover event for menu items
				.mouseover(function(e)
				{
				  this.hoverLine.play();
				})
				.mouseout(function(e)
				{
				  this.hoverLine.reverse();
				});
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
