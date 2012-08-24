#!/bin/bash --

cd public/css
cat style.css ../fonts/droid-sans/stylesheet.css  ../js/libs/orbit/orbit.css main.less  > all.less
lessc all.less -x > allCompiledMin.css
rm all.less