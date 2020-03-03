<?php
require "Modele/connexion.php";

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT . DS . 'core');

ob_start();//suspend l'affichage

if(!isset($_GET['controller']) || $_GET['controller'] == "")
{
    $page = "accueil";
}
else
{
    if(!file_exists("Controller/".$_GET['controller'].".php"))
    {
        $page = 404;
    }
    else
        $page = $_GET['controller'];
}
require "Controller/".$page.".php";

$content = ob_get_contents();//recuperer ce qui n'a pas ete affiché
ob_end_clean();//reprend l'affichage




/*if (isset($_GET['controller'])) {
    ob_start();//suspend l'affichage
    require_once("Controller/" . $_GET['controller'] . ".php"); // j'appelle le bon controller

} else {
    require_once("Controller/accueil.php");
} // controller par défaut


$content = ob_get_contents();//recuperer ce qui n'a pas ete affiché
ob_end_clean();//reprend l'affichage
*/

require "View/layout.php";
?>
