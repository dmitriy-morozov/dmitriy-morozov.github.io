'use strict';
importScripts('sw-toolbox.js');

toolbox.precache(['/'],['index.html'],['/assets/*']);

toolbox.router.default = toolbox.cacheFirst;



