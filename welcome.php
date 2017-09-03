<div id="welcome">
	<div id="welcome-message">
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
	</div>
</div>