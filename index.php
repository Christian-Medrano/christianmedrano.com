<?php require_once 'header.php'; ?>

<div id="background" class="background">
	<img src="img/bg.jpg" alt="">
	<div id="backround-overlay" class="background-overlay"></div>
</div>

<div id="form-alert" class="form-alert">
	<p id="form-alert-text" class="form-alert-text"></p>
	<div id="hide-form-alert" class="hide-form-alert">
		<img src="img/ui/close-button.png" alt="hide notification">
	</div>
</div>

<div id="deck" class="deck">

	<!-- navigation -->
	
	<!-- home -->
	<div id="home" class="home panel">
		<!-- arrow navigation -->
		<div id="nav-left" class="nav-left">
			<div class="nav-arrow">
				<?php include 'img/ui/nav-arrow-left.php'; ?>
			</div>
		</div>

		<div id="nav-right" class="nav-right">
			<div class="nav-right-caption nav-caption">
				<p><small>Portfolio</small></p>
			</div>
			<div class="nav-arrow">
				<?php include 'img/ui/nav-arrow-right.php'; ?>
			</div>
		</div>

		<div id="nav-bottom" class="nav-bottom">
			<div class="nav-bottom-caption nav-caption">
				<p><small>Contact</small></p>
			</div>
			<div class="nav-arrow">
				<?php include 'img/ui/nav-arrow-bottom.php'; ?>
			</div>
		</div>

		<div id="blurb" class="blurb center text-center">
			<h2>Elegant Design Solutions by</h2>
			<h1>Christian Mikhael</h1>
			<div class="social-media">
				<a href="http://www.linkedin.com/christianmedrano"><img src="img/ui/linkedin.png" alt="Behance Link" class="sm-icon"></a>
				<a href="http://www.behance.net/christianmedrano"><img src="img/ui/behance.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/github.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/facebook.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/instagram.png" alt="Behance Link" class="sm-icon"></a>
			</div>
			<!-- welcome animation -->
			<!-- <div id="welcome" class="welcome">
				<div id="welcome-message" class="center"></div>
			</div> -->
		</div>
	</div>

	<!-- resume -->
	<div id="resume" class="resume panel">
		<?php include 'resume.php'; ?>
	</div>

	<!-- portfolio -->
	<div id="portfolio" class="portfolio panel">
		<?php include 'portfolio.php'; ?>		
	</div>

	<!-- contact -->
	<div id="contact" class="contact panel">
		<?php include 'contact.php'; ?>
	</div>

</div>

<?php require_once 'footer.php'; ?>