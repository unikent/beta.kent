<?php
include dirname(dirname(__FILE__))."/bootstrap.php";
use \unikent\kent_theme\kentThemeHelper;

KentThemeHelper::header(
	array(
		'title' => "Kent Theme Demo - Form Page",
		'menu' => array(
			'Home' => '#',
			'Culture' => '#',
			'Environment' => '#',
			'Science' => '#',
			'Society' => '#',
			'Kent Life' => '#'
		),
		'meta' => array('title'=>'Form Demo Page - Kent Theme Beta'),
		'slim'=>true,
		'brand_header'=>true,
		'main_class' =>'content-page'
	)
);
KentThemeHelper::breadcrumb(array(
	'Theme Examples'=>'/',
	'Form Page'=>''
));
?>

<article class="content-page" itemscope itemtype="http://schema.org/Article">

	<section class="content-body">
		<div class="content-container">
			<div class="content-main">
				<form class="form" data-validate="true" method="POST" action="https://test.id.kent.ac.uk/student/reset/help" novalidate="novalidate">


					<div class="form-group ">
						<label for="username" class="form-control-label">Your Kent username <small class="text-muted">(if known)</small></label>
						<input id="username" name="username" type="text" class="form-control" value="" style="cursor: auto; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
						<small class="text-muted">this is some text that might be useful</small>
					</div>

					<div class="form-group ">
						<label for="firstname" class="form-control-label">Your first name</label>
						<input id="firstname" name="firstname" type="text" class="form-control" value="" required="" aria-required="true">

					</div>

					<div class="form-group ">
						<label for="surname" class="form-control-label">Your surname</label>
						<input id="surname" name="surname" type="text" class="form-control" value="" required="" aria-required="true">

					</div>

					<div class="form-group validation-group">
						<label for="dob_day" class="form-control-label">Date of birth</label><br>
						<label for="dob_month" style="display: none">Date of birth</label>
						<label for="dob_year" style="display: none">Date of birth</label>
						<select id="dob_day" name="dob_day" class="c-select untouched" title="Day is required for Date of birth" required="" aria-required="true">
							<option value="" disabled="" selected="">Day</option>
							<option value="1">01</option>
							<option value="2">02</option>
							<option value="3">03</option>
							<option value="4">04</option>
							<option value="5">05</option>
							<option value="6">06</option>
							<option value="7">07</option>
							<option value="8">08</option>
							<option value="9">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select id="dob_month" name="dob_month" class="c-select untouched" title="Month is required for Date of birth" required="" aria-required="true">
							<option value="" disabled="" selected="">Month</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Aug</option>
							<option value="9">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>
						<select id="dob_year" name="dob_year" class="c-select untouched" title="Year is required for Date of birth" required="" aria-required="true">
							<option value="" disabled="" selected="">Year</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							<option value="1946">1946</option>
							<option value="1945">1945</option>
							<option value="1944">1944</option>
							<option value="1943">1943</option>
							<option value="1942">1942</option>
							<option value="1941">1941</option>
							<option value="1940">1940</option>
							<option value="1939">1939</option>
							<option value="1938">1938</option>
							<option value="1937">1937</option>
							<option value="1936">1936</option>
						</select>
					</div>

					<div class="form-group">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Check this custom checkbox</span>
						</label>

					</div>

					<div class="form-group ">
						<label for="email" class="form-control-label">Your email address</label>
						<input id="email" name="email" type="email" class="form-control" value="" required="" aria-required="true">
						<small class="text-muted">This should be an email address that <strong>you have access to currently</strong>.</small>
					</div>

					<div class="form-group ">
						<label for="email_confirmation" class="form-control-label">Confirm your email address</label>
						<input id="email_confirmation" name="email_confirmation" type="email" class="form-control" value="" required="" aria-required="true">

					</div>

					<div class="form-group">
						<label for="campus" class="form-control-label">Campus? <small>This is some small help text</small></em></label><br>
						<select id="campus" name="campus" class="c-select form-control" required="" aria-required="true">
							<option value="" disabled="" selected="">Campus</option>
							<option value="Canterbury">Canterbury</option>
							<option value="Medway">Medway</option>
							<option value="Partner College">Partner College</option>
							<option value="Campus outside the UK">Campus outside the UK</option>
							<option value="Other">Other</option>
						</select>
					</div>

					<div class="form-group ">
						<label for="course" class="form-control-label">Some other textbox</label>
						<input id="course" name="course" type="text" class="form-control" value="" required="" aria-required="true">

					</div>


					<div class="form-group has-success">
						<label class="form-control-label" for="inputSuccess1">Good Input</label>
						<input type="text" class="form-control form-control-success" id="inputSuccess1">
						<div class="form-control-feedback">Success!</div>
						<small class="form-text text-muted">Example help text that remains unchanged.</small>
					</div>

					<div class="form-group has-danger">
						<label class="form-control-label" for="inputSuccess2">Bad Input</label>
						<input type="text" class="form-control form-control-success" id="inputSuccess2">
						<div class="form-control-feedback">Nope, failed</div>
					</div>

					<div class="form-group has-warning">
						<label class="form-control-label" for="inputSuccess3">Iffy Input</label>
						<input type="text" class="form-control form-control-success" id="inputSuccess3">
						<div class="form-control-feedback">a bit broken</div>
					</div>
					
					
					<div class="form-actions">
						<button type="submit" class="btn btn-primary"> Next  <i class="kf-chevron-right"></i></button>
					</div>
				</form>
				<br />
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
