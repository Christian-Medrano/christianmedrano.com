<?php 
	require_once "recaptchalib.php";
?>

	<div class="container-fluid">
		<div class="row">

		<div class="col col-4 col-tb-8 col-mb-12 center px-2">
			<form id="ajax-contact" method="post" action="submit.php">
				<h1>Say Hello</h1>
				<div class="field">
					<input name="name" id="name" class="input" required>
					<label for="name">Name</label>
				</div>

				<br>

				<div class="field">
					<input  type="email" name="email" id="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="input" required>
					<label for="email">Email</label>
				</div>

				<br>

				<div class="field">
					<textarea name="message" id="message" rows="5" cols="30" minlength="25" class="input" title="Message should contain at least 30 characters." required></textarea>
					<label for="message">Message</label>
					<p class="text-right"><small>30 character minimum</small></p>
				</div>

				<br>
				
				<!-- Google reCaptcha -->

				<!-- <div class="g-recaptcha" data-sitekey="6LckGC4UAAAAAPCvtzJ7KXUVRUCVvzAgM_etvkst" data-theme="dark"></div> -->
				
				<div class="field">
					<button id="submit" type="submit" value="Submit"><span></span>Submit</button>
				</div>
			</form>
		</div>

		</div>
	</div>
	
	<!-- reCaptcha Script -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
