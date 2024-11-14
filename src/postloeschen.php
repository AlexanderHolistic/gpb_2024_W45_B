<?php
$id=isset($_GET['id']) ? (int)$_GET['id'] : 0;

require_once 'db.php';
$stmt=$db->prepare("delete from notizen where id=?");
$stmt->bind_param('i',$id);
$stmt->execute();

header('Location: index.php');
exit;
?>