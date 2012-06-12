#!/bin/bash

# Abort on any errors
set -e

# make sure that we are in the correct directory
BIN_DIR=$( cd `dirname $0` && pwd )
BLOGS_DIR=$(    dirname $BIN_DIR      )
ORGSITES_DIR=$( dirname $BLOGS_DIR    )
VHOST_DIR=$(    dirname $ORGSITES_DIR )

WEB_DIR=$BLOGS_DIR/web

# get WP from their svn server if not already present
if [ ! -e $WEB_DIR/index.php ]; then
    svn co http://core.svn.wordpress.org/tags/3.3.2 $WEB_DIR
fi

##### copy in the custom php files
# change to this directory so that the paths are easier
echo "Copying php files from `pwd` to web dir"

cd $BLOGS_DIR/custom_php
for PHP_FILE in `find . -name '*.php'`; do
    DST_DIR=$( readlink -m ../web/`dirname $PHP_FILE` );
    mkdir -pv $DST_DIR;
    cp -pfv $PHP_FILE $DST_DIR/;
done;

# uploads are stored outside version control and backed up
# (blogs.dir is the multisite uploads directory)
mkdir -pv $VHOST_DIR/blog-uploads
mkdir -pv $VHOST_DIR/blogs.dir
rm -rfv $WEB_DIR/wp-content/uploads
rm -rfv $WEB_DIR/wp-content/blogs.dir
ln -sfv  $VHOST_DIR/blog-uploads $WEB_DIR/wp-content/uploads
ln -sfv  $VHOST_DIR/blogs.dir    $WEB_DIR/wp-content/blogs.dir

# Plugins and themes can be in version control, so symlink them in if present
# Themes are stored under VC but not in the WP structure, symlink them in
for THING in plugins themes; do
    [ ! -e $BLOGS_DIR/$THING ] && continue
    for DIR in `ls $BLOGS_DIR/$THING`; do
        ln -snfv $BLOGS_DIR/$THING/$DIR $WEB_DIR/wp-content/$THING/$DIR
    done
done

echo "All done - $0 completed successfully"

