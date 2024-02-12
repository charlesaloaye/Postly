<?php 
include('Includes/Header.php'); 
include('Auth/NotLoggedin.php'); 
?>
<div class="container mt-4">


    <?php if($myposts):?>

<h4> <span  class="badge badge-pills btn-danger"><?= $total_posts; ?>post<?php if($total_posts > 1) { echo 's'; } ?></span> </h4>

    <?php foreach($myposts as $post):?>
    <a href="<?= APP_HOME; ?>post.php?id=<?= $post->p_id; ?>">
        <div class="card mb-2 post">
            <div class="card-body">
                <h4 class="card-title"><?= $post->title; ?></h4>
                <small>Written by: <?= $post->name; ?> | <?= $post->created_at;?></small>
            </div>
        </div>
    </a>

    <?php endforeach;?>

    <?php else: ?>

    <div class="jumbotron bg-danger p-4">
        <h3 class='text-light'>You don't have any post yet</h3>
    </div>

    <?php endif;?>
</div>