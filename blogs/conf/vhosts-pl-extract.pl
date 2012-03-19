
# For the actual bsites entry

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

            # uploads and plugins are both stored outside version control and are backed up
            'rm -rf blogs/web/wp-content/uploads',
            'rm -rf blogs/web/wp-content/plugins',
            'mkdir -pv blog-uploads blog-plugins',
            'ln -sfv  ../../../../blog-uploads blogs/web/wp-content/uploads',
            'ln -sfv  ../../../../blog-plugins blogs/web/wp-content/plugins',

            # Themes are store under VC but not in the WP structure
            'rm -rf blogs/web/wp-content/themes',
            'ln -sfv ../../themes blogs/web/wp-content/themes',
        ]
    },
};
