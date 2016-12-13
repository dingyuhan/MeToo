/*!
 * jQuery Cookie Plugin
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2011, Klaus Hartl
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.opensource.org/licenses/GPL-2.0
 */
(function($) {
	"use strict";
    $.cookie = function(key, value, options) {

        // key and at least value given, set cookie...
        if (arguments.length > 1 && (!/Object/.test(Object.prototype.toString.call(value)) || value === null || value === undefined)) {
            options = $.extend({}, options);

            if (value === null || value === undefined) {
                options.expires = -1;
            }

            if (typeof options.expires === 'number') {
                var days = options.expires, t = options.expires = new Date();
                t.setDate(t.getDate() + days);
            }

            value = String(value);

            return (document.cookie = [
                encodeURIComponent(key), '=', options.raw ? value : encodeURIComponent(value),
                options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
                options.path    ? '; path=' + options.path : '',
                options.domain  ? '; domain=' + options.domain : '',
                options.secure  ? '; secure' : ''
            ].join(''));
        }

        // key and possibly options given, get cookie...
        options = value || {};
        var decode = options.raw ? function(s) { return s; } : decodeURIComponent;

        var pairs = document.cookie.split('; ');
        for (var i = 0, pair; pair = pairs[i] && pairs[i].split('='); i++) {
            if (decode(pair[0]) === key) return decode(pair[1] || ''); // IE saves cookies with empty string as "c; ", e.g. without "=" as opposed to EOMB, thus pair[1] may be undefined
        }
        return null;
    };
})(jQuery);

jQuery(document).ready(function(){
	if(jQuery.cookie("panel_showed")) {
		show_panel = "";
	}
	else {
		show_panel = "showed";
		jQuery.cookie("panel_showed", 'showed', {expires: 1, path: "/"});
	}

	//Start Control Panel Script
	jQuery('body').append('<div class="demo_panel opacity '+show_panel+'"><a href="javascript:void(0)" class="panel_toggler"></a><span class="panel_title">Settings</span><div class="demo_panel_body"></div></div>');
	demo_panel_main = jQuery('body').find('.demo_panel');
	demo_panel = jQuery('body').find('.demo_panel_body');
	
	demo_panel.append('<div class="panel_headers"><div class="panel_sub-title">Headers</div><div class="panel_toggle_wrapper"><div class="panel_item header_item"><a href="javascript:void(0)" rel="type1">Default Header</a></div><div class="panel_item header_item"><a href="javascript:void(0)" rel="type2">Header Type 2</a></div></div></div>');

	//demo_panel.append('<div class="demo_text"><div class="panel_sub-title">For demo purposes only.</div><div class="clear"></div></div>');

	cur_head = 'type1';

	jQuery('.panel_headers').find('a[rel="'+cur_head+'"]').addClass('current');

	jQuery('.panel_toggle_wrapper').slideUp(1);
	
	jQuery('.panel_headers').find('.panel_sub-title').on('click', function(){
		jQuery(this).parents('.panel_headers').find('.panel_toggle_wrapper').slideToggle();
		jQuery(this).parents('.panel_headers').toggleClass('showed');
	});
	jQuery('.panel_tagline').find('.panel_sub-title').on('click', function(){
		jQuery(this).parents('.panel_tagline').find('.panel_toggle_wrapper').slideToggle();
		jQuery(this).parents('.panel_tagline').toggleClass('showed');		
	});

	jQuery('.panel_headers').find('a').on('click', function(){
		jQuery('.panel_headers').find('.current').removeClass('current');
		jQuery('.main_header.'+cur_head+'').removeClass(cur_head);
		jQuery('.main_header').addClass(jQuery(this).attr('rel'));
		cur_head = jQuery(this).attr('rel');
		jQuery(this).addClass('current');		
	});
	
	jQuery('.panel_toggler').on('click', function(){
		demo_panel_main.toggleClass('showed');
	});	
});

jQuery(window).load(function(){
	"use strict";
	
	var demo_panel_opacity = setTimeout(function(){
		jQuery('body').find('.demo_panel').removeClass('opacity');
		clearTimeout(demo_panel_opacity);
	}, 800);
	
	var demo_panel_showed = setTimeout(function(){
		jQuery('body').find('.demo_panel').removeClass('showed');
		clearTimeout(demo_panel_showed);
	}, 1800);
});