<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Utilisateur - Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">

  </head>
  <body>  
  
    <nav class="navbar">
      <div class="container-fluid">
        <h1 class="display-5 text-light">EDMI</h1>
       <i class="fas fa-sign-out-alt  fa-2x  " 
        onclick="window.location.href='../../../templates/home/home.php'"></i>
      </div>
    </nav>

<main>

  <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
   
    <div class="d-flex justify-content-center align-items-center flex-column">
    <i class="far fa-user-circle  fa-4x m-3"></i>
    <p>Fatou Niang</p>
    <p>Doctorant</p>

    </div>

    <hr>

    <ul class="nav nav-pills flex-column ">
      <li class="nav-item ">
        <a  class="nav-link link-dark active" aria-current="page" data-toggle="pill" href="#dashboard">
         <i class="fas fa-home    "></i>
          Tableau de Bord
        </a>
      </li>
      <li class="nav-item">
        <a   class="nav-link link-dark" data-toggle="pill" href="#demandes">
         <i class="fas fa-table "></i>
          Demandes
        </a>
      </li>
      <li class="nav-item">
        <a   class="nav-link link-dark" data-toggle="pill" href="#docs">
         <i class="fas fa-book"></i>
          Documents
        </a>
      </li>
      <li class="nav-item">
        <a   class="nav-link link-dark" data-toggle="pill" href="#profile">
         <i class="fas fa-user-cog    "></i>
          Profil
        </a>
      </li>
     
    </ul>

    <hr>
    <div class="fixed-bottom">
      <a   class="d-flex align-items-center link-dark text-decoration-none ">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>@edmi</strong>
      </a>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container-fluid">
        <!-- Tab panes -->
        <div class="tab-content ">
        
          <div class="tab-pane fade show active" id="dashboard"><?php require("Home.php");?></div>
          <div class="tab-pane fade" id="demandes"><?php require("Demandes.php");?></div>
         <div class="tab-pane fade" id="docs"><?php require("Docs.php");?></div>
          <div class="tab-pane fade" id="profile"><?php require("Profile.php");?></div>

        </div>

  </div>


</main>

      <script src="sidebars.js"></script>
  </body>
</html>

