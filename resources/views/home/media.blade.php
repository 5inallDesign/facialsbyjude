@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')

<h1>In the Media</h1>

<p>Check out what's been said about Facial's by Jude.</p>

<div class="embed-responsive embed-responsive-16by9">
<iframe  class="embed-responsive-item" width="650" height="366" src="http://www.youtube.com/embed/-qi2RlPM7DU" frameborder="0" allowfullscreen></iframe>
</div>

<h2>What's the Biz</h2>
<ul>
	<li><a href="{{url('/')}}/media/facials-by-jude-whats-the-biz.pdf"><i class="fa fa-file-pdf-o"></i> Download as a PDF</a></li>
    <li><a href="{{url('/')}}/media/facials-by-jude-whats-the-biz.doc"><i class="fa fa-file-word-o"></i> Download as a Word Document</a></li>
</ul>

<h2>Coupon - LBN Information</h2>
<ul>
	<li><a href="{{url('/')}}/media/lbn-pager.pdf"><i class="fa fa-file-pdf-o"></i> Download as a PDF</a></li>
    <li><a href="{{url('/')}}/media/lbn-pager.doc"><i class="fa fa-file-word-o"></i> Download as a Word Document</a></li>
</ul>

<p><img src="{{url('/')}}/img/lbn-logo.jpg" width="204" height="75" alt="LBN"></p>

@stop