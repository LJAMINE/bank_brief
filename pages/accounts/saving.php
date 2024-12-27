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
<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NeoBank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="saving_accounts.html">Saving Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="current_accounts.html">Current Accounts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="business_accounts.html">Business Accounts</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<a href="./../index.php" style="text-decoration: none; color: inherit; display: inline-flex; align-items: center;">
  <i class="fa-solid fa-right-from-bracket" style="font-size: 40px; margin: 20px; transform: scaleX(-1);"></i>
</a>
<!-- Page Header -->
<div class="container mt-4">
  <!-- <h2 class="text-primary">Saving Accounts</h2> -->
  <h2 class="text-center mb-4">Saving Accounts</h2>

  <hr>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-striped table-bordered text-center">
      <thead class="table-primary">
        <tr>
          <th>Saving Account ID</th>
          <th>Interest Rate (%)</th>
          <th>Account ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2.50</td>
          <td>1</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>3.00</td>
          <td>2</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>2.80</td>
          <td>3</td>
          <td>
            <button class="btn btn-warning btn-sm">Edit</button>
            <button class="btn btn-info btn-sm">Copy</button>
            <button class="btn btn-danger btn-sm">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
