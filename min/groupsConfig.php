<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/**
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See https://github.com/mrclay/minify/blob/master/docs/CustomServer.wiki.md for other ideas
 **/

return array(
//    'testJs' => array('//minify/quick-test.js'),
//    'testCss' => array('//minify/quick-test.css'),
'js' => array('//assets/js/theme.js', '//assets/js/type-it.js', '//assets/js/progressbar.js', '//assets/js/config.js'),

'js2' => array(
'//vendors/popper/popper.min.js', 
'//vendors/bootstrap/bootstrap.min.js', 
'//vendors/anchorjs/anchor.min.js', 
'//vendors/is/is.min.js', 
'//vendors/lodash/lodash.min.js', 
'//vendors/list.js/list.min.js', 
'//vendors/countup/countUp.umd.js',
'//assets/js/lazyload.js',
'//assets/js/jquery.mask.js',
'//assets/js/jquery.star-rating-svg.js'),

'fa-js' => array(
    '//assets/js/brands.min.js', 
    '//assets/js/solid.min.js', 
    '//assets/js/fontawesome.min.js'),

'css' => array(
'//assets/css/theme-rtl.min.css', 
'//assets/css/theme.min.css', 
'//assets/css/animate.css', 
'//vendors/overlayscrollbars/OverlayScrollbars.min.css', 
'//assets/css/menuv3.css',
'//assets/css/lazyload.css',
'//assets/css/review.css')
);
