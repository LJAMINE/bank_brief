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
<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NeoBank</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="saving_accounts.html">Savings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="current_accounts.html">Current</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="business_accounts.html">Business</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
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
          <th>Overdraft Limit</th>
          <th>Account ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>$1000.00</td>
          <td>4</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>$2000.00</td>
          <td>5</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
