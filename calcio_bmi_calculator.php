<?php
/*
Plugin Name: BMI Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/bmi-calculator/
Description: The free Body Mass Index calculator, also known as BMI, computes and classifies BMI for children and adults using data obtained from WHO and CDC.
Version: 1.0.0
Author: www.calculator.io / BMI Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_bmi_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for BMI Calculator by www.calculator.io";

function calcio_bmi_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">BMI Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_bmi_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_bmi_calculator', 'calcio_bmi_calculator_shortcode' );