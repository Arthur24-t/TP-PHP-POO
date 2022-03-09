<html>
<body>
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

    $ins = $pdo->prepare("insert into billet (id_bil,date_bil,titre_bil,contenue_bil) values(:id_bil,:date_bil,:titre_bil,:contenue_bil)");
    $ins->execute(array(
       ":Id_bil"=>$_POST['id_bil'],
       ":Date_bil"=> $_POST['date_bil'],
       ":Titre_bil"=>$_POST['titre_bil'],
       ":contenu"=>$_POST['contenue_bil']
    )); 

}

if(isset($_POST['contenue_com']))
{
    $newCom = new Commentaire($_POST['id_com'],$_POST['date_bil'],$_POST['auteur_com'],$_POST['mail_com'],$_POST['commentaire_com'],$_POST['idBill_com']);
    $ins = $pdo->prepare("insert into utilisateurs (id_com,date_bil,auteur_com,mail_com,commentaire_com,idBill_com) values(:id_com,:date_bil,:auteur_com,:mail_com,:commentaire_com,:idBill_com)");
    $ins->execute(array(
       ":id_com"=>$_POST['id_bil'],
       ":date_bil"=> $_POST['date_bil'],
       ":auteur_com"=>$_POST['titre_bil'],
       ":mail_com"=>$_POST['contenue_bil'],
       ":commentaire_com"=>$_POST['commentaire_com'],
       ":idBill_com"=>$_POST['idBill_com']
    )); 
}


?>
</body>
</html>