<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {
    define( 'DB_NAME', 'local' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
} else {
    define( 'DB_NAME', 'vale5yww_wp-site' );
    define( 'DB_USER', 'vale5yww_wp-site' );
    define( 'DB_PASSWORD', 'sweet_girl7' );
    define( 'DB_HOST', 'localhost' );
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'diw8gFYQEB3sMbqhjQBrpC/gkE2wGTQ3vcjl2Nz8qNYnPqfvuvWY4uLe+La92qmjxsXb35gjv1Bm7OBnP3oSqg==');
define('SECURE_AUTH_KEY',  'Xlsvux4CV/UZ0DtQWN3RRzpNfha6fPTHlMgM44g/imRzGJSFozXhbq8fyAciBV3rMbXmGtlUAmawlzkWrYnEaA==');
define('LOGGED_IN_KEY',    '0vDDNsCqHhVl7u+GrPMFLIURIN3l+HHeyaZdnctjf4EyoDRCrvt/vZ2A29ZarZL7i8i0uRV572igizEgdWqo0A==');
define('NONCE_KEY',        'kqBZ4OQ5MX9Rme7pIcQzYnDjnSFnTEQXez/+LWozZcD861VFyagqT+datFHap7+kmLQqML3/N8pL4cKswYgLEw==');
define('AUTH_SALT',        'PxROymdn5hmEE6jiU8EhV3iM6OwiSfmBJ8Feg3IV/iassBAmzkCzMPO68QwWlbKXf/VexmaT1+U6dAS4EJ8L3A==');
define('SECURE_AUTH_SALT', 'aEZY6JRtrUR9efzafub9mWzuDIRk9gh/IzCIETghC7I2+PDCF1ai8Ozh9e9U7Jz9fM6yRPHolc1QMwniKanHNg==');
define('LOGGED_IN_SALT',   '4n5LUAxJyk5DtBGIUi2DH35uQPXiVn/bipKCgLN3CqCspe3N5V1p0/JVhNIYW/7tKQk7Xj9X2v6SJ7DcZpHJcw==');
define('NONCE_SALT',       'suVDnt8xSvP06yIlnKUAZCgBkw0meDyxlIQKPCepl0HCasahezfHyr8UDje6RbUHRgEgUJydi5EktzcOoNoolg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
