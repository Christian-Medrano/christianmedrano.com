<div id="portfolio" class="modal center">
	<div class="modal-bar">
		<img src="img/logos/behance-badge.svg" alt="">
		<img id="close-portfolio" class="btn-close" src="img/icons/close.svg" alt="exit">
	</div>

	<div class="modal-container">
		<div id="projects">
			<?php 
				$postsURL = 'https://api.behance.net/v2/users/christianmedrano/projects?client_id=nJKyMss8eOnHmuOOFVmfSGi9QwyDCZNy';
				$data = json_decode(file_get_contents($postsURL));
				$coverSize = "404";

				$i = 0;

				if (isset($data)) {
					foreach ($data->projects as $project){
						
						echo '<div class="project">';
						echo '<a href="'.$project->url.'" target="_blank">';

						echo '<div class="cover">';
						echo '<img src="'.$project->covers->$coverSize.'" alt="">';
						echo '</div>';

						echo '<div class="project-info">';
						echo '<h3>'.$project->name.'</h3>';
						// echo '<ul>';
						// foreach ($project->fields as $field) {
						// 	echo '<li><h4>'.$field.'</h4></li>';
						// }
						// echo '</ul>';
						echo '</div>';

						echo '</a>';
						echo '</div>';
						
					}
				} else {
					echo '<p>Could not retrieve projects. Please make sure your internet connection is stable, and reload the page</p>';
				}
			?>
		</div>
	 </div>
</div>