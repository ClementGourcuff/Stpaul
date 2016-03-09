<?php

//Retourne tous les séjours
$app->get('/', function() use($app) {
    $sejours = $app['dao.sejour']->findAll();
    return $app['twig']->render('index.html.twig', array('sejours' => $sejours));
});
