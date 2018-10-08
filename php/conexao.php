<?php


$hostname_conexao = "sql10.freemysqlhosting.net";
$database_conexao = "sql10260282";
$username_conexao = "sql10260282";
$password_conexao = "DGqE9If5wA";

$mysqli = new mysqli($hostname_conexao, $username_conexao, $password_conexao, $database_conexao);


if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
