<?php

 /*
  +-------------------------------------------------------------------------+
  | Copyright 2010-2013, Davide Franco			                    		|
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

 // Class autloader initialization
 require_once(getcwd() . "/core/app/classautoloader.class.php");
 ClassAutoLoader::init();
 
 // Path exclusion
 ClassAutoLoader::add_Exclusion('core/external/smarty-gettext');
 
 // Add paths
 ClassAutoLoader::add_Path('core');
 ClassAutoLoader::add_Path('application');
 
 // Views path
 define('BW_ROOT', getcwd());
 define('VIEW_DIR', BW_ROOT . "/application/view/");
 define('VIEW_CACHE_DIR', "application/view/cache");
 
 // Configuration
 define('CONFIG_DIR', BW_ROOT . "/application/config/");
 define('CONFIG_FILE', CONFIG_DIR . "config.php");
 
 // Locales
 define('LOCALE_DIR', BW_ROOT . '/application/locale');
 
 // Smarty
 require_once(BW_ROOT . '/core/external/smarty/libs/Smarty.class.php');
 require_once(BW_ROOT . '/core/external/smarty-gettext/smarty_gettext.php');
 
 // PHPLot
 require_once(BW_ROOT . '/core/external/phplot/phplot.php');
 
 // Time intervals in secondes
 define('FIRST_DAY', mktime(0, 0, 0, 1, 1, 1970));
 define('NOW', time());
 define('LAST_DAY', NOW - 86400);
 define('LAST_WEEK', NOW - 604800);
 define('LAST_MONTH', NOW - 2678400);
 define('DAY', 86400);
 define('WEEK', 604800);
 define('MONTH', 2678400);
 define('ALL', -1);

 // Job status code
 define('J_NOT_RUNNING', 'C');
 define('J_RUNNING', 'R');
 define('J_BLOCKED', 'B');
 define('J_COMPLETED', 'T');
 define('J_COMPLETED_ERROR', 'E');
 define('J_NO_FATAL_ERROR', 'e');
 define('J_FATAL', 'f');
 define('J_CANCELED', 'A');
 define('J_WAITING_CLIENT', 'F');
 define('J_WAITING_SD', 'S');
 define('J_WAITING_NEW_MEDIA', 'm');
 define('J_WAITING_MOUNT_MEDIA', 'M');
 define('J_WAITING_STORAGE_RES', 's');
 define('J_WAITING_JOB_RES', 'j');
 define('J_WAITING_CLIENT_RES', 'c');
 define('J_WAITING_MAX_JOBS', 'd');
 define('J_WAITING_START_TIME', 't');
 define('J_WAITING_HIGH_PR_JOB', 'p');

 // Job levels
 define('J_FULL', 'F');
 define('J_DIFF', 'D');
 define('J_INCR', 'I');
?>
