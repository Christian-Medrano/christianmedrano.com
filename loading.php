<div id="loading-screen" class="loading-screen">
	<div id="loading-content" class="loading-content center">
		<div id="welcome-message" class="welcome-message text-center"></div>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
</div>
<script>
	// get date
	var d = new Date();
	// convert date to hour of day
	var hod = d.getHours();

	// define greeting based on hour of day
	if (hod < 12){
		$('#welcome-message').text('Good Morning');
	} else if (hod >= 12 && hod < 18) {
		$('#welcome-message').text('Good Afternoon');
	} else if (hod >= 18) {
		$('#welcome-message').text('Good Evening');
	} else {
		$('#welcome-message').text('Welcome');
	}
</script>