let appService = {
    cacheName: 'PoGoMate',
    build: 'undefined'
};

appService.install = function (e) {
    self.skipWaiting();
    e.waitUntil(
        caches.open(appService.cacheName).then((cache) => {
            return cache.addAll([
                '/js/main.js?' + appService.build,
                '/css/main.css?' + appService.build,
                '/jquery3/jquery.min.js',
                '/bootstrap4/css/bootstrap.min.css',
                '/bootstrap4/js/bootstrap.min.js',
                '/js/list.js?' + appService.build,
                '/js/search.js?' + appService.build,
                '/js/clipboard-polyfill.promise.js?' + appService.build,

                '/img/pokeball-special-noshade.svg',
                '/fontawesome/svgs/solid/broom.svg',
                '/fontawesome/svgs/solid/list-ul.svg',
                '/fontawesome/svgs/solid/fire-alt.svg',
                '/fontawesome/svgs/solid/search.svg',
                '/fontawesome/svgs/regular/clipboard.svg',
                '/fontawesome/svgs/solid/check.svg',
                '/fontawesome/svgs/regular/eye.svg',
                '/fontawesome/svgs/regular/eye-slash.svg',

                '/site.webmanifest?' + appService.build,
                '/img/maskable-512.png',

                '/',
                '/lists',
                '/counters',
                '/pokemon',

                '/img/pokeball-special.svg',
                '/img/gl.svg',
                '/img/ul.svg',
                '/img/ml.svg',
                '/img/type/Bug.svg',
                '/img/type/Dark.svg',
                '/img/type/Dragon.svg',
                '/img/type/Electric.svg',
                '/img/type/Fairy.svg',
                '/img/type/Fighting.svg',
                '/img/type/Fire.svg',
                '/img/type/Flying.svg',
                '/img/type/Ghost.svg',
                '/img/type/Grass.svg',
                '/img/type/Ground.svg',
                '/img/type/Ice.svg',
                '/img/type/Normal.svg',
                '/img/type/Poison.svg',
                '/img/type/Psychic.svg',
                '/img/type/Rock.svg',
                '/img/type/Steel.svg',
                '/img/type/Water.svg'
            ]);
        })
    );
}

appService.activate = function (e) {
    e.waitUntil(
        caches.keys().then((keyList) => {
            return Promise.all(keyList.map((key) => {
                if (key !== appService.cacheName) {
                    return caches.delete(key);
                }
            }));
        })
    );
}

appService.fetch = function (event) {
    event.respondWith(async function () {
            if (event.request.method !== 'GET') {
                if (event.request.url.indexOf(this.location.href) < 0) {
                    return await fetch(event.request, {mode: 'cors', credentials: 'same-origin'});
                }
                if (event.request.url.indexOf('/cleanup') >= 0) {
                    const cache = await caches.open(appService.cacheName);
                    await cache.delete(event.request, {ignoreSearch: true, ignoreMethod: true, ignoreVary: true});
                }
                return await fetch(event.request);
            }
            const cache = await caches.open(appService.cacheName);
            const cachedResponse = await cache.match(event.request);
            if (cachedResponse) {
                return cachedResponse;
            }
            const networkResponse = await fetch(event.request, {credentials: 'same-origin', cache: "no-store"});
            if (networkResponse && networkResponse.status === 200) {
                await cache.put(event.request, networkResponse.clone());
            }
            return networkResponse;
        }()
    )
}

self.addEventListener('install', appService.install);
self.addEventListener('activate', appService.activate);
self.addEventListener('fetch', appService.fetch);
