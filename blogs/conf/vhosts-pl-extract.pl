
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
            'bash blogs/bin/post_deploy.bash',
        ]
    },
};

# and then later
$vhosts = {

    # ...
    'blogs.dev.mysociety.org' => {
        aliases =>
          [ 'main-blog.dev.mysociety.org', 'other-blog.dev.mysociety.org', ],
        site      => 'blogs',
        staging   => 1,
        servers   => ['eclipse'],
        databases => ['blogs-staging'],
        user      => 'mswww-staging',
        git_ref   => 'origin/blogs',

        # backup_dirs => [ 'blog-uploads', 'blog-plugins' ],
    },

    # ...
};
