<div id="contact" class="modal center">
	<div class="modal-bar">
		<h5>Say Hello</h5>
		<img id="close-contact" class="btn-close" src="img/icons/close.svg" alt="exit">
	</div>

	<div class="modal-container">
		<form action="" method="post">

			<label for="name">Name</label>
			<input name="name" required><br />

			<label for="email">Email</label>
			<input type="email" name="email" required><br />

			<label for="message">Message</label>
			<input type="text" name="message" required><br />

			<div class="g-recaptcha" data-sitekey="6LckGC4UAAAAAPCvtzJ7KXUVRUCVvzAgM_etvkst" data-theme="dark"></div>

			<input type="submit" value="Submit">

		</form>
	</div>
		
	
	<!-- reCaptcha Script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

</div>