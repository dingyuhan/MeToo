// Price Filter
var priceinterval = setInterval(function woopricefilter() {
	"use strict";
	var price_from = jQuery('.price-filter').find('span.from').text();
	var price_to = jQuery('.price-filter').find('span.to').text();
	
	jQuery('.price_filter_wrap').find('.ui-slider-handle').first().attr('data-width', price_from);
	jQuery('.price_filter_wrap').find('.ui-slider-handle').last().attr('data-width-r', price_to);
	//clearInterval(priceinterval);	
}, 100);


jQuery(document).ready(function() {
	"use strict";
	
	/* Shop Scripts */	
	jQuery('#filter_price').selectbox();
	jQuery( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 350,
		values: [ 50, 190 ],
		slide: function( event, ui ) {
			jQuery( ".price-filter" ).html( '<span class="from">$&nbsp;' + ui.values[ 0 ] + '</span> - <span class="to">$&nbsp;' + ui.values[ 1 ] + '</span>' );
		}
	});
	jQuery( ".price-filter" ).html( '<span class="from">$&nbsp;' + jQuery( "#slider-range" ).slider( "values", 0 ) + '</span> - <span class="to">$&nbsp;' + jQuery( "#slider-range" ).slider( "values", 1 ) + '</span>' );
	
	jQuery(".button").on("click", function() {
		var button = jQuery(this);
		var oldValue = button.parent().find("input").val();
		
		if (button.text() == "+") {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 1) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 1;
			}
		}
		button.parent().find("input").val(newVal);
	});
	
	// Product item preview
	jQuery('.product_thumbs li a').on("click", function(){
		jQuery('.product_thumbs li a').removeClass("current");
		jQuery(this).addClass("current");		
		jQuery('#largeImage').attr('src',jQuery(this).find('img').attr('src').replace('product_thumb','product_large'));
		jQuery('#zoom_product').attr('href',jQuery(this).find('img').attr('src').replace('product_thumb','product_large'));	
	});	
	
});