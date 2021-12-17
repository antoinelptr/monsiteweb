<div>
<h1 id="soustitre" >Ma formation:</h1>
<div id="forma">
<?php
$data=yaml_parse_file("data/formations.yaml"); 
echo '<p id="taille">'.$data["brevet"].'</p>';
echo '<p>'.$data["bv2"].'</p>';
echo '<p id="taille">'.$data["bac"].'</p>';
echo '<p>'.$data["bac2"].'</p>';
?>
</div>
</div>
<br><br><br>

