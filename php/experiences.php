<hr>
<h1 id="soustitre" >Mes experiences professionnelles: </h1>
<div id="taille">
<?php
$data=yaml_parse_file("data/experiences.yaml"); 

echo '<p>'.$data["forma"].'</p>';
echo '<p>'.$data["stage3eme"].'</p>';
echo '<p>'.$data["mini"].'</p>';
echo '<p>'.$data["ordi"].'</p>';
?>
</div>
<hr>
