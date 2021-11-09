<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
 <style type="text/css">

    .hr{
      flex-shrink: 0;
      width: "100%";
      height: 25px;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);

    }

   
  

.nb {
  font: 800 40px system-ui;
  padding: 2rem;
  color: white;
  text-align: center;
}


#div_table {
  border-top-color: #3e8964;
  border-width: 2;
  margin: 25px;
}
    
 </style>

<script>
      $(document).ready(function(){
        $("#table").DataTable({
          paging:true,
          scrollY:false,
          
        });
      })

      
    </script>
  </head>

  <body class="container-fluid">

  <div >
    
    <div class="row m-5">

      <div class="col-md-4 d-flex justify-content-center flex-column align-items-center ">
      <div class="col-md-4 rounded-circle text-center" style="background-color: #3e8964;"> 
        <div class="nb m-3">5</div>
      </div>
       

        <h5 class="m-3">Dossiers en cours</h5>
      
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4 d-flex justify-content-center flex-column align-items-center ">
      <div class="col-md-4 rounded-circle text-center" style="background-color: #3e8964;"> 
        <div class="nb m-3">3</div>
      </div>
       

        <h5 class="m-3">Dossiers validés</h5>
      
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4 d-flex justify-content-center flex-column align-items-center ">
      <div class="col-md-4 rounded-circle text-center" style="background-color: #3e8964;"> 
        <div class="nb m-3">0</div>
      </div>
       
      
 
        <h5 class="m-3">Dossiers bloqués</h5>
      
      </div><!-- /.col-lg-4 -->


    

    </div><!-- /.row -->
    
    
    <div class="hr"></div>

    
    <div id="div_table">


    <div class="d-flex justify-content-between">

      <p class="font-italic size-large">Dossiers en cours</p>

      <a name="" id="" class="btn btn-success text-light" href="./Demandes.php" role="button">+Deposer une demande</a>
    </div>

      <table class="table m-5" id="table" >
        <thead>
          <tr>
            <th>Numero</th>
            <th>Nom</th>
            <th>Procedure</th>
            <th>Departement</th>
            <th>Etat</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">1</td>
            <td>These</td>
            <td>Envoi</td>
            <td>Mathematique</td>
            <td>Recu</td>
            <td>24/09/2021</td>
          </tr>
          <tr>
              <td scope="row">2</td>
              <td>Dossier</td>
              <td>Envoi</td>
              <td>Secretariat</td>
              <td>Recu</td>
              <td>24/09/2021</td>
          </tr>
          <tr>
          <td scope="row">6</td>
            <td>Dossier</td>
            <td>Envoi</td>
            <td>Secretariat</td>
            <td>En traitement</td>
            <td>24/09/2021</td>
          </tr>
          <tr>
              <td scope="row">12</td>
              <td>Article</td>
              <td>Envoi</td>
              <td>Departement</td>
              <td>Recu</td>
              <td>24/09/2021</td>
          </tr>
          <tr>
          <td scope="row">15</td>
            <td>Articles</td>
            <td>Envoi</td>
            <td>Departement</td>
            <td>En traitement</td>
            <td>24/09/2021</td>
          </tr>
        </tbody>
      </table>
    
    </div>

    

  </div>

  
  </body>
</html>

