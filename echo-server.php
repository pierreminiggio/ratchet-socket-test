<?php

require __DIR__ . '/vendor/autoload.php';

use Ratchet\App;
use Ratchet\Server\EchoServer;

// Run the server application through the WebSocket protocol on port 8080
$app = new App('localhost', 8080);
$app->route('/echo', new EchoServer, ['*']);
$app->run();