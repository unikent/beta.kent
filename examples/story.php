<?php
	include dirname(dirname(__FILE__))."/bootstrap.php";
	use \unikent\kent_theme\kentThemeHelper;

	KentThemeHelper::header(
		array(
			'title' => "Kent Theme Demo - Story",
			'title_link' => HOME_URL . '/examples',
			'menu' => array(
				'Home' => '#',
				'Culture' => '#',
				'Environment' => '#',
				'Science' => '#',
				'Society' => '#',
				'Kent Life' => '#'
			),
			'meta' => array('title'=>'Story Demo Page - Kent Theme Beta'),
			'slim'=>true,
			'brand_header'=>true,
			'breadcrumb'=> false,
			'main_class' =>'content-page'
		)
	);
?>
<div class="card card-overlay header-card-overlay">
	<div class="card-body">
		<div class="card-media-wrap">
			<img class="card-img" src="../media/images/story-ping-pong.jpg">
			<div class="card-img-overlay-bottom card-img-overlay-link">
				<div class="attribution">
					<i class="kf-camera"></i>
					<span>Political Studies Association: Picture by <a href="#">Someone</a>. <a href="#">Attribution License</a></span>
				</div>
			</div>
		</div>
	</div>
	<div class="card-footer">
		<p class="caption">Ping Pong the dolphin</p>
	</div>
</div>
<div class="content-header">
<?php
	KentThemeHelper::breadcrumb(array(
									'News Centre'=> '/news',
								));
?>
</div>
<article itemscope itemtype="http://schema.org/Article">
	<header class="content-header content-header-with-social">
		<h1 class="article-title" itemprop="name">Center strengthened by consultant appointment</h1>
		<div class="byline">
			<img class="author-avatar" src="../media/images/story-author.jpg">
			<address class="article-author">By <a rel="author" href="#">Wendy Raeside</a></address>
			<time class="article-published pubdate" pubdate datetime="2015-12-1T12:01:01">12 December 2015</time>
		</div>
		<nav class="content-social content-social-head">
			<a title="twitter" href="#" class="kf-twitter"><span class="sr-only">Share on Twitter</span></a>
			<a title="facebook" href="#" class="kf-facebook"><span class="sr-only">Share on Facebook</span></a>
		</nav>
	</header>
	<section class="content-body">
		<div class="content-container">
			<div class="content-main">
				<p class="lead">
					A leading consultant in renal medicine is joining the University's Centre for Health Services Studies (CHSS) in a new post as Clinical.
				</p>

				<p>She argues that ‘While its absolute influence may have diminished as <a href="#">Beijing’s money arrives</a>, Europe continues to enjoy a premium position, and deeper ties which may hold greater reward in the future’.</p>

				<blockquote>
					<img class="img-circle" src="../media/images/profile-academic.jpg">
					<p>It was I who ate all the pies! And I would have gotten away with it too, if it weren't for you meddling kids.</p>
					<cite>
						Dr David Hume,
						<span>School of Astrofrench and Other stuff</span>
					</cite>
				</blockquote>

				<p>Using statistical models, Professor Griffiths’ team from the School of Anthropology and Conservation determined the combination of survey visits and methods needed to obtain reliable data on population status. This resolved a long-standing debate within the fields of conservation and ecology and has made surveys significantly more cost-effective and reliable.</p>

				<figure class="full-width">
					<div class="media-wrap-letterbox">
						<img src="../media/images/story-swimmers.jpg">
						<div class="attribution">
							<i class="kf-camera"></i>
							<span>Political Studies Association: Picture by <a href="#">Someone</a>. <a href="#">Attribution License</a></span>
						</div>
					</div>
					<figcaption>Students enjoying diving course</figcaption>
				</figure>

				<p>The protocols are being adopted <a href="#">into policy guidance</a> in England, Wales and Scotland and will help to improve the management and conservation of important amphibian and reptile species.</p>
			</div>
			<aside class="content-aside">
				<nav>
					<h3>See also</h3>
					<ul>
						<li><a href="#">Dr. Michael Fish</a></li>
						<li><a href="#">DICE</a></li>
						<li><a href="#">Professor Stephan Peckham</a></li>
					</ul>
				</nav>
				<nav>
					<h3>In the media</h3>
					<ul>
						<li>
							<a href="#">Squeek! Dolphins deciphered</a>
							<span>Guardian</span>
						</li>
						<li>
							<a href="#">Dolphin Sandwiches</a>
							<span>Sydney Morning Herald</span>
						</li>
					</ul>
				</nav>
				<div>
					<h3>Follow us</h3>
					<a title="twitter" href="https://twitter.com/unikentnews" class="social-link"><i class="kf-twitter"></i> @unikentnews</a>

				</div>
			</aside>
		</div>

		<div class="content-container">
			<div class="content-main">
				<h2>Surveys of amphibians and reptiles</h2>

				<p>Together with Billy Childish, Charles Thomson founded the movement in 1999 in an attempt to revive the fortunes of contemporary figurative painting.  The show, co-curated by the Studio 3 Gallery MA Curating group in collaboration with Charles Thomson, demonstrates the now-global reach of the movement and includes works by Thomson, Ella Guru, Joe Machine, Jaroslav Valecka and Black Francis (frontman of The Pixies).  It is the School’s 20th exhibition since opening in 2010.</p>
				<figure class="figure-right">
						<div class="media-wrap">
							<img src="../media/images/story-starfish.jpg">
							<div class="attribution">
								<i class="kf-camera"></i>
								<span>Political Studies Association: Picture by <a href="#">Someone</a>. <a href="#">Attribution License</a></span>
							</div>
						</div>
						<figcaption>Patrick</figcaption>
				</figure>
				<p>Stuckism has become a truly international art movement, with affiliated groups spanning Buenos Aires to Beijing. But Stuckism still retains deep regional affiliations with the North Kent and Medway areas from which many of the founding Stuckists originated.</p>
				<p>This research event is held in partnership between the Art History & Visual Cultures Research Centre and Studio 3 Gallery.</p>
				<p>This event is free and all are welcome but booking  is encouraged due to limited space.</p>
				<div class="panel panel-tertiary">
					<p>At the end of October 2015 we had our second hackathon for Information Services. In an attempt to target a wider audience and get more non-techies involved we renamed the event “Innovation Splash”.</p>
				</div>
				<p>The event was held over 2 working days, we had a total of 5 teams take part who tackled various problems facing the institution and gave 10 minute lightening talks on their prototypes at the end of the second day.</p>
				<p>This blog post aims to give a quick run down of each of the teams ideas. Just to show off some of the cool stuff our colleagues produced in such a short amount of time.</p>
				<p>Tests on 461 cancer cell lines revealed that neuroblastoma – the most common solid cancer occurring outside the brain in children and a major cause of death during infancy – was highly sensitive to flubendazole.</p>
				<p>Flubendazole was also found to reduce the viability of five primary neuroblastoma samples in concentrations thought to be achievable in humans. It inhibited vessel formation and neuroblastoma tumour growth in a tumour model in fertilised chicken eggs.</p>
				<p>Acquired resistance to various anti-cancer drugs is a major problem in high-risk neuroblastoma. The researchers found that 119 cell lines from a panel of 140 neuroblastoma cell lines with acquired resistance to various anti-cancer drugs were sensitive to flubendazole in low concentrations.</p>
			</div>
		</div>

		<figure>
			<div class="media-wrap-letterbox">
				<img src="../media/images/story-swimmers.jpg">
				<div class="attribution">
					<i class="kf-camera"></i>
					<span>Political Studies Association: Picture by <a href="#">Someone</a>. <a href="#">Attribution License</a></span>
				</div>
			</div>
			<figcaption>Students enjoying diving course</figcaption>
		</figure>

		<div class="content-container">
			<div class="content-main">
				<p>Contractor ES Global was then appointed to develop the design, with the help of KSA specialists including its digital workshop team, who produced 3D images to perfect the joints of the new structure. The complex engineering of the structure led to it being featured at the Future Visions conference on Shell and Spatial structures in Amsterdam in August 2015.</p>
				<p>Assembly of the structure took less than one week on site. The result , according to Don Gray, is ‘a truly ground-breaking adventure in high-technology assembly, the use of new materials and advanced structural engineering.’</p>
			</div>
		</div>

	</section>

	<footer class="content-footer">
		<div class="content-container">
			<div class="content-main">
				<nav class="content-tags">
					<a class="content-tag btn btn-label">Culture</a>
					<a class="content-tag btn btn-label">Environment</a>
				</nav>
				<nav class="content-social content-social-colored">
					<a title="twitter" href="#" class="kf-twitter"><span class="sr-only">Share on Twitter</span></a>
					<a title="facebook" href="#" class="kf-facebook"><span class="sr-only">Share on Facebook</span></a>
					<a title="instagram" href="#" class="kf-instagram"><span class="sr-only">Share on Instagram</span></a>
					<a title="pinterest" href="#" class="kf-pinterest"><span class="sr-only">Share on Pinterest</span></a>
					<a title="linkedin" href="#" class="kf-linkedin"><span class="sr-only">Share on Linkedin</span></a>
					<a title="google-plus" href="#" class="kf-google-plus"><span class="sr-only">Share on Google+</span></a>
					<a title="tumblr" href="#" class="kf-tumblr"><span class="sr-only">Share on Tumblr</span></a>
					<a title="flickr" href="#" class="kf-flickr"><span class="sr-only">Share on Flickr</span></a>
					<a title="email" href="#" class="kf-email-o"><span class="sr-only">Share on Email</span></a>
				</nav>
			</div>
		</div>
	</footer>

</article>
<aside>
	<div class="card-panel card-panel-primary cards-backed m-b-0">
		<div class="card-panel-header">
			<h2 class="card-panel-title">You might also like</h2>
		</div>
		<div class="card-panel-body">
			<div class="card">
				<img class="card-img" src="../media/images/promo-1.jpg">
				<h3 class="card-title">Academic excellence</h3>
				<p class="card-meta">1 September 2015</p>
				<a href="#" class="card-badge kf-comment">5</a>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-2.jpg">
				<h3 class="card-title">Undergraduates</h3>
				<p class="card-meta">28 March 2015</p>
				<a href="#" class="card-badge kf-comment">7</a>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-3.jpg">
				<h3 class="card-title">Postgraduates</h3>
				<p class="card-meta">5 November 2015</p>
				<a href="#" class="card-badge kf-comment">1</a>
			</div>
			<div class="card">
				<img class="card-img" src="../media/images/promo-4.jpg">
				<h3 class="card-title">Visit Kent</h3>
				<p class="card-meta">17 May 2015</p>
				<a href="#" class="card-badge kf-comment">23</a>
			</div>
		</div>
	</div>
</aside>
<?php
KentThemeHelper::pageFeedback('Last updated: <time class="content-modified" datetime="2015-12-5T23:59:59">5 December 2015</time> by <span class="content-modified-by">Corporate Communications</span>');
KentThemeHelper::footer();
?>
