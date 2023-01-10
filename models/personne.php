<?php

class Personne {
    public string $prenom;
    public string $nom;

    function __construct(string $prenom, string $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        echo "J'ai créé une personne !<br>";
    }
    function direBonjour(){
        echo "<br>Bonjour, je m'appelle ". $this->nom . " ". $this->prenom ." et je suis né le ". $this->date_naissance. "<br>";
        }
}
?>