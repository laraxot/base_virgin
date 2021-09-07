#!/bin/sh
set -e
git config -f .gitmodules --get-regexp '^submodule\..*\.path$' |
    while read path_key path
    do
        url_key=$(echo $path_key | sed 's/\.path/.url/')
        url=$(git config -f .gitmodules --get "$url_key")
        rm -rf $path
        echo $path
        git rm --cached -r -f $path || echo $path
        git submodule add $url $path --force
    done