<?php
Flight::route('GET /', function() {
  echo 'Hello world';
});

Flight::route('GET /home', [new \controllers\HomeController(), 'index']);
Flight::route('POST /login', [new \controllers\HomeController(), 'login']);
Flight::route('GET /user/@id:[0-9]+', [new \controllers\HomeController, 'user']);
