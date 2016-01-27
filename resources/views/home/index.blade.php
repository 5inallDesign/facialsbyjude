@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>You'll Love the Facial - You'll Love the Price!</h1>
<h2>Professional Facials and Waxing</h2>
<div itemscope itemtype="http://schema.org/LocalBusiness">
	<span itemprop="name">Facials by Jude</span><br>
	<address class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		Downtown Salon, <span itemprop="streetAddress">40 S. Washington</span>,
		<span itemprop="addressLocality">Oxford</span>,
		<span itemprop="addressRegion">MI</span><br>
		<span itemprop="telephone">248-736-2343</span> direct
	</address>
</div>

<div id="info">
	<p><strong>Wednesday / Friday / Saturday</strong><br class="visible-xs-block">
		<small>Flexible Hours – Call for Details</small></p>
</div>

<div class="row featured-services">
	<div class="col-md-6 galvanic-treatment">
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('')}}/img/galvanic-treatment-home-page.jpg" alt="Galvanic Treatment" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h2>Revolutionary Galvanic Facial Treatment</h2>
				<p>This treatment is perfect for everyone whose skin is suffering from the effects of dehydration and congestion. Things that aggravate these conditions are aging skin, stress, pollution, smoking or poor diet.<br>
					<a href="{{url('/')}}/galvanic-treatment">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>
			</div>
		</div>
	</div>
	<div class="col-md-6 detoxifying-footbath">
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('/')}}/img/detoxifying-footbath-home-page.jpg" alt="Aqua Chi Ionic Foot Bath" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h2>Aqua Chi Ionic Foot Bath</h2>
				<p>It enhances your body's ability to detoxify &amp; heal. It balances energy pathways within the body. the hydro-stimulation spa is a non-invasive, water based energy system designed to increase energy levels in your system.<br>
					<a href="{{url('/')}}/footbath">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="col-md-6 ultrasonic-facial-treatment">
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('/')}}/img/ultrasonic-facial-treatment.jpg" alt="Ultrasonic Facial Treatment" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h2>Ultrasonic Facial Treatment</h2>
				<p>This treatment pushes away impurities and dead skin cells. Ultrasonic waves and a special misting spray work together to cleanse skin pores, clear up complexions and prepare the skin for further aesthetic treatments and topical applications.<br>
					<a href="{{url('/')}}/facials/ultrasonic-facial-treatment">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>
			</div>
		</div>
	</div>
</div>

<div id="content">
	
    <p><strong>Gift Certificates Available</strong></p>

	<p>The appearance of one's skin is usually the first thing we look at upon meeting someone for the first time. We all want to maintain our appearance and look the best we can. In today's economy, it is so important to comfortably fit into the workplace, both physically and mentally. Having great looking skin sparks your self-confidence and helps you feel better about yourself. Facials are a great way to improve the tone, texture and moisture balance needed for a more youthful looking complexion.</p>
	<p>With the newest technology, quality products, professional hydrating, a variety of facials, and of course, lots of TLC, it's easier than you think to keep your skin looking fabulous. An Esthetician that has all these tools to work with can improve your skin dramatically. My clients are pleasantly surprised with the improvement of their skin after their first appointment.</p>
	<p>With the newest technology great changes can happen for both women and men, at any age.  I'm not referring to facelifts, botox or other similar treatments. These therapies work well for some people. I use a more natural approach, with wonderful results.</p>
	<p>Call Jude today to schedule a FREE Skin Consultation at 248-736-2343</p>

  	<div class="row">
  		<div class="col-sm-3 col-sm-offset-1 margin-bottom-15">
  			<a href="http://www.facebook.com/pages/Facials-by-Jude/120751807964979" class="facebook-badge" target="_blank"><i class="fa fa-facebook"></i> Find Us on Facebook</a>
  		</div>
  		<div class="col-sm-4 text-center margin-bottom-15">
  			<img src="{{url('/')}}/img/chamber-logo.gif" width="150" height="148" alt="Oxford, Michigan Chamber of Commerce" />
  		</div>
  		<div class="col-sm-3 margin-bottom-15">
  			<div class="featured">
        		<img src="{{url('/')}}/img/neriumad.jpg" class="img-responsive" alt="NeriumAD">
                <p class="featured-title"><strong>A Product That Delivers</strong></p>
                <p><a href="flyer-nerium.pdf">Download the PDF <i class="fa fa-file-pdf-o"></i></a></p>
                <p><a href="http://www.facials.neriumproducts.com">Visit the website</a></p>
            </div>
  		</div>
  	</div>
  
</div>
@stop