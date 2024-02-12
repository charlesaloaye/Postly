<?php 
include('Includes/Header.php'); 
include('Auth/NotLoggedin.php'); 
?>
<div class="container mt-4">
    <div class="alert <?= $status; ?>">
        <?= $message; ?>
    </div>


    <?php if($post):?>

    <hr>
    <h1><?= $post->title; ?></h1>
    <hr>

    <div class="card mb-2">
        <div class="card-body">
            <h4 class="card-title"><?= $post->body; ?></h4>
            <small>Written by: <?= $post->name; ?> | <?= $post->created_at;?></small>
        </div>

        <?php  if($post->uid == $user->uid): ?>
        <div class="text-right">
            <form action="" method="post" class='p-3'>
                <input type="hidden" name="p_id" value="<?= $post->p_id; ?>">
                <button type="submit" name="delete_post" class="btn btn-danger">Delete Post</button>
            </form>
        </div>
        <?php endif;?>
    </div>


    <?php else: ?>

    <div class="jumbotron bg-danger p-4">
        <h3 class='text-light'>Invalid Post Id</h3>
    </div>

    <?php endif;?>
</div>