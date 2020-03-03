<?php
require "Modele/dieuModele.php";

if (isset($_GET['action']) && ($_GET['action'] == "update")) {
    updateDieu();
} elseif (isset($_GET['action']) && ($_GET['action'] == "supprimer")) {
    supprimerDieu();
} elseif (isset($_GET['id']) == 'ajout') {
    ajoutDieu();
} else {
    afficheAllDieu();
}


// !***********************FONCTION POUR CONTROLLER**************************!
function afficheAllDieu()
{
    $afficheDieu = afficheDieu();
    require "View/dieuView.php";
}


function ajoutDieu()
{
    if (isset($_POST['submitAdd'])) {
        $NomDieu = $_POST['nomdieu'];
        $Forme = $_POST['forme'];
        $Representation = $_POST['representation'];
        $Fonction = $_POST['fonction'];

        addDieu($NomDieu, $Forme, $Representation, $Fonction);
        header("location: ".BASE_URL."/dieu");
    }
    require "View/ajoutDieuView.php";
}

function supprimerDieu()
{
    $id = $_GET['id'];
    if (isset($_POST['submitDel'])) {
        deleteDieu($id);
        header("location: ".BASE_URL."/dieu");
    }
    require "View/deleteDieuView.php";
}

function updateDieu()
{
    $id = $_GET['id'];
    $afficheleDieu = afficheleDieu($id);
    if (isset($_POST['submit'])) {
        $forme = $_POST['forme'];
        $representation = $_POST['representation'];
        $fonction = $_POST['fonction'];
        update($id, $forme, $representation, $fonction);
        header("location: ".BASE_URL."/dieu");
    }

    require "View/modifrestDieuView.php";
}

?>

