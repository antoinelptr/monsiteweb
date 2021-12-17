<h1 id="soustitre">Coordonnées:</h1>
<div id="conctacf">

<?php

$data=yaml_parse_file("data/contact.yaml"); 

echo '<p id="taille">'.$data["tel"].'</p>';
echo '<p id="taille">'.$data["email"].'</p>';
?>
</div>
<br>
<h1> OU </h1>
<form action="action.php" method="post">
 <p>Votre Nom :<br> <input type="text" name="nom" /></p>
 <p>Votre Nom de famille : <br> <input type="text" name="nomfamille" /></p>
  <p>Objet : <br> <input type="object" name="objet" /></p>
  <p id="mess"> Message : <br>  <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"> </textarea> </p>
 <p>Votre âge : <br> <input type="text" name="age" /></p>
 <p>Votre Email : <br> <input type="email" name="mail" /></p>
 <p>Votre Telephone : <br> <input type="phone" name="tel" /></p>
 <div class="g-recaptcha" data-sitekey="6LeSXKgdAAAAAJqtz6KwIECdixJ82cf8HXTrJ2GB"></div>
 <p id="bouton"><input type="submit" id="envoyer" value="OK"></p>
</form>

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