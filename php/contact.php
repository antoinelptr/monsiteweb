<h1 id="soustitre">Coordonnées:</h1>
<div id="conctacf">

<?php

$data=yaml_parse_file("data/contact.yaml"); 

echo '<p id="taille">'.$data["tel"].'</p>';
echo '<p id="taille">'.$data["email"].'</p>';
?>
<?php
echo '</div>';
echo '<br>';
echo '<h1> OU </h1>';
echo '<form action="php/action.php" method="post">';
echo '<p>Nom Prenom :<br> <input type="text" name="nomprenom" /></p>';
echo '<p>Objet : <br> <input type="object" name="objet" /></p>';
echo '<p id="mess"> Message : <br>  <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"> </textarea> </p>';
echo '<p>Votre Email : <br> <input type="email" name="mail" /></p>';
echo '<p>Votre Telephone : <br> <input type="phone" name="tel" /></p>';
echo ' <div class="g-recaptcha" data-sitekey="6LeSXKgdAAAAAJqtz6KwIECdixJ82cf8HXTrJ2GB"></div>';
echo '<p id="bouton"><input type="submit" id="envoyer" value="OK"></p>';
echo '</form>';
?>

<?php
 if(isset($_POST['submit']) && $_POST['submit'] == 'SUBMIT'){
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LeSXKgdAAAAAIMc4bN7QK5t1yM3dsmhzuU5BJzu';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){} 
    }
}
?>