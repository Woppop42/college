<?php 
require_once("models/professeur.php");
// "  :: " permet d'appeler une méthode static et " -> " d'appeler une méthode non static

   // Appel de la méthode statique readAll() de notre class élève, qui nous permet de charger la list de tous les élèves
   $profs = Prof::readAll();


//echo "<pre>";
//var_dump($eleves);
//echo "</pre>";



include("inc/head.php");
?>
<title>Liste des professeurs</title>


<!-- TODO : Afficher la liste de tous les professeurs, en utilisant un fichier models/professeurs.php contenant une classe Professeur ( comme pour les élèves).-->
<?php
include("inc/header.php");
?>
<main>
    <h1>Liste des élèves</h1>
    <!--Affichage des infos de tous les élèves sous forme d'un tableau -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Mail</th>
        </tr>
</thead>
    <?php
    foreach($profs as $prof){
        echo $prof->afficherInfos();
    }
    ?>
    
    </table>
</main>
<?php 
include("inc/footer.php");
?>
