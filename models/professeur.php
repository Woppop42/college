<?php
 require_once("conf.php");
require_once("personne.php");

class Prof extends Personne{
    public string $mail;
    

    function __construct(){

    }
    function afficherInfos(){
        echo "<tr><td>" . $this->prenom ."</td><td>" .  $this->nom . "</td><td>" . $this->mail . "</td></tr>";
    }
    static function readAll():array{

        global $pdo; //permet d'allez cherche la variable $pdo à l'extérieur de la fonction (portée global)
        $sql = "SELECT nom, prenom, mail FROM profs "; // ecriture de la requête sql dans une chaîne de caractères
        $statement = $pdo->prepare($sql); // préparation de la requete sql par pdo
        $statement->execute(); // execution de la requête
        $profs = $statement->fetchAll(pdo::FETCH_CLASS, "Prof"); // récupération des résultats de la requête sous forme de tableau associatif
        // fetchAll est nécessaire que dans le SELECT car on récupère des élément de la bdd
    
        return $profs;
    }
    // fonction permettant de renvoyer les informations d'un professeur en fonction de son id.
    static function readOne( int $id): Prof{
        global $pdo; 
        //Utilisation d'un paramètre nommé :id afin de se protéger des injections SQL.
        $sql = "SELECT nom, prenom, mail FROM profs WHERE id_prof = :id"; 
        $statement = $pdo->prepare($sql); 
        //Lien entre le paramètre nommé :id et la variable $id qui sont de type INT.
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute(); 
        // Récupération du résultat de la requête sous forme d'un objet de la classe Pro grâce à fetch().
        $statement->setFetchMode(PDO::FETCH_CLASS, "Prof");
        $prof = $statement->fetch(); 
    
        return $prof;
    }
}
?>

    
