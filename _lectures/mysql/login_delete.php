<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php include "includes/header.php" ?>

<div class="container">
  <h2>Manage Accounts</h2>
  <?php deleteAccount() ?>
  <?php showAdminData() ?>
</div>

<?php include "includes/footer.php" ?>