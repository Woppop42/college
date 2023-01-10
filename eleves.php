<?php
 require_once("models/eleve.php");
// "  :: " permet d'appeler une méthode static et " -> " d'appeler une méthode non static

    // Appel de la méthode statique readAll() de notre class élève, qui nous permet de charger la list de tous les élèves
    $eleves = Eleve::readAll();


//echo "<pre>";
//var_dump($eleves);
//echo "</pre>";

include("inc/head.php");
?>
<title>Liste des élèves </title>

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
            <th scope="col">Date de naissance</th>
        </tr>
</thead>
    <?php
    foreach($eleves as $eleve){
        echo $eleve->afficherInfos();
    }
    ?>
    
    </table>
</main>
<?php 
include("inc/footer.php");
?>