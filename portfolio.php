<div id="portfolio" class="modal center">
	<div class="modal-bar">
		<h2>Portfolio</h2>
		<img id="close-portfolio" class="btn-close" src="img/icons/close.svg" alt="exit">
	</div>
	<div id="projects">
		
		
		<div class="project">
			<div class="cover">
				<img src="https://www.webpagefx.com/blog/images/cdn.designinstruct.com/files/542-free-branding-identity-mockups/29-branding-identity-mock-up-vol-8-full.jpg" alt="">
			</div>
			<div class="project-info">
				<h3>Project Name</h3>
				<h4>Branding / Photography</h4>
			</div>
		</div>
		<?php 
			$postsURL = 'https://api.behance.net/v2/users/christianmedrano/projects?client_id=nJKyMss8eOnHmuOOFVmfSGi9QwyDCZNy';
			$data = json_decode(file_get_contents($postsURL));
			$coverSize = "404";

			$i = 0;

			if (isset($data)) {
				foreach ($data->projects as $project){
					echo '<div class="project">';

					echo '<div class="cover">';
					echo '<img src="'.$project->covers->$coverSize.'" alt="">';
					echo '</div>';

					echo '<div class="project-info">';
					echo '<h3>'.$project->name.'</h3>';
					echo '<ul>';
					foreach ($project->fields as $field) {
						echo '<li><h4>'.$field.'</h4></li>';
					}
					echo '</ul>';
					echo '</div>';

					echo '</div>';
				}
			} else {
				echo '<p>Could not retrieve projects.</p>';
			}
		?>
	 </div>
</div>