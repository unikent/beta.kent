<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;

KentThemeHelper::header(
	array(
		'title'=>"Undergraduate Courses",
		'menu' => array(
			'Home' => 'undergraduate.php',
			'Courses A-Z' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'How to apply' => 'https://www.kent.ac.uk/courses/undergraduate/apply/how.html',
			'Choosing your course' => 'https://www.kent.ac.uk/courses/undergraduate/how/index.html',
			'Student profiles' => 'https://www.kent.ac.uk/courses/undergraduate/profiles/index.html',
			'Fees and funding' => 'https://www.kent.ac.uk/courses/postgraduate/why/index.html',
			),
		'meta' => array(
			'description'=>'Undergraduate home',
			'title'=>"Undergraduate courses - University of Kent"
			),
		//'theme'=>'undergraduate',
		'beta_bar' => array(
			'about_url' => '/about-beta'
			)
		)
	);
	?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(function() {
$("body").addClass("brand-header");

});
</script>

<style type="text/css">

	.card.header-card-overlay {
		margin-top: -7rem;
	}

	.global-nav .global-nav-links .global-nav-link {
		font-size: 1.4rem;
	}

	.card.card-overlay .card-media-wrap {
		max-height: 30rem;
	}



	@media (min-width: 1920px) {
		.card.card-overlay .card-media-wrap {
			min-height: 44rem;
		}
	}
	.departmental-nav header {
		font-size: 2.2em;
	}

</style>


	<!--
	<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
		<div class="card-body">
			<div class="card-media-wrap">
				<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
					<video autoplay loop class="embed-responsive-item">
						<source src="/media/video/students.mp4">
					</video>
				</div>
			</div>

			<div class="card-img-overlay-bottom card-img-overlay-link card-overlay-inline-sm card-overlay-inline-nopad">
				<form>
					<div class="form-group quickspot-container">
						<label for="search" class="sr-only">Search</label>
						<div class="input-group input-group-lg">
							<input type="search" class="form-control" id="course-search" autocomplete="off" data-quickspot-config="ug_courses" data-quickspot-target="quickspot-results-container" placeholder="Search undergraduate courses">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-accent btn-icon">
									<span class='kf-fw kf-search'></span></button>
							</span>
						</div>
						<div id="quickspot-results-container"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
-->


<!--
<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
				<div class="card-body">

					<div class="kent-slider kent-slider-dark">
						<div class="kent-slide">
							<div class="card-media-wrap">
								<img class="card-img" src="/media/images/flower-thing.jpg">
							</div>
							<div class="card-title-wrap">
								<h3 class="card-title">Come and visit us</h3>
								<p class="card-text">Open days and more</p>
							</div>
						</div>

						<div class="kent-slide">
							<div class="card-media-wrap ">
								<img class="card-img" src="/media/images/matchstick-16x9.jpg">
							</div>
							<div class="card-title-wrap">
								<h3 class="card-title">Research on firesetting treatment wins award</h3>
								<p class="card-text">The first effective treatment for deliberate firesetters </p>






							</div>
						</div>



							<div class="kent-slide">
							<div class="card-media-wrap ">
								<img class="card-img" src="/media/images/stocky-students-16x9.jpg">
							</div>
							<div class="card-title-wrap">
								<h3 class="card-title">Clearing and adjustments 2016 now open</h3>
								<p class="card-text">Apply online or call our hotline 0845 2000 166 or +44 1227 768896</p>

									<p><a href="#dostuff" class="btn btn-primary">Apply online now</a></p>
							</div>
						</div>




						<div class="kent-slide">
							<div class="card-media-wrap ">
								<img class="card-img" src="/media/images/world-iss-16x9.jpg">
							</div>
							<div class="card-title-wrap">
								<h3 class="card-title">Strong international outlook</h3>
								<p class="card-text">Kent is among the 100 most international universities</p>
							</div>
						</div>







						<div class="kent-slide">
							<div class="card-media-wrap">
									<img class="card-img" src="/media/images/story-swimmers.jpg">
							</div>
							<div class="card-img-overlay-centered card-img-overlay-tinted">
								<div class="text-xs-center">
									<h2 class="card-subtitle">Clearing and adjustments 2016 now open</h2>

									<br>
									<p><a href="#dostuff" class="btn btn-primary">Apply online now</a></p>
								</div>
							</div>
						</div>


					</div>
				</div>

			</div>



			<div class="panel-tertiary">
				<div class="container-padded" style="padding-top: 4rem; padding-bottom: 4rem">
					<form class="quickspot-container m-t-0 p-t-0">


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
-->


	<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
		<div class="card-body">
			<div class="card-media-wrap">
				<!-- <img src="/media/images/undergrad-discussion-16x9.jpg" alt="Undergraduates having a discussion" class="card-img-bottom"> -->
				<img src="/media/images/flower-thing.jpg" alt="Undergraduates having a discussion" class="card-img-bottom">
			</div>

			<div class="card-img-overlay-bottom card-img-overlay-link card-overlay-inline-sm card-overlay-inline-nopad" >
				<form>
					<div class="form-group quickspot-container">
						<label for="course-search" class="sr-only">Search</label>
						<div class="input-group input-group-lg">
							<input type="search" class="form-control" id="course-search" autocomplete="off" data-quickspot-config="pg_courses" data-quickspot-target="quickspot-results-container" placeholder="Search our postgraduate programmes and supervisors">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-accent btn-icon"><span class='kf-fw kf-search'></span></button>
							</span>
						</div>
						<div id="quickspot-results-container"></div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="card-panel  card-panel-tertiary nav-links-panel p-t-3 p-b-2 m-b-0">
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



	<div class="card card-overlay editorial editorial-seondary m-t-0 p-t-0">
		<div class="card-body">
			<div class="card-title-wrap">
				<h2 class="card-title">Campus life</h2>
				<p class="card-text">A great place to work and a great place to live. Find out why so many undergraduates choose to study at Kent.</p>


				<h3><a href="/examples/student_experience.php" class="chevron-link">Superb student experience</a></h3>
				<p class="card-text">Find out what makes studying at Kent a unique experience.</p>


				<h3><a href="//www.kent.ac.uk/locations" class="chevron-link">Stunning locations</a></h3>
				<p class="card-text">We have two stunning campuses and a part-time study centre in Kent, plus four study centres acrsoss Europe.</p>

				<h3><a href="//www.kent.ac.uk/accommodation" class="chevron-link">Accommodation</a></h3>
				<p class="card-text">Take a look around our range of undergraduate accommodation.</p>

			</div>
			<div class="card-media-wrap">
				<img class="card-img-bottom" src="/media/images/stocky-students-16x9.jpg" alt="Students having a discussion in a class">
			</div>
		</div>

	</div>




	<div class="card-panel cards-linked m-t-5 m-b-5">

		<div class="card-panel-body">
			<div class="card">
				<a href="//www.kent.ac.uk/extra/index.html" class="card-title-link "><h3 class="card-title chevron-link chevron-link-accent">Kent Extra</h3></a>
				<p class="card-text">A new range of extra-curricular and co-curricular activities taht will enhance your employability.</p>
				<a href="//www.kent.ac.uk/extra/index.html" class="faux-link-overlay" aria-hidden="true">Kent Extra</a>
			</div>
			<div class="card">
				<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">What our students say</h3></a>
				<p class="card-text">Read interviews with some of our undergraduates to find out why they chose Kent and their experiences with us.</p>
				<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="faux-link-overlay" aria-hidden="true">What our students say</a>
			</div>
			<div class="card">
				<a href="//blogs.kent.ac.uk/kentstudents/" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">The Kent Students blog</h3></a>
				<p class="card-text">A blog written by current students about life and study at the University of Kent.</p>
				<a href="//blogs.kent.ac.uk/kentstudents/" class="faux-link-overlay" aria-hidden="true">The Kent Students blog</a>
			</div>
			<div class="card">
				<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">International students</h3></a>
				<p class="card-text">Kent is a favourite destination for international students, with 148 nationalities represented in our student community..</p>
				<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="faux-link-overlay" aria-hidden="true">International students</a>
			</div>
		</div>
	</div>




	<div class="card card-overlay  m-t-0">
		<div class="card-body">
			<div class="card-title-wrap card-title-wrap-link pull-right">
				<a href="https://www.kent.ac.uk/research/" class="card-title-link"><h2 class="card-title">Why study at Kent?</h2></a>
				<p class="card-text">Our first-class study facilities, academic strengths and a wide selection of undergraduate programmes will create the best university experience for you and help you to fulfil your potential.</p>
				<a href="https://www.kent.ac.uk/research/" class="faux-link-overlay" aria-hidden="true">World-Leading research</a>
			</div>
			<div class="card-media-wrap video-launcher" data-toggle="modal" data-src="https://youtu.be/H4tcJUQ1USw">
				<img src="/media/images/undergrad-discussion-library-16x9.jpg" class="card-img" alt="Students chatting in the library">
			</div>
		</div>
	</div>



	<h2 class="sr-only">Undergraduate quote</h2>
	<blockquote class="m-b-5 m-t-3">
		<img src="/media/images/profiles/student-mario-ella.jpg" class="img-circle" alt="Mario Elia, Undergraduate student blogger">
		<p>You will be surprised at how independent you become at university so if you are not quite there yet, don't worry.</p>
		<cite>
			Mario Elia,
			<span>Undergraduate student blogger</span>
			<a class="chevron-link" href="//blogs.kent.ac.uk/kentstudents/">More about life and study on our Kent student blog</a>
		</cite>
	</blockquote>

<?php KentThemeHelper::footer(); ?>
