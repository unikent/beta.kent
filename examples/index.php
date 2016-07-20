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
				'meta' => array('title'=>'Demo Page - Kent Theme Beta')
			)
		);
?>

			<div class="card card-overlay header-card-overlay">
				<div class="card-body">
					<div class="media-wrap-parallax" data-stellar-offset-parent="true">
						<img data-stellar-ratio="0.7" class="card-img-bottom" src="../media/images/sea-turtle.jpg">
					</div>

					<div class="card-title-wrap card-title-wrap-link">
						<a href="#feature-title-link" class="card-title-link"><h2 class="card-title">A leading research institution</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true">A leading research institution</a>
					</div>

				</div>
			</div>


			<section class="container">
				<h1>Heading 1</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus sit amet neque iaculis, at pulvinar lectus mattis. Pellentesque hendrerit risus euismod lobortis auctor. Morbi condimentum dolor mauris, at finibus eros tincidunt id.</p>

				<h2>Heading 2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus sit amet neque iaculis, at pulvinar lectus mattis. Pellentesque hendrerit risus euismod lobortis auctor. Morbi condimentum dolor mauris, at finibus eros tincidunt id.</p>

				<h3>Heading 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus sit amet neque iaculis, at pulvinar lectus mattis. Pellentesque hendrerit risus euismod lobortis auctor. Morbi condimentum dolor mauris, at finibus eros tincidunt id.</p>

				<h4>Heading 4</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus sit amet neque iaculis, at pulvinar lectus mattis. Pellentesque hendrerit risus euismod lobortis auctor. Morbi condimentum dolor mauris, at finibus eros tincidunt id.</p>

				<h5>Heading 5</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor tellus sit amet neque iaculis, at pulvinar lectus mattis. Pellentesque hendrerit risus euismod lobortis auctor. Morbi condimentum dolor mauris, at finibus eros tincidunt id.</p>

				<h6>Heading 6</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et massa nec mauris convallis ullamcorper ut vel arcu. Nullam lectus tortor, luctus id turpis at, rutrum tempor felis. Morbi velit mi, ornare sed fermentum at, congue vel ante. Proin eu neque feugiat, vulputate ante ac, facilisis turpis. Aenean at interdum lacus, et fermentum neque. Nunc risus justo, ultrices id consectetur pretium, tempus id leo. Donec elementum a ante ut fermentum. Phasellus elementum feugiat dui in molestie. Praesent sed mollis lectus. Fusce arcu tortor, convallis eu vestibulum et, vehicula ut elit. Sed vehicula id metus sit amet egestas. Praesent quis dui nisi. Fusce rhoncus massa tellus, et dictum ipsum ultrices vel. Praesent bibendum enim ut tristique pellentesque.</p>

				<blockquote class="pull-quote pull-quote-accent">
					<p>It was I who ate all the pies! And I would have gotten away with it too, if it weren't for you meddling kids.</p>
				</blockquote>

				<p>Maecenas quis suscipit justo, <strong>bibendum semper magna.</strong> Pellentesque rutrum erat ante, <em>vel feugiat nisl placerat sit</em> amet. Nulla pharetra elit congue, sagittis augue quis, lacinia enim. Sed eget orci in lorem vehicula <strong><em>condimentum. Vivamus at ex nec</em></strong> orci ultrices facilisis at nec lectus. Phasellus et purus in leo mattis semper vitae at ante. Etiam molestie sit amet ex eget tincidunt. Proin efficitur tortor nec dui pharetra condimentum. Vestibulum dignissim erat purus, nec malesuada elit sagittis in. Nulla rutrum, dolor ac lobortis consectetur, elit nisl bibendum dolor, vel iaculis turpis lorem vitae neque. Duis mattis augue et pretium sodales. Sed vitae sodales nibh. Phasellus justo eros, aliquet ut mi non, feugiat interdum sem. Suspendisse nec arcu quis est interdum volutpat.</p>

				<ul>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit
						<ul>
							<li>Phasellus iaculis neque</li>
							<li>Purus sodales ultricies</li>
							<li>Vestibulum laoreet porttitor sem</li>
							<li>Ac tristique libero volutpat at</li>
						</ul>
					</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ul>

				<ol>
					<li>Lorem ipsum dolor sit amet</li>
					<li>Consectetur adipiscing elit</li>
					<li>Integer molestie lorem at massa</li>
					<li>Facilisis in pretium nisl aliquet</li>
					<li>Nulla volutpat aliquam velit</li>
					<li>Faucibus porta lacus fringilla vel</li>
					<li>Aenean sit amet erat nunc</li>
					<li>Eget porttitor lorem</li>
				</ol>

				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>

				<table>
					<caption>
						This is an example table, and this is its caption to describe the contents.
					</caption>
					<thead>
					<tr>
						<th>Table heading</th>
						<th>Table heading</th>
						<th>Table heading</th>
						<th>Table heading</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
					<tr>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
					<tr>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
						<td>Table cell</td>
					</tr>
					</tbody>
				</table>

			</section>

			<div class="card card-overlay editorial editorial-tertiary">
				<div class="card-body">
					<div class="card-title-wrap">
						<h4 class="card-title">An Editorial Feature</h4>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi velit mi, ornare sed fermentum at, congue vel ante. Proin eu neque feugiat, vulputate ante ac, facilisis turpis. Aenean at interdum lacus, et fermentum neque. Nunc risus justo, ultrices id consectetur pretium, tempus id leo. Donec elementum a ante ut fermentum. Phasellus elementum feugiat dui in molestie. Praesent sed mollis lectus. Fusce arcu tortor, convallis eu vestibulum et, vehicula ut elit. Sed vehicula id metus sit amet egestas.</p>
						<p class="card-text">Praesent quis dui nisi. Fusce rhoncus massa tellus, et dictum ipsum ultrices vel. Praesent bibendum enim ut tristique pellentesque.</p>
					</div>
					<div class="card-media-wrap">
						<img class="card-img" src="../media/images/students.jpg">
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<div class="container">
				<h2> Tables </h2>
				<table class="table  ">
					<thead>
						<tr>
							<th>Core modules</th>
							<th>Credits</th>
							<th>ECTS Credits</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href='#'>CL850 - Bacon studies with algebraic-french</a></td>
							<td>6</td>
							<td>15</td>

						</tr>
						<tr>
							<td><a href='#'>DK95 - Video game studies</a></td>
							<td>55</td>
							<td>43</td>

						</tr>
						<tr>
							<td><a href='#'>FA7 - Hamburger eating with a specialism in double bacon</a></td>
							<td>8</td>
							<td>21</td>

						</tr>
					</tbody>
				</table>
				<table class="table table-hover ">
					<thead>
						<tr>
							<th>Core modules</th>
							<th>Credits</th>
							<th>ECTS Credits</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href='#'>CL850 - Bacon studies with algebraic-french</a></td>
							<td>6</td>
							<td>15</td>

						</tr>
						<tr>
							<td><a href='#'>DK95 - Video game studies</a></td>
							<td>55</td>
							<td>43</td>

						</tr>
						<tr>
							<td><a href='#'>FA7 - Hamburger eating with a specialism in double bacon</a></td>
							<td>8</td>
							<td>21</td>

						</tr>
					</tbody>
				</table>

				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>Core modules</th>
							<th>Credits</th>
							<th>ECTS Credits</th>

						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href='#'>CL850 - Bacon studies with algebraic-french</a></td>
							<td>6</td>
							<td>15</td>

						</tr>
						<tr>
							<td><a href='#'>DK95 - Video game studies</a></td>
							<td>55</td>
							<td>43</td>

						</tr>
						<tr>
							<td><a href='#'>FA7 - Hamburger eating with a specialism in double bacon</a></td>
							<td>8</td>
							<td>21</td>

						</tr>
					</tbody>
				</table>

				<strong>Responsive Table (will be side scrollable on phones)</strong>
				<p>See <a href="http://v4-alpha.getbootstrap.com/content/tables/#responsive-tables">bootstrap documention</a> for more details.</p>
				<div class="table-responsive">
					<table class="table ">
						<thead>
							<tr>
								<th>Title</th>
								<th>Credits</th>
								<th>Other</th>
								<th>Stuff</th>
								<th>More stuff</th>
								<th>A number</th>
								<th>Something else</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href='#'>CL850 - Bacon studies with algebraic-french</a></td>
								<td>6</td>
								<td>Burger</td>

								<td>Bacon</td>
								<td>Cheese</td>
								<td>2</td>
								<td>Cupcakes</td>

							</tr>
							<tr>
								<td><a href='#'>DK95 - Video game studies</a></td>
								<td>55</td>
								<td>Lunch</td>

								<td>Ham</td>
								<td>Egg</td>
								<td>21</td>
								<td>Waffles</td>

							</tr>
							<tr>
								<td><a href='#'>FA7 - Hamburger eating with a specialism in double bacon</a></td>
								<td>8</td>
								<td>Desert</td>

								<td>Custard</td>
								<td>Chocolate</td>
								<td>2</td>
								<td>Llamas</td>


							</tr>
						</tbody>
					</table>
				</div>
			</div>




			<section class="container">
				<h2>Buttons</h2>
				<button class="btn btn-primary">Primary Button</button>
				<button class="btn btn-secondary">Secondary Button</button>
				<button class="btn btn-tertiary">Tertiary Button</button>
				<button class="btn btn-accent">Accent Button</button>
			</section>


			<blockquote>
				<img class="img-circle" src="../media/images/profile-academic.jpg">
				<p>It was I who ate all the pies! And I would have gotten away with it too, if it weren't for you meddling kids.</p>
				<cite>
					Dr David Hume,
					<span>School of Astrofrench and Other stuff</span>
				</cite>
			</blockquote>

<div class="container">
	<h2>Tabs</h2>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#home" role="tab">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#messages" role="tab">Messages</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane fade in active" id="home" role="tabpanel">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
		<div class="tab-pane fade" id="profile" role="tabpanel">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
		<div class="tab-pane fade" id="messages" role="tabpanel">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
		<div class="tab-pane fade" id="settings" role="tabpanel">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</div>
	</div>
</div>

<br>
<br>

			<div class="container">
				<h2>Tabs -> Accordion at SM</h2>
				<ul class="nav nav-tabs hidden-sm-down" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Messages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
					</li>
				</ul>

				<div class="tab-content">
					<h3 class="tab-title hidden-md-up" data-toggle="collapse_responsive" data-target="#home1" aria-controls="home" data-parent=".tab-content">Home</h3>
					<div class="tab-pane fade in active collapse-sm-down" id="home1" role="tabpanel">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
					<h3 class="tab-title hidden-md-up collapsed" data-toggle="collapse_responsive" data-target="#profile1" aria-controls="profile" data-parent=".tab-content">Profile</h3>
					<div class="tab-pane fade collapse-sm-down" id="profile1" role="tabpanel">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
					<h3 class="tab-title hidden-md-up collapsed" data-toggle="collapse_responsive" data-target="#messages1" aria-controls="messages" data-parent=".tab-content">Messages</h3>
					<div class="tab-pane fade collapse-sm-down" id="messages1" role="tabpanel">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
					<h3 class="tab-title hidden-md-up collapsed" data-toggle="collapse_responsive" data-target="#settings1" aria-controls="settings" data-parent=".tab-content">Settings</h3>
					<div class="tab-pane fade collapse-sm-down" id="settings1" role="tabpanel">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</div>
				</div>
			</div>

<br>
<br>

<div class="container">

	<h2>Tabs -> Accordion at MD</h2>
	<ul class="nav nav-tabs hidden-md-down" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#home2" role="tab">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#profile2" role="tab">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#messages2" role="tab">Messages</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#settings2" role="tab">Settings</a>
		</li>
	</ul>

	<div class="tab-content">
		<h3 class="tab-title hidden-lg-up" data-toggle="collapse_responsive" data-target="#home2" aria-controls="home" data-parent=".tab-content">Home</h3>
		<div class="tab-pane fade in active collapse-md-down" id="home2" role="tabpanel">Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</div>
		<h3 class="tab-title hidden-lg-up collapsed" data-toggle="collapse_responsive" data-target="#profile2" aria-controls="profile" data-parent=".tab-content">Profile</h3>
		<div class="tab-pane fade collapse-md-down" id="profile2" role="tabpanel">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
		<h3 class="tab-title hidden-lg-up collapsed" data-toggle="collapse_responsive" data-target="#messages2" aria-controls="messages" data-parent=".tab-content">Messages</h3>
		<div class="tab-pane fade collapse-md-down" id="messages2" role="tabpanel">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
		<h3 class="tab-title hidden-lg-up collapsed" data-toggle="collapse_responsive" data-target="#settings2" aria-controls="settings" data-parent=".tab-content">Settings</h3>
		<div class="tab-pane fade collapse-md-down" id="settings2" role="tabpanel">Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</div>
	</div>
</div>



			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="#panel-title-link" class="card-title-link"><h2  class="card-title">A bold title</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true">A bold title</a>
					</div>
					<div class="card-media-wrap">
						<img class="card-img" src="../media/images/students.jpg">
					</div>
					<div class="card-img-overlay-bottom">
						<h3 class="card-subtitle">A sub title</h3>
						<p class="card-text">This content is shorter.</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<div class="card-panel card-panel-tertiary nav-links-panel">
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
							<a role="menuitem" href="//www.kent.ac.uk/courses/postgraduate/" class="nav-link-title">Postgraduate</a>
							<span class="nav-link-desc">Affordable programmes with leading researchers.</span>
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

			<div class="card-panel">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Standard Card Panel</h2>
				</div>
				<div class="card-panel-body">
					<div class="card card-linked">
						<img class="card-img" src="../media/images/promo-1.jpg">
						<a href="#title" class="card-title-link"><h3 class="card-title">Academic excellence</h3></a>
						<p class="card-meta">1st September 2015</p>
						<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
						<a href="#comment" class="card-badge kf-comment">5</a>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true">Academic excellence</a>
					</div>
					<div class="card card-linked">
						<img class="card-img" src="../media/images/promo-2.jpg">
						<a href="#title" class="card-title-link"><h3 class="card-title">Undergraduates</h3></a>
						<p class="card-meta">28th March 2015</p>
						<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
						<a href="#" class="card-badge kf-comment">7</a>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true">Undergraduates</a>
					</div>
					<div class="card card-linked">
						<img class="card-img" src="../media/images/promo-3.jpg">
						<a href="#title" class="card-title-link"><h3 class="card-title">Postgraduates</h3></a>
						<p class="card-meta">5th November 2015</p>
						<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
						<a href="#" class="card-badge kf-comment">1</a>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true"></a>
					</div>
					<div class="card card-linked">
						<img class="card-img" src="../media/images/promo-4.jpg">
						<a href="#title" class="card-title-link"><h3 class="card-title">Visit Kent</h3></a>
						<p class="card-meta">17th May 2015</p>
						<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
						<a href="#" class="card-badge kf-comment">23</a>
						<a href="#overlay" class="faux-link-overlay" aria-hidden="true">Visit Kent</a>
					</div>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-media-wrap">
						<img class="card-img" src="../media/images/students.jpg">
					</div>
					<div class="card-img-overlay-centered card-img-overlay-tinted">
						<div class="text-xs-center">
							<h2 class="card-subtitle">Call to action! A catchy statement</h2>
							<p class="card-text">more information about stuff you can do.</p>
							<br>
							<p><a href="#dostuff" class="btn btn-primary">Do Stuff</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a class="card-title-link" href="#foo"><h2 class="card-title">Video + Slider</h2></a>
						<p class="card-text">Not happy with just a video or a slider? now you can have both!!!</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>
					<div class="card-split">
						<div class="card-half">
							<div class="media-wrap video-launcher" data-mode="fullscreen" data-src="../media/video/video-research-student.mp4" data-transcript="#">

								<div class="video-player">
									<video poster="../media/images/sea-turtle.jpg" controls>
										<!-- Video files -->
										<source src="../media/video/video-research-student.mp4" type="video/mp4">
										<!-- Text track file -->
										<!--track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default-->

										<!-- Fallback for browsers that don't support the <video> element -->
										<a href="../media/video/video-research-student.mp4">Download</a>
									</video>
								</div>
								<img class="card-img" src="../media/images/sea-turtle.jpg">
							</div>

						</div>
						<div class="card-half">
							<div class="kent-slider">
								<div class="kent-slide">
									<div class="media-wrap">
										<img class="card-img" src="../media/images/world-4x3.jpg">
									</div>
								</div>
								<div class="kent-slide">
									<div class="media-wrap">
										<img class="card-img" src="../media/images/ping-pong-4x3.jpg">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-img-overlay-bottom card-img-overlay-link card-overlay-inline-sm">
						<a class="card-subtitle-link" href="#foobar"><h3 class="card-subtitle">A sub title</h3></a>
						<p class="card-text">This content is shorter.</p>
						<a href="#boofar" class="faux-link-overlay">A sub title</a>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="#foo" class="card-title-link"><h2 class="card-title">With Parallax!</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>
					<div class="media-wrap-parallax" data-stellar-offset-parent="true">
						<img data-stellar-ratio="0.7" class="card-img-bottom" src="../media/images/sea-turtle.jpg">
					</div>
					<div class="card-img-overlay-bottom">
						<h3 class="card-subtitle">A sub title</h3>
						<p class="card-text">This content is shorter.</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<h2 class="sr-only">Twitter quote</h2>
			<blockquote class="social-quote social-quote-twitter">
				<a href="#">
					<button></button>
					<p>Kent study shows that tourism boost in Malta can aid struggling traditional fishermen.</p>
				</a>
				<cite>
					<a href="#">@unikentnews</a>
				</cite>
			</blockquote>


			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="#foo" class="card-title-link"><h2 class="card-title">A Slider!</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>
					<div class="kent-slider kent-slider-dark">
						<div class="kent-slide">
							<div class="card-media-wrap">
								<img class="card-img" src="../media/images/sunrise-16-9.jpg">
							</div>
							<div class="card-img-overlay-bottom card-overlay-inline-xs ">
								<h3 class="card-subtitle">A sub title</h3>
								<p class="card-text">This content is shorter. This content is shorter. This content is shorter.</p>
							</div>
						</div>
						<div class="kent-slide">
							<div class="card-media-wrap ">
								<img class="card-img" src="../media/images/hero-painting-16-9.jpg">
							</div>
							<div class="card-img-overlay-bottom card-overlay-inline-xs">
								<h3 class="card-subtitle">A sub title</h3>
								<p class="card-text">This content is shorter.</p>
							</div>
						</div>
						<div class="kent-slide">
							<div class="card-media-wrap">
								<img class="card-img" src="../media/images/sunrise-16-9.jpg">
							</div>
							<div class="card-img-overlay-bottom card-overlay-inline-xs card-overlay-inline-primary">
								<h3 class="card-subtitle">A sub title</h3>
								<p class="card-text">This content is shorter. This content is shorter. This content is shorter.</p>
							</div>
						</div>
						<div class="kent-slide">
							<div class="card-media-wrap">
								<img class="card-img" src="../media/images/sunrise-16-9.jpg">
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>


			<div class="card-panel card-panel-primary-tint">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel (Primary Tint)</h2>

					<div class="card-panel-filter">
						<select class="form-control">
							<option>All news</option>
							<option>Student news</option>
							<option>Staff news</option>
						</select>

						<input placeholder="Filter">
					</div>
					<nav class="content-social">
						<a title="twitter" href="#" class="kf-twitter"></a>
						<a title="facebook" href="#" class="kf-facebook"></a>
						<a title="instagram" href="#" class="kf-instagram"></a>
						<a title="pinterest" href="#" class="kf-pinterest"></a>
					</nav>
				</div>
				<div class="card-panel-body">
					<div class="card">
						<img class="card-img" src="../media/images/promo-1.jpg">
						<h3 class="card-title">Academic excellence</h3>
						<p class="card-meta">1st September 2015</p>
						<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>

						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Jim Groombridge
						</a>

						<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-2.jpg">
						<h3 class="card-title">Undergraduates</h3>
						<p class="card-meta">28th March 2015</p>
						<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>

						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr David Hume
						</a>

						<ul>
							<li><a href="#">Card link</a></li>
							<li><a href="#">Another link</a></li>
							<li><a href="#">More linkage</a></li>
							<li><a href="#">Another link</a></li>
						</ul>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-3.jpg">
						<h3 class="card-title">Postgraduates</h3>
						<p class="card-meta">5th November 2015</p>
						<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Jim Groombridge
						</a>

					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-4.jpg">
						<h3 class="card-title">Visit Kent</h3>
						<p class="card-meta">17th May 2015</p>
						<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Bob Smithington
						</a>
					</div>
				</div>
			</div>


			<div class="card-panel card-panel-tertiary">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel (Tertiary)</h2>
					<nav class="pull-right">
						<a href="#">More Stuff</a>
						<a href="#">cupcakes</a>
					</nav>
				</div>
				<div class="card-panel-body">
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
						<ul>
							<li><a href="#">Card link</a></li>
							<li><a href="#">Another link</a></li>
							<li><a href="#">More linkage</a></li>
							<li><a href="#">Another link</a></li>
						</ul>
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
			</div>

			<div class="card-panel card-panel-primary-tint cards-backed">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel (backed cards)</h2>
				</div>
				<div class="card-panel-body">
					<div class="card">
						<img class="card-img" src="../media/images/promo-1.jpg">
						<h3 class="card-title">Academic excellence</h3>
						<p class="card-meta">1st September 2015</p>
						<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>

						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Jim Groombridge
						</a>

						<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-2.jpg">
						<h3 class="card-title">Undergraduates</h3>
						<p class="card-meta">28th March 2015</p>
						<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>

						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr David Hume
						</a>

						<ul>
							<li><a href="#">Card link</a></li>
							<li><a href="#">Another link</a></li>
							<li><a href="#">More linkage</a></li>
							<li><a href="#">Another link</a></li>
						</ul>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-3.jpg">
						<h3 class="card-title">Postgraduates</h3>
						<p class="card-meta">5th November 2015</p>
						<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Jim Groombridge
						</a>

					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-4.jpg">
						<h3 class="card-title">Visit Kent</h3>
						<p class="card-meta">17th May 2015</p>
						<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
						<a class="card-author card-bordered-item" href='#'>
							<img src="../media/images/profile-academic.jpg">
							Dr Bob Smithington
						</a>
					</div>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a class=card-title-link" href="#foo"><h2 class="card-title">A video launcher</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>
					<div class="card-media-wrap video-launcher" data-mode="fullscreen" >
						<div class="video-player">
							<video poster="../media/images/students.jpg" controls>
								<!-- Video files -->
								<source src="../media/video/video-research-student.mp4" type="video/mp4">
								<!-- Text track file -->
								<!--track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default-->

								<!-- Fallback for browsers that don't support the <video> element -->
								<a href="../media/video/video-research-student.mp4">Download</a>
							</video>
						</div>

						<img class="card-img" src="../media/images/students.jpg">
					</div>

					<div class="card-img-overlay-bottom text-xs-right">
						<h3 class="card-meta card-subtitle">A sub title</h3>
						<p class="card-text">This content is shorter.</p>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<div class="card card-overlay">

				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a class="card-title-link" href="#foo"><h2 class="card-title">An inline video</h2></a>
						<p class="card-text">With support for youtube.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>

					<div class="card-media-wrap video-launcher">
						<div class="video-player">
							<div data-video-id="_tBZXfPfhyg" data-type="youtube"></div>
						</div>
						<img class="card-img" src="../media/images/students.jpg">
					</div>

					<div class="card-img-overlay-bottom text-xs-right">
						<p class="card-text">It will however launch a modal if first played in mobile view (xs) or in extra extra large view (xxl).</p>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-primary-tint">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel Single + Grid</h2>
				</div>
				<div class="card-panel-body">
					<div class="card-panel-single">
						<div class="card">
							<img class="card-img" src="../media/images/promo-1.jpg">
							<h3 class="card-title">Academic excellence</h3>
							<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
							<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
						</div>
					</div>
					<div class="card-panel-grid">
						<div class="card">
							<img class="card-img" src="../media/images/promo-2.jpg">
							<h3 class="card-title">Undergraduates</h3>
							<p class="card-text">We have a renowned personal teaching style.</p>
						</div>
						<div class="card">
							<img class="card-img" src="../media/images/promo-3.jpg">
							<h3 class="card-title">Postgraduates</h3>
							<p class="card-text">We'll equip you with essential skills.</p>
						</div>
						<div class="card">
							<img class="card-img" src="../media/images/promo-4.jpg">
							<h3 class="card-title">Visit Kent</h3>
							<p class="card-text">Learn more why our students love Kent.</p>
						</div>
						<div class="card">
							<img class="card-img" src="../media/images/promo-1.jpg">
							<h3 class="card-title">More stuff</h3>
							<p class="card-text">We rank amongst the best in the UK.</p>
						</div>
					</div>
				</div>
			</div>


			<div class="card-panel">
				<div class="card-panel-body">
					<div class="card-panel-full">
						<div class="card card-linked">
							<img class="card-img" src="../media/images/promo-3.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<a href="#foobar" class="card-title-link"><h3 class="card-title">More stuff</h3></a>
								<p class="card-subtitle">We rank amongst the best in the UK.</p>
							</div>
							<a href="#foobar" class="faux-link-overlay" aria-hidden="true">More stuff</a>
						</div>
					</div>
					<div class="card-panel-grid">
						<div class="card">
							<h2 class="card-title">Stuff A</h2>
							<p class="card-text">Use when more text is needed.</p>
						</div>
						<div class="card">
							<h2 class="card-title">Stuff B</h2>
							<p class="card-text">Use when more text is needed.</p>
						</div>
						<div class="card">
							<h2 class="card-title">Stuff C</h2>
							<p class="card-text">Use when more text is needed.</p>
						</div>
						<div class="card">
							<h2 class="card-title">Stuff D</h2>
							<p class="card-text">Use when more text is needed.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix">
				<div class="col-md-6">

					<div class="card-panel card-panel-contained card-panel-primary-tint">
						<div class="card-panel-body">
							<div class="card-panel-full fixed">
								<div style="background-image:url('../media/images/sea-turtle.jpg');">
								</div>
							</div>
							<div class="card-panel-single">
								<div class="card">
									<h2 class="card-title">Half-width Image Feature</h2>
									<p class="card-text">Use when more text is needed.</p>
									<p>Text should still be short - combined with the links, text shouldn’t flow beneath the accompanying image.</p>
									<ul>
										<li><a href="#">Card link</a></li>
										<li><a href="#">Another link</a></li>
										<li><a href="#">More linkage</a></li>
										<li><a href="#">Another link</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-panel card-panel-contained card-panel-primary-tint">
						<div class="card-panel-body">
							<div class="card-panel-full fixed">
								<div class="expanded video-launcher" data-mode="fullscreen" data-transcript="#" style="background-image:url('../media/images/sea-turtle.jpg');">
									<div class="video-player">
										<video poster="../media/images/sea-turtle.jpg" controls>
											<!-- Video files -->
											<source src="../media/video/video-research-student.mp4" type="video/mp4">
											<!-- Text track file -->
											<!--track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default-->

											<!-- Fallback for browsers that don't support the <video> element -->
											<a href="../media/video/video-research-student.mp4">Download</a>
										</video>
									</div>

								</div>
							</div>
							<div class="card-panel-single">
								<div class="card">
									<h2 class="card-title">Half-width Image Feature</h2>
									<p class="card-text">Use when more text is needed.</p>
									<p>Text should still be short - combined with the links, text shouldn’t flow beneath the accompanying image.</p>
									<ul>
										<li><a href="#">Card link</a></li>
										<li><a href="#">Another link</a></li>
										<li><a href="#">More linkage</a></li>
										<li><a href="#">Another link</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-contained card-panel-primary-tint">
				<div class="card-panel-body">
					<div class="card-panel-single">
						<div class="card">
							<h2 class="card-title">Half-width Image Feature</h2>
							<p class="card-text">Use when more text is needed.</p>
							<p>Text should still be short - combined with the links, text shouldn’t flow beneath the accompanying image.</p>
							<ul>
								<li><a href="#">Card link</a></li>
								<li><a href="#">Another link</a></li>
								<li><a href="#">More linkage</a></li>
								<li><a href="#">Another link</a></li>
							</ul>
						</div>
					</div>
					<div class="card-panel-full fixed">
						<div class="expanded" style="background-image:url('../media/images/sea-turtle.jpg');">
						</div>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-contained card-panel-primary-tint">
				<div class="card-panel-body">
					<div class="card-panel-single">
						<div class="card">
							<h2 class="card-title">Half-width Image Feature</h2>
							<p class="card-text">Use when more text is needed.</p>
							<p>Text should still be short - combined with the links, text shouldn’t flow beneath the accompanying image.</p>
							<ul>
								<li><a href="#">Card link</a></li>
								<li><a href="#">Another link</a></li>
								<li><a href="#">More linkage</a></li>
								<li><a href="#">Another link</a></li>
							</ul>
						</div>
					</div>
					<div class="card-panel-full fixed">
						<div class="video-launcher"  data-mode="fullscreen" data-controls="false" style="background-image:url('../media/images/sea-turtle.jpg');">
							<div class="video-player">
								<video poster="../media/images/sea-turtle.jpg" controls>
									<!-- Video files -->
									<source src="../media/video/video-research-student.mp4" type="video/mp4">
									<!-- Text track file -->
									<!--track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default-->

									<!-- Fallback for browsers that don't support the <video> element -->
									<a href="../media/video/video-research-student.mp4">Download</a>
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-tertiary">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel Single + List</h2>
				</div>
				<div class="card-panel-body">
					<div class="card-panel-single">
						<div class="card">
							<img class="card-img" src="../media/images/promo-1.jpg">
							<h3 class="card-title">Academic excellence</h3>
							<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
							<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
						</div>
					</div>
					<div class="card-panel-list">
						<div class="card">
							<img class="card-img" src="../media/images/promo-2.jpg">
							<h3 class="card-title">Undergraduates</h3>
							<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
						</div>
						<div class="card">
							<img class="card-img" src="../media/images/promo-3.jpg">
							<h3 class="card-title">Postgraduates</h3>
							<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
						</div>
						<div class="card">
							<img class="card-img" src="../media/images/promo-4.jpg">
							<h3 class="card-title">Visit Kent</h3>
							<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="card-panel">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Card Panel Single + Single</h2>
				</div>
				<div class="card-panel-body">
					<div class="card-panel-single">
						<div class="card">
							<img class="card-img" src="../media/images/promo-1.jpg">
							<h3 class="card-title">Academic excellence</h3>
							<p class="card-meta">1st September 2015</p>
							<p class="card-text">We rank amongst the best in the UK. Find out why we're more prestigious than many in the Russel Group.</p>
							<p class="card-text"><a href="#">Tag1</a>, <a href="#">Tag2</a>, <a href="#">Another Tag</a></p>
						</div>
					</div>
					<div class="card-panel-single">
						<div class="card">
							<img class="card-img" src="../media/images/promo-2.jpg">
							<h3 class="card-title">Undergraduates</h3>
							<p class="card-meta">28th March 2015</p>
							<p class="card-text">We have a renowned personal teaching style supported by our accessible and passionate academics.</p>
							<ul>
								<li><a href="#">Card link</a></li>
								<li><a href="#">Another link</a></li>
								<li><a href="#">More linkage</a></li>
								<li><a href="#">Another link</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-tertiary cards-list">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Full Width Card Listing</h2>
				</div>
				<div class="card-panel-body">
					<div class="card">
						<img class="card-img" src="../media/images/promo-2.jpg">
						<h3 class="card-title">EU Referendum Experts</h3>
						<p class="card-text">Keep up to date with Kent's experts as they provide new insights and perspectives on key Referendum issues for UK and international media.</p>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-3.jpg">
						<h3 class="card-title">Employability Points celebrate Kent students' success</h3>
						<p class="card-text">We'll equip you with essential skills to give you a competitive advantage when it comes to your career.</p>
					</div>
					<div class="card">
						<img class="card-img" src="../media/images/promo-4.jpg">
						<h3 class="card-title">Conservatives prefer using nouns, psychologists find</h3>
						<p class="card-text">We're ranked one of the best universities for student satisfaction. Learn more why our students love Kent.</p>
					</div>
				</div>

			</div>

			<div class="container">
				<div class="card card-list-item">
					<img class="card-img" src="../media/images/promo-2.jpg">
					<h3 class="card-title">EU Referendum Experts</h3>
					<p class="card-text">Keep up to date with Kent's experts as they provide new insights and perspectives on key Referendum issues for UK and international media.</p>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a href="#foo" class="card-title-link"><h2 class="card-title">A video loop</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>
					<div class="card-media-wrap">
						<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
							<video autoplay loop class="embed-responsive-item">
								<source src="../media/video/research2.mp4">
							</video>
						</div>
					</div>
					<div class="card-img-overlay-bottom">
						<h3 class="card-subtitle">A sub title</h3>
						<p class="card-text">This content is shorter.</p>
					</div>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-title-wrap card-title-wrap-link pull-right">
					<a href="#foo" class="card-title-link"><h2 class="card-title">A google map</h2></a>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
				</div>
				<div class="card-media-wrap">
					<div class="card-embed-wrap embed-responsive embed-responsive-16by9 click-to-interact">
						<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d39932.327605613886!2d1.08385085!3d51.2785439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1447262198975" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="card card-overlay">
				<div class="card-title-wrap card-title-wrap-link pull-right">
					<a class="card-title-link" href="#foo"><h2 class="card-title">A search box</h2></a>
					<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
					<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
				</div>
				<div class="card-media-wrap">
					<img class="card-img" src="../media/images/students.jpg">
				</div>
				<div class="card-img-overlay-bottom">
					<form >
						<div class="form-group">
							<label for="search" class="sr-only">Search</label>
							<div class="input-group input-group-lg">
								<input type="search" class="form-control" id="cardCearch" placeholder="Search for interesting things...">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon"><span class='kf-fw kf-search'></span></button>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>



			<section class="container">
				<p>&nbsp;</p>
				<h1>And because we can!</h1>
				<p>&nbsp;</p>

			</section>

			<div class="card card-overlay">
				<div class="card-body">
					<div class="card-title-wrap card-title-wrap-link pull-right">
						<a class="card-title-link" href="#foo"><h2 class="card-title">Goodbye</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>

					<div class="card-media-wrap" data-toggle="modal" data-target="#myVideoModal">
						<div class="card-embed-wrap embed-responsive embed-responsive-16by9">
							<video autoplay loop class="embed-responsive-item">
								<source src="../media/video/video-research-student.mp4">
							</video>
						</div>
						<div class="card-img-overlay-bottom">
							<h3 class="card-subtitle">On the Left</h3>
							<p class="card-text">This content is shorter.</p>
						</div>
						<div class="card-img-overlay-bottom text-xs-right">
							<h3 class="card-subtitle">On the right</h3>
							<p class="card-text">This content is shorter.</p>
						</div>
					</div>

					<div class="card-title-wrap card-title-wrap-link">
						<a class="card-title-link" href="#foo"><h2 class="card-title">Hello</h2></a>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<a class="faux-link-overlay" href="#foo" aria-hidden="true"></a>
					</div>

				</div>

				<div class="card-footer">
					<a href="#" class="chevron-link">Card link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">More linkage</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">Another link</a>
					<a href="#" class="chevron-link">Another link</a>
				</div>
			</div>

			<div class="card-panel cards-backed cards-centered cards-backed-tertiary cards-header-split">
				<div class="card-panel-header">
					<h2 class="card-panel-title">Staff profiles</h2>
				</div>
				<div class="card-panel-body">
					<div class="card">
						<header class="card-header">
							<img class="card-img img-circle" src="../media/images/profile-academic.jpg">
						</header>
						<h3 class="card-title">Dr Test Test</h3>
						<p class="card-subtitle">Senior Lecture in Classical literature</p>
					</div>
					<div class="card card-header-split">
						<header class="card-header">
							<img class="card-img img-circle" src="../media/images/profile-academic.jpg">
						</header>
						<h3 class="card-title">Dr Test Test</h3>
						<p class="card-subtitle">Senior Lecture in Classical literature</p>
					</div>
					<div class="card">
						<header class="card-header">
							<img class="card-img img-circle" src="../media/images/profile-academic.jpg">
						</header>
						<h3 class="card-title">Dr Test Test</h3>
						<p class="card-subtitle">Senior Lecture in Classical literature</p>
					</div>
					<div class="card">
						<header class="card-header">
							<img class="card-img img-circle" src="../media/images/profile-academic.jpg">
						</header>
						<h3 class="card-title">Dr Test Test</h3>
						<p class="card-subtitle">Senior Lecture in Classical literature</p>
					</div>
				</div>
			</div>

			<div class="card-panel card-panel-profiles card-panel-tertiary card-panel-flush cards-flip">
				<div class="card card-linked card-double">
					<a href="#profiles" class="card-title-link"><h3 class="card-title">Staff Profiles</h3></a>
					<p class="card-subtitle">these are some staff profiles, they are all great people...mostly! Blah blah blah ldkfjgldkf lkjdfkjgdf dflgdfllkdf dflkdfl fgldf ldfhg ldhf dflkghdlfg</p>
					<a href="#profiles" class="faux-link-overlay" aria-hidden="true">Staff Profiles</a>
				</div>
				<div class="kent-slider" data-slider-config="profile_feature">
					<div class="card card-backed-primary card-linked">
						<div class="front">
							<img class="card-img" src="../media/images/profile-1.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Dr Ursular Fish</h3>
								<p class="card-subtitle">Lecturer in Marine Biology</p>
							</div>
							<a href="#" class="faux-link-overlay" aria-hidden="true">View Profile for Dr Ursular Fish</a>
						</div>
						<div class="back">
							<p class="card-text">Integer euismod, mauris quis maximus egestas, elit nibh maximus justo, et elementum tortor erat in odio. Donec ut vehicula velit.</p>
							<p><a href="#">View Profile<span class="sr-only"> for Dr Ursular Fish</span></a></p>
						</div>
					</div>
					<div class="card card-backed-primary card-linked">
						<div class="front">
							<img class="card-img" src="../media/images/profile-2.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Dr Victor Crow</h3>
								<p class="card-subtitle">Lecturer in Human Flight</p>
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
							<img class="card-img" src="../media/images/profile-3.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Dr Veronica Ferret</h3>
								<p class="card-subtitle">Senior Lecturer in Espionage</p>
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
							<img class="card-img" src="../media/images/profile-4.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Prof Mark Porpoise</h3>
								<p class="card-subtitle">Senior Lecturer in Pseudo Science</p>
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
							<img class="card-img" src="../media/images/profile-5.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Dr Nicholas Badger</h3>
								<p class="card-subtitle">Lecturer in Forestry</p>
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
							<img class="card-img" src="../media/images/pingpong-1x1.jpg">
							<div class="card-img-overlay-bottom-shaded">
								<h3 class="card-title">Dr Ping Pong</h3>
								<p class="card-subtitle">Senior Lecturer in Astrofrench</p>
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
			<h2 class="sr-only">Twitter quote</h2>
			<blockquote class="social-quote social-quote-twitter">
	<a href="https://twitter.com/UniKentNews/status/676708137903214592">
		<button></button>
		<p>Prof Michael Smith talks to Dominic King on BBC Radio Kent about Tim Peake's landmark space mission.</p>
	</a>
	<cite>
		<a href="https://twitter.com/unikentnews">@unikentnews</a>
	</cite>
</blockquote>

<h2 class="sr-only">Facebook quote</h2>
<blockquote class="social-quote social-quote-facebook">
	<a href="https://facebook.com">
		<button></button>
		<p>Something happened on facebook. Oh no!</p>
	</a>
	<cite>
		<a href="https://twitter.com/unikentnews">unikent</a>
	</cite>
</blockquote>

<div class="container">
	<h2>Inline video</h2>
	<div class="video-launcher" data-mode="inline">
		<div class="video-player">
			<div data-video-id="H4tcJUQ1USw" data-type="youtube"></div>
		</div>
		<img src="../media/images/thinkkent-16x9.jpg" class="card-img" alt="Dr Stephen Lowry holding a model of a comet">
	</div>
</div>

<div class="card-panel cards-backed cards-linked">
	<div class="card-panel-body">
		<div class="card card-backed-primary">
			<h3 class="card-title card-title-figure">37%</h3>
			<p class="card-text">37% of our academic staff are from overseas and we have students representing 148 nationalities.</p>
		</div>
		<div class="card card-backed-primary-light">
			<h3 class="card-title card-title-figure">1</h3>
			<p class="card-text">Dolphin mascot who speaks Astro French</p>
		</div>
		<div class="card card-backed-energy">
			<h3 class="card-title card-title-figure">92%</h3>
			<p class="card-text">92% of our research was found to be international quality in the Research Excellence Framework 2014 (an independent national survey of UK univercities).</p>
		</div>
		<div class="card card-backed-primary">
			<h3 class="card-title card-title-figure">5<sup>th</sup></h3>
			<p class="card-text">Kent gained the 5th highest score for overall student satisfaction in the National Student Survey 2015.</p>
		</div>
	</div>
</div>

<?php KentThemeHelper::footer(); ?>
