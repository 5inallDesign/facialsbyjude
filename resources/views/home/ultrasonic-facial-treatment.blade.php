@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('breadcrumbs')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('/')}}/facials-waxing">Facials &amp; Waxing</a></li>
  <li class="active">Ultrasonic Facial Treatment</li>
</ol>
@stop
@section('body')
<h1 class="margin-bottom-15">Ultrasonic Facial Treatment</h1>

<div class="row">
	<div class="col-sm-3">
		<img src="{{url('/')}}/img/ultrasonic-facial-treatment.jpg" alt="Ultrasonic Facial Treatment" class="img-responsive margin-bottom-15 img-border">
	</div>
	<div class="col-sm-5">

		<h2 class="margin-top-0">What Does It Do?</h2>

		<ul>
			<li>Softens fine lines and wrinkles</li>
			<li>Clears acne and refines large pores</li>
			<li>Firms and tones sagging facial skin</li>
			<li>Renews skin texture and tone</li>
			<li>Improves hyperpigmentation</li>
			<li>Softens fine lines and wrinkles</li>
			<li>Firms and tones sagging skin</li>
		</ul>
	</div>
	<div class="col-sm-4">
		<a class="btn btn-magenta btn-lg btn-block" href="{{url('/')}}/facials-waxing/ultrasonic-facial-treatment/benefits">See the Benefits <i class="fa fa-angle-right"></i></a>
	</div>
</div>

<p>Push out impurities and clear away impurities, environmental toxins oil and makeup, the way Hollywood does it! As the skin cells vibrate, the tissue and pores become softened, extracting out environmental toxins, oil and makeup. The energy of the ultrasonic vibration waves help to brighten and even the skin tone.</p>

<p>The Ultrasonic Facial Treatment pushes away impurities and dead skin cells. Ultrasonic waves, in conjunction with special Energized Misting Spray work together to deeply cleanse congested skin pores, clear up acne-prone complexions and prepare the skin for further aesthetic treatments and topical application. The included Misting Spray is made with magnetized and vortexed water which is believed to raise the energy of the ultrasonic vibration to a higher level and utilizes the therapeutic benefits of uplifting Rose Oil.</p>

<h2>Improves The Appearance of Aging Skin</h2>
<p>The same ultrasonic action is also used to effectively push the active ingredients in your favorite skin care products into your skin. The result is a firmer, brighter, more youthful looking complexion!</p>

<h2>Boosts The Performance of Your Existing Skin Care Products</h2>
<p>You will notice an overall improvement in the effectiveness of your favorite creams, serums and lotions with treatment! Most skin care products simply sit on top of the skin. The ultrasonic penetrating power of this treatment cleanses away dead skin cells and makes your skin much more receptive to applied topicals, by driving them much deeper below the surface.</p>

<h2>A New Vibe in Cleansing</h2>
<p>See the amazing difference in your skin with the new Ultrasonic Facial.</p>
<ul>
	<li>Push-out impurities and exfoliate dead skin</li>
	<li>Push-in active ingredients in our peptide power gel</li>
	<li>Vibrating ultrasonic waves exfoliate dead skin and extract dirt and oil from clogged pores</li>
	<li>Helps brighten and even out skin tone</li>
</ul>

@stop