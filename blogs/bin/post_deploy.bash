#!/bin/bash

# Abort on any errors
set -e

# make sure that we are in the correct directory
BIN_DIR=$( cd `dirname $0` && pwd )
BLOGS_DIR=$(    dirname $BIN_DIR      )
ORGSITES_DIR=$( dirname $BLOGS_DIR    )
VHOST_DIR=$(    dirname $ORGSITES_DIR )

WEB_DIR=$BLOGS_DIR/web

# get WP from their svn server
svn co http://core.svn.wordpress.org/tags/3.3.1 $WEB_DIR;

##### copy in the custom php files
# change to this directory so that the paths are easier
echo "Copying php files from `pwd` to web dir"

cd $BLOGS_DIR/custom_php
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
rm -rfv $WEB_DIR/wp-content/uploads
rm -rfv $WEB_DIR/wp-content/plugins
rm -rfv $WEB_DIR/wp-content/blogs.dir
ln -sfv  $VHOST_DIR/blog-uploads $WEB_DIR/wp-content/uploads
ln -sfv  $VHOST_DIR/blog-plugins $WEB_DIR/wp-content/plugins
ln -sfv  $VHOST_DIR/blogs.dir    $WEB_DIR/wp-content/blogs.dir

# Themes are store under VC but not in the WP structure
rm -rfv $WEB_DIR/wp-content/themes
ln -sfv $BLOGS_DIR/themes $WEB_DIR/wp-content/themes

echo "All done - $0 completed successfully"

