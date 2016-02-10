<?php
		include dirname(dirname(__FILE__))."/bootstrap.php";
		use \unikent\kent_theme\kentThemeHelper;

			   KentThemeHelper::header(
					   array(
							   'title'=>"Postgraduate Courses",
							   'menu' => array(
									  'Home' => '#',
									  'Apply' => '#'
							   ),
							   'meta' => array(
									  'description'=>'Postrgaduate home',
									  'title'=>"Postgraduate Home - Kent Theme Beta"
							   ),
							   'theme'=>'postgraduate'
					   )
			   );
?>
					   <div class="card card-overlay header-card-overlay">
							   <div class="card-body">
									<div class="card-media-wrap">
										<img src="../media/images/engineering-student-16-9.jpg" class="card-img-bottom">
									</div>
									<div class="card-img-overlay-bottom card-overlay-inline-xs card-overlay-inline-nopad">
											<form class="quickspot-container" >
												 <div class="form-group">
													 <label for="search" class="sr-only">Search</label>
													 <div class="input-group input-group-lg">
														<input type="search" class="form-control" id="course-search" placeholder="Search for postgraduate courses..." autocomplete="off" data-quickspot-config="pg_courses" data-quickspot-target="quickspot-results-container">
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

					   <aside class="container">
							   <p class="impact-statement">Our programmes are informed by a commitment to research excellence. We are ranked 17th in the UK for Research Intensity.</p>
					   </aside>

					   <div class="card card-overlay">
							   <div class="card-body card-inverse">
									  <div class="card-title-wrap card-title-wrap-link pull-right">
											  <h4 class="card-title">World Leading research</h4>
											  <p class="card-text">Kent's excellent research performance positions us as one of UK's leading universities. Our 19 academic schools engage in research of international and world class standing.</p>
									  </div>
									   <div class="card-media-wrap video-launcher" data-toggle="modal" data-target="#myVideoModal">
											  <img class="card-img-bottom" src="../media/images/feature-professor-2-1.jpg">

											  <div class="card-img-overlay-bottom text-right">
													 <h5 class="card-subtitle">Prof. David Welch</h5>
													 <p class="card-text">Professor of Modern History</p>
											  </div>
									  </div>


							   </div>
							   <div class="card-footer">
									  <a href="#" class="chevron-link">Taught Programmes</a>
									  <a href="#" class="chevron-link">Research Programmes</a>
									  <a href="#" class="chevron-link">PHDs</a>
									  <a href="#" class="chevron-link">Masters</a>
							   </div>
					   </div>


						<div class="card-panel card-panel-tertiary nav-links-panel">
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

							   <div class="card-panel-body">
									  <a class="card" href="#">
											  <img class="card-img" src="../media/images/promo-world.jpg">
											  <h3 class="card-title">Global Opportunities</h3>
											  <p class="card-text">Findo out how our programmes can help you launch your career and employability.</p>
									  </a>
									  <a class="card" href="#">
											  <img class="card-img" src="../media/images/promo-graduates.jpg">
											  <h3 class="card-title">Scholarships &amp; Funding</h3>
											  <p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
									  </a>
									  <a class="card" href="#">
											  <img class="card-img" src="../media/images/promo-3.jpg">
											  <h3 class="card-title">How to apply</h3>
											  <p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
									  </a>
									  <a class="card" href="#">
											  <img class="card-img" src="../media/images/promo-innovation.jpg">
											  <h3 class="card-title">Innovation and enterprise</h3>
											  <p class="card-text">Find more about the exciting project we're working on with with partners and businesses.</p>
											  </a>
							   </div>
					   </div>

					   <blockquote>
							   <img class="img-circle" src="../media/images/profile-academic.jpg">
							   <p>It's the academic community that creates a supportive enviroment to help you excel</p>
							   <footer>
									   <cite>
											  Dr David Hume,
											  <span>PhD. Particle physics</span>
											  <span><a href="#" class="chevron-link">Learn more about our community</a></span>
									  </cite>
							   </footer>
					   </blockquote>



<div class="card card-overlay">
							   <div class="card-body card-inverse">
									  <div class="card-title-wrap card-title-wrap-link">
											  <h4 class="card-title">Life at Kent</h4>
											  <p class="card-text">We have 6 exceptional Postgraduate locations with UK Campuses close to London and centres in Paris, Brussels Rome and Athens.</p>
									  </div>
									  <div class="card-media-wrap">
											  <img src="../media/images/promo-park-16-9.jpg" class="card-img-bottom" alt="Sport" />

											  <a class="card-img-overlay-bottom text-right" href="#">
													 <h5 class="card-subtitle">Canterbury</h5>
													 <p class="card-text">Historical, friendly &amp; cosmopolitan.</p>
											  </a>
									  </div>
							   </div>
							   <div class="card-footer">
									  <a href="#" class="chevron-link">The UK's European university</a>
									  <a href="#" class="chevron-link">Campus life</a>
									  <a href="#" class="chevron-link">Accommodation &amp; Facilities</a>
									  <a href="#" class="chevron-link">Graduate school</a>
							   </div>
					   </div>


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
									  <a class="card" href=''>
											  <img class="card-img" src="../media/images/international.jpg">
											  <h3 class="card-title">International students</h3>
											  <p class="card-text">From visa advice to arrival, we'll support you through the whole process.</p>
									  </a>
									  <a class="card" href=''>
											  <img class="card-img" src="../media/images/promo-4.jpg">
											  <h3 class="card-title">Kent Union</h3>
											  <p class="card-text">Get involved in the hundreds of societies on campus.</p>

									  </a>
							   </div>
					   </div>
			   <?php KentThemeHelper::footer(); ?>


	 