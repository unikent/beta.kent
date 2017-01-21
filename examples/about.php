<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;
KentThemeHelper::header(
	array(
		'title'=>"The UK's European university",
		'menu' => array(
			'Home' => 'undergraduate.php',
			'Essential Kent' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Looking ahead' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Partnerships and networks' => 'https://www.kent.ac.uk/courses/undergraduate/apply/how.html',
			'People and committees' => 'https://www.kent.ac.uk/courses/undergraduate/how/index.html'
			),
		'meta' => array(
			'description'=>"The UK's European university",
			'title'=>"The UK's European university - University of Kent"
			),
		//'theme'=>'undergraduate',
		'beta_bar' => array(
			'about_url' => '/about-beta'
			)
		)
	);
?>
<div class="card card-overlay header-card-overlay card-media-inline">
	<div class="card-body">
		<div class="card-media-wrap video-launcher" data-mode="fullscreen">
			<div class="video-player">
				<div data-video-id="hlR7qinwDV0" data-type="youtube"></div>
			</div>
			<img class="card-img" src="/media/images/graduates-16x9.jpg" alt="Students having a picnic in the park at Canterbury Campus">
		</div>
		<div class="card-title-wrap">
			<h2 class="card-title">Forward thinking</h2>
			<p class="card-text">Forging a strong future</p>
		</div>
	</div>
</div>
<div class="card-panel cards-backed cards-linked">
	<div class="card-panel-body">
		<div class="card card-backed-primary">
			<h3 class="card-title card-title-figure">16<sup>th</sup></h3>
			<p class="card-text">Kent rises to 16th in The Guardian University Guide 2016.</p>
		</div>
		<div class="card card-backed-primary-light">
			<h3 class="card-title card-title-figure">20<sup>th</sup></h3>
			<p class="card-text">The University is ranked 20th, its highest ever position, in the Times Higher Education (THE)‘Table of Tables’ 2016</p>
		</div>
		<div class="card card-backed-energy">
			<h3 class="card-title card-title-figure">37%</h3>
			<p class="card-text">37% of our academic staff are from overseas and we have students representing 148 nationalities.</p>
		</div>
		<div class="card card-backed-primary">
			<h3 class="card-title card-title-figure">97%</h3>
			<p class="card-text">of research at Kent was found to be of international quality in the Research Excellence Framework 2014 (an independent national survey of UK universities).</p>
		</div>
	</div>
</div>
<aside class="container m-t-5 m-b-5 p-t-0 p-b-5">
	<p class="impact-statement">We're a leading academic institution producing world-class research, rated internationally excellent and leading in many fields of study. </p>
</aside>
<div class="card card-overlay">
	<div class="card-title-wrap pull-left">
		<h2 class="card-title">Local thinking, global impact</h2>
		<p class="card-text">Through our European centres and partnerships with universities around the world, we are engaged in collaborative research - empowering the community, changing the world.</p>
	</div>
	<div class="card-media-wrap">
		<div class="card-embed-wrap embed-responsive embed-responsive-16by9 click-to-interact">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=ziomgBMrnTMA.ktkmY8mmBPqE" allowfullscreen=""></iframe>
		</div>
	</div>
	<div class="card-footer">
		<a href="#" class="chevron-link">Community</a>
		<a href="#" class="chevron-link">European partnerships</a>
		<a href="#" class="chevron-link">Related link</a>
		<a href="#" class="chevron-link">Related link</a>
	</div>
</div>
<aside class="container m-t-5 m-b-5 p-t-2 p-b-5">
	<p class="impact-statement">We're committed to the transformative power of education and research
	and to the development and support of our students and staff. </p>
</aside>
<div class="card card-overlay editorial editorial-seondary m-t-0 p-t-0">
	<div class="card-body">
		<div class="card-title-wrap">
			<h2 class="card-title">Supporting the Kent community</h2>
			<p class="card-text">We are proud to be making a real impact to people’s lives.</p>
			<h3><a href="/examples/student_experience.php" class="chevron-link">Local economy</a></h3>
			<p class="card-text">We generated £780m for the south-east region during the financial year 2014/15.</p>
			<h3><a href="//www.kent.ac.uk/locations" class="chevron-link">Kent in the community</a></h3>
			<p class="card-text">Supporting local schools and colleges, volunteering, servicing the business community and more.</p>
			<h3><a href="//www.kent.ac.uk/accommodation" class="chevron-link">Sports and culture</a></h3>
			<p class="card-text">The University makes a key contribution to the region's sporting and cultural activities.</p>
		</div>
		<div class="card-media-wrap">
			<img class="card-img-bottom" src="/media/images/kent-community-16x9.jpg" alt="Staff forming the number 50 in celebration of the 50th anniversary">
		</div>
	</div>
	
</div>
<div class="card-panel m-t-5 m-b-5">
	<div class="card-panel-body">
		<div class="card card-linked">
			<a href="//www.kent.ac.uk/extra/index.html" class="card-title-link "><h3 class="card-title  chevron-link">Visit us</h3></a>
			<p class="card-text">Come to an Open Day or come wander around our beautiful parklands.</p>
			<a href="//www.kent.ac.uk/extra/index.html" class="faux-link-overlay" aria-hidden="true">Kent Extra</a>
		</div>
		<div class="card card-linked">
			<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="card-title-link"><h3 class="card-title  chevron-link">What's on?</h3></a>
			<p class="card-text">Theatre, cinema, music, arts, lectures and more.</p>
			<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="faux-link-overlay" aria-hidden="true">What our students say</a>
		</div>
		<div class="card card-linked">
			<a href="//blogs.kent.ac.uk/kentstudents/" class="card-title-link"><h3 class="card-title  chevron-link">Plans and strategies</h3></a>
			<p class="card-text">We are investing in our campus to carry us forward as a leading international reserach institution.</p>
			<a href="//blogs.kent.ac.uk/kentstudents/" class="faux-link-overlay" aria-hidden="true">Plans and strategies</a>
		</div>
		<div class="card card-linked">
			<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="card-title-link"><h3 class="card-title  chevron-link">Partnerships and networks</h3></a>
			<p class="card-text">Find out more about our well-established  partnerships across the world.</p>
			<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="faux-link-overlay" aria-hidden="true">International students</a>
		</div>
	</div>
</div>
<div class="card card-overlay  m-t-0">
	<div class="card-body">
		<div class="card-title-wrap card-title-wrap-link pull-right">
			<a href="undergraduate.php" class="card-title-link"><h2 class="card-title">Why study at Kent?</h2></a>
			<p class="card-text">Our first-class study facilities, academic strengths and a wide selection of undergraduate programmes will create the best university experience for you and help you to fulfil your potential.</p>
			<a href="undergraduate.php" class="faux-link-overlay" aria-hidden="true">World-Leading research</a>
		</div>
		<div class="card-media-wrap video-launcher" data-toggle="modal" data-src="https://youtu.be/H4tcJUQ1USw">
			<img src="/media/images/undergrad-discussion-library-16x9.jpg" class="card-img" alt="Students chatting in the library">
		</div>
	</div>
</div>
<?php KentThemeHelper::footer(); ?>