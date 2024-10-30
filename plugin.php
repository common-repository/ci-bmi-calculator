<?php
/*
Plugin Name: CI Bmi calculator
Plugin URI: https://www.calculator.io/bmi-calculator/
Description: The free Body Mass Index calculator, also known as BMI, computes and classifies BMI for children and adults using data obtained from WHO and CDC.
Version: 1.0.0
Author: BMI Calculator / Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_bmi_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for BMI Calculator by Calculator.iO";

function display_ci_bmi_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">BMI Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_bmi_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_bmi_calculator', 'display_ci_bmi_calculator' );