<?php
	include dirname(dirname(__FILE__))."/bootstrap.php";
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
				'meta' => array('title'=>'Demo Page - Kent Theme Beta'),
				'home_page' => true
			)
		);
?>

			<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
				<div class="card-body">
					<div class="media-wrap-paralax" data-stellar-offset-parent="true" >
						<img  data-stellar-ratio="0.7" class="card-img-bottom" src="images/world-4x3.jpg">
					</div>
					<div class="card-title-wrap card-title-wrap-link card-transparent">
						<h2 class="card-title">Strong international outlook</h2>
						<p class="card-text">Kent is among top 100 most international universities.</p>
					</div>

				</div>
			</div>
			<div class="panel panel-tertiary">
				<div class="container-padded ">
					<form class="quickspot-container">

						<h3 class="strap-line text-xs-center">A place to Inspire <span>/ An approach to challenge</span></h3>

						 <div class="form-group">
							 <label for="search" class="sr-only">Search</label>
							 <div class="input-group input-group-lg">
								<input type="search" class="form-control" id="course-search" placeholder="Search for undergraduate courses..." autocomplete="off" data-quickspot-config="ug_courses">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon"><span class="kf-fw kf-search"></span></button>
								</span>
							</div>
						</div>
						<div id="quickspot-results-container">
							
						</div>
						<div class="inline-links text-xs-right">
							<a href="#" >Courses A-Z</a>
							<a href="#" >Order a prospectus</a>
						</div>
					</form>
				</div>
			</div>
			<div class="card-panel  card-panel-tertiary nav-links-panel p-b-3 m-b-0">
				<div class="card-panel-body">
					<nav role="menu">
						<a role="menuitem" href="//www.kent.ac.uk/about/">
							<span class="nav-link-title">Top 20 in the UK </span>
							<span class="nav-link-desc">We rank amongst the best in the UK.</span>
						</a>
						<a role="menuitem" href="//www.kent.ac.uk/courses/undergraduate/">
							<span class="nav-link-title">Undergraduate</span>
							<span class="nav-link-desc">Quality teaching with word-leading academics.</span>
						</a>
						<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/">
							<span class="nav-link-title">Postgraduate</span>
							<span class="nav-link-desc">Affordable programmes with leading researchers.</span>
						</a>
						<a role="menuitem" href="//www.kent.ac.uk/internationalstudent/study-in-kent/">
							<span class="nav-link-title">Visit Kent</span>
							<span class="nav-link-desc">Stunning locations and safe, comfortable accommodation.</span>
						</a>
					</nav>
				</div>
			</div>


		



			<div class="card card-overlay m-t-0">
				<div class="card-body card-inverse">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<h4 class="card-title">Superb student experience</h4>
						<p class="card-text">Our campuses provide stunning locations for your studies and offer first class academic and social facilities.</p>
					</div>
					<div class="card-split">
						<div class="card-half">
							<div data-transcript="#" data-src="video/art-school-video.mp4" class="media-wrap video-launcher">
								<img src="images/student-ex-video.jpg" class="card-img-bottom">
							</div>

						</div>
						<div class="card-half">
							<div class="media-wrap ">
								<img src="images/student-ex-holi.jpg" class="card-img-bottom">
							</div>

						</div>
					<a class="card-img-overlay-bottom card-overlay-inline-sm" href="#">
						<h5 class="card-subtitle">Life at Kent</h5>
						<p class="card-text">Find out more from our students.</p>
					</a>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Superb student experience</a>
					<a href="#" class="chevron-link">Locations</a>
					<a href="#" class="chevron-link">Accommodation and facilities</a>
					<a href="#" class="chevron-link">Culture, sports and societies</a>
				</div>
			</div>








			</div>





			<div class="card-panel p-b-3">
				<div class="card-panel-body">
					<a  href="#" class="card">
						<img class="card-img" src="images/locations-3x2.jpg">
						<h3 class="card-title">Stunning locations</h3>
						<p class="card-text">UK campuses close to London and European centres in Paris, Brussels, Rome and Athens.</p>
					</a>
					<a class="card">
						<img class="card-img" src="images/templeman-3x2.jpg">
						<h3 class="card-title">Investing in our facilities</h3>
						<p class="card-text">Our new library, accommodation, sports centre provide world-class facilities.</p>
					</a>
					<a class="card">
						<img class="card-img" src="images/accommodation-3x2.jpg">
						<h3 class="card-title">Living on campus</h3>
						<p class="card-text">Safe and comfortable accomoodation to make the best of your studies and student life.</p>
					</a>
					
					<a class="card">
						<img class="card-img" src="images/study-abroad-3x2.jpg">
						<h3 class="card-title">Experience the world</h3>
						<p class="card-text">As a Kent student a world of study abroad and work placement opportunities are available to you.</p>

					</a>
				</div>
			</div>







			<div class="card card-overlay">
				<div class="card-body card-inverse">
					<div class="card-title-wrap card-title-wrap-link pull-left">
						<h4 class="card-title">World-leading research</h4>
						<p class="card-text">As one of the UK’s leading Universities, our academic schools produce word-class research. We’re rated as internationally excellent, leading the way in many fields of study.</p>
					</div>
					<div style="position:relative;">
					<div data-stellar-offset-parent="true" class="media-wrap-paralax" style="min-height: 623.438px;">
						<img src="images/tree-frog.jpg" class="card-img-bottom" data-stellar-ratio="0.8" style="left: 0px; top: 0px; transform: translate3d(0px, -41.2351px, 0px);">
					</div>
					

					<div class="card-img-overlay text-xs-right">
							<h5 class="card-subtitle">Float</h5>
					</div>

					<div class="card-img-overlay-bottom text-xs-right">
						<a href="#">
							<h5 class="card-subtitle">Conservation research</h5>
							<p class="card-text ">Innovative survey of amphibians and reptiles helps conservation.</p>
						</a>
					</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Research impact</a>
					<a href="#" class="chevron-link">Academic profiles</a>
					<a href="#" class="chevron-link">Research degrees</a>
					<a href="#" class="chevron-link">ThinkKent lectures</a>
				</div>
			</div>



			<blockquote>
				<img src="images/staff-profile.jpg" class="img-circle">
				<p>The collaborative and interdisciplinary community at Kent helps strengthen innovative research.</p>
				<footer>
					<cite>
						Dr David Hume,
						<span>School of Biosciences</span>

						<span><a class="chevron-link" href="#">Learn more about our community</a></span>
					</cite>
				</footer>
			</blockquote>







			<div class="card card-overlay p-b-3">
				<div class="card-body card-inverse">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<h4 class="card-title">Thinkers with global impact</h4>
						<p class="card-text">ThinkKent is a series of short, inspiring lectures showing our world-changing research.</p>
					</div>
					<div data-src="video/thinkkent.mp4" class="card-media-wrap video-launcher">
						<img src="images/thinkkent-16x9.jpg" class="card-img-bottom">
					</div>

					<div class="card-img-overlay-bottom">
						<h5 class="card-subtitle">Dr Stephen Lowry</h5>
						<p class="card-text">Comet imaging during the Rosetta mission</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Community impact</a>
					<a href="#" class="chevron-link">ThinkKent lectures</a>
					<a href="#" class="chevron-link">Free lectures</a>
				</div>
			</div>
		<?php KentThemeHelper::footer(); ?>


