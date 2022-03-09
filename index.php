<html>

<body>

    <h1>Recherche des Billet/commentaire</h1>


    <form action="resultat.php" method="POST">
        <p>date du billet</p>
        <input type="date" name="date_bil">
        </br>
        <p>titre du billet</p>
        <input type="text" name="titre_bil">

        </br>
        <p>date du Commentaire</p>
        <input type="date" name="date_com">
        </br>
        <p>auteur du commentaire</p>
        <input type="text" name="auteur_com"></br>

        <input type="submit" name="submit">
    </form>
    <a href="login.php">Connection </a>


    <?php

    if (isset($_POST['titre_bil'])) {
        $date_bil = $_POST['date_bil'];
        $titre_bil = $_POST['titre_bil'];
        $ins = $pdo->prepare("select id_bil,date_bil,titre_bil,contenue_bil FROM billet Where date_bil= $date_bil  OR  titre_bil=  $titre_bil");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();

        $tab = $ins->fetchAll();

        for ($i = 0; $i < count($tab); $i++) {
            echo $tab[$i]["id_bil"] . " | " .
                $tab[$i]["date_bil"] . " | " .
                $tab[$i]["titre_bil"] . " | " .
                $tab[$i]["contenue_bil"] . " | ";
        }
    }


    if (isset($_POST['titre_bil'])) {
        $date_com = $_POST['date_com'];
        $auteur_com = $_POST['auteur_com'];
        $ins = $pdo->prepare("select Id_com,date_com,auteur_com,mail_auteur,commentaire,Id_bil FROM billet Where date_com= $date_com  OR  auteur_com=  $auteur_com");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();

        $tab = $ins->fetchAll();

        for ($i = 0; $i < count($tab); $i++) {
            echo $tab[$i]["id_bil"] . " | " .
                $tab[$i]["date_bil"] . " | " .
                $tab[$i]["titre_bil"] . " | " .
                $tab[$i]["contenue_bil"] . " | ";
        }
    }   



    ?>


</body>

</html>