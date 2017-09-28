<?php 
require_once 'header.php'; 
require_once 'loading.php'
?>


<div id="menu" class="menu">
	<div id="menu-icon" class="menu-icon">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul id="menu-links" class="menu-links">
		<li id="menu-home" class="menu-link">Home</li>
		<li id="menu-portfolio" class="menu-link">Portfolio</li>
		<li id="menu-resume" class="menu-link">Résumé</li>
		<li id="menu-contact" class="menu-link">Contact</li>
	</ul>
</div>

<div id="background" class="background">
	<img src="img/bg2.jpg" alt="">
	<div id="backround-overlay" class="background-overlay"></div>
</div>

<!-- contact form notification -->
<div id="form-alert" class="form-alert">
	<div class="space-content">
		<p id="form-alert-text" class="form-alert-text"></p>
		<div id="hide-form-alert" class="hide-form-alert">
			<img src="img/ui/close-button.png" alt="hide notification">
		</div>
	</div>
</div>

<div id="deck" class="deck">

	<!-- navigation -->
	
	<!-- home -->
	<div id="home" class="home panel">
		<!-- arrow navigation -->
		<div id="nav-left" class="nav-left">
			<div class="nav-left-caption nav-caption">
				<p><small>Résumé</small></p>
			</div>
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
			<div id="blurb-content" class="blurb-content">
				<h2>Experiences Designed by</h2>
				<h1>Christian Medrano</h1>
				<div class="social-media">
					<a href="http://www.linkedin.com/in/christianmedrano" target="_blank"><img src="img/ui/linkedin.png" alt="LinkedIn Link" class="sm-icon"></a>
					<a href="http://www.behance.net/christianmedrano" target="_blank"><img src="img/ui/behance.png" alt="Behance Link" class="sm-icon"></a>
					<a href="https://github.com/Christian-Medrano" target="_blank"><img src="img/ui/github.png" alt="Github Link" class="sm-icon"></a>
					<a href="https://www.facebook.com/christian.m.medrano.5" target="_blank"><img src="img/ui/facebook.png" alt="Facebook Link" class="sm-icon"></a>
					<a href="https://www.instagram.com/christian.mikhael/" target="_blank"><img src="img/ui/instagram.png" alt="Instagram Link" class="sm-icon"></a>
				</div>
			</div>
			<!-- welcome intro -->
		</div>
	</div>

	<!-- resume -->
	<div id="resume" class="resume panel">
		<?php include 'resume.php'; ?>
	</div>

	<!-- contact -->
	<div id="contact" class="contact panel">
		<?php include 'contact.php'; ?>
	</div>

	<!-- portfolio -->
	<div id="portfolio" class="portfolio panel">
		<?php include 'portfolio.php'; ?>		
	</div>

</div>

<?php require_once 'footer.php'; ?>