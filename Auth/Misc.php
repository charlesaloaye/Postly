<?php 

$title = strip_tags(htmlentities($_POST['title']));
$body = strip_tags(htmlentities($_POST['body']));
$p_id = $_POST['p_id'];

if(isset($_POST['add_post'])){

    if($title && $body){
        $stmt = $conn->prepare('INSERT INTO posts(title, body, uid) VALUES(?, ?, ?) ');
        if($stmt->execute([$title, $body, $_SESSION['auth']['id']])){
    
            $message = 'New Post Added';
            $status = 'alert-success';
            header('REFRESH: 1, url=./');

    
        } else {
            $message = 'Unable to add new post';
            $status = 'alert-danger';
        }
    } else {
        $message = 'Please enter post title and description';
        $status = 'alert-warning';
    }
  
}


if(isset($_POST['delete_post'])){

        $stmt = $conn->prepare('DELETE FROM posts WHERE p_id =  ?');
        if($stmt->execute([$p_id])){
    
            $message = 'Post Deleted successfully!';
            $status = 'alert-success';

            header('REFRESH: 1, url=./');
    
        } else {
            $message = 'Unable to delete post';
            $status = 'alert-danger';
        }
  
}


