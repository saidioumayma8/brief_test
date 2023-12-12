<?php
include '../config/connection.php';
session_start();
print_r($_SESSION);

if (!isset($_SESSION['login'])) {
    header('location:../pages/index.php');
}

$sql = 'SELECT * FROM product';

$result = $conn->query($sql);

if ($result === false) {
    die("Error executing the query: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="x-icon" href="image/A tech logo,circuit logo.png">
    <title>ElectroNaser</title>
</head>
<body>


<?php include '../inclode/nav.php'?>

<section class="container py-5">

  <div class="col-lg-8 col-sm mb-5 mx-auto">
  <h1 class="fs-4 text-center lesd text-primary"> admin</h1>
</div>
<div class="dropdown-divider border-warning"></div>
<div class="row">
  <div class="col-md-6">
    <h5 class="fw-bold mb-0">liste des nouveau users</h5>
  </div>
  <div class="col-md-6">
    <div class="d-flex justify-content-end">
    <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#createmodallabel">
    <i class="fas fa-folder-plus"></i>Nouveau
</button>
      <a href="#" class="btn btn-success btn-sm" id="export"><i class="fas fa-table"></i>Exporter</a>
    </div>
  </div>
</div>
</section>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">login</th>
      <th scope="col">password</th>
      <th scope="col">is_admin</th>
      <th scope="col">is_approved</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = 'SELECT * FROM usertable';
 $result = $conn->query($sql);
 if ($result) {
     while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $row['email'];?></td>
      <td><?= $row['login'];?></td>
      <td><?= $row['pass'];?></td>
      <td><?= $row['is_admin'];?></td>
      <td><?= $row['is_approved'];?>Dh</td>
      <td>
      <a href="../includes/updat.php" class="btn btn-primary me-2">Accepter</a>
      <a href="../includes/delete.inc.php" class="btn btn-primary">Supprimer</a>

      </td>
 <?php 
      }
    }
 ?>
  </tbody>
</table>
  </div>
</div>



<?php include '../inclode/footer.php'?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="app.js"></script>
</body>
</html>