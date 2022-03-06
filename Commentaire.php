<?php 

require 'Billet.php' ;

class Commentaire 
{
    private int $id_com;
    private String $date_com;
    private String $auteur_com;
    private String $mail_auteur;
    private String $commenaitre;
    private int $id_bil;
    

    public function Commentaire($id_com,$date_com,$auteur_com,$mail_auteur,$commenaitre,$id_bil)
    {
    $this->id_com=$id_com;
    $this->date_com=$date_com;
    $this->auteur_com=$auteur_com;
    $this->mail_auteur=$mail_auteur;
    $this->commenaitre=$commenaitre;
    $this->id_bil=$id_bil;
    }

    public function getId_com(){
        return $this->id_com;
    }
    public function getDate_com(){
        return $this->date_com;
    }
    public function getauteur_com(){
        return $this->auteur_com;
    }
    public function getmail_auteur(){
        return $this->mail_auteur;
    }
    public function getcommenaitre(){
        return $this->commenaitre;
    }
    public function getid_bil(){
        return $this->id_bil;
    }

    public function setId_com($id_com){
    $this->id_com=$id_com;
    }
    public function setdate_com($date_com){
        $this->date_com=$date_com;
    }
    public function setauteur_com($auteur_com){
     $this->auteur_com=$auteur_com;
    }
    public function setmail_auteur($mail_auteur){
        $this->mail_auteur=$mail_auteur;
     } 
     public function setcommenaitre($commenaitre){
        $this->commenaitre=$commenaitre;
     }
     public function setid_bil($id_bil){
        $this->id_bil=$id_bil;
     } 
}




?>

