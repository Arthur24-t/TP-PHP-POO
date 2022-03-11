<?php
 $_SESSION["autoriser"]=null;
   session_start();
   @$login=$_POST["login"];
   @$pass=$_POST["pass"];
   @$valider=$_POST["valider"];
   $erreur="";
   if(isset($valider)){
      include("connexion.php");
      $sel=$pdo->prepare("select * from Modo where nom_modo=? and mdp_modo=? limit 1");
      $sel->execute(array($login,$pass));
      $tab=$sel->fetchAll();
      if(count($tab)>0){
         $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
         " ".strtoupper($tab[0]["nom"]);
         $_SESSION["autoriser"]="oui";
         header("location:session.php");
      }
      else
         $erreur="Mauvais login ou mot de passe!";
   }
if ($_SESSION["autoriser"] != "oui")
{
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
   <body onLoad="document.fo.login.focus()">
      <h1>Authentification [ <a href="inscription.php">Créer un compte</a> ]</h1>
      <div class="erreur"><?php echo $erreur ?></div>
      <form name="fo" method="post" action="">
         <input type="text" name="login" placeholder="Login" /><br />
         <input type="password" name="pass" placeholder="Mot de passe" /><br />
         <input type="submit" name="valider" value="S'authentifier" />
      </form>
   </body>
</html> 
<?php
} else {
    ?>
<h1>Ajout d'un Billet ou commentaire </h1>
<form action="" method="POST">
    <h3>Billet</h3>
    <p>date du billet</p>
    <input type="date" name="date_bil">
</br> <p>titre du billet</p>
    <input type="text" name="titre_bil">
    </br> <p>Contenue du billet</p>
    <input type="text" name="contenue_bil">
    </br><p>id du billet</p>
    <input type="text" name="id_bil"></br>


    <h3>Commentaire</h3>
    <p>date du Commentaire</p>
    <input type="date" name="date_com">
</br></br> <p>Contenue du Commentaire</p>
    <input type="text" name="commentaire_com">
    </br><p>id du Commentaire</p>
    <input type="text" name="id_com"></br>
    </br><p>auteur du Commentaire</p>
    <input type="text" name="auteur_com"></br>
    </br><p>mail du Commentaire</p>
    <input type="text" name="mail_com"></br>
    </br><p>ID billet du Commentaire</p>
    <input type="text" name="idBill_com"></br>
    </br><input type="submit" name="ajout">
</form>
<?php  

if(isset($_POST['titre_bil']))
{
    $newBillet = new Billet($_POST['id_bil'],$_POST['date_bil'],$_POST['titre_bil'],$_POST['contenue_bil']);
}

if(isset($_POST['contenue_com']))
{
    $newCom = new Commentaire($_POST['id_com'],$_POST['date_bil'],$_POST['auteur_com'],$_POST['mail_com'],$_POST['commentaire_com'],$_POST['idBill_com']);
}


?>

    </body>

    </html>

<?php } ?>