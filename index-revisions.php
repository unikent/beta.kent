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
		'meta' => array('title'=>"University of Kent - The UK's European university"),
		'home_page' => true
	)
);
?>


<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
				<div class="card-body">

					<div class="kent-slider kent-slider-dark">
						<div class="kent-slide">
							<div class="card-media-wrap">
								<img class="card-img" src="/media/images/graduates-16x9.jpg">
							</div>
							<div class="card-title-wrap">
								<h3 class="card-title">Congratulations to our graduates</h3>
								<p class="card-text">A day to celebrate our success</p>
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


<style type="text/css">
.card .card-img-overlay-tinted {
    background-color: rgba(0, 0, 0, 0.4) !important;
}

.card-img-overlay-tinted .card-subtitle {
	margin-bottom: 1rem !important;
}

.card.card-overlay .card-media-wrap {
	max-height: 36rem;
}

@media (min-width: 1920px) {
	.card.card-overlay .card-media-wrap {
		min-height: 42rem;
	}
	.card.card-overlay .card-title-wrap .card-title {
		font-size: 3.6em;
	}
	.card-text {
		font-size: 1.8em;
	}
}

</style>


<!--
<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
	<div class="card-body">
		<div class="media-wrap-parallax" data-stellar-offset-parent="true" >
			<img  data-stellar-ratio="0.7" class="card-img" src="/media/images/graduates-16x9.jpg" alt="A student awaiting graduation">
		</div>
		<div class="card-title-wrap card-title-wrap-link card-transparent">
			<a href="http://beta.kent.ac.uk/news/kentlife/8503/kent-among-thes-top-100-most-international-universities-in-the-world-2016" class="card-title-link"><h2 class="card-title">Strong international outlook</h2></a>
			<p class="card-text">Kent is among the top 100 most international universities</p>
			<a class="faux-link-overlay" href="http://beta.kent.ac.uk/news/kentlife/8503/kent-among-thes-top-100-most-international-universities-in-the-world-2016" aria-hidden="true">Strong international outlook</a>
		</div>
	</div>
</div>


-->

<div class="panel-tertiary">
	<div class="container-padded" style="padding-top: 3rem; padding-bottom: 1rem">
		<form class="quickspot-container m-t-0 p-t-0">

			<!-- <h2 class="strap-line text-xs-center">A place to Inspire <span>/ An approach to challenge</span></h2> -->

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

<div class="card-panel  card-panel-tertiary nav-links-panel p-b-4 p-t-4 m-b-0 m-t-0" style="background-color:#fff;">
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
				<a role="menuitem" href="examples/postgraduate.php" class="nav-link-title">Postgraduate</a>
				<span class="nav-link-desc">Well-established programmes with leading researchers.</span>
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






<div class="card card-overlay m-t-0 p-t-0">
	<div class="card-body">

		<div class="card-title-wrap card-title-wrap-link pull-right">
			<a href="examples/student_experience.php" class="card-title-link"><h2 class="card-title">Superb student experience</h2></a>
			<p class="card-text">Our campuses provide stunning locations for your studies and offer first class academic and social facilities.</p>
			<a href="https://www.kent.ac.uk/courses/undergraduate/why/experience.html" class="faux-link-overlay" aria-hidden="true">Superb student experience</a>
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
				<p class="card-text">Find out more from our students</p>
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
			<p class="card-text">As one of the UK’s leading universities, our academic schools produce word-class research. We’re rated as internationally excellent, leading the way in many fields of study.</p>
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
			<p class="card-text ">Research into balancing conservation with local people</p>
			<a href="//www.kent.ac.uk/news/environment/4577/research-impact-designing-nature-reserve-networks" class="faux-link-overlay" aria-hidden="true">Designing nature reserve network</a>
		</div>

	</div>
	<div class="card-footer">
		<a href="//www.kent.ac.uk/research/impact/" class="chevron-link">Research impact</a>
		<a href="//www.kent.ac.uk/research/academics/index.html" class="chevron-link">Academic successes</a>
		<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html#!degrees" class="chevron-link">Research degrees</a>
	</div>
</div>




<div class="card-panel-profiles card-panel-tertiary card-panel-flush cards-flip">


	<div class="card card-linked card-backed-primary card-double" style="z-index:100;padding:0;">
			<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/06/AH4A6799-e1466761262295.jpg">
			<div class="card-img-overlay-bottom-shaded">
				<h3 class="card-title" id="dr-ursular-fish">University response to referendum result</h3>
				<p>Following the UK vote to leave the European Union, the University has reinforced its commitment to remain a European university and to continue to provide one of the best student experiences in the UK.</p>
			</div>
			<a href="#" class="faux-link-overlay" aria-hidden="true">Read more</a>
	</div>

	<!-- <div class="card card-linked card-double">
		<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/06/AH4A6799-e1466761262295.jpg">
		<a href="#profiles" class="card-title-link"><h3 class="card-title" id="staff-profiles">Staff Profiles</h3></a>
		<p class="card-subtitle">these are some staff profiles, they are all great people...mostly! Blah blah blah ldkfjgldkf lkjdfkjgdf dflgdfllkdf dflkdfl fgldf ldfhg ldhf dflkghdlfg</p>
		<a href="#profiles" class="faux-link-overlay" aria-hidden="true">Staff Profiles</a>
	</div> -->


	<div class="kent-slider" data-slider-config="profile_feature">
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/07/14440817981_f06a3fe749_k-e1469102045791.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="dr-ursular-fish">Bioscientists win international prize for Ebola research</h3>
				</div>
				<a href="#" class="faux-link-overlay" aria-hidden="true">Read more</a>
			</div>
			<div class="back">
				<p class="card-text">A team led by bioscientists from the University has won the international Fight Against Ebola Award for research that identified new insights into the way the deadly virus works.</p>
				<p><a href="#">View Profile<span class="sr-only"> for Dr Ursular Fish</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/07/BA-Front-1-e1469617568845.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="dr-victor-crow">Academic appointed to key British Academy role</h3>
					<!-- <p class="card-subtitle">Lecturer in Human Flight</p> -->
				</div>
				<a href="#" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Victor Crow</a>
			</div>
			<div class="back">
				<p class="card-text">Integer euismod, mauris quis maximus egestas, elit nibh maximus justo, et elementum tortor erat in odio. Donec ut vehicula velit.</p>
				<p><a href="#">View Profile<span class="sr-only"> for Dr Victor Crow</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/05/Paralympic-athlete-photo-from-Army-Medicine-e1463572606775.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="dr-veronica-ferret">Guide to change perception of disability at Paralympics</h3>
					<!-- <p class="card-subtitle">Senior Lecturer in Espionage</p> -->
				</div>
				<a href="#" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Veronica Ferret</a>
			</div>
			<div class="back">
				<p class="card-text">Integer euismod, mauris quis maximus egestas, elit nibh maximus justo, et elementum tortor erat in odio. Donec ut vehicula velit.</p>
				<p><a href="#">View Profile<span class="sr-only"> for Dr Veronica Ferret</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/02/3203303992_ac98d22631_o-e1456324032369.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="prof-mark-porpoise">Conservatives prefer using nouns, psychologists find</h3>
					<!-- <p class="card-subtitle">Senior Lecturer in Pseudo Science</p> -->
				</div>
				<a href="#" class="faux-link-overlay" aria-hidden="true">View Profile for Prof Mark Porpoise</a>
			</div>
			<div class="back">
				<p class="card-text">Integer euismod, mauris quis maximus egestas, elit nibh maximus justo, et elementum tortor erat in odio. Donec ut vehicula velit.</p>
				<p><a href="#">View Profile<span class="sr-only"> for Prof Mark Porpoise</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2016/05/CITYCO1-e1469546764644.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="dr-nicholas-badger">Public invited to view concept master plan exhibition</h3>
					<!-- <p class="card-subtitle">Lecturer in Forestry</p> -->
				</div>
				<a href="#" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Nicholas Badger</a>
			</div>
			<div class="back">
				<p class="card-text">Integer euismod, mauris quis maximus egestas, elit nibh maximus justo, et elementum tortor erat in odio. Donec ut vehicula velit.</p>
				<p><a href="#">View Profile<span class="sr-only"> for Dr Nicholas Badger</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" src="https://static.kent.ac.uk/media/news/2014/12/11856051526_c5b5ac54fe_k-e1418381854979.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title" id="dr-ping-pong">Chickens ‘closer to dinosaurs’ than other birds</h3>
					<!-- <p class="card-subtitle">Senior Lecturer in Astrofrench</p> -->
				</div>
				<a href="#pingpong" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Ping Pong</a>
			</div>
			<div class="back">
				<p class="card-text">Ping Pong is a dolphin, and as we all know dolphins are smart! Pingpong is fluent in all dialects of Astrofrench and is considered a world expert!</p>
				<p><a href="#pingpong">View Profile<span class="sr-only"> for Dr Ping Pong</span></a></p>
			</div>
		</div>
	</div>
</div>
<style>
.card.card-backed-primary {
	background-color:#fff;
}
.front {
	/*margin-left:5px;
	margin-bottom:5px;*/
}



h3.card-title {
	font-size: 1em !important;
	/*background-color: #05345C;
opacity: 0.8;*/
padding: 1em 1em 1em 1em;
margin: 0;
/*font-family: ArialLight, 'Helvetica Neue', Helvetica, Arial, sans-serif !important;*/
}

.card-panel-profiles.card-panel-flush .card-double .card-title, .card-panel-profiles .card-double .card-title {
	color:#CE9716;
	font-family: CenturySchoolbookStdRegular, Georgia, 'Times New Roman', Times, serif !important;
}

.card .card-img-overlay-bottom-shaded {
	/*background: none;*/
	padding: 0 50px 0 0 !important;
}

.card-img-overlay-bottom-shaded p {
color: #fff;
font-size: 1em !important;
/*background-color: #05345C;*/
/*opacity: 0.8;*/
padding: 1em 1em 1em 1em;
margin: 0;
}
</style>




<h2 class="sr-only">Alumni quote</h2>
<blockquote class="m-b-5 m-t-2">
	<img src="/media/images/profile-khalida-durrani.jpg" class="img-circle" alt="Khalida Durrani">
	<p>My course is made up of a diverse group of students, so I've met people from all over the world.</p>
	<cite>
		Khalida Durrani,
		<span>MSc Financial Markets</span>
		<a class="chevron-link" href="//www.kent.ac.uk/courses/postgraduate/profiles/financial-markets.html">View Khalida's profile</a>
	</cite>
</blockquote>


<!--
<div class="card card-overlay card-media-inline p-b-3">

	<div class="card-body">
		<div class="card-title-wrap card-title-wrap-link pull-right">
			<a href="//www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="card-title-link"><h2 class="card-title">Thinkers with global impact</h2></a>
			<p class="card-text">Think Kent is a series of short, inspiring lectures showing our world-changing research.</p>
			<a href="//www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="faux-link-overlay" aria-hidden="true">Thinkers with global impact</a>
		</div>

		<div class="card-media-wrap video-launcher" data-mode="fullscreen">
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
-->

<?php KentThemeHelper::footer(); ?>
