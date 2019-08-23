/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
var $ = require('jquery');

// activate step button
$(document).on('click','.js-step', function (e) {
    let $href = $(this);
    let idContainer = $href.attr('container');
    console.log(idContainer)
    $(".js-card").removeClass('activeStep');
    $(".js-card").addClass('disableStep');
    $(".js-card").closest('li').removeClass('active');
    $("#"+idContainer).addClass('activeStep');
    $("#"+idContainer).removeClass('disableStep');
    $("#"+idContainer).closest('li').addClass('active');
});
