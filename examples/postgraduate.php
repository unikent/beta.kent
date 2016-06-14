<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;

KentThemeHelper::header(
	array(
		'title'=>"Postgraduate Courses",
		'menu' => array(
			'Home' => 'postgraduate.php',
			'Find a supervisor' => 'https://www.kent.ac.uk/courses/postgraduate/supervisor/index.html',
			'Types of degrees' => 'https://www.kent.ac.uk/courses/postgraduate/types/index.html',
			'Fees and funding' => 'https://www.kent.ac.uk/scholarships/postgraduate/',
			'Student profiles' => 'https://www.kent.ac.uk/courses/postgraduate/profiles/index.html',
			'Why study at Kent?' => 'https://www.kent.ac.uk/courses/postgraduate/why/index.html',
			'International students' => 'https://www.kent.ac.uk/courses/postgraduate/international/index.html',
			'How to apply' => 'https://www.kent.ac.uk/courses/postgraduate/apply/index.html',
			'Entry requirements' => 'https://www.kent.ac.uk/courses/postgraduate/apply/entry.html'
			),
		'meta' => array(
			'description'=>'Postrgaduate home',
			'title'=>"Postgraduate Home - Kent Theme Beta"
			),
		'theme'=>'postgraduate',
		'beta_bar' => array(
			'about_url' => '/about-beta'
			)
		)
	);
	?>
	<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
		<div class="card-body">
			<div class="card-media-wrap">
				<img src="/media/images/growing-plant-3x2.jpg" alt="Student filming useing a television camera" class="card-img-bottom">
			</div>

			<div class="card-img-overlay-bottom card-img-overlay-link card-overlay-inline-sm card-overlay-inline-nopad">
				<form>
					<div class="form-group quickspot-container">
						<label for="search" class="sr-only">Search</label>
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



	<div class="card-panel  card-panel-tertiary nav-links-panel p-t-5 p-b-5 m-b-0">
		<div class="card-panel-body">
			<nav role="menu">
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/apply/" class="nav-link-title">How to apply</a>
					<span class="nav-link-desc">Our supportive staff will help you throughout the process.</span>
					<a href="//www.kent.ac.uk/courses/postgraduate/apply/" class="faux-link-overlay" aria-hidden="true">How to apply</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/types/taught.html" class="nav-link-title">Master's/Taught</a>
					<span class="nav-link-desc">A structured programme of study made up of modules.</span>
					<a href="//www.kent.ac.uk/courses/postgraduate/types/taught.html" class="faux-link-overlay" aria-hidden="true">Master's/Taught</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="nav-link-title">Research/PhDs</a>
					<span class="nav-link-desc">Browse our research degrees and PhDs by subject.</span>
					<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="faux-link-overlay" aria-hidden="true">Research/PhDs</a>
				</div>
				<div class="nav-link">
					<a role="menuitem" href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="nav-link-title">Funding</a>
					<span class="nav-link-desc">Browse our research degrees and PhDs by subject.</span>
					<a href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="faux-link-overlay" aria-hidden="true">Funding</a>
				</div>
			</nav>
		</div>
	</div>


	<div class="card card-overlay  m-t-0">
		<div class="card-body">
			<div class="card-title-wrap card-title-wrap-link pull-left">
				<a href="https://www.kent.ac.uk/research/" class="card-title-link"><h2 class="card-title">World-Leading research</h2></a>
				<p class="card-text">Kent is ranked 17th in the UK for research intensity. We have world-leading research in all subjects and 97% of our research is deemed to be of international quality.</p>
				<a href="https://www.kent.ac.uk/research/" class="faux-link-overlay" aria-hidden="true">World-Leading research</a>
			</div>

			<div class="card-media-wrap video-launcher" data-toggle="modal" data-src="https://youtu.be/H4tcJUQ1USw">

				<img src="/media/images/Ratio---16-9.jpg" class="card-img" alt="Dr Stephen Lowry holding a model of a comet">

				<div class="card-img-overlay-bottom text-right text-xs-right">
					<h3 class="card-subtitle">Interdisciplinary research at Kent</h3>
					<p class="card-text">Stronger collaboration, stronger research</p>
				</div>
			</div>


		</div>
		<div class="card-footer">
			<a href="https://www.kent.ac.uk/research/academics/index.html" class="chevron-link">Academic excellence</a>
			<a href="https://www.kent.ac.uk/research/impact/index.html" class="chevron-link">Research impact</a>
			<a href="https://www.kent.ac.uk/graduateschool/news/currentresearch.html" class="chevron-link">Current projects</a>
		</div>
	</div>


	<div class="card-panel m-t-4 m-b-5">

		<div class="card-panel-body">
			<div class="card card-linked">
				<a href="https://www.kent.ac.uk/courses/postgraduate/supervisor/index.html" class="card-title-link"><h3 class="card-title">Find a supervisor</h3></a>
				<p class="card-text">We provide research students with excellent supervision.</p>
				<a href="https://www.kent.ac.uk/courses/postgraduate/supervisor/index.html" class="faux-link-overlay" aria-hidden="true">Find a supervisor</a>
			</div>


			<div class="card card-linked">
				<a href="https://www.kent.ac.uk/courses/accommodation/postgraduates.html" class="card-title-link"><h3 class="card-title">Accommodation</h3></a>
				<p class="card-text"> A wide selection to suit all needs and budgets.</p>
				<a href="https://www.kent.ac.uk/courses/accommodation/postgraduates.html" class="faux-link-overlay" aria-hidden="true">Postgraduate accommodation</a>

			</div>


			<div class="card card-linked">
				<a href="https://www.kent.ac.uk/graduateschool/index.html" class="card-title-link"><h3 class="card-title">Graduate School</h3></a>
				<p class="card-text">Working to enhance your postgraduate experience.</p>
				<a href="https://www.kent.ac.uk/graduateschool/index.html" class="faux-link-overlay" aria-hidden="true">Graduate School</a>

			</div>


			<div class="card card-linked">
				<a href="https://www.kent.ac.uk/courses/postgraduate/international/" class="card-title-link"><h3 class="card-title">International students</h3></a>
				<p class="card-text">From visa advice to arrival, we'll support you all the way.</p>
				<a href="https://www.kent.ac.uk/courses/postgraduate/international/" class="faux-link-overlay" aria-hidden="true">International students</a>

			</div>

		</div>
	</div>


	<div class="card card-overlay  m-t-4 m-b-3">
		<div class="card-body">

			<div class="card-title-wrap card-title-wrap-link pull-left">
				<a href="https://www.kent.ac.uk/locations/index.html" class="card-title-link"><h2 class="card-title">Superb locations</h2></a>
				<p class="card-text">We have two stunning campuses and a part-time study centre in south-east England, plus four European centres in Paris, Brussels, Rome and Athens.</p>
				<a href="https://www.kent.ac.uk/locations/index.html" class="faux-link-overlay" aria-hidden="true">Superb locations</a>
			</div>

			<div class="card-media-wrap">
				<img src="../media/images/promo-park-16-9.jpg" class="card-img-bottom" alt="Sport" />

				<a class="card-img-overlay-bottom  text-xs-right" href="https://www.kent.ac.uk/courses/visit/">
					<h3 class="card-subtitle">Visit us</h3>
					<p class="card-text">Come and see for yourself.</p>
				</a>
			</div>
		</div>
		<div class="card-footer">
			<a href="https://www.kent.ac.uk/accommodation/" class="chevron-link">Accommodation and facilities</a>
			<a href="https://www.kent.ac.uk/courses/visit/openday/index.html" class="chevron-link">Open days</a>
			<a href="https://www.kent.ac.uk/courses/postgraduate/why/index.html" class="chevron-link">Why study at Kent? </a>
		</div>
	</div>


	<h2 class="sr-only">Facebook post</h2>
	<blockquote class="social-quote social-quote-twitter p-b-5">
		<a href="#">
			<button></button>
			<p>Congratulations Eske Van Gils, Christian Ottolini, Katinka Van De Ven and Eleanor Perry on the PG Research Prizes.</p>
		</a>
		<cite>
			<a href="#">@UniKentGradSch</a>
		</cite>
	</blockquote>


<?php KentThemeHelper::footer(); ?>