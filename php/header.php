<nav class="navbar navbar-expand bg-body-tertiary shadow-sm py-3">
  <div class="container-fluid">
    <!-- Logo à gauche -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="public/logo.svg" alt="Logo" height="40" class="d-inline-block align-text-top me-2">
    </a>

    <!-- Barre de recherche au centre -->
    <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
</svg>
                </span>
                <input type="text" class="form-control" placeholder="Rechercher une musique.." aria-label="Input group example" aria-describedby="basic-addon1">
              </div>
            </div>

    <!-- Avatar à droite -->
    <div class="d-flex align-items-center">
      <?php 
        if (isset($_SESSION['user'])) {
          include 'php/header_login.php';
        } else {
          include 'php/header_signIn.php';
        }
      ?>
    </div>
  </div>
</nav>
