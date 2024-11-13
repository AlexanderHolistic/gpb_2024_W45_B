<?php


$db= new mysqli('172.16.1.49:3306', 'notizy', 'notizy', 'notizen')
$db->set_charset('UTF8');
if ($db->connect_error) {
    die("Verbindung fehlgeschlagen: " . $db->connect_error);
}






?>
