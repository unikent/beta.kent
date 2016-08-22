<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;

KentThemeHelper::header(
	array(
		'title' => "404",
		'menu' => array(),
		'meta' => array('title'=>'We cannot find your page - 404'),
		'slim'=>true,
		'brand_header'=>true,
		'main_class' =>'content-page'
	)
);
?>

<div class="card card-overlay header-card-overlay">
	<div class="card-body">
		<div class="card-media-wrap">
			<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
				<video autoplay="" loop="" class="embed-responsive-item">
					<source src="/media/video/compass.mp4">
				</video>
			</div>
		</div>
	</div>
</div>

<article class="content-page" itemscope itemtype="http://schema.org/Article">
	<header class="content-header">
		<h1 class="article-title" itemprop="name">Sorry, we're a bit lost</h1>

	</header>
	<section class="content-body">
		<div class="container m-b-2">
			We cannot find the page you're looking for. Check your link, search below or report a problem.
		</div>

		<div class="panel-tertiary">
			<div class="container-padded ">
				<form role="search" method="get" action="https://www.kent.ac.uk/search/" class="m-t-1">
					<div class="form-group">
						<label for="search" class="sr-only">Search</label>
						<div class="input-group input-group-lg">
							<input type="search" class="form-control" id="search" name="q" placeholder="Search by course, department. keyword... " autocomplete="off">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-accent btn-icon kf-search" aria-label="Search"><span class="sr-only">Search</span></button>
							</span>
						</div>
						<div class="inline-links text-xs-center text-sm-right">
							<a href="//www.kent.ac.uk/courses/undergraduate/search">Courses A-Z</a>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="card-panel card-panel panel-priamry m-b-2  m-t-2 p-b-3 p-t-0">

			<div class="card-panel-body">
				<div class="card">
					<a href="#"><h3 class="card-title che vron-link">UK's European university</h3></a>
					<p class="card-text">We rank amongst the best universities in the UK.</p>
				</div>
				<div class="card">
					<a href="#"><h3 class="card-title chevr on-link">Undergraduate</h3></a>
					<p class="card-text">Quality teaching with world-leading academics.</p>
				</div>
				<div class="card">
					<a href="#"><h3 class="card-title chevr on-link">Postgraduate</h3></a>
					<p class="card-text">Affordable programmes with leading researchers.</p>
				</div>
				<div class="card">
					<a href="#"><h3 class="card-title chevr on-link">Contact us</h3></a>
					<p class="card-text">Details to get in touch, or come <a href="#">visit us</a>.</p>
				</div>
			</div>














		</div>
	</section>
</article>
<?php
KentThemeHelper::pageFeedback('Last updated: <time class="content-modified" datetime="2015-12-5T23:59:59">5 December 2015</time> by <span class="content-modified-by">Corporate Communications</span>');
KentThemeHelper::footer();
?>
