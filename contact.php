<div id="contact" class="modal center">
	<div class="modal-bar">
		<h5>Say Hello</h5>
		<img id="close-contact" class="btn-close" src="img/icons/close.svg" alt="exit">
	</div>

	<div class="modal-container">
		<form action="" method="post">

			<label for="name" id="name-label">Name</label>
			<br>
			<input name="name" id="name-input" required>
			<br>

			<label for="email" id="email-label">Email</label>
			<br>
			<input type="email" name="email" id="email-input" required>
			<br>

			<label for="message" id="message-label">Message</label>
			<br>
			<textarea name="message" id="message-input" rows="5" cols="30"></textarea>
			<br>

			<div class="g-recaptcha" data-sitekey="6LckGC4UAAAAAPCvtzJ7KXUVRUCVvzAgM_etvkst" data-theme="dark"></div>

			<input type="submit" value="Submit">

		</form>
	</div>
		
	
	<!-- reCaptcha Script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

</div>