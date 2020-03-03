<?php
require "Modele/lieuModele.php";

$afficheLieu = afficheLieu();

if(isset($_POST['submit'])) {
    $description = $_POST['description'];
    $situation = $_POST['situation'];
    $id = str_replace("-"," ",$_POST['NomLieu']);
    update($id,$description,$situation);
    header ("location:".BASE_URL."/lieu");
}

if(isset($_POST['submitDel'])) {
    $id = str_replace("-"," ",$_POST['NomLieuDel']);
    deleteLieu($id);
    //var_dump($id);
    header ("location:".BASE_URL."/lieu");
}

if(isset($_POST['submitAdd'])){
    $NomLieu = $_POST['nomlieu'];
    $Description = $_POST['description'];
    $Situation = $_POST['situation'];

    addLieu($NomLieu,$Description,$Situation);
    header ("location:".BASE_URL."/lieu");
}


require "View/lieuView.php";
?>
