<?php

/**
 * Wordpress Additional Tweak Configuration for Wordpress 4.1.1
 * For more info: http://codex.wordpress.org/Editing_wp-config.php
 *
 * Folder structure
 * 
 * | assets
 *   | themes
 *   | lib
 *   | lang
 * | uploads
 * 
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'databasename');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');
define( 'WP_LANG_DIR', dirname(__FILE__) . 'assets/lang' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

if (WP_DEBUG) {
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', false );
	define( 'SCRIPT_DEBUG', true );
	define( 'SAVEQUERIES', true );
	@ini_set( 'display_errors', 0 );
}

/* That's all, stop editing! Happy blogging. */


define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

/**
 * Moving wp-content folder
 */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/assets' );
define( 'WP_CONTENT_URL', WP_SITEURL . '/assets' );

/**
 * Moving plugin folder
 */
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/assets/lib' );
define( 'WP_PLUGIN_URL', WP_SITEURL . '/assets/lib' );
define( 'PLUGINDIR', dirname(__FILE__) . '/assets/lib' );

/**
 * Moving uploads folder
 */
define( 'UPLOADS', 'uploads' );

/**
 * Disable Javascript Concatenation
 */
define( 'CONCATENATE_SCRIPTS', true );

/**
 * Increasing memory allocated to PHP
 */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );


define( 'WP_ALLOW_REPAIR', true );

/**
 * Disable the Plugin and Theme Editor
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Require SSL for Admin and Logins
 */
define( 'FORCE_SSL_LOGIN', false );
define( 'FORCE_SSL_ADMIN', false );

/**
 * WordPress Updates
 */
define( 'AUTOMATIC_UPDATER_DISABLED', false );
define( 'WP_AUTO_UPDATE_CORE', true );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
