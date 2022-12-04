<?php include("db.php"); ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php" ?>

<div class="container">
  <div class="col-sm-6">
    <form action="login_update.php" method="POST">
      <h2>Update Account</h2>
      <?php updateAccount() ?>
      <div class="form-group mb-3">
        <label class="form-label" for="id">ID</label>
        <select class="form-select form-select-lg" name="id" id="id">
          <option selected disabled>Select ID</option>
          <?php showIdOptions() ?>
        </select>
      </div>
      <div class="form-group mb-3">
        <label class="form-label" for="username">Username</label>
        <input class="form-control" type="text" name="username" placeholder="Enter Username" value="<?php  ?>">
      </div>
      <div class="form-group mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter New Password">
      </div>



      <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Save">
      </div>

    </form>
  </div>
</div>

<?php include "includes/footer.php" ?>