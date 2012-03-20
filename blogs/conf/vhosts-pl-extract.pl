
# For the actual sites entry

$sites->{'blogs'} = {
    user           => 'mswww',
    web_dir        => 'blogs/web',
    git_repository => 'orgsites',
    git_user       => 'anon',
    conf_dir       => ['blogs/conf'],
    crontab        => 0,
    exec_extras    => {
        user => [

            # get WP from their svn server
            'svn co http://core.svn.wordpress.org/tags/3.3.1 blogs/web;',

            # replace the default wp-config with our own
            'cp -pfuv blogs/conf/wp-config.php blogs/web/wp-config.php',

            # uploads and plugins are both stored outside version control and
            # are backed up
            'rm -rfv blogs/web/wp-content/uploads',
            'rm -rfv blogs/web/wp-content/plugins',
            'rm -rfv blogs/web/wp-content/blogs.dir',
            'mkdir -pv ../blog-uploads ../blog-plugins ../blogs.dir',
            'ln -sfv  ../../../../blog-uploads blogs/web/wp-content/uploads',
            'ln -sfv  ../../../../blog-plugins blogs/web/wp-content/plugins',
            'ln -sfv  ../../../../blogs.dir blogs/web/wp-content/blogs.dir',

            # Themes are store under VC but not in the WP structure
            'rm -rfv blogs/web/wp-content/themes',
            'ln -sfv ../../themes blogs/web/wp-content/themes',
        ]
    },
};

# and then later
$vhosts = {

    # ...
    'blogs.dev.mysociety.org' => {
        site        => 'blogs',
        staging     => 1,
        servers     => ['eclipse'],
        databases   => ['blogs-staging'],
        user        => 'mswww-staging',
        git_ref     => 'origin/blogs',
        # backup_dirs => [ 'blog-uploads', 'blog-plugins' ],
    },

    # ...
};
