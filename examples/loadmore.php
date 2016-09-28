<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;

KentThemeHelper::header(
	array(
		'title' => "Kent Theme Demo",
		'title_link' => HOME_URL . '/examples',
		'menu' => array(
			'Home' => '#',
			'Culture' => '#',
			'Environment' => '#',
			'Science' => '#',
			'Society' => '#',
			'Kent Life' => '#'
		),
		'meta' => array('title'=>'Demo Page - Kent Theme Beta')
	)
);
?>

<div class="card-panel card-panel-tertiary" data-loadmore="blogs" data-blog="webdev">
	<div class="card-panel-header">
		<h2 class="card-panel-title">Blogs test</h2>
	</div>
	<div class="card-panel-body loadmore-container">
		<div class="card">
			<img class="card-img" src="../media/images/promo-1.jpg">
			<h3 class="card-title">Academic excellence</h3>
			<p class="card-meta">1st September 2015</p>
			<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
			<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
		</div>
		<div class="card">
			<img class="card-img" src="../media/images/promo-2.jpg">
			<h3 class="card-title">Undergraduates</h3>
			<p class="card-meta">28th March 2015</p>
			<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
		</div>
		<div class="card">
			<img class="card-img" src="../media/images/promo-3.jpg">
			<h3 class="card-title">Postgraduates</h3>
			<p class="card-meta">5th November 2015</p>
			<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
		</div>
		<div class="card">
			<img class="card-img" src="../media/images/promo-4.jpg">
			<h3 class="card-title">Visit Kent</h3>
			<p class="card-meta">17th May 2015</p>
			<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
		</div>
	</div>
	<div class="card-panel-footer">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<button class="btn btn-primary-outline btn-block btn-lg loadmore-btn">Load more <i hidden class="loadmore-loader kf-spinner kf-spin"></i></button>
			</div>
		</div>
	</div>
</div>

	<div class="card-panel card-panel-secondary" data-loadmore="news">
		<div class="card-panel-header">
			<h2 class="card-panel-title">News test</h2>
		</div>
		<div class="card-panel-body loadmore-container">
			<div class="card">
				<img class="card-img" src="../media/images/promo-1.jpg">
				<h3 class="card-title">Academic excellence</h3>
				<p class="card-meta">1st September 2015</p>
				<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
				<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-2.jpg">
				<h3 class="card-title">Undergraduates</h3>
				<p class="card-meta">28th March 2015</p>
				<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-3.jpg">
				<h3 class="card-title">Postgraduates</h3>
				<p class="card-meta">5th November 2015</p>
				<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-4.jpg">
				<h3 class="card-title">Visit Kent</h3>
				<p class="card-meta">17th May 2015</p>
				<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
			</div>
		</div>
		<div class="card-panel-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<button class="btn btn-primary-outline btn-block btn-lg loadmore-btn">Load more <i hidden class="loadmore-loader kf-spinner kf-spin"></i></button>
				</div>
			</div>
		</div>
	</div>

	<div class="card-panel card-panel-primary cards-backed" data-loadmore="events" data-calendar="careers" data-loadmore-page-size="8" data-loadmore-preload="true">
		<div class="card-panel-header">
			<h2 class="card-panel-title">Events test</h2>
		</div>
		<div class="card-panel-body loadmore-container">
		</div>
		<div class="card-panel-footer">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<button class="btn btn-secondary btn-block btn-lg loadmore-btn">Load more <i hidden class="loadmore-loader kf-spinner kf-spin"></i></button>
				</div>
			</div>
		</div>
	</div>
<?php KentThemeHelper::footer(); ?>