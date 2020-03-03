<?php

function afficheEpoque()
{
    global $conn;
    $req = $conn->prepare("SELECT * FROM epoque");
    $req->execute();
    return $req;
}

function update($id,$NomEpoque,$CommentEp)
{
    global $conn;
    $sup = $conn->prepare("UPDATE epoque SET NomEpoque= :NomEpoque,CommentEp=:CommentEp WHERE NroEpoque= :id");
    $sup->bindParam(':id', $id);
    $sup->bindParam(':NomEpoque', $NomEpoque);
    $sup->bindParam(':CommentEp', $CommentEp);
    $sup->execute();
    return $sup;
}

function addEpoque($NomEpoque,$CommentEp)
{
    global $conn;
    $requete = $conn->prepare("INSERT INTO epoque (NomEpoque,CommentEp) VALUES (:NomEpoque,:CommentEp)");
    $requete->bindValue(":NomEpoque", $NomEpoque,PDO::PARAM_STR);
    $requete->bindValue(":CommentEp", $CommentEp,PDO::PARAM_STR);
    $requete->execute();

    return $requete->fetch();
}

function deleteLieu($id){
    global $conn;

    $sup = $conn->prepare("DELETE FROM epoque WHERE NroEpoque ='".$id."'");
    $sup->execute();
    return $sup->fetch();
}