<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="x-icon" href="image/A tech logo,circuit logo.png">
    <title>ElectroNaser</title>
</head>
<body>

<?php include '../inclode/nav.php'?>


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

    <?php 
    $sql = 'SELECT * FROM product';
    $result = $conn->query($sql);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
       ?>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
          <img <?= $row['image_prod']?>class="card-img-top" alt="Card image">
          <div class="card-body">
            <h5 class="card-title"><?= $row['name_prod']?></h5>
            <p class="card-text"><?= $row['price_init']?>Dh</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
      <?php 
      }
    }
 ?>

          
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
</body>
</html>