<header class="header">
    <!--<a href="{{url('/')}}"><img srcset="{{url('/')}}/img/facials-by-jude-logo.svg 2x" src="{{url('/')}}/img/facials-by-jude-logo.png" alt="Facials by Jude" class="logo"></a>-->
    <a href="{{url('/')}}" class="logo-placeholder">
        Studio 113 Hair Salon
        <small>Jude Cunningham<small>
    </a>
</header>
<nav class="navbar" id="topNav">
	<div class="container-fluid">
      	<!-- Brand and toggle get grouped for better mobile display -->
      	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topNav-collapse">
                <span class="pull-left toggle-text">Menu</span>
                <span class="pull-right icon-bars">
                  	<span class="sr-only">Toggle navigation</span>
                  	<span class="icon-bar"></span>
                  	<span class="icon-bar"></span>
                  	<span class="icon-bar"></span>
                </span>
        	</button>
      	</div>

      	<!-- Collect the nav links, forms, and other content for toggling -->
      	<div class="collapse navbar-collapse" id="topNav-collapse">
    		<ul class="nav navbar-nav">
		   		<li class="{{(isset($active_page)) && ($active_page == 'services')?'active':''}} dropdown">
                    <a data-toggle="dropdown">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu full-width">
                        <li>
                            <div class="col-sm-3">
                                <a class="title-link" href="{{url('/')}}/facials-waxing">
                                    <img src="{{url('/')}}/img/nav-facials.jpg" class="img-responsive hidden-xs" alt="Facials &amp; Waxing">
                                    <span class="title-link-text">Facials &amp; Waxing</span>
                                </a>
                                <ul>
                                    <li><a href="{{url('/')}}/facials-waxing/microdermabrasion-treatments">Microdermabrasion Treatments</a></li>
                                    <li><a href="{{url('/')}}/facials-waxing/ultrasonic-facial-treatment">Ultrasonic Facial Treatment</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <a class="title-link" href="{{url('/')}}/galvanic-treatment">
                                    <img src="{{url('/')}}/img/nav-galvanic.jpg" class="img-responsive hidden-xs" alt="Galvanic Treatment">
                                    <span class="title-link-text">Galvanic Treatment</span>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a class="title-link" href="{{url('/')}}/glycolic-peels">
                                    <img src="{{url('/')}}/img/nav-peel.jpg" class="img-responsive hidden-xs" alt="Glycolic Peels">
                                    <span class="title-link-text">Glycolic Peels</span>
                                </a>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{url('/')}}/footbath" class="title-link">
                                    <img src="{{url('/')}}/img/nav-footbath.jpg" class="img-responsive hidden-xs" alt="Detoxifying Footbath">
                                    <span class="title-link-text">Detoxifying Footbath</span>
                                </a>
                                <ul>
                                    <li><a href="{{url('/')}}/footbath/why">Why a Detox Footbath?</a></li>
                                    <li><a href="{{url('/')}}/footbath/symptoms">Symptoms</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </li>
                <li class="{{(isset($active_page)) && ($active_page == 'neriumad')?'active':''}}"><a href="{{url('/')}}/neriumad">NeriumAD</a></li>
                <li class="{{(isset($active_page)) && ($active_page == 'testimonials')?'active':''}}"><a href="{{url('/')}}/testimonials">Testimonials</a></li>
                <li class="{{(isset($active_page)) && ($active_page == 'media')?'active':''}}"><a href="{{url('/')}}/in-the-media">In the Media</a></li>
    		</ul>
      	</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>