<?php
/**
 * Step 1: Require the Slim Framework
 *
 * If you are not using Composer, you need to require the
 * Slim Framework and register its PSR-0 autoloader.
 *
 * If you are using Composer, you can skip this step.
 */
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();

$app->get('/', function() use ($app) {
    $app->render('header.php');
	$app->render('news.php');
	$app->render('artists.php');
	$app->render('filters.php');
	$app->render('infos.php');
	$app->render('map.php');
	$app->render('partners.php');
	$app->render('footer.php');
});

$app->run();