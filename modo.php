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


?>