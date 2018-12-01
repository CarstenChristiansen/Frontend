<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Add my own CSS Here-->
    <link rel="stylesheet" href="css/mystyling.css">

    <title>verjportalen.dk</title>
  </head>

  <body>
 
    <?php include 'site-header.php'; ?>

    <article class="container frame-gradient">
      
      <section id="mission" class="general-item mb-3 pb-3">
         <h1>Du ved hvad vejret betyder for din virksomhed</h1>
         <h3>Vi har de mest præcise vejrudsigter så du altid er foran</h3>
         <a id="nyhedsbrev" class="btn btn-primary btn-block shadow" href="subscribe.php">Tilmeld Nyhedsbrev</a>
      </section>
         
      <section class="row no-gutters mb-3">
        <div class="col-md-4">
          <img src="image/udsigt2.jpg" alt="udsigt" class="img-fluid item-image">
        </div>
        <div class="col-md-8 general-item">
          <div class="general-item">
            <h2>UDSIGT</h2>
            <h3>Udsigt er indsigt.</h3>
            <p>Få postnummer præcise vejrudsigter for dit lokaleområde.</p>
            <a id="nyhedsbrev" class="btn btn-success btn-sm my-2" href="index.php">Se et eksempel!</a>
          </div>
        </div>
      </section> 
                
      <section class="row no-gutters mb-3">
        <div class="col-md-4 ">              
          <img src="image/varsel2.jpg" alt="varsel" class="img-fluid">
        </div>
        <div class="col-md-8 general-item">
          <div class="general-item">
            <h2>VARSEL</h2>
            <h3>Vær beredt!</H3>
            <p>
              Vejrportalen varsler dig om vigtige vejrbegivenheder så DU kan agere INDEN skaden er sket.  
            </p>
            <a id="nyhedsbrev" class="btn btn-success btn-sm my-2" href="index.php">Vis mig hvordan!</a>
          </div>
        </div>
      </section> <!-- ROW -->

      <section class="row no-gutters mb-3">
        <div class="col-md-4">
          <img src="image/Melding2.jpg" alt="melding" class="img-fluid">
        </div>
        <div class="col-md-8 general-item">
          <div class="general-item">
            <h2>MELDING</h2>
            <H3>Et stærkt hold står bag</H3>
            <p>
               Vores 100 vejrmeldere reagere når de oplever at vejret gør en forskel.
            </p>
            <a id="nyhedsbrev" class="btn btn-success btn-sm my-2" href="index.php">Hvad melder de?</a>
          </div>
        </div>
      </section> <!-- ROW -->    
        
      <section class="general-item btn-block ">
        <h3>Find ud af hvordan vi har hjulpet andre professionelle.</h3>
          <img  src="svg/Map_DK.svg" alt="cases" class="img-fluid">
          <a class="btn btn-primary btn-lg btn-block shadow mb-1" href="cases.php">Klik lokalt</a>
      </section>
    
    </article> <!--Main content -->

  <?php require 'site-footer.php'; ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script>
    console.log("index.php javascript in the end....");
  </script>

  <!-- Add my own Javascript here: -->

</body>

</html>
