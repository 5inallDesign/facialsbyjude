@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Galvanic Facial Treatment</h1>

<div class="row">
	<div class="col-md-4 col-sm-6">
		<!--<img src="{{url('')}}/img/galvanic-treatment-home-page.jpg" alt="Galvanic Treatment" class="img-responsive margin-bottom-15 img-border">-->
		<div class="row">
		<div class="featured-img featured-img-before col-xs-6">
			<div>
				<img src="{{url('')}}/img/galvanic-treatment-before.jpg" alt="Galvanic Treatment Before" class="img-responsive margin-bottom-15 img-border">
				<div>Before</div>
			</div>
		</div>
		<div class="featured-img featured-img-after col-xs-6">
			<div>
				<img src="{{url('')}}/img/galvanic-treatment-after.jpg" alt="Galvanic Treatment After" class="img-responsive margin-bottom-15 img-border">
				<div>After</div>
			</div>
		</div>
		</div>
	</div>
	<div class="col-md-8 col-sm-6">

		<p>This treatment is perfect for everyone, at any age, whose skin is suffering from the effects of dehydration and congestion. Things that aggravate these conditions are aging skin, stress, environmental pollution, lack of moisture, smoking or poor diet.</p>

		<p>The Galvanic treatment can be added to most facials.</p>

		<p>The cleansing serum purifies the skin, which removes dulling debris and allows the pores to breath. The benefit is that it allows clearing of congestion, allowing the skin to look clean from the inside out, almost like porcelain.</p>

		<p>The second part is the nourishing serum which helps to firm and tone, plump the skin, making the appearance of fine lines and wrinkles greatly diminished.</p>

		<p>Beneficial nutrients, such as marigold, sea kelp, vanilla and Vitamin E are delivered to the skin via the treatment, helping it to recover from stress.</p>

		<p>After just one appointment there will be a noticeable difference in the appearance of your skin. The difference is amazing!</p>
	</div>
</div>

@stop