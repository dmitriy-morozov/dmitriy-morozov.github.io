'use strict';
importScripts('sw-toolbox.js');

toolbox.precache(["/","/assets/","index.html"]);
toolbox.router.get('/*', toolbox.cacheFirst);


