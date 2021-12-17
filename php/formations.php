<div>
<h1 id="soustitre" >Ma formation:</h1>
<div id="forma">
<?php
$data=yaml_parse_file("data/formations.yaml"); 
echo '<br><hr> <p id="taille">'.$data["brevet"].'</p>';
echo '<p id="taille">'.$data["date"].'</p>';
echo '<p id="taillemini">'.$data["bv2"].'</p><br><hr>';
echo '<p id="taille">'.$data["bac"].'</p>';
echo '<p id="taille">'.$data["date2"].'</p>';
echo '<p id="taillemini">'.$data["bac2"].'</p> <br><hr>';
?>
</div>
</div>
<br><br><br>

