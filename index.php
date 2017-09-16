<?php require_once 'header.php'; ?>

<div id="background" class="background">
	<img src="img/bg.jpg" alt="">
	<div id="backround-overlay" class="background-overlay"></div>
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
			<div class="nav-arrow">
				<?php include 'img/ui/nav-arrow-right.php'; ?>
			</div>
		</div>

		<div id="nav-bottom" class="nav-bottom">
			<div class="nav-arrow">
				<?php include 'img/ui/nav-arrow-bottom.php'; ?>
			</div>
		</div>

		<div class="center text-center">
			<h2>Elegant Design Solutions By</h2>
			<h1>Christian Mikhael</h1>
			<div class="social-media">
				<a href="http://www.linkedin.com/christianmedrano"><img src="img/ui/linkedin.png" alt="Behance Link" class="sm-icon"></a>
				<a href="http://www.behance.net/christianmedrano"><img src="img/ui/behance.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/github.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/facebook.png" alt="Behance Link" class="sm-icon"></a>
				<a href="https://github.com/Christian-Medrano"><img src="img/ui/instagram.png" alt="Behance Link" class="sm-icon"></a>
			</div>
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