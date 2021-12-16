<h1 id="soustitre" > Mes compétences:</h1>
<div id="taille">
<?php
$data=yaml_parse_file("data/competences.yaml"); 
echo "<h1 style='color:#FEF86C'>".$data['domaine']."</h1>";
echo '<p>'.$data["item"].'</p>';
echo '<p>'.$data["explitem"].'</p>';
echo '<p>'.$data["niveauhtml"].'</p>';
echo '<p>'.$data["niveaucss"].'</p>';
echo '<p>'.$data["niveauphp"].'</p>';
echo '<p>'.$data["niveauyaml"].'</p>';
echo '<p>'.$data["niveausql"].'</p>';
echo '<p>'.$data["niveaumoyen"].'</p>';
echo '<p>'.$data["scorecertif"].'</p>';
echo "<h1 style='color:#FEF86C'>".$data['domaines']."</h1>";
echo '<p>'.$data["items"].'</p>';
echo '<p>'.$data["niveaucisco"].'</p>';
echo '<p>'.$data["niveaudeb"].'</p>';
echo '<p>'.$data["niveaudhcp"].'</p>';
echo '<p>'.$data["niveaudns"].'</p>';
echo '<p>'.$data["niveaumoy"].'</p>';
echo '<p>'.$data["scorecertif"].'</p>'
?>
</div>





 