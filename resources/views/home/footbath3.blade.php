@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('breadcrumbs')
<ol class="breadcrumb">
  <li><a href="{{url('/')}}">Home</a></li>
  <li><a href="{{url('/')}}/footbath">Detoxifying Footbath</a></li>
  <li class="active">Symptoms</li>
</ol>
@stop
@section('body')

<h1>Symptoms of Someone in Need of a Detox are Numerous and May Include:</h1>

<div class="row margin-bottom-10">
	<div class="col-sm-6">
		<ul class="margin-bottom-0">
			<li>Headaches</li>
			<li>Poor Sleep</li>
			<li>Tiredness</li>
			<li>Nausea</li>
			<li>Thrush</li>
			<li>Constipation</li>
			<li>Sluggishness</li>
			<li>Difficulty Waking Up</li>
			<li>Allergies</li>
			<li>Wrinkles</li>
			<li>Stress</li>
			<li>Hormone Imbalance</li>
		</ul>
	</div>
	<div class="col-sm-6">
		<ul class="margin-bottom-0">
			<li>Bags Under Eyes</li>
			<li>Depression</li>
			<li>Lowered Immunity</li>
			<li>Dull Skin</li>
			<li>Overweight</li>
			<li>Spots and Acne</li>
			<li>Mouth Ulcers</li>
			<li>Lowered Immunity</li>
			<li>Anxiety</li>
			<li>Age Spots</li>
			<li>Eczema &amp; Psoriasis</li>
			<li>Candida</li>
		</ul>
	</div>
</div>

<p>$30.00 per visit &mdash; Package of 6 for $150.00 (save 30.00)</p>


@stop