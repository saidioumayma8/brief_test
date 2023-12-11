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
<div class="dropdown-divider border-warning"></div>
<div class="row">
  <div class="table-responsive" id="ordertable">

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row"><?= $i ?></th>
      <td>Otto</td>
      <td>
      <a href="#" class="btn btn-primary me-2">Accepter</a>
        <a href="#" class="btn btn-primary">Supprimer</a>
      </td>
    
    <!-- </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob@gmail.com</td>
      <td>Thornton</td>
      <td>
        <a href="#" class="btn btn-primary me-2">Accepter</a>
        <a href="#" class="btn btn-primary">Supprimer</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry@gmail.com</td>
      <td>the Bird</td>
      <td>
        <a href="#" class="btn btn-primary me-2">Accepter</a>
        <a href="#" class="btn btn-primary">Supprimer</a>
      </td>
    </tr> -->
    <?php endfor; ?>
  </tbody>
</table>
  </div>
</div>
<div class="dropdown-divider border-warning"></div>
<div class="row"></div>
</section>

<!-- Modal -->
<div class="modal fade" id="createmodallabel" tabindex="-1" aria-labelledby="createmodallabelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createmodallabelLabel">Nouvelle users</h1>
        
        <div class="modal fade" id="createmodallabel" tabindex="-1" aria-labelledby="createmodallabelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createmodallabelLabel">Nouvelle users</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Add an ID to the form for easier reference -->
        <form action="" method="post" id="newUserForm">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="customer" name="customer">
            <label for="cashier">Nom du caissier</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <!-- Add an onclick attribute to trigger the JavaScript function -->
        <button type="button" class="btn btn-primary" onclick="addNewUser()">Ajouter <i class="fas fa-plus"></i></button>
      </div>
    </div>
  </div>
</div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="customer" name="customer">
            <label for="cashier">Now du caissier</label>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Ajouter <i class="fas fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>
   


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
      <script src="app.js"></script>
</body>
</html>