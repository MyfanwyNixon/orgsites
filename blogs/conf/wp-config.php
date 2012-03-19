<?php

    // Reference for the possible settings: http://codex.wordpress.org/Editing_wp-config.php

    /* 
     * Assume that the system we're running on has all errors muted by default, so switch them on as we want here.
     */

    /* Never display errors to user. */
    ini_set('display_errors', 'Off');
    ini_set('display_startup_errors', 'Off');

    /* Log errors */
    ini_set('log_errors', 'On');

    /* But do not place any arbitrary limits on the length of errors logged by
     * error_log. */
    ini_set('log_errors_max_len', '0');

    /* And try, as hard as possible, to make logged errors go to the server's
     * error log. */
    ini_set('error_log', null);

    /* Trap all errors. */
    ini_set('ignore_repeated_errors', 'Off');

    /* Don't put HTML tags in error messages. */
    ini_set('html_errors', 'Off');
    


    // load the config from the general config file.
    // Note - this file is copied to the 'web' dir during deploy, so the path
    // needs to be relative to that location, not the location it is in in the
    // git repo.    
    if (!@include( __DIR__ . "/../conf/general" ) ) {
        print "Error including conf/general in wp-config.php on mysociety blogs WordPress - we are in " .__DIR__;
        exit;
    }

    // ** MySQL settings ** //
    define('DB_NAME',     OPTION_BLOGS_DB_NAME);  // The name of the database
    define('DB_USER',     OPTION_BLOGS_DB_USER);  // Your MySQL username
    define('DB_PASSWORD', OPTION_BLOGS_DB_PASS);  // ...and password
    define('DB_HOST',     OPTION_BLOGS_DB_HOST);  // 99% chance you won't need to change this value
    
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    
    /**
     * Authentication Unique Keys and Salts.
     *
     * Change these to different unique phrases!
     */
     define('AUTH_KEY',         OPTION_WORDPRESS_AUTH_KEY         );
     define('SECURE_AUTH_KEY',  OPTION_WORDPRESS_SECURE_AUTH_KEY  );
     define('LOGGED_IN_KEY',    OPTION_WORDPRESS_LOGGED_IN_KEY    );
     define('NONCE_KEY',        OPTION_WORDPRESS_NONCE_KEY        );
     define('AUTH_SALT',        OPTION_WORDPRESS_AUTH_SALT        );
     define('SECURE_AUTH_SALT', OPTION_WORDPRESS_SECURE_AUTH_SALT );
     define('LOGGED_IN_SALT',   OPTION_WORDPRESS_LOGGED_IN_SALT   );
     define('NONCE_SALT',       OPTION_WORDPRESS_NONCE_SALT       );
    
    // Change the prefix if you want to have multiple blogs in a single database.
    $table_prefix  = 'wp_';   // example: 'wp_' or 'b2' or 'mylogin_'
    
    // Change this to localize WordPress.  A corresponding MO file for the
    // chosen language must be installed to wp-includes/languages.
    // For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
    // to enable German language support.
    define ('WPLANG', '');
    
    /**
     * For developers: WordPress debugging mode.
     *
     * Change this to true to enable the display of notices during development.
     * It is strongly recommended that plugin and theme developers use WP_DEBUG
     * in their development environments.
     */
    define('WP_DEBUG', false);
    
    $toppath = $_SERVER['DOCUMENT_ROOT']; 
    $trimmed = rtrim($toppath, "blogs/web");
    define('TOP_PATH', $trimmed);
    
    
    /**
     * We want to store the changing content outside the main wordpress tree.
     * For all the plugins, themes and uploads we'll preserve them by backing up
     * rather than keeping them in a repo. This will mean that the site is
     * easier to maintain without dev intervention being required.
     **/
    define( 'WP_CONTENT_DIR', __DIR__ . '/../../../blogs-wp-content' );
    
    /* Stop editing */
    
    // $server   = DB_HOST;
    // $loginsql = DB_USER;
    // $passsql  = DB_PASSWORD;
    // $base     = DB_NAME;
    
    /* That's all, stop editing! Happy blogging. */
    
    /** Absolute path to the WordPress directory. */
    if ( !defined('ABSPATH') )
            define('ABSPATH', dirname(__FILE__) . '/');
    
    /** Sets up WordPress vars and included files. */
    require_once(ABSPATH . 'wp-settings.php');
?>