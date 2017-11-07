'use strict';
importScripts('sw-toolbox.js');

toolbox.precache(["/","/assets/css/*","/assets/js/*","index.html"]);
toolbox.router.get('/*', toolbox.cacheFirst);


