<?php 
require_once("models/promo.php");

   $promo = Promo::readAll();

   //echo "<pre>";
   //var_dump($promo);
   //echo "</pre>";

include("inc/head.php");
?>
<title>Liste des promotions</title>
<?php
include_once("inc/header.php");
?>

<!-- TODO Afficher sous forme de tableau les infos (nom prénom mail du prof et niveau et nom de la classe)-->
<main>
    <h1>Liste des promos</h1>
    <!--Affichage des infos de toutes les promos sous forme d'un tableau -->
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nom du professeur</th>
            <th scope="col">Prénom du professeur</th>
            <th scope="col">Mail</th>
            <th scope="col">Niveau</th>
            <th scope="col">Classe</th>
        </tr>
</thead>
    <?php
    foreach($promo as $classe){
        echo $classe->afficherInfos();
    }
    ?>
    
    </table>
</main>
<?php 
include("inc/footer.php");
?>