@extends('home.templates.master', array('var1'=>'', 'var2'=>''))
@section('body')
<h1>Facials and Waxing</h1>

<p>Enjoy a 90 minute facial session for a calming and rejuvenating body experience.</p>

<h2>Menu</h2>

<div class="row">
	<div class="col-sm-6">
		<table class="table jude-table">
			<thead>
				<tr>
			    	<th class="big-th" colspan="2">Facials</th>
			   	</tr>
		   	</thead>
		   	<tbody>
			   	<tr>
			    	<td>Signature European Facial (Includes Galvanic Facial)</td>
			        <td>$95.00</td>
			    </tr><tr>
			    	<td>Stimulating Deep Pore Cleanse Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Anti-Aging Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Blemish Control Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Glycolic Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Aromatherapy Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Deep Moisturizing Paraffin Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Naturally Soothing Facial (Great for Sensitive or Rosacea Skin)</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Galvanic Facial</td>
			        <td>$55.00</td>
			    </tr><tr>
			    	<td>Galvanic Treatment Only</td>
			        <td>$35.00</td>
			    </tr><tr>
			    	<td>Teen Facial (Cleanse, Treat, and Educate your Teen on Proper Skin Care)</td>
			        <td>$35.00</td>
			    </tr><tr>
			    	<td>Express Facial</td>
			        <td>$35.00</td>
			    </tr><tr>
			    	<td>Back Treatment</td>
			        <td>$75.00</td>
			    </tr><tr>
			    	<td>Ultra Brightening Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Ultra Hydrating Facial</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Glycol Acid Treatment</td>
			    	<td>30.00</td>
			    </tr><tr>
			    	<td>Microdermabrasion Treatment</td>
			        <td>$30.00</td>
			    </tr>
			</tbody>
		</table>
	</div>

	<div class="col-sm-6">
		<table class="jude-table table">
			<thead>
				<tr>
			    	<th class="big-th" colspan="2">Waxing</th>
			    </tr>
		    </thead>
		    <tbody>
		    	<tr>
		    		<td>Customized Eyebrow Arch</td>
		    		<td>$20.00</td>
		    	</tr><tr>
			    	<td>Eyebrow</td>
			        <td>$15.00</td>
			    </tr><tr>
			    	<td>Lip</td>
			        <td>$12.00</td>
			    </tr><tr>
			    	<td>Chin</td>
			        <td>$12.00</td>
			    </tr><tr>
			    	<td>Face</td>
			        <td>$20.00+</td>
			    </tr><tr>
			    	<td>Under Arm</td>
			        <td>$20.00</td>
			    </tr><tr>
			    	<td>Chest</td>
			        <td>$25.00+</td>
			    </tr><tr>
			    	<td>Back</td>
			        <td>$35.00+</td>
			    </tr><tr>
			    	<td>Half Arm</td>
			        <td>$22.00</td>
			    </tr><tr>
			    	<td>Half Leg</td>
			        <td>$40.00+</td>
			    </tr><tr>
			    	<td>Full Leg</td>
			        <td>$90.00+</td>
			    </tr><tr>
			    	<td>Bikini</td>
			        <td>$35.00+</td>
			    </tr><!--<tr>
			    	<td>Brazilian (1st time)</td>
			        <td>$65.00</td>
			    </tr><tr>
			    	<td>Brazilian (Maintenance – Every 4 Weeks)</td>
			        <td>$45.00</td>
			    </tr>--><tr>
			    	<td>Knuckles or Toes</td>
			        <td>$10.00</td>
			    </tr><tr>
			    	<td>Ears</td>
			        <td>$20.00</td>
			    </tr><tr>
			    	<td>Nose Trimming</td>
			        <td>$15.00</td>
			    </tr><tr>
			    	<td>Brow Tinting</td>
			        <td>$20.00</td>
			    </tr>
			</tbody>
		</table>
	</div>
</div>

<p>You will find Jude at Studio 113 Hair Salon, Oxford, Michigan, directly south of Downtown Oxford.</p>

<p>Studio 113 Hair Salon offers complete nail and hair services along with a full line of waxing and facial services.</p>

<p>We pride ourselves in putting our clients first and going the extra mile to make our clients happy.  Our atmosphere is always friendly and welcoming and you'll always leave with a smile.</p>

<p>Studio 113 Hair Salon has been serving the friendly people of Downtown Oxford and the surrounding areas for almost 12 years.</p>

<h2>Microdermabrasion Treatments</h2>
<p>Microdermabrasion treatments use a minimally abrasive instrument to gently sand your skin, removing the thicker, uneven outer layer. This type of skin rejuvenation is used to treat light scarring, discoloration, sun damage, and stretch marks.<br>
	<a href="{{url('/')}}/facials-waxing/microdermabrasion-treatments">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>


<h2>Ultrasonic Facial Treatment</h2>
<p>During the Ultra Sonic Treatment high frequency sound waves are sent deep below the skin to encourage cellular repair, increasing collagen and elastin levels and to improve the penetration of nourishing skin care topical creams and serums.<br>
	<a href="{{url('/')}}/facials-waxing/ultrasonic-facial-treatment">Click here to see more <i class="fa fa-arrow-circle-o-right"></i></a></p>


<h2>Specials</h2>

<p>Galvanic Treatment – fills in fine lines and wrinkles; helping to make your skin look like porcelain</p>

<ul>
	<li>European Facial - $45.00  also includes a Galvanic Treatment<br />Cleanse, Exfoliate, Galvanic Treatment, Massage, Moisturize</li>
</ul>

<p>For additional specials please <a href="http://www.facebook.com/pages/Facials-by-Jude/120751807964979" target="_blank">see us on Facebook</a></p>

@stop