<?php

    // Reference for the possible settings: http://codex.wordpress.org/Editing_wp-config.php

    // load the config from the general config file.
    // Note - this file is copied to the 'web' dir during deploy, so the path
    // needs to be relative to that location, not the location it is in in the
    // git repo.    
    if (!@include( __DIR__ . "/../conf/general" ) ) {
        print "Error including conf/general in wp-config.php on mysociety blogs WordPress - we are in " .__DIR__;
        exit;
    }
    
    
    // If we are on staging switch on lots of debugging
    if ( OPTION_STAGING ) {
        // http://codex.wordpress.org/Editing_wp-config.php#Debug
        define('WP_DEBUG',         true);
        define('WP_DEBUG_LOG',     true);
        define('WP_DEBUG_DISPLAY', true);
        // define('SCRIPT_DEBUG',     true); // use development css and js
        @ini_set('display_errors', true);
    }

    // Log php errors directly to Apache
    @ini_set('log_errors','On');
    @ini_set('error_log', null);

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
    
    // start using multisites
    define( 'WP_ALLOW_MULTISITE', true );
    define( 'MULTISITE', true );
    define( 'SUBDOMAIN_INSTALL', false );
    $base = '/';
    define( 'DOMAIN_CURRENT_SITE', OPTION_VHOST_NAME );
    define( 'PATH_CURRENT_SITE', '/' );
    define( 'SITE_ID_CURRENT_SITE', 1 );
    define( 'BLOG_ID_CURRENT_SITE', 1 );
    define( 'SUNRISE', 'on' ); // for the 'WordPress MU Domain Mapping' plugin

    $toppath = $_SERVER['DOCUMENT_ROOT']; 
    $trimmed = rtrim($toppath, "blogs/web");
    define('TOP_PATH', $trimmed);
        
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