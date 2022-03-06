<?php

class Modo
{

    private string $nom;
    public string $username;
    public string $mdp;



    public function Modo()
    {
        $this->nom = "modo";
        $this->username = "modo";
        $this->mdp = "modo";
    }

    public function getusername()
    {
        return $this->username;
    }
    public function getMdp()
    {
        return $this->mdp;
    }
}

$modo = new Modo();

$username = $_POST['username'];
$mdp = $_POST['mdp'];

if (isset($_POST['submit'])) {
    if ($username == $modo->getusername() && $mdp == $modo->getMdp()) {
        $_POST['valide'] = 1;
        
    }
}
if ($_POST['valide'] == 0) {


?>
    <html>

    <body>

        <h1>Connection</h1>


        <form action="" method="POST">

            <p>Pseudo</p>
            <input type="text" name="username">
            </br>
            <p>titre du billet</p>
            <input type="password" name="mdp">
            <input type="submit" name="submit">
        </form>
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