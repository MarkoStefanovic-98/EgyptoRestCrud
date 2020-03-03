<?php
require "Modele/dieuModele.php";

if(isset($_POST['submit'])) {
    $forme = $_POST['forme'];
    $representation = $_POST['representation'];
    $fonction = $_POST['fonction'];
    $id = $_POST['NomDieu'];

    update($id,$forme,$representation,$fonction);
    header ("location:".BASE_URL."/dieu");
}

if(isset($_POST['submitDel'])) {
    $id = $_POST['NomDieuDel'];
    deleteDieu($id);
    header ("location:".BASE_URL."/dieu");
}

if(isset($_POST['submitAdd'])){
    $NomDieu = $_POST['nomdieu'];
    $Forme = $_POST['forme'];
    $Representation = $_POST['representation'];
    $Fonction = $_POST['fonction'];

    addDieu($NomDieu,$Forme,$Representation,$Fonction);
}

$id = $_GET["id"];
$afficheDieu = afficheDieu();
$afficheleDieu = afficheleDieu($id);

require "View/modifrestDieuView.php";
?>

