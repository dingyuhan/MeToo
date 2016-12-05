"use strict";
var fixed_menu = true;

// Custom select
function enableSelectBoxes(){
	"use strict";
	jQuery('div.selectBox').each(function(){
		jQuery(this).children('span.selected').html(jQuery(this).children('div.selectOptions').children('span.selectOption:first').html());
		jQuery(this).attr('value',jQuery(this).children('div.selectOptions').children('span.selectOption:first').attr('value'));
		
		jQuery(this).children('span.selected, span.selectArrow').on('click', function(){
			if(jQuery(this).parent().children('div.selectOptions').css('display') == 'none'){
				jQuery(this).parent().children('div.selectOptions').css('display','block');
				jQuery(this).parents('.selectBox').addClass('act');
			}
			else
			{
				jQuery(this).parent().children('div.selectOptions').css('display','none');
				jQuery(this).parents('.selectBox').removeClass('act');
			}
		});
		
		jQuery(this).find('span.selectOption').on('click', function(){
			jQuery(this).parent().css('display','none');
			jQuery(this).closest('div.selectBox').attr('value',jQuery(this).attr('value'));
			jQuery(this).parent().siblings('span.selected').html(jQuery(this).html());
			jQuery(this).parents('.selectBox').removeClass('act');
		});
		
		jQuery("div.selectOptions").mouseleave(function() {
			jQuery('div.selectOptions').css('display','none');
			jQuery('.selectBox').removeClass('act');
		});
		
	});				
}

function fw_block() {
	"use strict";
	if (jQuery('div').hasClass('right-sidebar') || jQuery('div').hasClass('left-sidebar')) {
	} else {
		var fw_block = jQuery('.fw_block');
		var fw_block_parent = fw_block.parent().width();
		var fw_site_width = fw_block.parents('.wrapper').width();
		var fw_contentarea_site_width_diff = fw_site_width - fw_block_parent;
		
		fw_block.css('margin-left', '-'+fw_contentarea_site_width_diff/2+'px').css('width', fw_site_width+'px').children().css('padding-left', fw_contentarea_site_width_diff/2+'px').css('padding-right', fw_contentarea_site_width_diff/2+'px');
	jQuery('.wall_wrap .fw_wrapinner').css('padding-left', '0px').css('padding-right', '0px');
	}
}

function fltr_tooltip() {
	jQuery('.filter_navigation .optionset li').each(function() {
		var cat_name = jQuery(this).find('a').data("catname");
		if(cat_name == 'all') {
			var cat_count = jQuery('div.element').length;	
		} else {
			var cat_count = jQuery('div.'+cat_name).length;
		}
		jQuery(this).find('a').attr('data-title', cat_count);
	});
}

function megamenu() {
	"use strict";
	/*if (jQuery('.megamenu').size() > 0) {
		jQuery('.megamenu .sub-nav').css({'width': jQuery(window).width() + 'px'});
		jQuery('.megamenu').each(function(){
			var left_marg = jQuery(this).offset().left;
			jQuery(this).find('.sub-nav').css({'margin-left': '-' + left_marg + 'px'});			
		});
	}*/
}

function jobsFilter() {
	"use strict";
	//alert('jobsFilter');

	var jobs_ul = $('.job_list_offers');

	var filterOptions = {
		type:[],
		profile:[]
	}

	function targetOptions(filter, dataname, location){
		filter.find('li').each(function(){
			var t = $(this);
			if(t.attr('class') == 'select') location.push(t.attr(dataname));
		})

		jobs_ul.find('.li_item').removeClass('job_show');
		$('.jobs_view_all').css('display', 'none');

		if(filterOptions.type.length){
			for(var i = 0; i <= filterOptions.type.length; i++){
				if(filterOptions.profile.length){
					for(var j = 0; j <= filterOptions.profile.length; j++){
						jobs_ul.find('.li_item').each(function(){
							var t = $(this);
							if(t.attr('data-type') == filterOptions.type[i] && t.attr('data-function') == filterOptions.profile[j]){
								t.addClass('job_show');
							}	
						})
					}
				}else{
					jobs_ul.find('.li_item').each(function(){
						var t = $(this);
						if(t.attr('data-type') == filterOptions.type[i]){
							t.addClass('job_show');
						}	
					})
				}
			}
		}else{
			if(!filterOptions.profile.length) jobs_ul.find('.li_item').addClass('job_show');
			else{
				for(var k = 0; k <= filterOptions.profile.length; k++){
					jobs_ul.find('.li_item').each(function(){
						var t = $(this);
						if(t.attr('data-function') == filterOptions.profile[k]){
							t.addClass('job_show');
						}	
					})
				}
			}
		}

	}

	/* Targeting options in filters */
	targetOptions($('#filter_job_type'), 'data-type', filterOptions.type);
	targetOptions($('#filter_job_function'), 'data-function', filterOptions.profile);

	//console.log(filterOptions);
}

jQuery(document).ready(function ($) {
	"use strict";
	
	var bodytimer = setTimeout(function(){
		jQuery('body').animate({'opacity' : '1'}, 500);
		clearTimeout(bodytimer);
	}, 500);
	
	// Fixed Menu
	if (jQuery('.fixed-menu').size() && fixed_menu == true) {		
		jQuery('.fixed-menu').append(jQuery('.header_parent_wrap').html());
			
		jQuery(window).scroll(function() {
			if (jQuery('.first-module').hasClass("module_slider")) {
				var header_offset = jQuery(window).height() - jQuery('.main_header').height();
			}		
			else if (jQuery('.main_header').hasClass('type2') || jQuery('.main_header').hasClass('type3')) {
				var header_offset = jQuery('.header_parent_wrap').offset().top + jQuery('.header_parent_wrap').height();		
			}
			else {
				var header_offset = jQuery('.header_parent_wrap').offset().top;
			}		
			if (jQuery(window).scrollTop() > header_offset) {
				jQuery('.fixed-menu').addClass('fixed_show');
			} else {
				jQuery('.fixed-menu').removeClass('fixed_show');
			}
		});
	}
	
	// MobileMenu
	jQuery('header').append('<a href="javascript:void(0)" class="menu_toggler"></a><div class="mobile_menu_wrapper"><ul class="mobile_menu container"/></div>');	
	jQuery('.mobile_menu').html(jQuery('header').find('.menu').html());
	jQuery('.mobile_menu_wrapper').hide();
	jQuery('.menu_toggler').on('click', function(){
		jQuery('.mobile_menu_wrapper').slideToggle(300);
		jQuery(this).toggleClass("close_toggler");
	});
	jQuery('.mobile_menu a').each(function(){
		jQuery(this).addClass("mob_link");			
	});
	if (jQuery('.megamenu_wrap').size() > 0) {
		jQuery('.megamenu_wrap a').each(function(){
			jQuery(this).removeClass("mob_link");			
		});
	}
	jQuery('.mobile_menu li').find('a').on('click', function() {
		jQuery(this).parent().toggleClass("showsub");
	});
	
	
	/***/
	jQuery('.top_menu_toggler').on('click', function() {
		jQuery(this).toggleClass("close_toggler")
		            .parents('.header_parent_wrap').toggleClass("close_toggler_wrap");
	});
	
    
	// language
	if (jQuery('.language_select').size() > 0 || jQuery('.shop_ordering').size() > 0) {
		// Custom select
		enableSelectBoxes();
	}
	
	
	// Top Search focus
	if (jQuery('.top_search').size() > 0) {
		var $ctsearch = $('#top_search'),
			$ctsearchinput = $ctsearch.find('input.ct-search-input'),
			$tagline_items = $('.tagline_items'),
			$body = $('html,body'),
			openSearch = function() {
				$ctsearch.data('open',true).addClass('ct-search-open');
				$tagline_items.hide();
				$ctsearchinput.focus();
				return false;
			},
			closeSearch = function() {
				$ctsearch.data('open',false).removeClass('ct-search-open');
				$tagline_items.css({'display': 'inline-block'});
			};
		$ctsearchinput.on('click',function(e) { e.stopPropagation(); $ctsearch.data('open',true); });
		$ctsearch.on('click',function(e) {
			e.stopPropagation();
			if( !$ctsearch.data('open') ) {
				openSearch();
				$body.off( 'click' ).on( 'click', function(e) {
					closeSearch();
				} );
			}
			else {
				if( $ctsearchinput.val() === '' ) {
					closeSearch();
					return false;
				}
			}
		});
	}
	
	/* NivoSlider */
	if (jQuery('.nivoSlider').size() > 0) {
		jQuery('.nivoSlider').each(function(){
			jQuery(this).nivoSlider({
				directionNav: false,
				controlNav: true,
				effect:'fade',
				pauseOnHover: false, 
				pauseTime:3500,
				slices: 1
			});
		});
	}
	
	// Twitter Setup (To activate your Twitter you need uncomment the code)
	if (jQuery('.tweet_module').size() > 0) {
		/*jQuery('.tweet_module').tweet({
			modpath: 'twitter/',
			count: 2,
			username : 'yourusername'
		});*/
	}
		
	// Counter
	if (jQuery('.shortcode_counter').size() > 0) {
		if (jQuery(window).width() > 760) {						
			jQuery('.shortcode_counter').each(function(){							
				if (jQuery(this).offset().top < jQuery(window).height()) {
					if (!jQuery(this).hasClass('done')) {
						var set_count = jQuery(this).find('.stat_count').attr('data-count');
						jQuery(this).find('.stat_temp').stop().animate({width: set_count}, {duration: 3000, step: function(now) {
								var data = Math.floor(now);
								jQuery(this).parents('.counter_wrapper').find('.stat_count').html(data);							
							}
						});	
						jQuery(this).addClass('done');
						jQuery(this).find('.stat_count');
					}							
				} else {
					jQuery(this).waypoint(function(){
						if (!jQuery(this).hasClass('done')) {
							var set_count = jQuery(this).find('.stat_count').attr('data-count');
							jQuery(this).find('.stat_temp').stop().animate({width: set_count}, {duration: 3000, step: function(now) {
									var data = Math.floor(now);
									jQuery(this).parents('.counter_wrapper').find('.stat_count').html(data);								
								}
							});	
							jQuery(this).addClass('done');
							jQuery(this).find('.stat_count');
						}
					},{offset: 'bottom-in-view'});								
				}														
			});
		} else {
			jQuery('.shortcode_counter').each(function(){							
				var set_count = jQuery(this).find('.stat_count').attr('data-count');
				jQuery(this).find('.stat_temp').animate({width: set_count}, {duration: 3000, step: function(now) {
						var data = Math.floor(now);
						jQuery(this).parents('.counter_wrapper').find('.stat_count').html(data);					
					}
				});
				jQuery(this).find('.stat_count');
			},{offset: 'bottom-in-view'});	
		}
	}
		
	// Skills
	if (jQuery('.shortcode_skills').size() > 0) {
		if (jQuery(window).width() > 760) {
			jQuery('.skills_start').waypoint(function(){
				jQuery('.skill_div').each(function(){
					var set_width = jQuery(this).attr('data-percent');
					jQuery(this).stop().animate({'width' : set_width + '%'},1500);
				});	
			},{offset: 'bottom-in-view'});
		} else {
			jQuery('.skill_div').each(function(){
				var set_width = jQuery(this).attr('data-percent');
				jQuery(this).stop().animate({'width' : set_width + '%'},1000);
			});		
		};
	}
	
	// Diagram
	if (jQuery('.shortcode_diagram').size() > 0) {
		jQuery('.chart').each(function(){
			jQuery(this).css({'font-size' : jQuery(this).parents('.diagram_list').attr('data-fontsize'), 'line-height' : jQuery(this).parents('.diagram_list').attr('data-size')});
			jQuery(this).find('span').css('font-size' , jQuery(this).parents('.diagram_list').attr('data-fontsize'));
		});
	
		if (jQuery(window).width() > 760) {
			jQuery('.diagram_li').waypoint(function(){
				jQuery('.chart').each(function(){
					jQuery(this).easyPieChart({
						barColor: jQuery(this).parents('ul.diagram_list').attr('data-color'),
						trackColor: 'transparent',
						scaleColor: false,
						lineCap: 'square',
						lineWidth: parseInt(jQuery(this).parents('ul.diagram_list').attr('data-width'), 10),
						size: parseInt(jQuery(this).parents('ul.diagram_list').attr('data-size'), 10),
						animate: 1500
					});
				});
			},{offset: 'bottom-in-view'});
		} else {
			jQuery('.chart').each(function(){
				jQuery(this).easyPieChart({
					barColor: jQuery(this).parents('ul.diagram_list').attr('data-color'),
					trackColor: 'transparent',
					scaleColor: false,
					lineCap: 'square',
					lineWidth: parseInt(jQuery(this).parents('ul.diagram_list').attr('data-width'), 10),
					size: parseInt(jQuery(this).parents('ul.diagram_list').attr('data-size'), 10),
					animate: 1500
				});
			});
		}
	}
	
	// Accordion & Toggle
	if (jQuery('.module_accordion').size() > 0 || jQuery('.module_toggle').size() > 0) {
		jQuery('.shortcode_accordion_item_title').on('click', function(){
			if (!jQuery(this).hasClass('state-active')) {
				jQuery(this).parents('.shortcode_accordion_shortcode').find('.shortcode_accordion_item_body').slideUp('fast');
				jQuery(this).next().slideToggle('fast');
				jQuery(this).parents('.shortcode_accordion_shortcode').find('.state-active').removeClass('state-active');
				jQuery(this).addClass('state-active');
			}
		});
		jQuery('.shortcode_toggles_item_title').on('click', function(){
			jQuery(this).next().slideToggle('fast');
			jQuery(this).toggleClass('state-active');
		});
	
		jQuery('.shortcode_accordion_item_title.expanded_yes, .shortcode_toggles_item_title.expanded_yes').each(function( index ) {
			jQuery(this).next().slideDown('fast');
			jQuery(this).addClass('state-active');
		});
	
		jQuery('.shortcode_accordion_item_title.expanded_yes, .shortcode_toggles_item_title.expanded_yes').each(function( index ) {
			jQuery(this).next().slideDown('fast');
			jQuery(this).addClass('state-active');
		});
	}
	
	// Table Info Toggle
	if (jQuery('.module_table_info').size() > 0) {
		jQuery('.table_info_details').on('click', function(){
			jQuery(this).parents('div.table_info_title').next().slideToggle('fast');
			jQuery(this).parents('div.table_info_title').toggleClass('current-section');
		});
		jQuery('.table_info_title.expanded_yes').each(function( index ) {
			jQuery(this).next().slideDown('fast');
			jQuery(this).addClass('current-section');
		});
	}
	
	// Messagebox
	if (jQuery('.shortcode_messagebox').size() > 0) {
		jQuery('.shortcode_messagebox').find('.box_close').on('click', function(){
			jQuery(this).parents('.module_messageboxes').fadeOut(400);
		});
	}
		
	// Tabs
	if (jQuery('.shortcode_tabs').size() > 0) {
		jQuery('.shortcode_tabs').each(function(index) {
			// GET ALL HEADERS
			var i = 1;
			jQuery(this).find('.shortcode_tab_item_title').each(function(index) {
				jQuery(this).addClass('it'+i); jQuery(this).attr('whatopen', 'body'+i);
				jQuery(this).addClass('head'+i);
				jQuery(this).parents('.shortcode_tabs').find('.all_heads_cont').append(this);
				i++;
			});
		
			// GET ALL BODY
			var i = 1;
			jQuery(this).find('.shortcode_tab_item_body').each(function(index) {
				jQuery(this).addClass('body'+i);
				jQuery(this).addClass('it'+i);
				jQuery(this).parents('.shortcode_tabs').find('.all_body_cont').append(this);
				i++;
			});
		
			// OPEN ON START
			jQuery(this).find('.expand_yes').addClass('active');
			var whatopenOnStart = jQuery(this).find('.expand_yes').attr('whatopen');
			jQuery(this).find('.'+whatopenOnStart).fadeIn();
			jQuery(this).find('.'+whatopenOnStart).addClass('active');
		});
		
		jQuery(document).on('click', '.shortcode_tab_item_title', function(){
			jQuery(this).parents('.shortcode_tabs').find('.shortcode_tab_item_body').removeClass('active');
			jQuery(this).parents('.shortcode_tabs').find('.shortcode_tab_item_title').removeClass('active');
			var whatopen = jQuery(this).attr('whatopen');
			jQuery(this).parents('div.shortcode_tabs').find('.shortcode_tab_item_body').hide();
			jQuery(this).parents('.shortcode_tabs').find('.'+whatopen).fadeIn();
			jQuery(this).parents('.shortcode_tabs').find('.'+whatopen).addClass('active');
			jQuery(this).addClass('active');
		});
	}
	
	//Testimonial Style
	if (jQuery('.client-list').size() > 0) {	
	
		jQuery('.section-clients').each(function() {
            var clientList = $(this).find('.client-list'),
			quotesWrapper = $('<div class="quotes-wrapper"/>');
			
			quotesWrapper.insertBefore(clientList);
			quotesWrapper.append('<div class="quotes"/>');
			clientList.children().each(function() {
				$(this).find('.quote').appendTo(quotesWrapper.find('.quotes'));
			}).on('mouseenter touchend', function(e) {
				var event = e.type;
				if (!Modernizr.touch && event == 'mouseenter' || Modernizr.touch && event == 'touchend') {
				
					var index = $(this).index();
					var incomingQuote = quotesWrapper.find('.quote').eq(index);
								
					if (parseInt(incomingQuote.css('top')) != 0) {	
						
						incomingQuote.animate({opacity: 0, top: 100}, 200).animate({opacity: 1, top: 0 }, 250);
						incomingQuote.siblings().animate({opacity: 0, top: -70}, 200);
						
						$(this).addClass('hover').siblings().removeClass('hover');
							
					}		
				}
			});
			
			clientList.children().first().addClass('hover');
			quotesWrapper.find('.quote').first().css({
				opacity: 1,
				top: 0
			});
        });
	}
	
	// Magnific Popup
	if (jQuery('.photozoom').size() > 0) {
		jQuery('.photozoom').each(function() {
			if (jQuery(this).parents('.photo_gallery').hasClass('photo_gallery')) {
				jQuery('.photo_gallery').each(function() {
					jQuery(this).magnificPopup({
						delegate: 'a.photozoom',
						type: 'image',
						gallery: {
							enabled: true
						},
						iframe: {
							markup: '<div class="mfp-iframe-scaler">'+'<div class="mfp-close"></div>'+'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+'<div class="mfp-counter"></div>'+'</div>'
						}
					});
				});
			} else {
				jQuery(this).magnificPopup({
					type: 'image'
				});
			}
		});
	}
	
	// Block plus
	if (jQuery('.block_plus').size() > 0) {
		if (jQuery(window).width() > 740) {
			var block_plus_timer = setTimeout(function(){
				jQuery(".block_plus").each(function () {
					  var mainDivs = jQuery(this).find(".item");
					  var maxHeight = 0;
					  for (var i = 0; i < mainDivs.length; ++i) {
						if (maxHeight < jQuery(mainDivs[i]).innerHeight()) { 
						  maxHeight = jQuery(mainDivs[i]).innerHeight(); 
						}
					  }
					  for (var i = 0; i < mainDivs.length; ++i) {
						jQuery(mainDivs[i]).css({'height': maxHeight + 'px'});
					  }
				  });
				clearTimeout(block_plus_timer);
			}, 100);
		}else {
			jQuery(".block_plus").each(function () {
			  var mainDivs = $(this).find(".item");
			  for (var i = 0; i < mainDivs.length; ++i) {
				jQuery(mainDivs[i]).css({'height':'auto'});
			  }
		  });
		};
	};		
	
	// Contact form
	if (jQuery('.contact_form').size() > 0) {
		jQuery("#ajax-contact-form").on('submit', function() {
			var str = $(this).serialize();		
			$.ajax({
				type: "POST",
				url: "contact_form/contact_process.php",
				data: str,
				success: function(msg) {
					// Message Sent - Show the 'Thank You' message and hide the form
					if(msg == 'OK') {
						var result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
						jQuery("#fields").hide();
					} else {
						var result = msg;
					}
					jQuery('#note').html(result);
				}
			});
			return false;
		});
	}	
	
	jQuery('.fw_block').wrapInner('<div class="fw_wrapinner"></div>');
    
	fw_block();
	
	// Mega Menu	
	megamenu();
	
	if (jQuery('.global_count_wrapper').size() > 0) {
		jQuery('.global_count_wrapper').append('<div class="mouse_icon"></div>');
	}
	
	
	// Header Cart Info
	if (jQuery('.cart_wrap').size() > 0) {
		jQuery('.view_cart_btn').addClass('has_items');		
		jQuery('.remove_products').on('click', function(){
			jQuery('.view_cart_btn').removeClass('has_items');
			jQuery('.cart_wrap').hide();
			jQuery('.cart_submenu, .widget_cart').append('<p class="empty">No products in the cart.</p>');		
		});		
	}
	
	// Sortable Portfolio
	if (jQuery('.filter_navigation').size() > 0) {
		fltr_tooltip();						
	}	
	
	if (jQuery('.first-module').hasClass("module_slider")) {
		jQuery('.first-module.module_slider').parents('.fw_block').addClass('mt_80 mb60');
	}
	
	// Login Popup
	if (jQuery('.login_popup').size() > 0) {
		jQuery('.login_popup').on('show.bs.modal', function (e) {
			jQuery('html').addClass('no_scroll');
		});
		jQuery('.login_popup').on('hide.bs.modal', function (e) {
			jQuery('html').removeClass('no_scroll');
		});	
	}
	
	
	// jobs filters
	if (jQuery('.jobs_filters').size() > 0) {
			
		/* Style select fields */
		var select = {
			fakeselect: $('.fakeselect'),
			fakeoptions: $('.fakeoptions')
		} 
	
		select.fakeselect.off('click');
	
		select.fakeselect.on('click', function(){
			var t = $(this),
				fakeOptionTarget = $('.fakeoptions[data-select='+t.attr('data-select')+']');
			fakeOptionTarget.fadeToggle(200);
			select.fakeoptions.not(fakeOptionTarget).fadeOut(200);
	
			$('.job_list_offers').removeClass('opacity');
			if( t.attr('data-select') == 'jobs_filters_type' || t.attr('data-select') == 'jobs_filters_function' ){
				//alert('OKOK');
				$('.jobs_filters > li > span').removeClass('active');
				t.addClass('active');
	
				if($('#filter_job_type').is(':visible') || $('#filter_job_function').is(':visible')){
					$('.job_list_offers').addClass('opacity');
				}
				
			}
	
			return false;
		})
	
		$(document).on('click', function(){ 
			select.fakeoptions.fadeOut(200);
			$('.job_list_offers').removeClass('opacity');
			$('.jobs_filters > li > span').removeClass('active');
		});
	
		select.fakeoptions.find('li').on('click', function(){
			var t = $(this),
				selectValue = t.parent().attr('data-select');
			
			if(selectValue == 'jobs_filters_type' || selectValue == 'jobs_filters_function'){
				t.toggleClass('select');
				jobsFilter();
				var jobs_filters_timer = setTimeout(function(){
					$('.jobs_filters > li > span').removeClass('active');
					$('.job_list_offers').removeClass('opacity');
					select.fakeoptions.fadeOut(200);
					clearTimeout(jobs_filters_timer);
				}, 100);
				return false;
			}else{
				if(page == 'archives'){
					t.toggleClass('select');
					archivesFilter();
					var fakeoptions_timer = setTimeout(function(){
						select.fakeoptions.fadeOut(200);
						clearTimeout(fakeoptions_timer);
					}, 600);
					return false;
				}else{
					$('.fakeselect[data-select='+selectValue+']').html(t.html()).removeClass('init');
					$('select[data-select='+selectValue+'] option').attr('value', t.html());
					select.fakeoptions.fadeOut(200);
				}
			}
	
		});
		
	
		/* View all jobs */
		$('.jobs_nb_results .nb_results').html($('.job_list_offers').find('.li_item').length);
	
		var view_all_bt = $('.jobs_view_all'),
			jobs_ul = $('.job_list_offers');
	
		view_all_bt.on('click', function(){
			var t = $(this);
			if(!t.hasClass('close')){
				t.addClass('close');
				jobs_ul.find('.li_item').addClass('job_show');
			}else{
				jobs_ul.find('.li_item').slice(4,jobs_ul.find('.li_item').length).removeClass('job_show');
				t.removeClass('close');
			}
		})
		//viewAllJobs();
		
	}
				
});

jQuery(window).resize(function () {
	"use strict";
	
	fw_block();
	
	megamenu();
		    
});

jQuery(window).load(function () {
	"use strict";
		
	// Parallax
	if (jQuery(window).width() > 1025 && jQuery('.paralax').size() > 0) {	
		var $window = jQuery(window);
		jQuery('.paralax').each(function(){
			var $bgobj = jQuery(this); // assigning the object
			jQuery(window).scroll(function() {                   
				var yPos = ($bgobj.offset().top-$window.scrollTop())/2;
				var coords = '50% '+ yPos + 'px';
				$bgobj.css({ 'background-position': coords });		
			});
		});
	}
	    
});