<h1 id="soustitre" >A propos de moi:</h1>
<div id="taille">
<?php
$data=yaml_parse_file("data/apropos.yaml"); 
echo '<h1>'.$data["passion"].'</h1>';
echo '<img id="serveur" src="'.$data["image"].'" />';
echo '<p>'.$data["accr"].'</p>';


?>
</div>
