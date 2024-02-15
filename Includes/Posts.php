<div class="container mt-4">
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h1>
                <?php if($page_name == 'Home'):?>
                Lates Posts


                <?php else: ?>

                <?= $total_search;?> Post(s) Found

                <?php endif; ?>

            </h1>
        </div>

        <div class="col-md-6">
            <form action="<?= APP_HOME; ?>search.php" method="get">
                <div class="input-group">
                    <input type="search" name="q" value="<?= $query; ?>" class="form-control"
                        placeholder="Search for anything">
                    <button type="submit" class="btn btn-success" name="search" value='active'>Search</button>
                </div>
            </form>
        </div>
    </div>

    <hr>

    <?= $title; ?>
    <?php if($searches):?>

    <?php 
    foreach($searches as $search):

        $stmt = $conn->prepare('SELECT * FROM likes WHERE likes.p_id = ?');
        $stmt->execute([$search->p_id]);
        $total_likes = $stmt->rowCount();
        $like = $stmt->fetch();
        
        ?>
    <a href="<?= APP_HOME; ?>post.php?id=<?= $search->p_id; ?>">
        <div class="card mb-2 post">
            <div class="card-body">
                <h4 class="card-title"><?= $search->title; ?></h4>
                <img src="<?= $search->thumbnail; ?>" style="height: auto; width: 100%;">
                <small>Written by: <?= $search->name; ?> | <?= $search->created_at;?></small>

                <div class='text-end'>

                    <form action="" method="post" class='p-3'>
                        <input type="hidden" name="p_id" value="<?= $search->p_id; ?>">

                        <?php if($like->uid == $user->uid):?>

                        <button type="submit" class="btn btn-outline-dark mr-2" name='unlike'>
                            <?= $total_likes; ?> Like </button>

                        <?php else: ?>

                        <button type="submit" class="btn btn-outline-dark mr-2" name='like'>
                            <?= $total_likes; ?> Like </button>

                        <?php endif;?>




                        <?php if($search->uid == $user->uid):?>

                        <a href="<?= APP_HOME; ?>edit-post.php?id=<?= $search->p_id; ?>"
                            class="btn btn-success mr-2">Edit</a>

                        <button type="submit" name="delete_post" class="btn btn-danger">Delete</button>



                        <?php endif; ?>
                    </form>

                </div>
            </div>
        </div>
    </a>

    <?php endforeach;?>


    <?php else: ?>

    <div class="jumbotron bg-danger p-4 text-center">
        <?php if($page_name == 'Home'):?>
        <h3 class='text-light'> No Post Yet</h3>



        <?php else: ?>

        <h2 class='text-light'>Search not found,please try searching with the correct post title</h2>

        <?php endif; ?>

    </div>

    <?php endif;?>
</div>