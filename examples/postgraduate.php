<?php
		include dirname(dirname(__FILE__))."/bootstrap.php";
		use \unikent\kent_theme\kentThemeHelper;

			   KentThemeHelper::header(
					   array(
							   'title'=>"Postgraduate Courses",
							   'menu' => array(
									  'Home' => '#',
									  'Find a supervisor' => '#',
									  'Types of degrees' => '#',
									  'Fees and funding' => '#',
									  'Student profiles' => '#',
									  'Why study at Kent?' => '#',
									  'International students' => '#	',
									  'How to apply' => '#',
									  'Entry requirements' => '#'
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
									




									<div class="card-img-overlay-bottom card-overlay-inline-xs card-overlay-inline-nopad">
											


					<form class="quickspot-container" >

						<!--
						<h2 style="position: relative; top: -7rem" class="strap-line text-xs-center">With passion and focus <span>/ You can achieve anything</span></h2>
					-->

												 <div class="form-group" style="position: relative; top: -1rem">
													 <label for="search" class="sr-only">Search</label>
													 <div class="input-group input-group-lg">
														<input  type="search" class="form-control" id="course-search" placeholder="Search our postgraduate programmes and supervisors..." autocomplete="off" data-quickspot-config="pg_courses" data-quickspot-target="quickspot-results-container">
														<span class="input-group-btn">
															<button type="submit" class="btn btn-accent btn-icon"><span class="kf-fw kf-search"></span></button>
														</span>
													</div>
												</div>
												<div id="quickspot-results-container" class="quickspot-contained">								
												</div>
											</form>
									</div>

							   </div>
					   </div>






<!--
<div class="card card-overlay header-card-overlay m-b-0 p-b-0">
							   
							   <div class="card-body">
					
					<div class="card-media-wrap">
						<img class="card-img" src="/media/images/student-filming-3-16x9.jpg">
					</div>

	
				<div class="card-title-wrap card-title-wrap-link">
						<h2 class="card-title">World-leading research</h2>
						<p class="card-text">We are ranked 17th in the UK for Research Intensity. </p>
					</div>

				</div>

	   </div>

-->


<!--
		<div class="panel panel-tertiary">
				<div class="container-padded ">
					<form class="quickspot-container m-t-3">


						 <div class="form-group">
							 <label for="search" class="sr-only">Search</label>
							 <div class="input-group input-group-lg">
								<input type="search" class="form-control" id="course-search" placeholder="Search for postgraduate programmes..." autocomplete="off" data-quickspot-config="ug_courses" data-quickspot-target="quickspot-results-container">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon"><span class="kf-fw kf-search"></span></button>
								</span>
							</div>
						</div>
						<div id="quickspot-results-container">
							
						</div>
						<div class="inline-links text-xs-center text-sm-right">
							<a href="http://www.kent.ac.uk/courses/undergraduate/search" >Courses A-Z</a>
							<a href="http://www.kent.ac.uk/courses/undergraduate/prospectus/index.html" >Order a prospectus</a>
						</div>
					</form>
				</div>
			</div>

-->

			<div class="card-panel card-panel-tertiary nav-links-panel p-t-5 p-b-5 m-b-0">
				<div class="card-panel-body">
					<nav role="menu">
						<a href="https://www.kent.ac.uk/courses/postgraduate/apply/" role="menuitem">
							<span class="nav-link-title">How to apply</span>
							<span class="nav-link-desc">Our supportive staff will help you throughout the process</span>
						</a>
						<a href="https://www.kent.ac.uk/courses/postgraduate/types/taught.html" role="menuitem">
							<span class="nav-link-title">Master's/Taught</span>
							<span class="nav-link-desc">A structured programme of study made up of modules 
</span>
						</a>
						<a href="https://www.kent.ac.uk/courses/postgraduate/types/research.html" role="menuitem">
							<span class="nav-link-title">Research/PhDs</span>
							<span class="nav-link-desc">Browse our research degrees and PhDs by subject</span>
						</a>
						<a href="https://www.kent.ac.uk/scholarships/postgraduate/index.html" role="menuitem">
							<span class="nav-link-title">Funding</span>
							<span class="nav-link-desc">Browse our research degrees and PhDs by subject</span>
						</a>
						
					</nav>
				</div>
			</div>











					 

					   <div class="card card-overlay  m-t-0">
							   <div class="card-body">
									<a href="https://www.kent.ac.uk/research/">
									  <div class="card-title-wrap card-title-wrap-link pull-left">
											  <h2 class="card-title">World-Leading research</h2>
											  <p class="card-text">Kent is ranked 17th in the UK for research intensity. We have world-leading research in all subjects and 97% of our research is deemed to be of international quality.</p>
									  </div>
									 </a>
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
									  <a class="card" href="https://www.kent.ac.uk/courses/postgraduate/supervisor/index.html">
											  <img class="card-img" src="/media/images/placeholder-3x2.jpg">
											  <h3 class="card-title">Find a supervisor</h3>
											  <p class="card-text">We provide research students with excellent supervision.</p>
											  </a>


											  <a class="card" href="https://www-test.kent.ac.uk/courses/accommodation/postgraduates.html ">
											  <img class="card-img" src="/media/images/placeholder-3x2.jpg">
											  <h3 class="card-title">Accommodation</h3>
											  <p class="card-text"> A wide selection to suit all needs and budgets.</p>
									  </a>


									  <a class="card" href="https://www.kent.ac.uk/graduateschool/index.html">
											  <img class="card-img" src="/media/images/placeholder-3x2.jpg">
											  <h3 class="card-title">Graduate School</h3>
											  <p class="card-text">Working to enhance your postgraduate experience.</p>
									  </a>
									  
									  
									  	  <a class="card" href="https://www.kent.ac.uk/courses/postgraduate/international/">
											  <img class="card-img" src="../media/images/international.jpg">
											  <h3 class="card-title">International students</h3>
											  <p class="card-text">From visa advice to arrival, we'll support you through the whole process.</p>
									  </a>
										


									  
							   </div>
					   </div>


<!--



			<div class="card card-overlay p-b-3">
				<div class="card-body">
					<a href="http://www.kent.ac.uk/news/kentlife/8331/food-for-thought-over-the-holiday-season-think-kent" class="card-title-wrap card-title-wrap-link pull-right">
						<h2 class="card-title">Thinkers with global impact</h2>
						<p class="card-text">Think Kent is a series of short, inspiring lectures showing our world-changing research.</p>
					</a>
					<div data-src="https://youtu.be/H4tcJUQ1USw" class="card-media-wrap video-launcher">
						<img src="/media/images/thinkkent-16x9.jpg" class="card-img" alt="Dr Stephen Lowry holding a model of a comet">
					</div>

					<div class="card-img-overlay-bottom">
						<h3 class="card-subtitle">Dr Stephen Lowry</h3>
						<p class="card-text">Comet imaging during the Rosetta mission</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="https://www.kent.ac.uk/enterprise/ice.html" class="chevron-link">Staff profiles</a>
					<a href="https://www.kent.ac.uk/enterprise/ice.html" class="chevron-link">Innovation, creativity and enterprise</a>
					<a href="https://www.youtube.com/playlist?list=PL_voamVqJ_ZyVoZdGh4ov5u1PseEJxwEX" class="chevron-link">Think Kent on YouTube</a>
					<a href="https://www.kent.ac.uk/events/esteem/2015-16/index.html" class="chevron-link">Open lectures</a>
				</div>
			</div>



-->

<!--
			<blockquote class="social-quote social-quote-twitter p-b-5">
				<a href="#">
					<button></button>
					<p>Kent study shows that tourism boost in Malta can aid struggling traditional fishermen.</p>
				</a>
				<cite>
					<a href="#">@unikentnews</a>
				</cite>
			</blockquote>

-->

					<!--   <blockquote>
							   <img class="img-circle" src="../media/images/profile-academic.jpg">
							   <p>It's the academic community that creates a supportive enviroment to help you excel</p>

							   <cite>
									  Dr David Hume,
									  <span>PhD. Particle physics</span>
									  <span><a href="#" class="chevron-link">Learn more about our community</a></span>
							   </cite>

					   </blockquote>




  <aside class="container">
							   <p class="impact-statement">Our programmes are informed by a commitment to research excellence. We are ranked 17th in the UK for Research Intensity.</p>
					   </aside>


-->


<div class="card card-overlay  m-t-4 m-b-3">
							   <div class="card-body">
							   		<a href="https://www.kent.ac.uk/locations/index.html">
									  <div class="card-title-wrap card-title-wrap-link pull-left">
											  <h2 class="card-title">Superb locations</h2>
											  <p class="card-text">We have two stunning campuses and a part-time study centre in south-east England, plus four European centres in Paris, Brussels, Rome and Athens.</p>
									  </div>
									</a>
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





			<blockquote class="social-quote social-quote-twitter p-b-5">
				<a href="#">
					<button></button>
					<p>Congratulations Eske Van Gils, Christian Ottolini, Katinka Van De Ven and Eleanor Perry on the PG Research Prizes.</p>
				</a>
				<cite>
					<a href="#">@UniKentGradSch</a>
				</cite>
			</blockquote>




<!--

					   <div class="card-panel">
							   <div class="card-panel-body">
									  <div class="card">
											  <a href="#">
													 <img class="card-img" src="../media/images/promo-blog.jpg">
													 <h3 class="card-title">Student Blogs</h3>
											  </a>
											  <p class="card-text">Our students tell it like it is.</p>
											  <ul>
													 <li><a href="#">John Rabbit</a></li>
													 <li><a href="#">Felicity Hogg</a></li>
											  </ul>
									  </div>
									  <a class="card short-text" href=''>
											  <img class="card-img" src="../media/images/promo-visit.jpg">
											  <h3 class="card-title">Visit Us</h3>
											  <p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
									  </a>
									


									    <a class="card" href="#">
											  <img class="card-img" src="/media/images/placeholder-3x2.jpg">
											  <h3 class="card-title">Accommodation</h3>
											  <p class="card-text">We have excellent on- and off-campus options for you and your family.</p>
									  </a>


									  <a class="card" href=''>
											  <img class="card-img" src="../media/images/promo-4.jpg">
											  <h3 class="card-title">Kent Union</h3>
											  <p class="card-text">Get involved in the hundreds of societies on campus.</p>

									  </a>
							   </div>
					   </div>



-->





			   <?php KentThemeHelper::footer(); ?>


	 