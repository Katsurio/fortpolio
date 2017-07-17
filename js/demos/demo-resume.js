(function( $ ) {

	'use strict';

    /*
    * Preloader
    */
    $(window).on('load', function () {
        $("body").addClass("loaded");
    });

    // About Me
	$('#aboutMeMoreBtn').on('click', function() {
		$(this).hide();
		$('#aboutMeMore').toggleClass('about-me-more-visible');
	});

	/*
	* Timeline
	*/
	// var timelineHeightAdjust = {
	// 	$timeline: $('#timeline'),
	// 	$timelineBar: $('#timeline .timeline-bar'),
	// 	$firstTimelineItem: $('#timeline .timeline-box').first(),
	// 	$lastTimelineItem: $('#timeline .timeline-box').last(),
    //
	// 	build: function() {
	// 		var self = this;
    //
	// 		self.adjustHeight();
	// 	},
	// 	adjustHeight: function() {
	// 		var self                = this,
	// 			calcFirstItemHeight = self.$firstTimelineItem.outerHeight(true) / 2,
	// 			calcLastItemHeight  = self.$lastTimelineItem.outerHeight(true) / 2;
    //
	// 		// Set Timeline Bar Top and Bottom
	// 		self.$timelineBar.css({
	// 			top: calcFirstItemHeight,
	// 			bottom: calcLastItemHeight
	// 		});
	// 	}
	// }
    //
	// if( $('#timeline').get(0) ) {
	// 	setTimeout(function(){
	// 		// Adjust Timeline Height On Resize
	// 		$(window).afterResize(function() {
	// 			timelineHeightAdjust.build();
	// 		});
	// 	}, 1000);
    //
	// 	timelineHeightAdjust.build();
	// }

	// Contact Form Validate
	$('#contactForm').validate({
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		errorPlacement: function(error, element) {
			if (element.attr('type') == 'radio' || element.attr('type') == 'checkbox') {
				error.appendTo(element.parent().parent());
			} else {
				error.insertAfter(element);
			}
		}
	});
    // Contact Form Validate
    // $('#contactForm').each([ 52, 97 ], function( index, value ) {
    //     alert( index + ": " + value );
    // });

    // Contact Form: Close Success/Error Message
	$('#contactError, #contactSuccess').click(function() {
		debugger;
        $(this).addClass('hidden');
    });

	/*
	* Header Image Anim
	*/
	var lastScrollTop = 0;

	$(window).on('scroll', function(){
	   var st = $(this).scrollTop();
	   
	   if (st > lastScrollTop){
	   		$('img[custom-anim]').css({
	   			transform: 'translate(0, -'+ st +'px)'
	   		});
	   } else {
	      $('img[custom-anim]').css({
	   			transform: 'translate(0, '+ -Math.abs(st) +'px)'
	   		});
	   }
	   lastScrollTop = st;
	});

    /*
    * Map and Contact Position
    */
    var customContactPos = {
        $elements: $('.custom-contact-pos'),
        build: function() {
            var self = this;

            self.init();
        },
        init: function() {
            var self = this,
                elementHeight = [];

            // Get Map and Contact Box Height
            self.$elements.each(function(){
                elementHeight.push($(this).outerHeight());
            });

            // Set Map and Contact box with same height
            self.$elements.each(function(){
                $(this).css({
                    height: Math.max.apply(null, elementHeight)
                })
            });

            // Set contact-box position over google maps
            $('.custom-contact-box').css({
                'margin-top': -Math.max.apply(null, elementHeight)
            });
        }
    }

    if( $('.custom-contact-pos').get(0) ) {
        customContactPos.build();
    }

	/*
	* Menu Movement
	*/
	var menuFloatingAnim = {
		$menuFloating: $('#header.header-floating .header-container > .header-row'),

		build: function() {
			var self = this;

			self.init();
		},
		init: function(){
			var self  = this,
				divisor = 0;

			$(window).scroll(function() {
			    var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height()),
			    	st = $(this).scrollTop();

				divisor = $(document).height() / $(window).height();

			    self.$menuFloating.find('.header-column > .header-row').css({
			    	transform : 'translateY( calc('+ scrollPercent +'vh - '+ st / divisor +'px) )' 
			    });
			});
		}
	}

	if( $('.header-floating').get(0) ) {
		if( $(window).height() > 700 ) {
			menuFloatingAnim.build();
		}
	}

}).apply( this, [ jQuery ]);