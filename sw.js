const cacheName = 'cc-calc';
const staticAssets = [	
  './manifest.webmanifest',
  './header.php',
  './index.php',
  './css/style.css',
  './js/fastclick.js',
  './js/heroes.js',
  './js/jquery.min.js',
  './js/classes/builds.js',
  './js/classes/heroes.js',
  './js/classes/slider.js',
  './js/classes/talents.js',
  './js/index.js',
  './php/heroes.php',
  './php/talents.php',
  './inc/nav.html'
];

self.addEventListener('install', async e => {
	console.log(123);
  const cache = await caches.open(cacheName);
	console.log(456);
  await cache.addAll(staticAssets);
	console.log(789);
  return self.skipWaiting();
	console.log(101112);
});

self.addEventListener('activate', e => {
  self.clients.claim();
});

self.addEventListener('fetch', async e => {
	console.log("fetch");
  const req = e.request;
  const url = new URL(req.url);

  if (url.origin === location.origin) {
    e.respondWith(cacheFirst(req));
  } else {
    e.respondWith(networkAndCache(req));
  }
});

async function cacheFirst(req) {
	console.log("cache");
  const cache = await caches.open(cacheName);
  const cached = await cache.match(req);
  return cached || fetch(req);
}

async function networkAndCache(req) {
	console.log("network and fetch");
  const cache = await caches.open(cacheName);
  try {
    const fresh = await fetch(req);
    await cache.put(req, fresh.clone());
    return fresh;
  } catch (e) {
    const cached = await cache.match(req);
    return cached;
  }
}