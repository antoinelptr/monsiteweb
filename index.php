
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css"/>
		<meta charset="utf-8">
		<title>Site</title>
	</head>


	<body>
		<header>
				<?php include("php/menu.php"); ?>
		</header>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php 
	
	$data=yaml_parse_file("data/menu.yaml");
	foreach($data AS $cle=>$val){
		echo '<section id="'.$cle.'">';
		echo '<div class="cartouche">';
		include('php/'.$cle.'.php');
		echo '</div>';
		echo '</section>';
	}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

	</body>
</html>