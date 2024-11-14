<?php
$id=isset($_GET['id']) ? (int)$_GET['id'] : 0;
if($id> 0){
    header('Location: index.php');
    exit;
}

require_once 'db.php';
$stmt=$db->prepare("DELETE FROM notizen WHERE `notizen`.`id` = ?");
$stmt->bind_param('i',$id);
$stmt->execute();

header('Location: index.php');
exit;
?>