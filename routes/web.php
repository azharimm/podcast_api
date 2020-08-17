<?php
$router->get('/', function() {
    return ':)';
});
$router->get('/podcasts', 'PodcastController@index');
$router->get('/podcasts/{id}', 'PodcastController@show');
