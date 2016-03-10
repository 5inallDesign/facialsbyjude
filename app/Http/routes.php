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

// Old Redirects
$app->get('/facials.html', function () {
    return redirect('/facials-waxing', 301);
});
$app->get('/galvanic-treatment.html', function () {
    return redirect('/galvanic-treatment', 301);
});

$app->get('/', 'HomeController@getIndex');
$app->get('/facials-waxing', 'HomeController@getFacialsWaxing');
$app->get('/facials-waxing/microdermabrasion-treatments', 'HomeController@getMicrodermabrasionTreatments');
$app->get('/facials-waxing/ultrasonic-facial-treatment', 'HomeController@getUltrasonicFacialTreatment');
$app->get('/facials-waxing/ultrasonic-facial-treatment/benefits', 'HomeController@getUltrasonicFacialTreatment2');
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