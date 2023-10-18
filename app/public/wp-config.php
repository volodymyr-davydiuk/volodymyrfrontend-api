<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'J6M7BcFQp8hrGQedevozNjxUK9vTdRdUYdHlo+XXdTt5v70cC6X5Dc+By/cSEub7mjwEGm7XhwSsjcLwYtk1cQ==');
define('SECURE_AUTH_KEY',  'YJuMEMxwEFY8IULC5YDMVuLFHmOOf8kXc0QQjZyYtzKoJclHukcL0EoWNUIte34KN0GJrbqw+evMAu7uIL1ndg==');
define('LOGGED_IN_KEY',    'pLIfMBJSs2h9U2hp6gYZdm2OUUqqpUSO237LVmHoPUSeKBSDtWX0iI7/K1b0CfLDh0ntnDYSJDt5fufYfe92Lw==');
define('NONCE_KEY',        'o/qDm7z5IfzuE+xrZs2gGv+qQs/TJp3BnQuJaJvhm4qaeor+tqIkk28GQ6Y0zKwVF9Sa3PWQSIjrCOEhV4L+5w==');
define('AUTH_SALT',        'olm1pthyN3MBajabDrbsrf18n7n48RVlxnXIH1nK/TsIAO4ct6ecX/m5kcOQkWGCTveCstsv5RpS9ErNBJzF+g==');
define('SECURE_AUTH_SALT', 'r4eeE+33aZ7+DWqg6f2XDX+9xTMHfqW1a7OGOKw6zWi8l3OnZV57vfVmmAoqK8KpksU00yMsKigLJ+l8UyAyJg==');
define('LOGGED_IN_SALT',   'hHh57qoo0fGmsEHYjdhIGiO9GGBXRAhlXVPrvVj6Ayf0xsHXtaK70GGY0+ZaijxYfUle+IN2NBPxReuiBs3ArA==');
define('NONCE_SALT',       'NyOnAay1BhcFEJHWW4lfOp1H7JYTazLciE4p0R/Hn9tq98xX269jkkQYzPz9WiZrJ98ffXFloS7+KJJDM+/1MQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
