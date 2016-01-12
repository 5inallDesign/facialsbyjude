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

    public function getFacials()
    {
    	$vw = view('home.facials');
    	$vw->title = "Facials and Waxing | Facials by Jude";
        $vw->description = "Enjoy a 90 minute facial session for a calming and rejuvenating body experience.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getUltrasonicFacialTreatment()
    {
        $vw = view('home.ultrasonic-facial-treatment');
        $vw->title = "Ultrasonic Facial Treatment | Facials by Jude";
        $vw->description = "The Ultrasonic Facial Treatment pushes away impurities and dead skin cells.";
        $vw->active_page = 'services';
        return $vw;
    }

    public function getGalvanicTreatment()
    {
    	$vw = view('home.galvanic-treatment');
    	$vw->title = "Galvanic Facial Treatment | Facials by Jude";
        $vw->description = "This treatment is perfect for everyone whose skin is suffering from the effects of dehydration and congestion. Things that aggravate these conditions are aging skin, stress, pollution, smoking or poor diet.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getGlycolicPeels()
    {
    	$vw = view('home.glycolic-peels');
    	$vw->title = "Glycolic Facial Peels | Facials by Jude";
        $vw->description = "The Glycolic Peel is a deep, intensive skin treatment focusing on the resurfacing and renewing of the epidermis.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getFootbath()
    {
    	$vw = view('home.footbath1');
    	$vw->title = "Detoxifying Footbath | Facials by Jude";
        $vw->description = "The Aqua Chi Foot Bath has helped thousands of users: boost energy levels, increase vitality and achieve optimal wellness. Let the Aqua Chi Foot Bath energize your life.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getFootbath2()
    {
    	$vw = view('home.footbath2');
    	$vw->title = "Look and Feel Great Inside and Out with a Detox! | Facials by Jude";
        $vw->description = "It Enhances Your Body’s Ability to Detoxify &amp; Heal. It Balances Energy Pathways Within the Body. The Hydro-Stimulation Spa is a non-invasive, water based energy system designed to increase energy levels in your system.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getFootbath3()
    {
    	$vw = view('home.footbath3');
    	$vw->title = "Symptoms of Someone in Need of a Detox | Facials by Jude";
        $vw->description = "Symptoms of someone in need of a detox are numerous and include these things.";
        $vw->active_page = 'services';
    	return $vw;
    }

    public function getNeriumad()
    {
        $vw = view('home.neriumad');
        $vw->title = "NeriumAD | Facials by Jude";
        $vw->description = "Finally, An Anti Aging Product That Really Works!";
        $vw->active_page = 'neriumad';
        return $vw;
    }

    public function getTestimonials()
    {
        $vw = view('home.testimonials');
        $vw->title = "Testimonials | Facials by Jude";
        $vw->description = "See what people are saying about Facials by Jude";
        $vw->active_page = 'testimonials';
        return $vw;
    }

    public function getInTheMedia()
    {
        $vw = view('home.media');
        $vw->title = "In the Media | Facials by Jude";
        $vw->description = "Check out what's been said about Facials by Jude";
        $vw->active_page = 'media';
        return $vw;
    }
}