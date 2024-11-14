<?php

use LDAP\Result;
@session_start();

if (!isset($_POST)) {
    header("Location:index.php");
    exit();
}

$title = isset($_POST["title"]) ? $_POST["title"] : null;
if (!isset($title)) {
    header("Location:index.php");
    exit();
}
$content = isset($_POST["inhalt"]) ? $_POST["inhalt"] : null;
if (!isset($content)) {
    header("Location:index.php");
    exit();
}
$autor = isset($_POST["username"]) ? $_POST["username"] : null;
if (!isset($autor)) {
    header("Location:index.php");
    exit();
}
$notizid = isset($_POST["id"]) ? $_POST["id"] : 0;
require_once 'db.php';

$result = $db->query('SELCET id,name FROM user');
while ($user = $result->fetch_object()) {
    if ($autor == $user->name) {
        $user = $user->id;
        break;
    }
}
$result->free();
if (!isset($user)) {
    $email="anon@anon.de";
    $pass="todo";
    $stmt = $db->prepare('INSERT INTO user (name,email,password) VALUES (?,?,?);');
    $stmt->bind_param("sss",$name, $email, $pass);
    $stmt->execute();
    $user = $db->insert_id;
}
if ($id!=0) {
    $stmt = $db->prepare("UPDATE notizen SET titel = ?, inhalt = ?, user_id = ? WHERE id = ?;");
    $stmt->bind_param("ssii", $title, $content, $user,$id);
    $stmt->execute();
} else {
    $stmt = $db->prepare("INSERT INTO notizen (titel, inhalt, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $content, $user);
    $stmt->execute();
}


header("Location:index.php");
exit;
?>