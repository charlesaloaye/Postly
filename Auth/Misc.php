<?php 

$title = strip_tags(htmlentities($_POST['title']));
$body = strip_tags(htmlentities($_POST['body']));
$p_id = $_POST['p_id'];

if(isset($_POST['add_post'])){


    $image = $_FILES['post_image'];

    $target_path = APP_ROOT. date('M-i:s'). basename($image['name']);


    if(move_uploaded_file($image['tmp_name'], $target_path)){

        $imageUrl = APP_HOME . $target_path;


    }





    
    if($title && $body){
        $stmt = $conn->prepare('INSERT INTO posts(title, body, uid, thumbnail) VALUES(?, ?, ?, ?) ');
        if($stmt->execute([$title, $body, $_SESSION['auth']['id'], $imageUrl])){
    
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


if(isset($_POST['update_post'])){

    $stmt = $conn->prepare('UPDATE posts SET title = ?, body = ? WHERE p_id =  ?');
    if($stmt->execute([$title, $body, $p_id])){

        $message = 'Post Updated successfully!';
        $status = 'alert-success';

        header('REFRESH: 1, url='. APP_HOME);

    } else {
        $message = 'Unable to update post';
        $status = 'alert-danger';
    }

}




if(isset($_POST['like'])){
$stmt = $conn->prepare('SELECT * FROM likes WHERE uid = ? && p_id = ?');
$stmt->execute([$_SESSION['auth']['id'], $p_id]);

if(!$stmt->rowCount()){

    $stmt = $conn->prepare('INSERT INTO likes(uid, p_id, is_liked)VALUES(?, ?, ?)');
    if($stmt->execute([$_SESSION['auth']['id'], $p_id, 1])){
        header('location:'. APP_HOME.'?like=true');
    } else {
        header('location:'. APP_HOME.'?like=false');

    }
}

}

if(isset($_POST['unlike'])){

    $stmt = $conn->prepare('DELETE FROM likes WHERE p_id = ? && uid = ?');
    if($stmt->execute([$p_id, $_SESSION['auth']['id']])){
        header('location:'. APP_HOME.'?unlike=true');
    }

}

