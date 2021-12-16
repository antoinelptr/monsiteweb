<div>
<h1 id="soustitre" id="rouge" >Bienvenue sur mon site Web ! </h1>
		<div id="taille">
	<?php
	$data=yaml_parse_file("data/accueil.yaml"); 
		echo '<h1>'.$data["prenom"].'</h1>';
		echo '<h1>'.$data["nom"].'</h1>';
		echo '<img src="'.$data["image"].'" />';
		echo '<h1>'.$data["accroche"].'</h1>';
	?>
	</div>
</div>


