#!/bin/bash

if [ -d public ]; then
    cd public
    mkdir javascript && mkdir stylesheet && mkdir fonts

    # Install bootstrap
    mkdir bootstrap && cd bootstrap
    git clone https://github.com/twbs/bootstrap.git .
    mkdir ../javascript/bootstrap
    mv dist/css ../stylesheet/bootstrap
    mkdir ../stylesheet/bootstrap
    mv dist/js ../javascript/bootstrap
    mv dist/fonts ../fonts

    cd javascript

    # Javascript repos
    jreps[0]="https://github.com/wootapa/watable.git"
    jreps[1]="https://github.com/sciactive/pnotify.git"
    jreps[2]="https://github.com/jbutz/bootstrap-lightbox.git"
    jreps[3]="https://github.com/willywos/bangbang.git"
    jreps[4]="https://github.com/rroppolo/bootstrap-multisuggestplugin.git"
    jreps[6]="https://github.com/gfranko/jquery.selectBoxIt.js.git"
    jreps[7]="https://github.com/ExactTarget/fuelux.git"
    jreps[8]="https://github.com/imsky/holder.git"
    jreps[9]="https://github.com/simsalabim/sisyphus.git"
    jreps[10]="https://github.com/dmauro/Keypress.git"

    for i in "${jreps[@]}"
    do
       :
       dir=$(echo ${i} | cut -d/ -f 5 | cut -d. -f 1)
       mkdir ${dir}
       cd ${dir}
       #git clone ${i}
       cd ../
    done

    cd ../
    mkdir stylesheet
    cd stylesheet
fi






