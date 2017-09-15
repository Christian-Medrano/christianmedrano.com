<?php 
	require_once "recaptchalib.php";
?>
	<div id="form-alerts"></div>

	<h5>Say Hello</h5>

	<form id="ajax-contact" method="post" action="submit.php">
		<div class="field">
			<input name="name" id="name-input" required>
		</div>

		<br>

		<div class="field">
			<input type="email" name="email" id="email-input" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
			<br>
		</div>

		<br>

		<div class="field">
			<textarea name="message" id="message-input" rows="5" cols="30"  required></textarea>
		</div>

		<br>
		
		<!-- Google reCaptcha -->

		<!-- <div class="g-recaptcha" data-sitekey="6LckGC4UAAAAAPCvtzJ7KXUVRUCVvzAgM_etvkst" data-theme="dark"></div> -->
		
		<div class="field">
			<button id="submit" type="submit" value="Submit">Submit</button>
		</div>
	</form>
		
	
	<!-- reCaptcha Script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
