<?php

Flight::route('/', function(){
  $view = array(
    'name' => 'home',
    'title' => 'Polyp'
  );
  include 'app/templates/base.php';
});

Flight::route('/create', function() {
  $view = array(
    'name' => 'create',
    'title' => 'Polyp - Create Poll',
    'extrajs' => 'charCount.js'
  );
  include 'app/templates/base.php';
});

Flight::route('/@id(/@slug)', function($id, $slug) {
  $api_url = 'http://polyp:5000/poll/' . $id;
  $api_request = Unirest::get($api_url);
  $poll = $api_request->body;

  $view = array(
    'name' => 'poll',
    'title' => 'Polyp - ' . $poll->question
  );

  include 'app/templates/base.php';
});
