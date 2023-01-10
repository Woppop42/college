<?php
require_once("conf.php");
require_once("professeur.php");


class Promo {
    public int $id_classe;
    public string $nom;
    public string $niveau;
    public int $id_prof;
    public Prof $prof_principal;

    

    function afficherInfos(){
        echo "<tr><td>" . $this->prof_principal->nom ."</td><td>" .  $this->prof_principal->prenom . "</td><td>" . $this->prof_principal->mail . "</td><td>"  . $this->niveau . "</td><td>" . $this->nom . "</td></tr>";
    }
    static function readAll():array{
        global $pdo;
        $sql = "SELECT id_classe, nom, niveau, id_prof FROM classes";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $liste = $statement->fetchAll(PDO::FETCH_CLASS, "Promo");
        foreach($liste as $promo){
            //On charge les infos du prof principal sélectionné grâce à la propriété id_professeur de mon objet Promo.
            $prof_principal = Prof::readOne($promo->id_prof);
            //On enregistre les infos du prof_principal dans la propriété prof_principal
            $promo->prof_principal = $prof_principal;
        }


        return $liste;
    }
}