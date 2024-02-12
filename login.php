<?php 
include('Includes/Header.php'); 
include('Auth/Loggedin.php'); 
?>

<div class="card shadow p-3 mt-5">
<form action="" method="post">
<h1>Login Page</h1>
<div class="alert <?= $status; ?>">
<?= $message; ?>
</div>

    <div class="form-group mt-3">
    <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?= $email; ?>">
    </div>

    <div class="form-group mt-3 mb-3">
        <input type="password" name="password" placeholder="Enter Password" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger" name="login">Login &rarr;</button>
    </div>

    <p>
      Don't have an account?  <a href="<?= APP_HOME; ?>register.php">Please Register</a>
    </p>
</form>
</div>


<?php include('Includes/Footer.php'); ?>