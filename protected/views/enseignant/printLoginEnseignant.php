<p style="text-align: right; margin: 20px;">à l'attention de : <?php echo $item['nom_enseignant']; ?></p>
<h2>Instructions de première connexion</h2>
<p  style="margin: 20px;">
Madame, Monsieur,
<br/>
<br/>
Votre profil est actif sur le réseau éNet de votre établissement. Voici vos identifiants générés : 
<br/>
<br/>
<span style="padding-left: 25px">- identifiant : <b><?php echo $item['lgn']; ?></b></span>
<br/>
<span style="padding-left: 25px">- mot de passe : <b><?php echo $item['psswd']; ?></b></span>
<br/>
<br/>
Vous pouvez désormais vous connecter à votre profil à l'adresse <i><?php echo 'http://' . $_SERVER['HTTP_HOST'].Yii::app()->baseUrl ?></i>. 
<br/>
<br/>
Nous vous invitons à ne pas communiquer ces <b>informations personnelles</b> et à modifier votre mot de passe dans les paramètres de votre profil.
<br/>
<br/>
<?php
echo '<pre>';
var_dump($item['psswd']);
echo '</pre>';
?>
</p>

