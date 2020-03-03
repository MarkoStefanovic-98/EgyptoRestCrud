<?php

    try
    {
        $conn = new PDO("mysql:host=localhost;dbname=egyptedb;charset=utf8","root","root");
    }
    catch(Exception $e)
    {
        die("Erreur bdd non trouvée");
    }

?>
