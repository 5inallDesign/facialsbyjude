@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>You'll Love the Facial - You'll Love the Price!</h1>
<h2>Professional Facials and Waxing</h2>
<div itemscope itemtype="http://schema.org/LocalBusiness">
	<span itemprop="name">Studio 113 Hair Salon</span><br>
	<address class="address" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<span itemprop="streetAddress">117 S. Washington St</span>,
		<span itemprop="addressLocality">Oxford</span>,
		<span itemprop="addressRegion">MI</span>
		<span itemprop="postalCode">48371</span>
		<br>
		<a href="tel:2487362343"><span itemprop="telephone">248-736-2343</span></a> direct
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
		<hr class="visible-xs-block">
	</div>
	<div class="col-md-6 microdermabrasion-treatments">
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('/')}}/img/microdermabrasion-treatments-home-page.jpg" alt="Microdermabrasion Treatments" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h2>Microdermabrasion Treatments</h2>
				<p>Microdermabrasion treatments use a minimally abrasive instrument to gently sand your skin, removing the thicker, uneven outer layer. This type of skin rejuvenation is used to treat light scarring, discoloration, sun damage, and stretch marks.<br>
					<a href="{{url('/')}}/facials-waxing/microdermabrasion-treatments">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>
			</div>
		</div>
		<hr class="visible-xs-block">
	</div>
	<div class="clearfix"></div>
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
		<hr class="visible-xs-block">
	</div>
	<div class="col-md-6 ultrasonic-facial-treatment">
		<div class="row">
			<div class="col-sm-4">
				<img src="{{url('/')}}/img/ultrasonic-facial-treatment.jpg" alt="Ultrasonic Facial Treatment" class="img-responsive">
			</div>
			<div class="col-sm-8">
				<h2>Ultrasonic Facial Treatment</h2>
				<p>During the Ultra Sonic Treatment high frequency sound waves are sent deep below the skin to encourage cellular repair, increasing collagen and elastin levels and to improve the penetration of nourishing skin care topical creams and serums.<br>
					<a href="{{url('/')}}/facials-waxing/ultrasonic-facial-treatment">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>
			</div>
		</div>
		<hr class="visible-xs-block">
	</div>
</div>

<div id="content">
	
    <h3>Gift Certificates Available</h3>

	<p>The appearance of one's skin is usually the first thing we look at upon meeting someone for the first time. We all want to maintain our appearance and look the best we can. In today's economy, it is so important to comfortably fit into the workplace, both physically and mentally. Having great looking skin sparks your self-confidence and helps you feel better about yourself. Facials are a great way to improve the tone, texture and moisture balance needed for a more youthful looking complexion.</p>
	<p>With the newest technology, quality products, professional hydrating, a variety of facials, and of course, lots of TLC, it's easier than you think to keep your skin looking fabulous. An Esthetician that has all these tools to work with can improve your skin dramatically. My clients are pleasantly surprised with the improvement of their skin after their first appointment.</p>
	<p>With the newest technology great changes can happen for both women and men, at any age.  I'm not referring to facelifts, botox or other similar treatments. These therapies work well for some people. I use a more natural approach, with wonderful results.</p>
	<p>Call Jude today to schedule a FREE Skin Consultation at 248-736-2343</p>

	<hr>

	<div class="testimonial">
		<p>I have been going to Jude for her foot baths since I moved here around a year ago.  I was totally skeptic about the treatment helping any of the many foot aliments I am so unfortunate to have.
		Well as it turned out I was overwhelmingly surprised! Judes foot baths have not only worked in reducing my foot pain to where I walk better, but the detoxing benefits have pulled out the toxins in other areas of my body allowing me to experience all over body health!<br>
		Thank you Jude</p>
		<h4>Diane Dyess<br>
		Oxford, MI</h4>
		<h4><a href="{{url('/testimonials')}}">Read More Testimonials <i class="fa fa-angle-right"></i></a></h4>
	</div>

	<hr>

  	<div class="row">
  		<div class="col-sm-3 col-sm-offset-1 margin-bottom-15">
  			<a href="http://www.facebook.com/pages/Facials-by-Jude/120751807964979" class="facebook-badge" target="_blank"><i class="fa fa-facebook"></i> Find Us on Facebook</a>
  			<hr class="visible-xs-block">
  		</div>
  		<div class="col-sm-4 text-center margin-bottom-15">
  			<img src="{{url('/')}}/img/chamber-logo.gif" width="150" height="148" alt="Oxford, Michigan Chamber of Commerce" />
  			<hr class="visible-xs-block">
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