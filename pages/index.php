<?php

include('./../config/config.php');
include('./class/account.php');


$account=new Account($pdo);

$result=$account->getAllAccounts();

// $stmt = $pdo->prepare("SELECT * FROM account");
// $stmt->execute();
// $result = $stmt->fetchAll();
// print_r($result)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NeoBank - Account Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">NeoBank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../pages/accounts/saving.php">Saving Accounts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../pages/accounts/current.php">Current Accounts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../pages/accounts/business.php">Business Accounts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="text-primary">All Accounts in NeoBank</h4>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewUserModal">Add Account</button>
    </div>

    <div id="showAlert"></div>

    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-hover table-bordered text-center align-middle">
        <thead class="table-primary">
          <tr>
            <th>Account ID</th>
            <th>Account Name</th>
            <th>Balance</th>
            <th>edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $account) { ?>
            <tr>
              <td> <?php echo $account['accountID'] ?></td>
              <td> <?php echo $account['nom'] ?></td>
              <td> <?php echo $account['balance'] ?></td>
              <td> <button class="btn btn-warning btn-sm">Edit</button></td>
              <td>
              <button class="btn btn-danger btn-sm">Delete</button></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Account Modal -->
  <div class="modal fade" id="addNewUserModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="./function/senddata.php">
            <div class="mb-3">
              <input type="text" name="nom" class="form-control" placeholder="Enter Name" required>
            </div>
            <div class="mb-3">
              <input type="number" name="balance" class="form-control" placeholder="Enter Balance" required>
            </div>
            <div class="mb-3">
              <select class="form-select" name="accountType" id="accountType" required>
                <option value="" selected disabled>Select Account Type</option>
                <option value="1">Business Account</option>
                <option value="2">Current Account</option>
                <option value="3">Saving Account</option>
              </select>
            </div>
            <div id="additionalField"></div>
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Add Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Account Modal -->
  <div class="modal fade" id="editNewUserModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="edit-user-form">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <input type="text" name="accountNum" id="accountNum" class="form-control" placeholder="Account Number" required>
            </div>
            <div class="mb-3">
              <input type="text" name="holderName" id="holderName" class="form-control" placeholder="Holder Name" required>
            </div>
            <div class="mb-3">
              <input type="number" name="balanceF" id="balanceF" class="form-control" placeholder="Balance" required>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success">Update Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="main.js"></script>

</html>