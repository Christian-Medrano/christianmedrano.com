<?php 
	// Request projects data
	$projectsURL = 'https://api.behance.net/v2/users/christianmedrano/projects?client_id=nJKyMss8eOnHmuOOFVmfSGi9QwyDCZNy';
	$data = json_decode(file_get_contents($projectsURL));

	$coverSize = "404";
 ?>
<div class="window">
<img class="behance-badge" src="img/behance-badge.svg" alt="Powered by Behance">
<div class="projects">
	<div class="row">
	<?php 
		if (isset($data)) {
			foreach ($data->projects as $project) {
				$projectName = $project->name;
				$projectUrl = $project->url;
				$projectCover = $project->covers->$coverSize;
				$projectViews = $project->stats->views;
				$projectLikes = $project->stats->appreciations;
				$projectComments = $project->stats->comments;

				echo '<div class="project col col-3 col-tb-4 col-mb-12 px-1">';
				// Project Cap
				echo '<a href="'.$projectUrl.'" target="blank">';
				echo '<div class="project-cap">';

				echo '<img src="'.$projectCover.'" alt="'.$projectName.'">';

				// Stats
				echo '<div class="stats">';
				// views
				echo '<div class="stat">';
				echo '<img src="img/ui/views-light.png"><h6>'.$projectViews.'</h6>';
				echo '</div>';
				// likes
				echo '<div class="stat">';
				echo '<img src="img/ui/likes-light.png"><h6>'.$projectLikes.'</h6>';
				echo '</div>';
				// comments
				echo '<div class="stat">';
				echo '<img src="img/ui/comments-light.png"><h6>'.$projectComments.'</h6>';
				echo '</div>';
				echo '</div>'; // Close stats


				// Cap Overlay
				echo '<div class="cap-overlay">';
				echo '<button class="btn-light center">Open in Behance</button>';
				echo '</div>'; // Close Cap Overlay

				echo '</div>'; // Close Image Cap
				echo '</a>';

				// Project Info
				echo '<div class="project-info">';
				// Project Name
				echo '<a href="'.$projectUrl.'" target="_blank"><h3>'.$projectName.'</h3></a>';
				// Fields
				echo '<ul class="fields">';
				foreach ($project->fields as $field) {
					echo '<li><p>&nbsp;<small>'.$field.'</small></p></li>';
				}
				echo '</ul>';
				echo '</div>'; // Close Project Info

				echo '</div>'; // Close Project
			}
		}
	 ?>
	 </div>
</div>
</div>