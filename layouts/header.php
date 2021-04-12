<header>
		<nav>
			<div class="container">
				<ul class="nav-list">
					<li><a href="index.php?pages=home">HOME</a></li>
					<li><a href="index.php?pages=about-us">ABOUT </a></li>
					<li><a href="index.php?pages=find-doctors">FIND DOCTORS</a></li>
					<li><a href="index.php?pages=patient-tracking">PATIENT TRACKING</a></li>
					<li><a href="index.php?pages=contact-us">CONTACT US</a></li>
					<?php if(isset($_GET['pages']) && $_GET['pages']=='patient-tracking'){?>
					<li><a href="index.php?pages=login">LOG OUT</a></li>
					<?php }?>
				</ul>
				<ul class="social-list">
					<li><a href="https://www.facebook.com/stopdengue19/">
						<img src="public/images/facebook.png" alt="facebook" />
					</a>
				</li>
				<li>
					<a href="#">
						<img src="public/images/twitter.png" alt="twiteer" />
					</a>
				</li>
				<li>
					<a href="https://www.youtube.com/results?search_query=dengue">
						<img src="public/images/youtube.png"
						alt="youtube" />
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>