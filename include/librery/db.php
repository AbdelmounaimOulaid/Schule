<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'schuflqd_schuflqd');//hoch1987_hoch
define('DB_PASSWORD', 'y46rX452o%f67_MW');//a9]lO^XTQ}P0
define('DB_NAME', 'schuflqd_schuflqd');//klassen1987_institute
 
// Connexion à la base de données MySQL 
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if(!$db){
    header("Location: 404.php");
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>