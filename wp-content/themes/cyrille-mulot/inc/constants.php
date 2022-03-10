<?php 
define('THEME_URL', get_template_directory_uri());
define('THEME_IMG', THEME_URL.'/assets/img/');

define('THEME_EN', get_locale() === 'en_GB');
define('THEME_FR', get_locale() === 'fr_FR');