<?php 
$id = $_GET['id'];
$query = $_GET['q'];

$stmt = $conn->prepare('SELECT * FROM users WHERE uid = ?');
$stmt->execute([$_SESSION['auth']['id']]);
$user =  $stmt->fetch();


$stmt = $conn->prepare('SELECT * FROM posts, users WHERE users.uid = posts.uid ORDER BY posts.p_id DESC');
$stmt->execute();
$posts = $stmt->fetchAll();



$stmt = $conn->prepare('SELECT * FROM posts, users WHERE users.uid = posts.uid && posts.title LIKE ? ORDER BY posts.p_id DESC');
$stmt->execute(['%'. $query. '%']);
$searches = $stmt->fetchAll();
$total_search = $stmt->rowCount();


$stmt = $conn->prepare('SELECT * FROM posts, users WHERE users.uid = posts.uid  && posts.p_id = ? ORDER BY posts.p_id DESC');
$stmt->execute([$id]);
$post = $stmt->fetch();


$stmt = $conn->prepare('SELECT * FROM posts, users WHERE users.uid = posts.uid && posts.uid = ? ORDER BY posts.p_id DESC');
$stmt->execute([$_SESSION['auth']['id']]);
$myposts = $stmt->fetchAll();

$total_posts = $stmt->rowCount();
