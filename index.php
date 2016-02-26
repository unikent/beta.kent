<?php
	include dirname(__FILE__)."/bootstrap.php";
	use \unikent\kent_theme\kentThemeHelper;

		KentThemeHelper::header(
			array(
				'title' => "Kent Theme Demo",
				'menu' => array(
					'Home' => '#',
					'Culture' => '#',
					'Environment' => '#',
					'Science' => '#',
					'Society' => '#',
					'Kent Life' => '#'
				),
				'meta' => array('title'=>"University of Kent - The UK's European University"),
				'home_page' => true,
				'beta_bar' => array(
					'about_url' => '/about-beta'
				)
			)
		);
?>

			<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
				<div class="card-body">
					<div class="media-wrap-paralax" data-stellar-offset-parent="true" >
						<img  data-stellar-ratio="0.7" class="card-img" src="media/images/world-iss-4x3.jpg">
					</div>
					<a href="http://beta.kent.ac.uk/news/kentlife/8503/kent-among-thes-top-100-most-international-universities-in-the-world-2016" class="card-title-wrap card-title-wrap-link card-transparent">
							<h2 class="card-title">Strong international outlook</h2>
							<p class="card-text">Kent is among top 100 most international universities.</p>
					</a>

				</div>
			</div>






			<div class="panel panel-tertiary">
				<div class="container-padded ">
					<form class="quickspot-container m-t-3">

						<h2 class="strap-line text-xs-center">A place to Inspire <span>/ An approach to challenge</span></h2>

						 <div class="form-group">
							 <label for="search" class="sr-only">Search</label>
							 <div class="input-group input-group-lg">
								<input type="search" class="form-control" id="course-search" placeholder="Search for undergraduate courses..." autocomplete="off" data-quickspot-config="ug_courses" data-quickspot-target="quickspot-results-container">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon"><span class="kf-fw kf-search"></span></button>
								</span>
							</div>
						</div>
						<div id="quickspot-results-container">
							
						</div>
						<div class="inline-links text-xs-center text-sm-right">
							<a href="http://www.kent.ac.uk/courses/undergraduate/search" >Courses A-Z</a>
							<a href="http://www.kent.ac.uk/courses/undergraduate/prospectus/index.html" >Order a prospectus</a>
						</div>
					</form>
				</div>
			</div>
			<div class="card-panel  card-panel-tertiary nav-links-panel p-b-5 m-b-0">
				<div class="card-panel-body">
					<nav role="menu">
						<a role="menuitem" href="http://www.kent.ac.uk/about/">
							<span class="nav-link-title">Top 20 in the UK </span>
							<span class="nav-link-desc">We rank amongst the best universities in the UK.</span>
						</a>
						<a role="menuitem" href="http://www.kent.ac.uk/courses/undergraduate/">
							<span class="nav-link-title">Undergraduate</span>
							<span class="nav-link-desc">Quality teaching with word-leading academics.</span>
						</a>
						<a role="menuitem" href="http://www.kent.ac.uk/courses/postgraduate/">
							<span class="nav-link-title">Postgraduate</span>
							<span class="nav-link-desc">Affordable programmes with leading researchers.</span>
						</a>
						<a role="menuitem" href="http://www.kent.ac.uk/courses/visit/">
							<span class="nav-link-title">Visit us</span>
							<span class="nav-link-desc">Stunning locations and safe, comfortable accommodation.</span>
						</a>
					</nav>
				</div>
			</div>


		



			<div class="card card-overlay m-t-0">
				<div class="card-body">
					<a href="http://www.kent.ac.uk/student/experience/">
						<div class="card-title-wrap card-title-wrap-link pull-right">
							<h4 class="card-title">Superb student experience</h4>
							<p class="card-text">Our campuses provide stunning locations for your studies and offer first class academic and social facilities.</p>
						</div>
					</a>
					<div class="card-split">
						<div class="card-half">
							<div data-transcript="#" data-src="media/video/art-school-video.mp4" class="media-wrap video-launcher">
								<img src="media/images/student-ex-video.jpg" class="card-img">
							</div>

						</div>
						<div class="card-half">
							<div class="media-wrap ">
								<img src="media/images/student-ex-holi.jpg" class="card-img">
							</div>
						</div>
						<div class="card-img-overlay-bottom card-overlay-inline-sm" >
							<h5 class="card-subtitle">Life at Kent</h5>
							<p class="card-text">Find out more from our students.</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="https://www.kent.ac.uk/courses/undergraduate/why/excellence.html" class="chevron-link">Academic excellence</a>
					<a href="https://www.kent.ac.uk/courses/undergraduate/why/community.html" class="chevron-link">Supportive community</a>
					<a href="http://www.kent.ac.uk/courses/undergraduate/profiles/" class="chevron-link">Student profiles</a>
					<a href="http://www.kent.ac.uk/student/experience/living-leisure.html" class="chevron-link">Culture, sports and societies</a>
				</div>
			</div>




			<div class="card-panel p-b-3">
				<div class="card-panel-body">
					<a  href="http://www.kent.ac.uk/locations/" class="card">
						<img class="card-img" src="media/images/locations-3x2.jpg">
						<h3 class="card-title">Stunning locations</h3>
						<p class="card-text">UK campuses close to London and European centres in Paris, Brussels, Rome and Athens.</p>
					</a>
					
					<a href="http://www.kent.ac.uk/accommodation/" class="card">
						<img class="card-img" src="media/images/campus-room-3x2.jpg">
						<h3 class="card-title">Living on campus</h3>
						<p class="card-text">Safe and comfortable accommodation for studying and student life.</p>
					</a>

					<a href="http://www.kent.ac.uk/student/experience/learning-resources.html" class="card">
						<img class="card-img" src="media/images/templeman-3x2.jpg">
						<h3 class="card-title">Investing in our facilities</h3>
						<p class="card-text">Our new library and study hubs provide world-class facilities.</p>
					</a>
					
					<a href="http://www.kent.ac.uk/goabroad/index.html" class="card">
						<img class="card-img" src="media/images/tortoise-3x2.jpg">
						<h3 class="card-title">Experience the world</h3>
						<p class="card-text">A world of study abroad and work placement opportunities are available.</p>

					</a>
				</div>
			</div>



			<div class="card card-overlay">
				<div class="card-body">

					<a  href="http://www.kent.ac.uk/research/" class="card-title-wrap card-title-wrap-link pull-left" >
						<h4 class="card-title">World-leading research</h4>
						<p class="card-text">As one of the UK’s leading Universities, our academic schools produce word-class research. We’re rated as internationally excellent, leading the way in many fields of study.</p>
					</a>



					<div class="card-media-wrap">
						<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
							<video autoplay="" loop="" class="embed-responsive-item">
								<source src="media/video/nature.mp4">
							</video>
						</div>

						<div class="card-img-overlay text-xs-right hidden-xs-down">
							<a href="https://www.kent.ac.uk/research/ref2014/"><img width="120" src="media/images/ref-logo.png"></a>
						</div>
					</div>

					<a href="http://www.kent.ac.uk/news/environment/4577/research-impact-designing-nature-reserve-networks" class="card-img-overlay-bottom text-xs-right">
						<h5 class="card-subtitle chevron-link">Designing nature reserve networks</h5>
						<p class="card-text ">Research into balancing conservation with local people.</p>
					</a>

				</div>
				<div class="card-footer">
					<a href="http://www.kent.ac.uk/research/impact/" class="chevron-link">Research impact</a>
					<a href="https://www.kent.ac.uk/research/academics/index.html" class="chevron-link">Academic successes</a>
					<a href="http://www.kent.ac.uk/courses/postgraduate/types/research.html#!degrees" class="chevron-link">Research degrees</a>
				</div>
			</div>





			
			<blockquote class="m-b-5 m-t-2">
				<img src="media/images/staff-profile.jpg" class="img-circle">
				<p>Because of Kent, I have much greater academic and geographic possibilities. The experience has been priceless.</p>
				<cite>
					Dara Blumenthal,
					<span>PhD Sociology</span>
					<a class="chevron-link" href="http://www.kent.ac.uk/courses/postgraduate/profiles/sociology.html">View Dara's profile</a>
				</cite>
			</blockquote>





			<div class="card card-overlay p-b-3">
				<div class="card-body">
					<a href="http://www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="card-title-wrap card-title-wrap-link pull-right">
						<h4 class="card-title">Thinkers with global impact</h4>
						<p class="card-text">Think Kent is a series of short, inspiring lectures showing our world-changing research.</p>
					</a>
					<div data-src="media/video/thinkkent.mp4" class="card-media-wrap video-launcher">
						<img src="media/images/thinkkent-16x9.jpg" class="card-img">
					</div>

					<div class="card-img-overlay-bottom">
						<h5 class="card-subtitle">Dr Stephen Lowry</h5>
						<p class="card-text">Comet imaging during the Rosetta mission</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="https://www.kent.ac.uk/enterprise/ice.html" class="chevron-link">Innovation, creativity and enterprise</a>
					<a href="https://www.youtube.com/playlist?list=PL_voamVqJ_ZyVoZdGh4ov5u1PseEJxwEX" class="chevron-link">Think Kent on YouTube</a>
					<a href="https://www.kent.ac.uk/events/esteem/2015-16/index.html" class="chevron-link">Open lectures</a>
				</div>
			</div>
		<?php KentThemeHelper::footer(); ?>


