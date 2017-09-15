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

						// Cover
						echo '<div class="cover">';
						echo '<img src="'.$project->covers->$coverSize.'" alt="">';
						echo '</div>';

						// Project Info
						echo '<div class="project-info">';
						echo '<h3>'.$project->name.'</h3>';

						// Fields
						echo '<ul class="fields">';
						foreach ($project->fields as $field) {
							echo '<li><h4>'.$field.'</h4></li>';
						}
						echo '</ul>';

						// View on Behance
						echo '<a href="'.$project->url.'" target="_blank">';
						echo '<div class="cta">';
						echo 'Open in Behance';
						echo '</div>';
						echo '</a>';

						// Stats
						echo '<div class="stats">';

						echo '<div class="stat">';
						echo '<img src="img/icons/views.png" alt="views">';
						echo '<h4>'.$project->stats->views.'</h4>';
						echo '</div>';

						echo '<div class="stat">';
						echo '<img src="img/icons/thumbs-up.png" alt="appreciations">';
						echo '<h4>'.$project->stats->appreciations.'</h4>';
						echo '</div>';

						echo '<div class="stat">';
						echo '<img src="img/icons/word-bubble.png" alt="appreciations">';
						echo '<h4>'.$project->stats->comments.'</h4>';
						echo '</div>';

						echo '</div>';

						// Close Info
						echo '</div>';

						// Close Project
						echo '</div>';
						
					}
				} else {
					echo '<p>Unable to retrieve projects at this time</p>';
				}
			?>
		</div>
	 </div>
</div>