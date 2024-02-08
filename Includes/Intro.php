<div class="jumbotron p-5 bg-secondary text-center">
    <h1>Welcome

        <?php if($_SESSION['auth']):?>
        Dear <?= $user->name ; ?>
        <?php endif; ?>

        to <?= APP_NAME; ?></h1>

    <div class="container">

        <?php if(!$_SESSION['auth']):?>

        <a href="<?= APP_HOME; ?>login.php" class="btn btn-dark">Login</a>

        <a href="<?= APP_HOME; ?>register.php" class="btn btn-danger">Register</a>

        <?php else: ?>

        <a href="<?= APP_HOME; ?>post.php" class="btn btn-success">Add New Post </a>
        <a href="<?= APP_HOME; ?>logout.php" class="btn btn-primary">Logout </a>
        <?php endif; ?>


    </div>
</div>