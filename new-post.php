<?php 
include('Includes/Header.php'); 
include('Auth/NotLoggedin.php'); 
?>
<div class="card shadow p-3 mt-5">
<form action="" method="post">
<h1>New Post</h1>

<div class="alert <?= $status; ?>">
<?= $message; ?>
</div>

<div class="form-group mt-3">
        <input type="text" name="title" placeholder="Enter Title" class="form-control" value="<?= $title; ?>">
    </div>


    <div class="form-group mt-3 mb-3">
       <textarea name="body" placeholder="Body" rows="10" class="form-control" ></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-danger" name='add_post'>Add New Post &rarr;</button>
    </div>
</form>
</div>


<?php include('Includes/Footer.php'); ?>