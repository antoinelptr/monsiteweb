<h1 id="soustitre" >Mes experiences professionnelles: </h1>
<div >
<?php
$data=yaml_parse_file("data/experiences.yaml"); 

echo '<br><hr><p id="taille">'.$data["forma"].'</p>';
echo '<p id="taillemini">'.$data["forma2"].'</p> <br><hr>';
echo '<p id="taille">'.$data["stage3eme"].'</p>';
echo '<p id="taillemini">'.$data["stage3eme2"].'</p> ';
echo '<p id="taillemini">'.$data["stage3eme3"].'</p> <br><hr>';
echo '<p id="taille">'.$data["mini"].'</p>';
echo '<p id="taillemini">'.$data["mini2"].'</p> <br><hr>';
echo '<p id="taille">'.$data["ordi"].'</p>';
echo '<p id="taillemini">'.$data["ordi2"].'</p>';
echo '<p id="taille"> '.$data["ordi3"].'</p> <br><hr>'
?>
</div>
