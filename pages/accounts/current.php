<?php

include '../../config/config.php';
include '../class/current_class.php';

$savingAccount = new CurrentAccount($pdo);

$result = $savingAccount->getAllcurrentaccount();
// $result = $savingAccount->getAllbusinessaccount();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Current Accounts</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<a href="./../index.php" style="text-decoration: none; color: inherit; display: inline-flex; align-items: center;">
  <i class="fa-solid fa-right-from-bracket" style="font-size: 40px; margin: 20px; transform: scaleX(-1);"></i>
</a>
<!-- Container -->
<div class="container mt-4">
  <h2 class="text-center mb-4">Current Accounts</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <thead class="table-dark">
        <tr>
          <th>Current Account ID</th>
          <th> Limit</th>
          <th>Account ID</th>
          <th>edit</th>
          <th>delete</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $account) { ?>
            <tr>
              <td> <?php echo $account['currentAcocuntID'] ?></td>
              <td> <?php echo $account['limitt'] ?></td>
              <td> <?php echo $account['accountID'] ?></td>
              <td> <button class="btn btn-warning btn-sm">Edit</button></td>
              <td>
              <form action="../function/delete_current.php" method="POST">
                                        <input type="hidden" name="id_to_delete" value="<?php echo $account['accountID']; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger btn-sm" >delete
                                        </button>
                                    </form>            </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
