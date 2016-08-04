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





<!--


	<div class="card-panel  card-panel-tertiary nav-links-panel p-t-5 p-b-5 m-b-0">
		<div class="card-panel-body">
			<nav role="menu">
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/visit/" class="nav-link-title">Book your visit</a>
					<span class="nav-link-desc">Come and see Kent for yourself at open days and other events.</span>
					<a href="//www.kent.ac.uk/courses/visit/" class="faux-link-overlay" aria-hidden="true">Open days</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/funding/undergraduate/" class="nav-link-title">Fees and funding</a>
					<span class="nav-link-desc">Find out about study costs and funding opportunities.</span>
					<a href="//www.kent.ac.uk/courses/funding/undergraduate/" class="faux-link-overlay" aria-hidden="true">Fees and funding</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="nav-link-title">Order a prospectus</a>
					<span class="nav-link-desc">Order or download a copy of our undergraduate prospectus.</span>
					<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="faux-link-overlay" aria-hidden="true">Order a prospectus</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="nav-link-title">How to apply</a>
					<span class="nav-link-desc">All the information you will need to apply to Kent.</span>
					<a href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="faux-link-overlay" aria-hidden="true">How to apply</a>
				</div>
			</nav>
		</div>
	</div>

 -->





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






<!--
<div class="card card-overlay">
	<div class="card-body">
		<div class="card-title-wrap pull-right">
			<h2 class="card-title">Global networks</h2>
			<p class="card-text">Our strong international impact is based on our external networks, partnerships with leading universities in Europe and around the world.</p>
		</div>
		<div class="media-wrap-parallax" data-stellar-offset-parent="true">
			<img data-stellar-ratio="0.7" class="card-img" src="/media/images/global-buildings-4x3.jpg">
		</div>
		<div class="card-img-overlay-bottom">
			<h3 class="card-subtitle chevron-link">International partnerships</h3>
			<p class="card-text">Collaboration across the globe.</p>
		</div>
	</div>
	<div class="card-footer">
		<a href="#" class="chevron-link">Related link</a>
		<a href="#" class="chevron-link">Related link</a>
		<a href="#" class="chevron-link">Related link</a>
		<a href="#" class="chevron-link">Related link</a>
	</div>
</div>

-->





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


<!--
				<div class="card-img-overlay-bottom text-right text-xs-right">
					<h3 class="card-subtitle">Interdisciplinary research at Kent</h3>
					<p class="card-text">Stronger collaboration, stronger research</p>
				</div> -->
			</div>


		</div>
		
<!--
		<div class="card-footer">
			<a href="https://www.kent.ac.uk/research/academics/index.html" class="chevron-link">Academic excellence</a>
			<a href="https://www.kent.ac.uk/research/impact/index.html" class="chevron-link">Research impact</a>
			<a href="https://www.kent.ac.uk/graduateschool/news/currentresearch.html" class="chevron-link">Current projects</a>
		</div>
	-->
	</div>








<!--

	<h2 class="sr-only">Twitter post</h2>
	<blockquote class="social-quote social-quote-twitter p-b-5 m-b-3">
		<a href="https://twitter.com/UniKentGradSch/status/736467824349196289">
			<button><span class="sr-only">Twitter logo</span></button>
			<p>PG researchers in the arts and humanities at Kent! Check out the call for papers from this new postgraduate journal.</p>
		</a>
		<cite>
			<a href="https://twitter.com/UniKentGradSch">@UniKentGradSch</a>
		</cite>
	</blockquote>

-->
<?php KentThemeHelper::footer(); ?>