<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;
KentThemeHelper::header(
	array(
		'title'=>"Research",
		'menu' => array(
			'Home' => 'research.php',
			'Research impact' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Academic excellence' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Kent people' => 'https://www.kent.ac.uk/courses/undergraduate/apply/how.html'
			),
		'meta' => array(
			'description'=>"Research",
			'title'=>"Research - University of Kent"
			),
		//'theme'=>'undergraduate',
		'beta_bar' => array(
			'about_url' => '/research'
			)
		)
	);
?>
<div class="card card-overlay header-card-overlay card-media-inline m-b-0 p-b-0">
	<div class="card-body">
		<div class="card-media-wrap ">
			<img class="card-img" src="/media/images/aging-man-16x9.jpg" alt="Aging man">
		</div>
		<div class="card-title-wrap">
			<h3 class="card-title">‘Outstanding achievement’ by researcher on ageing</h3>
			<p class="card-text">Research into how people feel and behave as they age</p>
		</div>
	</div>
</div>
<div class="card-panel  card-panel-tertiary nav-links-panel p-t-3 p-b-4 m-b-0">
	<div class="card-panel-body">
		<nav role="menu">
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/funding/undergraduate/" class="nav-link-title">Making a difference</a>
				<span class="nav-link-desc">Research impact in local and global communities.</span>
				<a href="//www.kent.ac.uk/courses/funding/undergraduate/" class="faux-link-overlay" aria-hidden="true">Fees and funding</a>
			</div>
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="nav-link-title">PhDs and Masters</a>
				<span class="nav-link-desc">Search our prospectus of postgraduate programmes.</span>
				<a href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="faux-link-overlay" aria-hidden="true">How to apply</a>
			</div>
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/visit/" class="nav-link-title">Kent experts</a>
				<span class="nav-link-desc">Learn more about our academic experts and their publications.</span>
				<a href="//www.kent.ac.uk/courses/visit/" class="faux-link-overlay" aria-hidden="true">Open days</a>
			</div>
			
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="nav-link-title">Enterprise at Kent</a>
				<span class="nav-link-desc">We work with businesses regionally, nationally and globally.</span>
				<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="faux-link-overlay" aria-hidden="true">Order a prospectus</a>
			</div>
			
		</nav>
	</div>
</div>
<img src="http://beta-test.kent.ac.uk/news-events.png" class="hidden-sm-down" style="margin:0 auto; width: 100%; display:block;">
<img src="http://beta-test.kent.ac.uk/news-events-mob.png" class="hidden-md-up" style="margin:0 auto; width: 100%; display:block;">
<div class="card-panel cards-linked m-t-5 m-b-5">
	<div class="card-panel-body">
		<div class="card">
			<a href="//www.kent.ac.uk/extra/index.html" class="card-title-link "><h3 class="card-title chevron-link chevron-link-accent">Career opportunities</h3></a>
			<p class="card-text">A dynamic working environment with ground-breaking research.</p>
			<a href="//www.kent.ac.uk/extra/index.html" class="faux-link-overlay" aria-hidden="true">Kent Extra</a>
		</div>
		<div class="card">
			<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">Publications</h3></a>
			<p class="card-text">Kent's academic staff are experts in their fields and widely published.</p>
			<a href="//www.kent.ac.uk/courses/undergraduate/profiles/index.html" class="faux-link-overlay" aria-hidden="true">What our students say</a>
		</div>
		<div class="card">
			<a href="//blogs.kent.ac.uk/kentstudents/" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">Research services</h3></a>
			<p class="card-text">Supporting our research community and advising on funding, ethics and the REF.</p>
			<a href="//blogs.kent.ac.uk/kentstudents/" class="faux-link-overlay" aria-hidden="true">The Kent Students blog</a>
		</div>
		<div class="card">
			<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="card-title-link"><h3 class="card-title chevron-link chevron-link-accent">The Graduate School</h3></a>
			<p class="card-text">Developing a vibrant postgraduate community at Kent.</p>
			<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/index.html" class="faux-link-overlay" aria-hidden="true">International students</a>
		</div>
	</div>
</div>
<div class="card-panel card-panel-profiles card-panel-tertiary card-panel-flush cards-flip">
	<div class="card card-linked card-double">
		<a href="#profiles" class="card-title-link"><h3 class="card-title">Academic excellence</h3></a>
		<p class="card-subtitle">Our community of academics are the pillars of our university. Learn more about some of the excellent people that make Kent.</p>
		<a href="#profiles" class="faux-link-overlay" aria-hidden="true">Staff Profiles</a>
	</div>
	<div class="kent-slider" data-slider-config="profile_feature">
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Professor Jenny Billings" src="/media/images/profiles/staff-jenny-billings.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Professor Jenny Billings</h3>
					<p class="card-subtitle">Professor of Applied Health Research</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/billings.html" class="faux-link-overlay" aria-hidden="true">View Profile for Professor Jenny Billings</a>
			</div>
			<div class="back">
				<p class="card-text">Professor Jenny Billings is an experienced researcher and lecturer in health and social care, with a background in nursing and health visiting.</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/billings.html">View Profile<span class="sr-only"> for Dr Ursular Fish</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Professor Darren Griffin" src="/media/images/profiles/staff-darren-griffin.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Professor Darren Griffin</h3>
					<p class="card-subtitle">Professor of Genetics</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/griffin.html" class="faux-link-overlay" aria-hidden="true">View Profile for Professor Darren Griffin</a>
			</div>
			<div class="back">
				<p class="card-text">Professor Griffin is a world leader in cytogenetics (the study of chromosomes).</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/griffin.html">View Profile<span class="sr-only"> for Professor Darren Griffin</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Professor Ayse K Uskul" src="/media/images/profiles/staff-Ayse-K-Uskul.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Professor Ayse K Uskul</h3>
					<p class="card-subtitle">Professor of Social Psychology</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/uskul.html" class="faux-link-overlay" aria-hidden="true">View Profile for Professor Ayse K Uskul</a>
			</div>
			<div class="back">
				<p class="card-text">Professor Ayse K Uskul’s primary research interests concern how different cultural settings shape social cognition, conceptions of self, and interpersonal relationships.</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/uskul.html">View Profile<span class="sr-only"> for Professor Ayse K Uskul</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Dr Richard Guest" src="/media/images/profiles/staff-richard-guest.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Dr Richard Guest</h3>
					<p class="card-subtitle">Senior Lecturer</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/guest.html" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Richard Guest</a>
			</div>
			<div class="back">
				<p class="card-text">Pioneering work conducted at Kent as part of a project known as SuperIdentity has been cited by the Government Chief Scientific Adviser (GCSA), Sir Mark Walport.</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/guest.html">View Profile<span class="sr-only"> for Dr Richard Guest</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Professor Gordon Lynch" src="/media/images/profiles/staff-gordon-lynch.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Professor Gordon Lynch</h3>
					<p class="card-subtitle">Michael Ramsey Professor of Modern Theology</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/lynch.html" class="faux-link-overlay" aria-hidden="true">View Profile for Professor Gordon Lynch</a>
			</div>
			<div class="back">
				<p class="card-text">A music project commissioned by Professor Gordon Lynch to accompany his exhibition on child migration has premiered as part of the Celtic Connections folk festival in Glasgow.</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/lynch.html">View Profile<span class="sr-only"> for Professor Gordon Lynch</span></a></p>
			</div>
		</div>
		<div class="card card-backed-primary card-linked">
			<div class="front">
				<img class="card-img" alt="Professor Robin Mackenzie" src="/media/images/profiles/staff-Robin-Mackenzie.jpg">
				<div class="card-img-overlay-bottom-shaded">
					<h3 class="card-title">Professor Robin Mackenzie</h3>
					<p class="card-subtitle">Director of Law and Medical Ethics</p>
				</div>
				<a href="https://www.kent.ac.uk/research/academics/profiles/mackenzie.html" class="faux-link-overlay" aria-hidden="true">View Profile for Professor Robin Mackenzie</a>
			</div>
			<div class="back">
				<p class="card-text">Professor Mackenzie attended the International Summit on Human Gene Editing, to discuss the scientific, ethical and governance issues associated with human gene editing research.</p>
				<p><a href="https://www.kent.ac.uk/research/academics/profiles/mackenzie.html">View Profile<span class="sr-only"> for Dr Professor Robin Mackenzie</span></a></p>
			</div>
		</div>
	</div>
</div>
<br /><br /><br />
<?php KentThemeHelper::footer(); ?>