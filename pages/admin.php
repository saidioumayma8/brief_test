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

        <a href="adminh.php" class="btn btn-primary me-2">users</a>
        <a href="admin.php" class="btn btn-primary">produit</a> 
        <a href="../includes/ajoute.php" class="btn btn-primary">add product</a>

  <form class="mb-4 mx-auto p-4" style="width: 300px;">
    <div class="row">
        <div class="col-md-12">
            <label for="productCategory" class="form-label">Catégorie du produit :</label>
            <select class="form-select" id="productCategory">
                <option value="" >Toutes les Produit</option>
                <option value="categorie1.php" >Catégorie 1</option>
                <option value="categorie2.php" >Catégorie 2</option>
            </select>
        </div>
    </div>
</form>



  
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">reference</th>
      <th scope="col">name_prod</th>
      <th scope="col">image_prod</th>
      <th scope="col">codebar</th>
      <th scope="col">price_init</th>
      <th scope="col">price_fin</th>
      <th scope="col">reduc</th>
      <th scope="col">description</th>
      <th scope="col">quantite_min</th>
      <th scope="col">quantite_stock</th>
      <th scope="col">fk_idcat</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql = 'SELECT * FROM product;
    ';
 $result = $conn->query($sql);
 if ($result) {
     while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $row['reference'];?></td>
      <td><?= $row['name_prod'];?></td>
      <td><?= $row['image_prod'];?></td>
      <td><?= $row['codebar'];?></td>
      <td><?= $row['price_init'];?>Dh</td>
      <td><?= $row['price_fin'];?>Dh</td>
      <td><?= $row['reduc'];?></td>
      <td><?= $row['description'];?></td>
      <td><?= $row['quantite_min'];?></td>
      <td><?= $row['quantite_stock'];?></td>
      <td><?= $row['fk_idcat'];?></td>
      <td>
      <a href="../includes/updat.php" class="btn btn-primary me-2">Update</a>
      <a href="../includes/delete.inc.php" class="btn btn-primary">Supprimer</a>

      </td>
 <?php 
      }
    }
 ?>
  </tbody>
</table>
  
      </div>
      <div class="container my-10 d-flex justify-content-center">
          <nav aria-label="page navigation example">
              <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>
                  <li class="page-item"><a class="page-link" href="home.php"> 1</a></li>
                  <li class="page-item"><a class="page-link" href="home1.php"> 2</a></li>
                  <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>
              </ul>
          </nav>
      </div>





      <?php include '../inclode/footer.php'?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>