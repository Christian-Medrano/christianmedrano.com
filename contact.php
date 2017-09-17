<?php 
	require_once "recaptchalib.php";
?>

	<div class="center">
		

		<form id="ajax-contact" method="post" action="submit.php">
			<h1>Say Hello</h1>
			<div class="field">
				<input name="name" id="name-input" placeholder="Name" required>
			</div>

			<br>

			<div class="field">
				<input type="email" name="email" id="email-input" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Email" required>
				<br>
			</div>

			<br>

			<div class="field">
				<textarea name="message" id="message-input" rows="5" cols="30" placeholder="Message" minlength="25" required></textarea>
				<p class="text-right"><small>30 character minimum</small></p>
			</div>

			<br>
			
			<!-- Google reCaptcha -->

			<!-- <div class="g-recaptcha" data-sitekey="6LckGC4UAAAAAPCvtzJ7KXUVRUCVvzAgM_etvkst" data-theme="dark"></div> -->
			
			<div class="field">
				<button id="submit" type="submit" value="Submit">Submit</button>
			</div>
		</form>
	</div>
	
	<!-- reCaptcha Script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
