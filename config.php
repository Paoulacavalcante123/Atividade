<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', 'localhost');

define('DB_USERNAME', 'root');

define('DB_PASSWORD', 'aluno');

define('DB_NAME', 'ifome');



/* Attempt to connect to MySQL database */

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// Check connection

if($mysqli === false){

    die("ERROR: Não foi possível conectar. " . $mysqli->connect_error);

}

?>