<?php
/**
 * Local environment configuration
 */

// Server
define('SERVER_ENVIRONMENT',  'LOCAL');

// Filesystem
define('FS_METHOD',     'direct');
define('FS_CHMOD_DIR',  02775); // setgid and ug+rw
define('FS_CHMOD_FILE', 0664);  // ug+rw

// Debugging
$debug_on = true; $debug_on_string = $debug_on ? 'On' : 'Off';
define('WP_DEBUG',          $debug_on);
define('SAVEQUERIES',       $debug_on);
define('SCRIPT_DEBUG',      $debug_on);
define('WP_DEBUG_LOG',      $debug_on);
define('WP_DEBUG_DISPLAY',  $debug_on);
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

// Development
define('JETPACK_DEV_DEBUG', true);

// Auth Keys
// DO THIS! Adds an extra security layer since if DB gets hacked at least your
// login salts (and user passwords) will be safe.
// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// API Keys
