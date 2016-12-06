/* SORTING */ 
jQuery(function(){
  "use strict";	
  
  var $container = jQuery('.sorting_block');

  $container.isotope({
	itemSelector : '.element'
  });
    
  var $optionSets = jQuery('.optionset'),
	  $optionLinks = $optionSets.find('a');

  $optionLinks.on('click', function(){
	var $this = jQuery(this);
	// don't proceed if already selected
	if ( $this.parent('li').hasClass('selected') ) {
	  return false;
	}
	var $optionSet = $this.parents('.optionset');
	$optionSet.find('.selected').removeClass('selected');
	$optionSet.find('.fltr_before').removeClass('fltr_before');
	$optionSet.find('.fltr_after').removeClass('fltr_after');
	$this.parent('li').addClass('selected');
	$this.parent('li').next('li').addClass('fltr_after');
	$this.parent('li').prev('li').addClass('fltr_before');

	// make option object dynamically, i.e. { filter: '.my-filter-class' }
	var options = {},
		key = $optionSet.attr('data-option-key'),
		value = $this.attr('data-option-value');
	// parse 'false' as false boolean
	value = value === 'false' ? false : value;
	options[ key ] = value;
	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	  // changes in layout modes need extra logic
	  changeLayoutMode( $this, options )
	} else {
	  // otherwise, apply new options
	  $container.isotope(options);		
		var sortingtimer = setTimeout(function(){
			jQuery('.sorting_block').isotope('reLayout');
			clearTimeout(sortingtimer);
		}, 500);		 
	}	
	return false;	
  });

	jQuery('.sorting_block').find('img').load(function(){
		$container.isotope('reLayout');
	}); 
	
});

jQuery(window).load(function(){		
	"use strict";
	jQuery('.sorting_block').isotope('reLayout');
	var sortingtimer = setTimeout(function(){
			jQuery('.sorting_block').isotope('reLayout');
			clearTimeout(sortingtimer);
		}, 500);
});
jQuery(window).resize(function(){
	"use strict";
	jQuery('.sorting_block').isotope('reLayout');
	
});

jQuery.fn.portfolio_addon = function(addon_options) {
	"use strict";
	//Set Variables
	var addon_el = jQuery(this),
		addon_base = this,
		img_count = addon_options.items.length,
		img_per_load = addon_options.load_count,
		$newEls = '',
		loaded_object = '',
		$container = jQuery('.image-grid');
	
	jQuery('.load_more_works').on( 'click', function(){
		$newEls = '';
		loaded_object = '';									   
		var loaded_images = $container.find('.added').size();
		if ((img_count - loaded_images) > img_per_load) {
			var now_load = img_per_load;
		} else {
			var now_load = img_count - loaded_images;
		}
		
		if ((loaded_images + now_load) == img_count) jQuery(this).fadeOut();

		if (loaded_images < 1) {
			var i_start = 1;
		} else {
			var i_start = loaded_images+1;
		}

		if (now_load > 0) {			
			if (addon_options.type == 0) {
				//Wide Portfolio
				for (var i = i_start-1; i < i_start+now_load-1; i++) {
					loaded_object = loaded_object + '<div class="'+ addon_options.items[i].sortcategory +' element added"><div class="item"><div class="item_wrapper"><div class="img_block wrapped_img"><img src="'+ addon_options.items[i].src +'" alt=""><span class="block_fade"></span><div class="post_hover_info"><div class="featured_items_title"><h5>'+ addon_options.items[i].title +'</h5></div><div class="featured_meta">'+ addon_options.items[i].itemcategory +'</div><a href="'+ addon_options.items[i].zoom +'" class="photozoom featured_ico_link view_link"><i class="icon-expand"></i></a><a href="'+ addon_options.items[i].url +'" class="featured_ico_link view_link"><i class="icon-link"></i></a></div></div></div></div></div>';
				}
				
			} else if (addon_options.type == 1) {
				//1 Column Portfolio
				for (var i = i_start-1; i < i_start+now_load-1; i++) {
					loaded_object = loaded_object + '<div class="col-sm-12 '+ addon_options.items[i].sortcategory +' element added"><div class="portfolio_item item"><div class="row"><div class="col-sm-6 pb7"><div class="img_block wrapped_img"><img alt="" src="'+ addon_options.items[i].src +'" /><span class="block_fade"></span><div class="post_hover_info"><a href="'+ addon_options.items[i].zoom +'" class="photozoom featured_ico_link view_link"><i class="icon-expand"></i></a><a href="'+ addon_options.items[i].url +'" class="featured_ico_link view_link"><i class="icon-link"></i></a></div> </div></div><div class="col-sm-6"><h2 class="portf_title"><a href="'+ addon_options.items[i].url +'">'+ addon_options.items[i].title +'</a></h2><div class="listing_meta"><span>'+ addon_options.items[i].itemdate +'</span><span>'+ addon_options.items[i].itemcategory +'</span><span>'+ addon_options.items[i].itemauthor +'</span><span>'+ addon_options.items[i].itemtime +'</span></div><p>'+ addon_options.items[i].itemdescr +' <a class="read_more" href="'+ addon_options.items[i].url +'">Details</a></p></div></div></div></div>';
				}
			} else {
				//2-4 Columns Portfolio
				for (var i = i_start-1; i < i_start+now_load-1; i++) {
					loaded_object = loaded_object + '<div class="'+ addon_options.items[i].columnclass +' '+ addon_options.items[i].sortcategory +' element added"><div class="item"><div class="item_wrapper"><div class="img_block wrapped_img"><img src="'+ addon_options.items[i].src +'" alt=""><span class="block_fade"></span><div class="post_hover_info"><div class="featured_items_title"><h5><a href="'+ addon_options.items[i].url +'">'+ addon_options.items[i].title +'</a></h5></div><div class="featured_meta">'+ addon_options.items[i].itemcategory +'</div><a href="'+ addon_options.items[i].zoom +'" class="photozoom featured_ico_link view_link"><i class="icon-expand"></i></a><a href="'+ addon_options.items[i].url +'" class="featured_ico_link view_link"><i class="icon-link"></i></a></div></div></div></div></div>';
				}
			}
			  
			$newEls = jQuery(loaded_object);
			$container.isotope('insert', $newEls, function() {
				$container.isotope('reLayout');							
			});			
		}
		if (jQuery('.filter_navigation').size() > 0) {
			fltr_tooltip();						
		}
		
		if (jQuery('.sorting_block').hasClass('column1')) {
			jQuery('.load_more_works').parent().hide();
			jQuery('.sorting_block').addClass('after_line');		
		}		
		
	});
}


