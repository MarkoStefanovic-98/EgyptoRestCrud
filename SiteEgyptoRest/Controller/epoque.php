<?php
require "Modele/epoqueModele.php";

$afficheEpoque = afficheEpoque();

if(isset($_POST['submit'])) {
    $NomEpoque = $_POST['NomEpoque'];
    $CommentEp = $_POST['CommentEp'];
    $id = $_POST['NroEpoque'];
    update($id,$NomEpoque,$CommentEp);
    //var_dump($id,$NomEpoque,$CommentEp);
    header ("location:".BASE_URL."/epoque");
}

if(isset($_POST['submitDel'])) {
    $id = $_POST['NroEpoque'];
    deleteLieu($id);
    //var_dump($id);
    header ("location:".BASE_URL."/epoque");
}

if(isset($_POST['submitAdd'])){
    $NomEpoque = $_POST['nomepoque'];
    $CommentEp = $_POST['commentaire'];

    addEpoque($NomEpoque,$CommentEp);
    header ("location:".BASE_URL."/epoque");
}


require "View/epoqueView.php";
?>
