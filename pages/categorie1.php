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
<?php include'inclode/nav.php'?>


<?php 
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$tr = $row1 -> fetch_all($query);
?>
  <form class="mb-4 mx-auto p-4" style="width: 300px;">
    <div class="row">
      <div class="col-md-12">
        <label for="productCategory" class="form-label">Catégorie du produit :</label>
        <select class="form-select" id="productCategory" onchange="filterCards()">
          <option value="<?php $tr ?>"><?php echo $row[$query]?></option>
        </select>
      </div>
    </div>
  </form>

  <?php
  $query = "SELECT * FROM products";
  $result = mysqli_query($conn, $query);
  ?>
  <div class="container me-5" id="cardContainer">
    <div class="row g-3 mb-5">
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <div class="col-4 card <?php echo $row['categorie']; ?>" data-category="<?php echo $row['categorie']; ?>">
          <div class="card" style="width: 18rem;">
            <img src="image/tswira9.jpg" class="card-img-top" alt="Card image">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['libelle']; ?></h5>
              <p class="card-text"><?php echo $row['prix_unitaire']; ?> dh</p>
              <p class="card-text"><?php echo $row['categorie']; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-body-tertiary text-muted">
    <!-- ... (your existing footer content) ... -->
  </footer>
  <!-- Footer -->

  <script>
    let arduino = document.querySelectorAll('.arduino');
    let raspberry = document.querySelectorAll('.raspberry');
    let sensor = document.querySelectorAll('.sensor');

    function filterCards() {
      var selectedCategory = document.getElementById("productCategory").value;
      var cards = document.querySelectorAll("#cardContainer .card");

      // console.log(arduino, sensor, raspberry);
      // cards.forEach(function (card) {
      // var cardCategory = card.getAttribute("data-category");
      // console.log(selectedCategory);

      if (selectedCategory === "all") {
        document.querySelectorAll(".arduino").forEach(function(produit) {
          produit.style.display = "block";
        });
      } else {
        document.querySelectorAll(".arduino").forEach(function(produit) {
          produit.style.display = "none";
        });
      }

      if (selectedCategory === "arduino") {
        document.querySelectorAll(".arduino").forEach(function(produit) {
          produit.style.display = "block";
        });
      } else {
        document.querySelectorAll(".arduino").forEach(function(produit) {
          produit.style.display = "none";
        });
      }

      if (selectedCategory === "raspberry") {
        document.querySelectorAll(".raspberry").forEach(function(produit) {
          produit.style.display = "block";
        });
      } else {
        document.querySelectorAll(".raspberry").forEach(function(produit) {
          produit.style.display = "none";
        });
      }

      if (selectedCategory === "sensor") {
        document.querySelectorAll(".sensor").forEach(function(produit) {
          produit.style.display = "block";
        });
      } else {
        document.querySelectorAll(".sensor").forEach(function(produit) {
          produit.style.display = "none";
        });
      }
      // });
    }
  </script>
  
      <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span class="h2 text-center mt-5 mb-4">ElectroNaser</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>ElectroNaser
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

      
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Rabat, NY 10012, ma</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            ElectroNaser@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 212 64 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 212 64 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDElectroNaser.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>