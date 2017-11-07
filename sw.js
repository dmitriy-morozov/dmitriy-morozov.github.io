'use strict';
importScripts('sw-toolbox.js');

toolbox.precache(["/","index.html"]);
toolbox.router.get('/*', toolbox.cacheFirst);


