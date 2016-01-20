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

			<div class="card card-overlay header-card-overlay">
				<div class="card-body">
					<div class="media-wrap-paralax" data-stellar-offset-parent="true" >
						<img  data-stellar-ratio="0.7" class="card-img-bottom" src="https://s3-eu-west-1.amazonaws.com/uploads-eu.hipchat.com/30492/320008/GqNhylktkPikX0l/world-4x3.jpg">
					</div>
					<div class="card-title-wrap card-title-wrap-link card-transparent">
						<h2 class="card-title">A leading research institution</h2>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					</div>

				</div>
			</div>


		

			
			<div class="card-panel">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Standard Card Panel</h2>
				</div>
				<div class="card-panel-body">
					<div class="card">
						<img class="card-img" src="images/promo-1.jpg">
						<h3 class="card-title">Academic excellence</h3>
						<p class="card-meta">1st September 2015</p>
						<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
						<a href="#" class="card-badge kf-comment">5</a>
					</div>
					<div class="card">
						<img class="card-img" src="images/promo-2.jpg">
						<h3 class="card-title">Undergraduates</h3>
						<p class="card-meta">28th March 2015</p>
						<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
						<a href="#" class="card-badge kf-comment">7</a>
					</div>
					<div class="card">
						<img class="card-img" src="images/promo-3.jpg">
						<h3 class="card-title">Postgraduates</h3>
						<p class="card-meta">5th November 2015</p>
						<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
						<a href="#" class="card-badge kf-comment">1</a>
					</div>
					<div class="card">
						<img class="card-img" src="images/promo-4.jpg">
						<h3 class="card-title">Visit Kent</h3>
						<p class="card-meta">17th May 2015</p>
						<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
						<a href="#" class="card-badge kf-comment">23</a>
					</div>
				</div>
			</div>



		<?php KentThemeHelper::footer(); ?>


