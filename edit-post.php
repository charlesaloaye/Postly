<?php
include('Includes/Header.php');
include('Auth/NotLoggedin.php');

?>
<div class="card shadow p-3 mt-5">
    <form action="" method="post">
        <h1><?= $page_name; ?></h1>

        <div class="alert <?= $status; ?>">
            <?= $message; ?>
        </div>


        <?php if ($post->uid == $user->uid): ?>

        <div class="form-group mt-3">
            <input type="text" name="title" placeholder="Enter Title" class="form-control" value="<?= $post->title; ?>">
        </div>


        <div class="form-group mt-3 mb-3">
            <textarea name="body" placeholder="Body" rows="10" class="form-control"><?= $post->body; ?></textarea>
        </div>
        <input type="hidden" name="p_id" value='<?= $post->p_id; ?>'>

        <div class="form-group">
            <button type="submit" class="btn btn-danger" name='update_post'>Update Post &rarr;</button>
        </div>
    </form>
    <?php else : ?>

    <div class="jumbotron p-3 bg-danger">
        <h2 class='text-light'>You don't have access to this resource, please contact the post author.</h2>
    </div>

    <?php endif; ?>
</div>


<?php include('Includes/Footer.php'); ?>
