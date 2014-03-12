/*
 *  Character Count Plugin - jQuery plugin
 *  Dynamic character count for text areas and input fields
 *  written by Alen Grakalic    
 *  http://cssglobe.com/post/7161/jquery-plugin-simplest-twitterlike-dynamic-character-count-for-textareas
 *
 *  Copyright (c) 2009 Alen Grakalic (http://cssglobe.com)
 *  Dual licensed under the MIT (MIT-LICENSE.txt)
 *  and GPL (GPL-LICENSE.txt) licenses.
 *
 *  Built for jQuery library
 *  http://jquery.com
 *
 */
 
(function(e){e.fn.charCount=function(t){function r(n){var r=e(n).val().length;var i=t.allowed-r;if(i<=t.warning&&i>=0){e(n).next().addClass(t.cssWarning)}else{e(n).next().removeClass(t.cssWarning)}if(i<0){e(n).next().addClass(t.cssExceeded)}else{e(n).next().removeClass(t.cssExceeded)}e(n).next().html(t.counterText+i)}var n={allowed:140,warning:25,css:"counter",counterElement:"span",cssWarning:"warning",cssExceeded:"exceeded",counterText:""};var t=e.extend(n,t);this.each(function(){e(this).after("<"+t.counterElement+' class="'+t.css+'">'+t.counterText+"</"+t.counterElement+">");r(this);e(this).keyup(function(){r(this)});e(this).change(function(){r(this)})})}})(jQuery)