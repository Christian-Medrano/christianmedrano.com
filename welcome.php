<div id="welcome" class="fullscreen">
	<div id="welcome-message" class="center">
		<p><em>
		<?php 
			$tod = date('G');

			if($tod < 12){
				echo 'Good Morning';
			}else if ($tod > 12 && $tod < 18) {
				echo 'Good Afternoon';
			}else{
				echo 'Good Evening';
			}
		 ?>
		</em></p>
	</div>
</div>