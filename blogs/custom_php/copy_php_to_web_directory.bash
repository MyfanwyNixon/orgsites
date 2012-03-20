#!/bin/bash

set -e

# change to this directory so that the paths are easier
cd $( dirname $0 )
echo "Copying php files from `pwd` to web dir"

for PHP_FILE in `find . -name '*.php'`; do
    DST_DIR=$( readlink -m ../web/`dirname $PHP_FILE` );
    mkdir -pv $DST_DIR;
    cp -pfv $PHP_FILE $DST_DIR/;
done;
