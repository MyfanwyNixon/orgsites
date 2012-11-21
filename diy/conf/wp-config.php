<?php
// ** MySQL settings ** //
if (!@include "../conf/general") {
    if (!@include "../../conf/general") {
        if (!@include "../../../conf/general") {
            if (!@include(dirname(__FILE__) . "../../../conf/general")) {
                print "Error including conf/general in wp-config.php on cee.mysociety.org WordPress";
                exit;
            }
        }
    }
}

define('DB_NAME', OPTION_DIY_DB_NAME);     // The name of the database
define('DB_USER', OPTION_DIY_DB_USER);     // Your MySQL username
define('DB_PASSWORD', OPTION_DIY_DB_PASS); // ...and password
define('DB_HOST', OPTION_DIY_DB_HOST);     // 99% chance you won't need to change this value

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
define('AUTH_KEY', 'WSkFfuvjgdKkILLK6WsfOVaWwOCxlc2J1ex1CQGmnQhsq1LbTSDWkLpi3Iw2OAF4');
define('SECURE_AUTH_KEY', 'iTzQjdHYUYbNy1E1LfiTX5Exm4tVciK4AwE6cMP5LatGlPEjl5apk7hM0usMrP8A');
define('LOGGED_IN_KEY', 'z4ZfQNiLQB3BH0XBVJm9onx9jDG2VE36dpr8Qfm0qAMdrx0ebLlN9A6I2FY7Yt7F');
define('NONCE_KEY', 'OJNEq5TdCMpD5xkYxpQBXiAaKgSJxoblKfowv8Tipy80jvSHzUYFFzilv0CnPGqY');
define('AUTH_SALT', '0NyyOXPsrwqopUbSEbtz0aGOI3QJLolEx7VGOJdVcXBHofreJ3Dm6dA2vG9Nedj3');
define('SECURE_AUTH_SALT', 'K8rbk4xaM5CMeDMYZSPOukK31uFoxioRLuqG798s41Kq76Z18hHbnThv8xayI3wW');
define('LOGGED_IN_SALT', 'yaw2AHHalsxIgCV9DFFnvgS4Fneg3ayCifNYNzVswadUozakYn6Sj8rrgeAseYTO');
define('NONCE_SALT', 'yIfRXZdRkjYcBAyf3LKztRQD4tRmQkEcJZ9X503nxLwJmJNwSjBGw2fi98lj23gx');

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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
