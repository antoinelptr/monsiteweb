<div>
<h1 id="soustitre" >Ma formation:</h1>
<div id="forma">
<?php
$data=yaml_parse_file("data/formations.yaml"); 
echo '<p>'.$data["brevet"].'</p>';
echo '<p>'.$data["bac"].'</p>';
?>
</div>
</div>
<br><br><br>

