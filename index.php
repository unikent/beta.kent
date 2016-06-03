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
				'home_page' => true
			)
		);
?>

			<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
				<div class="card-body">
					<div class="media-wrap-parallax" data-stellar-offset-parent="true" >
						<img  data-stellar-ratio="0.7" class="card-img" src="media/images/world-iss-4x3.jpg" alt="Earth viewed from the International Space Station">
					</div>
					<div class="card-title-wrap card-title-wrap-link card-transparent">
						<a href="http://beta.kent.ac.uk/news/kentlife/8503/kent-among-thes-top-100-most-international-universities-in-the-world-2016" class="card-title-link"><h2 class="card-title">Strong international outlook</h2></a>
						<p class="card-text">Kent is among top 100 most international universities.</p>
						<a class="faux-link-overlay" href="http://beta.kent.ac.uk/news/kentlife/8503/kent-among-thes-top-100-most-international-universities-in-the-world-2016" aria-hidden="true">Strong international outlook</a>
					</div>
				</div>
			</div>

			<div class="panel panel-tertiary">
				<div class="container-padded ">
					<form class="quickspot-container m-t-3">

						<h2 class="strap-line text-xs-center">A place to Inspire <span>/ An approach to challenge</span></h2>

						 <div class="form-group">
							 <label for="course-search" class="sr-only">Search courses</label>
							 <div class="input-group input-group-lg">
								<input type="search" class="form-control" id="course-search" placeholder="Search courses..." autocomplete="off" data-quickspot-config="all_courses" data-quickspot-target="quickspot-results-container">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon"><span class="sr-only">Search courses</span> <span class="kf-fw kf-search"></span></button>
								</span>
							</div>
						</div>
						<div id="quickspot-results-container">
						</div>
						<div class="inline-links text-xs-center text-sm-right">
							<a href="//www.kent.ac.uk/courses/undergraduate/search" >Courses A-Z</a>
							<a href="//www.kent.ac.uk/courses/undergraduate/prospectus/index.html" >Order a prospectus</a>
						</div>

					</form>
				</div>
			</div>

			<div class="card-panel  card-panel-tertiary nav-links-panel p-b-5 m-b-0">
				<div class="card-panel-body">
					<nav role="menu">
						<div class="nav-link">
							<a role="menuitem" href="//www.kent.ac.uk/about/" class="nav-link-title">Top 20 in the UK</a>
							<span class="nav-link-desc">We rank amongst the best universities in the UK.</span>
							<a href="//www.kent.ac.uk/about/" class="faux-link-overlay" aria-hidden="true">Top 20 in the UK</a>
						</div>
						<div class="nav-link">
							<a role="menuitem" href="//www.kent.ac.uk/courses/undergraduate/" class="nav-link-title">Undergraduate</a>
							<span class="nav-link-desc">Quality teaching with world-leading academics.</span>
							<a href="//www.kent.ac.uk/courses/undergraduate/" class="faux-link-overlay" aria-hidden="true">Undergraduate</a>
						</div>
						<div class="nav-link">
							<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/" class="nav-link-title">Postgraduate</a>
							<span class="nav-link-desc">Affordable programmes with leading researchers.</span>
							<a href="//www.kent.ac.uk/courses/postgraduate/" class="faux-link-overlay" aria-hidden="true">Postgraduate</a>
						</div>
						<div class="nav-link">
							<a role="menuitem" href="//www.kent.ac.uk/courses/visit/" class="nav-link-title">Visit us</a>
							<span class="nav-link-desc">Stunning locations and safe, comfortable accommodation.</span>
							<a href="//www.kent.ac.uk/courses/visit/" class="faux-link-overlay" aria-hidden="true">Visit us</a>
						</div>
					</nav>
				</div>
			</div>


		



			<div class="card card-overlay m-t-0">
				<div class="card-body">

					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="examples/student_experience" class="card-title-link"><h2 class="card-title">Superb student experience</h2></a>
						<p class="card-text">Our campuses provide stunning locations for your studies and offer first class academic and social facilities.</p>
						<a href="examples/student_experience" class="faux-link-overlay" aria-hidden="true">Superb student experience</a>
					</div>

					<div class="card-split">
						<div class="card-half">
							<div class="media-wrap video-launcher" data-mode="fullscreen">
								<div class="video-player">
									<div data-video-id="33eohY6Rmc4" data-type="youtube"></div>
								</div>
								<img src="media/images/student-ex-video.jpg" class="card-img" alt="Positive student">
							</div>

						</div>
						<div class="card-half">
							<div class="media-wrap">
								<img src="media/images/student-ex-holi.jpg" class="card-img" alt="Student covered in colourful dust from the Holi Festival">
							</div>
						</div>
						<div class="card-img-overlay-bottom card-overlay-inline-sm" >
							<h3 class="card-subtitle">Life at Kent</h3>
							<p class="card-text">Find out more from our students.</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="//www.kent.ac.uk/courses/undergraduate/why/excellence.html" class="chevron-link">Academic excellence</a>
					<a href="//www.kent.ac.uk/courses/undergraduate/why/community.html" class="chevron-link">Supportive community</a>
					<a href="//www.kent.ac.uk/courses/undergraduate/profiles/" class="chevron-link">Student profiles</a>
					<a href="//www.kent.ac.uk/student/experience/living-leisure.html" class="chevron-link">Culture, sports and societies</a>
				</div>
			</div>




			<div class="card-panel p-b-3">
				<div class="card-panel-body">

					<div class="card card-linked">
						<img class="card-img" src="media/images/locations-3x2.jpg" alt="Canterbury Campus">
						<a class="card-title-link" href="//www.kent.ac.uk/locations/"><h3 class="card-title">Stunning locations</h3></a>
						<p class="card-text">UK campuses close to London and European centres in Paris, Brussels, Rome and Athens.</p>
						<a href="//www.kent.ac.uk/locations/" class="faux-link-overlay" aria-hidden="true">Stunning locations</a>
					</div>

					<div class="card card-linked">
						<img class="card-img" src="media/images/campus-room-3x2.jpg" alt="Student relaxing in a room">
						<a href="//www.kent.ac.uk/accommodation/" class="card-title-link"><h3 class="card-title">Living on campus</h3></a>
						<p class="card-text">Safe and comfortable accommodation for studying and student life.</p>
						<a href="//www.kent.ac.uk/accommodation/" class="faux-link-overlay" aria-hidden="true">Living on campus</a>
					</div>

					<div class="card card-linked">
						<img class="card-img" src="media/images/templeman-3x2.jpg" alt="Templeman Library">
						<a href="//www.kent.ac.uk/student/experience/learning-resources.html" class="card-title-link"><h3 class="card-title">Investing in our facilities</h3></a>
						<p class="card-text">Our new library and study hubs provide world-class facilities.</p>
						<a href="//www.kent.ac.uk/student/experience/learning-resources.html" class="faux-link-overlay" aria-hidden="true">Investing in our facilities</a>
					</div>
					
					<div class="card card-linked">
						<img class="card-img" src="media/images/tortoise-3x2.jpg" alt="Student with a Galapagos tortoise">
						<a href="//www.kent.ac.uk/goabroad/index.html" class="card-title-link"><h3 class="card-title">Experience the world</h3></a>
						<p class="card-text">A world of study abroad and work placement opportunities are available.</p>
						<a href="//www.kent.ac.uk/goabroad/index.html" class="faux-link-overlay" aria-hidden="true">Experience the world</a>
					</div>
				</div>
			</div>



			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-left" >
						<a href="//www.kent.ac.uk/research/" class="card-title-link"><h2 class="card-title">World-leading research</h2></a>
						<p class="card-text">As one of the UK’s leading Universities, our academic schools produce word-class research. We’re rated as internationally excellent, leading the way in many fields of study.</p>
						<a href="//www.kent.ac.uk/research/" class="faux-link-overlay" aria-hidden="true">World-leading research</a>
					</div>

					<div class="card-media-wrap">
						<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
							<video autoplay="" loop="" class="embed-responsive-item">
								<source src="media/video/nature.mp4">
							</video>
						</div>

						<div class="card-img-overlay text-xs-right hidden-xs-down">
							<a href="//www.kent.ac.uk/research/ref2014/"><img width="120" src="media/images/ref-logo.png" alt="Logo for Research Excellence Framework"></a>
						</div>
					</div>

					<div class="card-img-overlay-bottom text-xs-right card-img-overlay-link">
						<a href="//www.kent.ac.uk/news/environment/4577/research-impact-designing-nature-reserve-networks" class="card-subtitle-link"><h3 class="card-subtitle">Designing nature reserve networks</h3></a>
						<p class="card-text ">Research into balancing conservation with local people.</p>
						<a href="//www.kent.ac.uk/news/environment/4577/research-impact-designing-nature-reserve-networks" class="faux-link-overlay" aria-hidden="true">Designing nature reserve network</a>
					</div>

				</div>
				<div class="card-footer">
					<a href="//www.kent.ac.uk/research/impact/" class="chevron-link">Research impact</a>
					<a href="//www.kent.ac.uk/research/academics/index.html" class="chevron-link">Academic successes</a>
					<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html#!degrees" class="chevron-link">Research degrees</a>
				</div>
			</div>





			<h2 class="sr-only">Alumni quote</h2>
			<blockquote class="m-b-5 m-t-2">
				<img src="media/images/staff-profile.jpg" class="img-circle" alt="Dara Blumenthal">
				<p>Because of Kent, I have much greater academic and geographic possibilities. The experience has been priceless.</p>
				<cite>
					Dara Blumenthal,
					<span>PhD Sociology</span>
					<a class="chevron-link" href="//www.kent.ac.uk/courses/postgraduate/profiles/sociology.html">View Dara's profile</a>
				</cite>
			</blockquote>





			<div class="card card-overlay card-media-inline p-b-3">

				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="//www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="card-title-link"><h2 class="card-title">Thinkers with global impact</h2></a>
						<p class="card-text">Think Kent is a series of short, inspiring lectures showing our world-changing research.</p>
						<a href="//www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="faux-link-overlay" aria-hidden="true">Thinkers with global impact</a>
					</div>

					<div class="card-media-wrap video-launcher" data-mode="inline">
						<div class="video-player">
							<div data-video-id="H4tcJUQ1USw" data-type="youtube"></div>
						</div>
						<img src="media/images/thinkkent-16x9.jpg" class="card-img" alt="Dr Stephen Lowry holding a model of a comet">
					</div>

					<div class="card-img-overlay-bottom">
						<h3 class="card-subtitle">Dr Stephen Lowry</h3>
						<p class="card-text">Comet imaging during the Rosetta mission</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="//www.kent.ac.uk/enterprise/ice.html" class="chevron-link">Innovation, creativity and enterprise</a>
					<a href="https://www.youtube.com/playlist?list=PL_voamVqJ_ZyVoZdGh4ov5u1PseEJxwEX" class="chevron-link">Think Kent on YouTube</a>
					<a href="//www.kent.ac.uk/events/esteem/2015-16/index.html" class="chevron-link">Open lectures</a>
				</div>
			</div>
		<?php KentThemeHelper::footer(); ?>


