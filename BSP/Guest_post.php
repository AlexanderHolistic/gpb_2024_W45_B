<?php
$guestname = isset($_POST['guestname']) ? htmlspecialchars(trim($_POST['guestname'])) : '';
$textarea = isset($_POST['textarea']) ? htmlspecialchars(trim($_POST['textarea'])) : '';
if (empty($guestname) || empty($textarea)) {
    header('Location:guest.php');
    exit;
}

require_once 'db.php';
$stmt = $db->prepare('INSERT INTO Guestbook (guestname, inhalt) VALUES (?, ?);');
$stmt->bind_param('ss', $guestname, $textarea);
$stmt->execute();

header('Location:guest.php');
exit;
