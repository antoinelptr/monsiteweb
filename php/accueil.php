<div>
<h1 id="soustitre" id="rouge" >Bienvenue sur mon site Web ! </h1>
		<div id="taille">
	<?php
	$data=yaml_parse_file("data/accueil.yaml"); 
		echo '<p>'.$data["prenom"].'</p>';
		echo '<p>'.$data["nom"].'</p>';
		echo '<img id="moi" src="'.$data["image"].'" />';
		echo '<p>'.$data["accroche"].'</p>';
	?>
	</div>
</div>


