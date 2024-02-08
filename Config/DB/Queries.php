<?php 

$stmt = $conn->prepare('SELECT * FROM users WHERE uid = ?');
$stmt->execute([$_SESSION['auth']['id']]);
$user =  $stmt->fetch();