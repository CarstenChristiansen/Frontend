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

    <article>
      <div class="container">


        <div id ="mission" class ="mission general-item" >
          <h2 class="">Du ved hvad vejret betyder for din virksomhed</h2>
          <h3>Vi har de mest præcise vejrudsigter så du altid er foran</h3>
          <a id="nyhedsbrev" class="btn btn-primary btn-block shadow" href="subscribe.php">Nyhedsbrev</a>
        </div> 

        <article >
          <H1 class ="text-center mb-5" >VÆR PÅ FORKANT</H1>

          <div class="row mb-2">
            <section class="col-md-4">
              <img src="image/udsigt.jpg" alt="udsigt" class="img-fluid">
            </section>
            <section class="col-md-8">
              <h2>UDSIGT</h2>
              <p>
                Udsigt er lig med indsigt. Indsigt der kan spare DIN tid og penge. 
                Vejrportalen leverere postnummer præcise vejrudsigter for dit lokale område. 
                Vi går helt ned på postnummer niveau.  
              </p>
            </section>
          </div> <!-- ROW -->

          <div class="row mb-2">
            <section class="col-md-4">
              
              <img src="image/varsel.jpg" alt="varsel" class="img-fluid">
            </section>
            <section class="col-md-8">
              <h2>Varsel</h2>
              <p>
                Vær beredt! Vejrportalen varsler dig om vigtige vejrbegivenheder så DU kan agere INDEN skaden er sket.  
              </p>
            </section>
          </div> <!-- ROW -->

          <div class="row mb-5">
            <section class="col-md-4 ">

             
              <img src="image/melding.jpg" alt="melding" class="img-fluid">
            </section>
            <section class="col-md-8">
               <h2>Melding</h2>
              <p>
                Vi har et stærkt hold af private vejrmeldere tilknyttet som reagere når de oplever at vejret gør en forskel. Vi modtager i gennemsnit mere end 200 meldinger om dagen i visse postområder.
              </p>
            </section>
          </div> <!-- ROW -->    
        </article>  

        <div class="general-item btn-block ">
          <h3>Find ud af hvordan vi har hjulpet andre professionelle.</h3>
          <img  src="svg/Map_DK.svg" alt="cases" class="img-fluid">
          <a class="btn btn-primary btn-lg btn-block shadow mb-1" href="cases.php">Klik lokalt</a>
        </div>
      </div> 
    </div> 
    <!--bootstrap container-->
  </article> 

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
