<?php
/*
  +-------------------------------------------------------------------------+
  | Copyright 2010-2014, Davide Franco			                    		|
  |                                                                         |
  | This program is free software; you can redistribute it and/or           |
  | modify it under the terms of the GNU General Public License             |
  | as published by the Free Software Foundation; either version 2          |
  | of the License, or (at your option) any later version.                  |
  |                                                                         |
  | This program is distributed in the hope that it will be useful,         |
  | but WITHOUT ANY WARRANTY; without even the implied warranty of          |
  | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           |
  | GNU General Public License for more details.                            |
  +-------------------------------------------------------------------------+
*/

 // Class autloader instance creation
 require_once(getcwd() . "/core/app/classautoloader.class.php");

 $paths = array( 'application/models',
                 'application/models/pages',
                 'application/controllers',
                 'application/views',
                 'application/modules',
                 'core',
                 'core/app',
                 'core/db',
                 'core/graph',
                 'core/utils'
               );

 $classloader = new ClassAutoloader($paths);

 // Get all $_POST and $_GET values
 CHttpRequest::get_Vars();
 
 // Views path
 define('BW_ROOT', getcwd());
 define('VIEW_DIR', BW_ROOT . "/application/views/");
 define('TEMPLATES_DIR', VIEW_DIR . '/templates/');
 define('VIEW_CACHE_DIR', "application/views/cache");
 
 // Configuration
 define('CONFIG_DIR', BW_ROOT . "/application/config/");
 define('CONFIG_FILE', CONFIG_DIR . "config.php");
 
 // Locales
 define('LOCALE_DIR', BW_ROOT . '/application/locale');
 
 // Smarty
 require_once(BW_ROOT . '/core/external/smarty/libs/Smarty.class.php');
 require_once(BW_ROOT . '/core/external/smarty-gettext/smarty-gettext.php');
 
 // PHPLot
 require_once(BW_ROOT . '/core/external/phplot/phplot.php');
 
 // Constants
 require_once(BW_ROOT . '/core/const.inc.php');
?>
