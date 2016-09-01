<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;
KentThemeHelper::header(
	array(
		'title'=>"Enterprise projects",
		'menu' => array(
			'Home' => 'research.php',
			'Research impact' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Academic excellence' => 'https://www.kent.ac.uk/courses/undergraduate/search',
			'Kent people' => 'https://www.kent.ac.uk/courses/undergraduate/apply/how.html'
			),
		'meta' => array(
			'description'=>"Enterprise",
			'title'=>"Enterprise - University of Kent"
			),
		//'theme'=>'undergraduate',
		'beta_bar' => array(
			'about_url' => '/enterprise'
			)
		)
	);
?>
<div class="card card-overlay header-card-overlay card-media-inline m-b-0 p-b-0">
	<div class="card-body">
		<div class="card-media-wrap ">
			<img class="card-img" src="/media/images/shop-16x9.jpg" alt="Man writing on a whiteboard">
		</div>
		<div class="card-title-wrap">
			<h3 class="card-title">Kent partners with independent businesses</h3>
			<p class="card-text">Support services boosts local businesses</p>
		</div>
	</div>
</div>
<div class="card-panel  card-panel-tertiary nav-links-panel p-t-3 p-b-4 m-b-0">
	<div class="card-panel-body">
		<nav role="menu">
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/funding/undergraduate/" class="nav-link-title">Practical partnering</a>
				<span class="nav-link-desc">A range of applied services designed to meet real business needs.</span>
				<a href="//www.kent.ac.uk/courses/funding/undergraduate/" class="faux-link-overlay" aria-hidden="true">Fees and funding</a>
			</div>
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="nav-link-title">Sectors and expertise</a>
				<span class="nav-link-desc">We collaborate with SMEs to multinationals, and network within key industry sectors.</span>
				<a href="//www.kent.ac.uk/scholarships/postgraduate/index.html" class="faux-link-overlay" aria-hidden="true">How to apply</a>
			</div>
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/visit/" class="nav-link-title">Student entrepreneurship</a>
				<span class="nav-link-desc">Student Enterprise to support entrepreneurial ideas.</span>
				<a href="//www.kent.ac.uk/courses/visit/" class="faux-link-overlay" aria-hidden="true">Open days</a>
			</div>
			
			<div class="nav-link">
				<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="nav-link-title">Funding opportunities</a>
				<span class="nav-link-desc">Highly competitive funding schemes.</span>
				<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html" class="faux-link-overlay" aria-hidden="true">Order a prospectus</a>
			</div>
			
		</nav>
	</div>
</div>
<!--
<img src="http://beta-test.kent.ac.uk/news-events.png" class="hidden-sm-down" style="margin:0 auto; width: 100%; display:block;">
<img src="http://beta-test.kent.ac.uk/news-events-mob.png" class="hidden-md-up" style="margin:0 auto; width: 100%; display:block;">
-->
<div class="card card-overlay  m-t-0">
	<div class="card-body">
		<div class="card-title-wrap card-title-wrap-link pull-left">
			<a href="https://www.kent.ac.uk/research/" class="card-title-link"><h2 class="card-title">HUB FOR INNOVATION &amp; ENTERPRISE</h2></a>
			<p class="card-text">HIVE is the University of Kent's dedicated hub for student entrepreneurship, start-up support and incubation.</p>
			<a href="https://www.kent.ac.uk/research/" class="faux-link-overlay" aria-hidden="true">World-Leading research</a>
		</div>
		<div class="card-media-wrap video-launcher" data-toggle="modal" data-src="https://youtu.be/H4tcJUQ1USw">
			<img src="/media/images/entrepreneur-16x9.jpg" class="card-img" alt="A student filming on a video camera">
			<div class="card-img-overlay-bottom text-right text-xs-right">
				<h3 class="card-subtitle">Student start-up</h3>
				<p class="card-text">New app supports regional tourism</p>
			</div>
		</div>
	</div>
	
</div>
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
<div class="card card-overlay editorial editorial-seondary m-t-0 p-t-0">
	<div class="card-body">
		<div class="card-title-wrap">
			<h2 class="card-title">Business at Kent</h2>
			<p class="card-text">A great place to work and a great place to live. Find out why so many undergraduates choose to study at Kent.</p>
			<h3><a href="https://www.kent.ac.uk/kbs/courses/mba/index.html" class="chevron-link">The Kent MBA</a></h3>
			<p class="card-text">The AMBA-accredited Kent MBA aims to transform you into a responsible business leader.</p>
			<h3><a href="//www.kent.ac.uk/locations" class="chevron-link">Conferences and functions</a></h3>
			<p class="card-text">We have two stunning campuses and a part-time study centre in Kent, plus four study centres acrsoss Europe.</p>
			<h3><a href="//www.kent.ac.uk/accommodation" class="chevron-link">Accommodation</a></h3>
			<p class="card-text">Take a look around our range of undergraduate accommodation.</p>
		</div>
		<div class="card-media-wrap">
			<img class="card-img-bottom" src="/media/images/stocky-students-16x9.jpg" alt="Students having a discussion in a class">
		</div>
	</div>
	
</div>
<br /><br /><br />
<?php KentThemeHelper::footer(); ?>