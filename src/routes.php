<?php
$routes = [
    'metadata',
    'shortenLongUrl',
    'expandShortUrl',
    'getUrlAnalytics',
    'getUserHistory'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

