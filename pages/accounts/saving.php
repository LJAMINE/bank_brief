

<?php

include '../../config/config.php';
include '../class/saving_class.php';

$savingAccount = new SavingAccount($pdo);

$result = $savingAccount->getAllsavingaccount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saving Accounts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<a href="./../index.php" style="text-decoration: none; color: inherit; display: inline-flex; align-items: center;">
  <i class="fa-solid fa-right-from-bracket" style="font-size: 40px; margin: 20px; transform: scaleX(-1);"></i>
</a>
<!-- Page Header -->
<div class="container mt-4">
  <h2 class="text-center mb-4">Saving Accounts</h2>

  <hr>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-striped table-bordered text-center">
      <thead class="table-primary">
        <tr>
          <th>Saving Account ID</th>
          <th>Interet</th>
          <th>Account ID</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $account) { ?>
            <tr>
              <td> <?php echo $account['savingAccountID'] ?></td>
              <td> <?php echo $account['interet'] ?></td>
              <td> <?php echo $account['accountID'] ?></td>
              <td> <button class="btn btn-warning btn-sm">Edit</button></td>
              <td>
              <button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
