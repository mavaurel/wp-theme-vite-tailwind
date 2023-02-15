<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;
foreach (glob(get_template_directory() . '/templates/components/*.php') as $file) {
    require_once $file;
}

// require(get_template_directory() . '/templates/components/button.php');
// require(get_template_directory() . '/components/card.php');
// require(get_template_directory() . '/components/button2.php');


// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


include "inc/inc.vite.php";
include "inc/disable.php";