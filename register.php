<?php 
include('Includes/Header.php'); 
include('Auth/Loggedin.php'); 
?>
<div class="card shadow p-3 mt-5">
<form action="" method="post">
<h1>Register an Account</h1>

<div class="alert <?= $status; ?>">
<?= $message; ?>
</div>

<div class="form-group mt-3">
        <input type="text" name="name" placeholder="Enter FullName" class="form-control" value="<?= $name; ?>">
    </div>

    <div class="form-group mt-3">
        <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?= $email; ?>">
    </div>

    <div class="form-group mt-3 mb-3">
        <input type="password" name="password" placeholder="Enter Password" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger" name='register'>Register &rarr;</button>
    </div>

    <p>
      Already have an account?  <a href="<?= APP_HOME; ?>login.php">Please Login</a>
    </p>
</form>
</div>


<?php include('Includes/Footer.php'); ?>