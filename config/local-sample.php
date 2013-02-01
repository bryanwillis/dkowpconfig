<?php
/**
 * Local environment configuration
 */

// Server
define('WP_MEMORY_LIMIT',     '128M');
define('SERVER_ENVIRONMENT',  'LOCAL');
define('FS_METHOD',     'direct');
define('FS_CHMOD_DIR',  02775); // setgid and ug+rw
define('FS_CHMOD_FILE', 0775);  // ug+rw

// Debugging
$debug_on = true; $debug_on_string = $debug_on ? 'On' : 'Off';
define('WP_DEBUG',          $debugon);
define('SAVEQUERIES',       $debugon);
define('SCRIPT_DEBUG',      $debugon);
define('WP_DEBUG_LOG',      $debugon);
define('WP_DEBUG_DISPLAY',  !$debugon);
@ini_set('log_errors',      $debug_on_string);
@ini_set('display_errors',  $debug_on_string);

// Database
define('DB_NAME',     '');
define('DB_USER',     '');
define('DB_PASSWORD', '');
define('DB_HOST',     'localhost');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');
$table_prefix  = 'wp_';

// CMS settings
define('EMPTY_TRASH_DAYS',    0);
define('WP_POST_REVISIONS',   false);

// API Keys
