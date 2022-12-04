<?php include "db.php" ?>
<?php include "functions.php" ?>


<?php include "includes/header.php" ?>
<div class="container">
  <div class="col-sm-6">
    <form action="login_create.php" method="POST">
      <h2>Create Account</h2>
      <?php createAccount() ?>
      <div class="form-group mb-3">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" placeholder="Enter Username">
      </div>
      <div class="form-group mb-3">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter Password">
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
      </div>

    </form>
  </div>
</div>

<?php include "includes/footer.php" ?>