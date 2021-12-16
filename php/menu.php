<?php
$data=yaml_parse_file("data/menu.yaml");


echo '<nav>';
foreach($data AS $cle=>$val){
	echo '<a href="#'.$cle.'">'.$val.'</a> ';
}
echo '</nav>';

?>