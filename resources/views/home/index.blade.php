@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>You'll Love the Facial - You'll Love the Price!</h1>
<address class="address">
	<p>Downtown Salon, 40 S. Washington, Oxford, MI</p>
</address>

<p>Professional Facials and Waxing</p>

<div id="info">
  <p><strong>Wednesday / Thursday / Friday</strong></p>
  <p><strong>Saturday</strong> (By appointment only)</p>
  <p><small>Flexible Hours – Call for Details</small></p>
  <p><small><strong>248-736-2343 direct</strong></small></p>
</div>
<div id="content">
	
    <p><strong>Gift Certificates Available</strong></p>

	<p>The appearance of one's skin is usually the first thing we look at upon meeting someone for the first time. We all want to maintain our appearance and look the best we can. In today's economy, it is so important to comfortably fit into the workplace, both physically and mentally. Having great looking skin sparks your self-confidence and helps you feel better about yourself. Facials are a great way to improve the tone, texture and moisture balance needed for a more youthful looking complexion.</p>
	<p>With the newest technology, quality products, professional hydrating, a variety of facials, and of course, lots of TLC, it's easier than you think to keep your skin looking fabulous. An Esthetician that has all these tools to work with can improve your skin dramatically. My clients are pleasantly surprised with the improvement of their skin after their first appointment.</p>
	<p>With the newest technology great changes can happen for both women and men, at any age.  I'm not referring to facelifts, botox or other similar treatments. These therapies work well for some people. I use a more natural approach, with wonderful results.</p>
	<p>Call Jude today to schedule a FREE Skin Consultation at 248-736-2343</p>

  	<div class="row">
  		<div class="col-sm-3 col-sm-offset-1 margin-bottom-15">
  			<a href="http://www.facebook.com/pages/Facials-by-Jude/120751807964979" class="facebook-badge"><i class="fa fa-facebook"></i> Find Us on Facebook</a>
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