#!/bin/bash

# Abort on any errors
set -e

# make sure that we are in the correct directory
BIN_DIR=$(      dirname $0            )
BLOGS_DIR=$(    dirname $BIN_DIR      )
ORGSITES_DIR=$( dirname $BLOGS_DIR    )
VHOST_DIR=$(    dirname $ORGSITES_DIR )

# get WP from their svn server
svn co http://core.svn.wordpress.org/tags/3.3.1 $BLOGS_DIR/web;

##### copy in the custom php files
# change to this directory so that the paths are easier
cd $BLOGS_DIR/custom_php
echo "Copying php files from `pwd` to web dir"

for PHP_FILE in `find . -name '*.php'`; do
    DST_DIR=$( readlink -m ../web/`dirname $PHP_FILE` );
    mkdir -pv $DST_DIR;
    cp -pfv $PHP_FILE $DST_DIR/;
done;

# uploads and plugins are both stored outside version control and
# are backed up
mkdir -pv $VHOST_DIR/blog-uploads
mkdir -pv $VHOST_DIR/blog-plugins
mkdir -pv $VHOST_DIR/blogs.dir
rm -rfv $BLOGS_DIR/web/wp-content/uploads
rm -rfv $BLOGS_DIR/web/wp-content/plugins
rm -rfv $BLOGS_DIR/web/wp-content/blogs.dir
ln -sfv  $VHOST_DIR/blog-uploads $BLOGS_DIR/web/wp-content/uploads
ln -sfv  $VHOST_DIR/blog-plugins $BLOGS_DIR/web/wp-content/plugins
ln -sfv  $VHOST_DIR/blogs.dir    $BLOGS_DIR/web/wp-content/blogs.dir

# Themes are store under VC but not in the WP structure
rm -rfv $BLOGS_DIR/web/wp-content/themes
ln -sfv $BLOGS_DIR/themes $BLOGS_DIR/web/wp-content/themes
