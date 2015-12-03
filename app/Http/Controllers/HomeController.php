<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
	public function getIndex()
    {
    	$vw = view('home.index');
    	$vw->title = "Facials by Jude";
        $vw->description = "You'll Love the Facial - You'll Love the Price!";
    	return $vw;
    }

    public function getFootbath()
    {
    	$vw = view('home.footbath1');
    	$vw->title = "Detoxifying Footbath | Facials by Jude";
        $vw->description = "The Aqua Chi Foot Bath has helped thousands of users: boost energy levels, increase vitality and achieve optimal wellness. Let the Aqua Chi Foot Bath energize your life.";
    	return $vw;
    }
}