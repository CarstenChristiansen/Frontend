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
      <div class="container frame-gradient">
        <div class="row no-gutters" >
          
          <div class="col-md-6 general-item">
            <div class="general-item">
              
              
              <h3>Klik lokalt</h3>
              <!-- <img  id="card" src="svg/Map_DK2.svg" alt="cases" class="img-fluid pb-2"> -->
              <object data="svg/Map_DK2.svg" type="image/svg+xml"
                      id="dk-map" class="img-fluid"></object>
                      <a id="nyhedsbrev" class="btn btn-primary btn-block shadow " href="subscribe.php">Nyhedsbrev</a>
            </div>

            <!-- <a class="my-3 btn btn-secondary btn-block " href="animate.php">Vejr Mascot</a>
            <a class="my-3 btn btn-secondary btn-block " href="imagetest.php">Imagetest</a> -->
          </div> <!-- inner col-3 -->
          <div class="col-md-6 general-item">

            <section class="general-item">
              <h2>Jens Hansen Lykkegård</h2>
              <img src="image/Landmand.jpg" alt="udsigt" class="img-fluid rounded shadow">  
              <h3>150.000Kr sparet</h3>
              <p>Høsten <em>tørt</em> i hus og 150.000 kroner sparret på korntørring. "Vi var skeptiske i starten" udtaler Jens Hansen på Lykkegård i det Sønderjyske. Klog af skade har vi aldrig troet helt på vejrudsigten.<p>

              <p class="text-center font-italic" >.. men med SÅ præcise vejrudsigter kan vi planlægge arbejdet og minimere vore omkostninger.</p> 
              <p>Vi på Lykkegård kan varmt anbefale vejrportalen! </p>

              <table class="faktaboks rounded" border="0" cellspacing="3" cellpadding="3">
                <H6>Faktaboks</H6>
                <tbody>
                  <tr>
                    <td>Hvor:</td>
                    <td>Sønderjylland</td>
                  </tr>
                  <tr>
                    <td>Areal:</td>
                    <td>300Ha</td>
                  </tr>
                  <tr>
                    <td>Abonent:</td>
                    <td>2013</td>
                  </tr>
                  <tr>
                    <td>Vejrpartner:</td>
                    <td>2014</td>
                  </tr>

                </tbody>
              </table>
            </section>
          </div>    


        </div> <!-- row -->
      </div> <!-- main content -->
      <!--bootstrap container-->
    </article> 

    <?php require 'site-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/cases.js" defer></script>
    <script>
      console.log("index.php javascript in the end....");
    </script>

    <!-- Add my own Javascript here: -->

  </body>

</html>

