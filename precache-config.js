/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["assets/bootstrap/css/bootstrap.min.css","8be2950a0790a130f9417ed7babc0f79"],["assets/bootstrap/js/bootstrap.min.js","6a08a110509efe4a9b380f5a4f034915"],["assets/css/animate.css","d3027537e30042e428da4dbd680ff2f2"],["assets/css/font-awesome.min.css","5454f6ecea6d7548e4ef2728cb30849d"],["assets/css/style.css","dfeff727d269d90c85c30d7d78b52daf"],["assets/css/style.min.css","47568d1b1e52be559991f94f1e8497f1"],["assets/fonts/Lobster-Regular.ttf","61bb8fc89f7f91dab8e66f92be958f82"],["assets/fonts/Raleway-Black.ttf","3fc090e7188efb11fe2fef586bbb1a44"],["assets/fonts/Raleway-BlackItalic.ttf","1ec88bc52d1686c5192b34435fff8ea1"],["assets/fonts/Raleway-Bold.ttf","575e4317521b381ac94c0c8207c81979"],["assets/fonts/Raleway-BoldItalic.ttf","c7a4548f69aa83778b84585f5bb558b9"],["assets/fonts/Raleway-ExtraBold.ttf","a38a54df0089bca4f5109fe44f944051"],["assets/fonts/Raleway-ExtraBoldItalic.ttf","e314d73289b57b6764c143bfefc1016c"],["assets/fonts/Raleway-Italic.ttf","dd03a26a6d06f63d75ceeac6b491f26a"],["assets/fonts/Raleway-Light.ttf","b1bdea561f247adc2c904f5b24a07c51"],["assets/fonts/Raleway-LightItalic.ttf","d817d3a18e437e12e243aa3475b89f53"],["assets/fonts/Raleway-Medium.ttf","430a0518f5ff3b6c8968b759a29b36e2"],["assets/fonts/Raleway-MediumItalic.ttf","ff3c8ca6aa39754108f381ba4d7d5c13"],["assets/fonts/Raleway-Regular.ttf","580d0778ad254335be45bf58bb449f43"],["assets/fonts/Raleway-SemiBold.ttf","17ba6410cbc694808961a988fd4426de"],["assets/fonts/Raleway-SemiBoldItalic.ttf","0ef49fe89bb646aed7c0a10852b7d342"],["assets/fonts/fontawesome-webfont.eot","f7c2b4b747b1a225eb8dee034134a1b0"],["assets/fonts/fontawesome-webfont.svg","139e74e298bca37a25d2bd5868552e04"],["assets/fonts/fontawesome-webfont.ttf","706450d7bba6374ca02fe167d86685cb"],["assets/fonts/fontawesome-webfont.woff","d9ee23d59d0e0e727b51368b458a0bff"],["assets/fonts/fontawesome-webfont.woff2","97493d3f11c0a3bd5cbd959f5d19b699"],["assets/images/avatar.JPG","3576ef1a95777078e5b429c31d538516"],["assets/images/flat.jpg","c7472a14761db2f079879bfe3563e0e7"],["assets/images/gllacy.jpg","fd819073b65eccf35caa7223c81adb29"],["assets/images/gustoso.jpg","c44c8143c705aa9e48778771a924ba68"],["assets/images/kvast.jpg","5f0e18b73116c1dcdc3cb587ebf7db0e"],["assets/images/look.jpg","350e2cb9a2f0c7004e4601de19c176e2"],["assets/images/motion.jpg","7ef5af255aaf5999bb30409676e6eb8a"],["assets/images/parallax/layer-1.png","ff64d199e9c96de3e61c505dcf1ebd53"],["assets/images/parallax/layer-2.png","73f9420dfa761c07c32ede4c5cc4c463"],["assets/images/parallax/layer-3.png","e8400126e092d19e6fb26aa81119b5d3"],["assets/images/parallax/layer-4.png","bd9357aad0078ffb0fc86ec7cece0f58"],["assets/images/parallax/layer-5.png","baad6bf43dd55bf3c5e84149b1aafaaa"],["assets/images/pattern.png","9bf22b3d432daef67d2cd80002254179"],["assets/images/pink.jpg","db2434b9b34380978a74d016ace8521c"],["assets/images/preloader.gif","8dda6a9a16b06a7d76129dfb421b5de6"],["assets/images/restaurant.jpg","dbb7e0f9b4a8da3d3a6111be5e37f011"],["assets/images/tacos.jpg","7b337e09eb8e9b711da89870896448bd"],["assets/js/custom.js","13be7be66d82da427c9ef9a0c9305d32"],["assets/js/jquery-1.11.1.min.js","8c63e76d8248960073c832381eddf38f"],["assets/js/jquery.easypiechart.js","aaf78cdf86cf0f3e5d7d005921d5bd26"],["assets/js/jquery.parallax-1.1.3.js","132ad961a61b4f6752eb287af0b84976"],["assets/js/jquery.sticky.js","f59c4eb040103e2adf0489233ff9d13e"],["assets/js/jquery.waypoints.min.js","1522b62d33e5bb8d31149e9bc47237ec"],["assets/js/lunar.js","6d726ae986423f20992ff79de603c0a1"],["assets/js/smoothscroll.js","6f07fa3856c0062d0bc4023909512d21"],["assets/js/waypoints.min.js","d892fac3d00f726bc120192b2c750bb1"],["assets/js/wow.min.js","6bedc310288cd45aa19ffc51739a9eac"]];
var cacheName = 'sw-precache-v3--' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function (originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function (originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







