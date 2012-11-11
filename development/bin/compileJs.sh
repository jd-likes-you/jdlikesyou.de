#!/bin/bash --

cd public/js
#Header JS
cat \
libs/css3-mediaqueries.js \
libs/modernizr-2.5.3.min.js \
> allCompiledHead.js

#Footer JS
cat \
libs/jquery-1.8.0.min.js \
libs/jquery-ui-1.8.23.custom.min.js \
libs/orbit/jquery.orbit-1.4.0.js \
libs/jquery.slabtext.min.js \
slideshow.js \
fade.js \
 > allCompiledFoot.js
