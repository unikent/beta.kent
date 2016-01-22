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
						<h2 class="card-title">A leading research institution</h2>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
								<input type="search" class="form-control" id="course-search" placeholder="Search for postgraduate courses..." autocomplete="off">
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
			<div class="card-panel card-panel-tertiary nav-links-panel ">
				<div class="card-panel-body">
					<nav role="menu">
						<a href="//www.kent.ac.uk/courses/why/" role="menuitem">
							<span class="nav-link-title">Inspiring teaching</span>
							<span class="nav-link-desc">Excellent teaching with individual attention</span>
						</a>
						<a href="//www.kent.ac.uk/courses/undergraduate/" role="menuitem">
							<span class="nav-link-title">Undergraduate</span>
							<span class="nav-link-desc">Courses to prepare you for a successful future</span>
						</a>
						<a href="//www.kent.ac.uk/courses/postgraduate/" role="menuitem">
							<span class="nav-link-title">Postgraduate</span>
							<span class="nav-link-desc">Programmes supported by a stimulating support culture</span>
						</a>
						<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/" role="menuitem">
							<span class="nav-link-title">International</span>
							<span class="nav-link-desc">World-wide links in a supportive, cosmopolitan community</span>
						</a>
					</nav>
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

 			<script src='<?php KentThemeHelper::getThemeWebRoot(); ?>assets/js/quickspot.min.js'></script>
			<script>

					var qs = quickspot.attach({
						// Basic
						"url": "https://webtools-test.kent.ac.uk/programmes/api/current/undergraduate/programmes",
						"target":"course-search",
						"search_on": ["name", "award", "subject", "main_school", "ucas_code", "search_keywords"],
						"disable_occurrence_weighting": true,
						"screenreader": true,
						"results_container": "quickspot-results-container",
						"prevent_headers": true,

						// Extend
						"click_handler":function(itm){
						  
						  //Send em to page
						  document.location = '/courses/postgraduate/'+itm.id+'/'+itm.slug;
						},
						"display_handler": function(itm,qs){
							var locs = [itm.campus];
							if(itm.additional_locations!=="") {
									locs = locs.concat(itm.additional_locations.split(', '));
							}
							locs = (locs.length > 1)?[locs.slice(0, -1).join(', '), locs.slice(-1)[0]].join(' and '):locs[0];
								// Highlight searched word
							return (itm.name+' - '+itm.award+' <br> <span>' + locs + '</span>').replace(RegExp('('+qs.lastValue+')', 'i'), '<strong>$1</strong>'); //Do somthing useful like showing award once we have it.
						},
						"no_results": function (qs, val){
						  return "<a class='quickspot-result selected'>Press enter to search...</a>";
						},
						"no_results_click": function (value, qs){
							var url = "https://www.kent.ac.uk/search/courses?q=" + value;
							window.location.href = url;
						},
						
					});
			   </script>

		<?php KentThemeHelper::footer(); ?>


