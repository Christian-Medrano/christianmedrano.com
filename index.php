<?php require_once 'header.php'; ?>

<div id="deck" class="deck">

	<!-- navigation -->
	<div id="nav" class="nav panel">
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
	</div>
	
	<!-- home -->
	<div id="home" class="home panel">
		this is the homepage
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