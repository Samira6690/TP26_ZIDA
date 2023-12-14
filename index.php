<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
       <title>Inscription</title>
</head>
<body>
<header>Inscription</header>
<section>
<?php
@$nom=$_POST["nom"];
@$prenom=$_POST["prenom"];
@$age=$_POST["age"];
@$valider=$_POST["valider"];
$erreur="";
if (isset($valider)){
  if(empty($nom)) $erreur="<li>Nom laissé vide!</li>";
  if(empty($prenom)) $erreur.="<li>prenom laissé vide!</li>";
  if(! is_numeric($age)or $age<12) $erreur.="<li>age invalid!</li>";
}
?>
  <form name="fo" method="post" action="">
    <div class="label">Nom</div>
    <div class="input">
<input type="text" name="nom"/>
    </div>
    <div class="label">Prénom</div>
    <div class="input">
      <input type="text" name="prenom"/>
    </div>
      <div class="label">Age</div>
      <div class="input">
        <input type="number" min="12" name="age"/>
      </div>
        <div class="input">
          <input type="submit" name="valider" value="M'inscrire">
</div>
  </form>
  <?php if(!empty($erreur)){ ?>
  <div id="erreur"><?php echo $erreur ?></div>
 <?php } ?>

</section>
    
</body>
</html>