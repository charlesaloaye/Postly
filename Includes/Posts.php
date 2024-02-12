<div class="container mt-4">
    <hr>
    <h1>Latest Posts</h1>
    <hr>


    <?php if($posts):?>

    <?php foreach($posts as $post):?>
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
        <h3 class='text-light'> No Post Yet</h3>
    </div>

    <?php endif;?>
</div>