@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('breadcrumbs')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('/')}}/facials-waxing">Facials &amp; Waxing</a></li>
  <li class="active">Microdermabrasion Treatments</li>
</ol>
@stop
@section('body')
<h1 class="margin-bottom-15">Microdermabrasion Treatments</h1>

<div class="row">
	<div class="col-sm-3">
		<img src="{{url('/')}}/img/microdermabrasion-treatments.jpg" alt="Microdermabrasion Treatments" class="img-responsive margin-bottom-15 img-border">
	</div>
	<div class="col-sm-9">

		<h2 class="margin-top-0">What Does It Do?</h2>

		<ul>
			<li>Improves the appearance of fine lines and wrinkles</li>
			<li>Renews skin texture and evens out skin tone</li>
			<li>Helps restore areas of sun-damaged skin</li>
			<li>Reduces age spots, liver spots, and discoloration</li>
			<li>Improves mild acne and shallow surface scars</li>
			<li>Unclogs and shrinks enlarged pores</li>
			<li>Removes stubborn blackheads with ease</li>
		</ul>

	</div>
</div>

<p>Microdermabrasion treatments use a minimally abrasive instrument to gently sand your skin, removing the thicker, uneven outer layer. This type of skin rejuvenation is used to treat light scarring, discoloration, sun damage, and stretch marks.</p>

@stop