<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', 'HomeController@getIndex');
$app->get('/facials', 'HomeController@getFacials');
$app->get('/facials/ultrasonic-facial-treatment', 'HomeController@getUltrasonicFacialTreatment');
$app->get('/galvanic-treatment', 'HomeController@getGalvanicTreatment');
$app->get('/glycolic-peels', 'HomeController@getGlycolicPeels');
$app->get('/footbath', 'HomeController@getFootbath');
$app->get('/footbath/why', 'HomeController@getFootbath2');
$app->get('/footbath/symptoms', 'HomeController@getFootbath3');
$app->get('/neriumad', 'HomeController@getNeriumad');
$app->get('/testimonials', 'HomeController@getTestimonials');
$app->get('/in-the-media', 'HomeController@getInTheMedia');

/*$app->get('/', function () use ($app) {
    return $app->welcome();
});
*/