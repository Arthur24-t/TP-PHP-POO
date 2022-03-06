<?php
require 'Commentaire.php' ;

class Billet
{
    private int $Id_bil;
    private int $date_bil; 
    private String $titre_bil;
    private String $contenu;


    public function Billet($Id_bil,$date_bil,$titre_bil,$contenu)
    {
    $this->Id_bil=$Id_bil;
    $this->date_bil=$date_bil;
    $this->titre_bil=$titre_bil;
    $this->contenu=$contenu;
    }



    public function getId_bil(){
        return $this->Id_bil;
    }
    public function getdate_bil(){
        return $this->date_bil;
    }
    public function gettitre_bil(){
        return $this->titre_bil;
    }
    public function getcontenu(){
        return $this->contenu;
    }
    

    public function setId_bil($Id_bil){
    $this->Id_bil=$Id_bil;
    }
    public function setdate_bil($date_bil){
        $this->date_bil=$date_bil;
    }
    public function settitre_bil($titre_bil){
     $this->titre_bil=$titre_bil;
    }
    public function setmail_auteur($contenu){
        $this->contenu=$contenu;
     } 
}





?>