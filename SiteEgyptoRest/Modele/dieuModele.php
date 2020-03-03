<?php

function afficheDieu()
{
    global $conn;
    $req = $conn->prepare("SELECT * FROM dieu");
    $req->execute();
    return $req;
}

function afficheleDieu($id)
{
    global $conn;
    $req = $conn->prepare("SELECT * FROM dieu WHERE NomDieu ='".$id."'");
    $req->execute();
    return $req;
}

function update($id,$forme,$representation,$fonction)
{
    global $conn;
    $sup = $conn->prepare("UPDATE dieu SET Forme= :forme,Représentation=:representation, Fonction=:fonction WHERE NomDieu= :id");
    $sup->bindParam(':id', $id);
    $sup->bindParam(':forme', $forme);
    $sup->bindParam(':representation', $representation);
    $sup->bindParam(':fonction', $fonction);
    $sup->execute();
    return $sup;
}

function addDieu($NomDieu, $Forme, $Representation,$Fonction)
{
    global $conn;
    $requete = $conn->prepare("INSERT INTO dieu (NomDieu,Forme,Représentation,Fonction) VALUES (:NomDieu,:Forme,:Representation,:Fonction)");
    $requete->bindValue(":NomDieu", $NomDieu,PDO::PARAM_STR);
    $requete->bindValue(":Forme", $Forme,PDO::PARAM_STR);
    $requete->bindValue(":Representation", $Representation,PDO::PARAM_STR);
    $requete->bindValue(":Fonction", $Fonction,PDO::PARAM_STR);
    $requete->execute();

    return $requete->fetch();
}

function deleteDieu($id){
    global $conn;

    $sup = $conn->prepare("DELETE FROM dieu WHERE NomDieu ='".$id."'");
    $sup->execute();

    return $sup->fetch();
}