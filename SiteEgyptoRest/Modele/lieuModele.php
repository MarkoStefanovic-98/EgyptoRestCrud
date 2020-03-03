<?php

function afficheLieu()
{
    global $conn;
    $req = $conn->prepare("SELECT * FROM lieu");
    $req->execute();
    return $req;
}

function update($id,$description,$situation)
{
    global $conn;
    $sup = $conn->prepare("UPDATE lieu SET description= :description,situation=:situation WHERE NomLieu= :id");
    $sup->bindParam(':id', $id);
    $sup->bindParam(':description', $description);
    $sup->bindParam(':situation', $situation);
    $sup->execute();
    return $sup;
}

function addLieu($NomLieu,$Description,$Situation)
{
    global $conn;
    $requete = $conn->prepare("INSERT INTO lieu (NomLieu, description, situation) VALUES (:NomLieu,:Description,:Situation)");
    $requete->bindValue(":NomLieu", $NomLieu,PDO::PARAM_STR);
    $requete->bindValue(":Description", $Description,PDO::PARAM_STR);
    $requete->bindValue(":Situation", $Situation,PDO::PARAM_STR);
    $requete->execute();

    return $requete->fetch();
}


function deleteLieu($id){
    global $conn;

    $sup = $conn->prepare("DELETE FROM lieu WHERE NomLieu ='".$id."'");
    $sup->execute();
    return $sup->fetch();
}