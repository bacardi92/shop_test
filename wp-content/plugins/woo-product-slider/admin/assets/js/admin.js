jQuery(function ($) {

    'use strict';

    /* === Masonry === */
    $( document ).ready(function() {
        $('.sp-wps-pro-features .feature-section').masonry({
            // options
            itemSelector: '.col',
            horizontalOrder: true
        });
    });


});