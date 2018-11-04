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
    <div class="container main-content ">
      <div class="row" id="main-page-devision">
        <!-- design 9 (elementer) / 3 (sidebar) -->
        <div class="col-md-9">
          <div class="row">
            <!-- Rows innerDe første 9 koloner -- deles igen i 3 -->
            <section id="udsigt" class="myitem col-md-4">
       
              <h2>Udsigt</h2>
              <!--** skal centreres -->
              <img src="image/udsigt.jpg" alt="udsigt" class="img-fluid">
              <p>
                Udsigt er lig med indsigt. Indsigt der kan spare DIN tid og penge. Vejrportalen leverere postnummer præcise vejrudsigter for dit lokale område. Vi går helt ned på postnummer niveau.  </p>
          
            </section>

            <section id="varsel" class="myitem col-md-4 ">
              
              <h2>Varsel</h2>
              <img src="image/varsel.jpg" alt="varsel" class="img-fluid">
              <p>
                Vær beredt! Vejrportalen varsler dig om vigtige vejrbegivenheder så DU kan agere INDEN skaden er sket.  
              </p>
       
            </section>

            <section id="melding" class="myitem col-md-4 ">
              <h2>Melding</h2>
              <img src="image/melding.jpg" alt="melding" class="img-fluid">
              <p>
                Vi har et stærkt hold af private vejrmeldere tilknyttet som reagere når de oplever at vejret gør en forskel. Vi modtager i gennemsnit mere end 200 meldinger om dagen i visse postområder.
              </p>
            </section>

            <section id="graf" class="myitem col-md-4 ">
              <h2>Graf</h2>
              <canvas id="temp-graf" width="300" height="300">
                <script>
                  var canvas = document.getElementById("temp-graf");
                            var ctx = canvas.getContext("2d");

                            ctx.fillStyle = "#777777";
                            ctx.moveTo(20, 250);
                            ctx.lineTo(270, 250);
                            ctx.moveTo(20, 220);
                            ctx.lineTo(270, 220);
                            ctx.moveTo(20, 190);
                            ctx.lineTo(270, 190);
                            ctx.moveTo(20, 160);
                            ctx.lineTo(270, 160);
                            ctx.moveTo(20, 130);
                            ctx.lineTo(270, 130);
                            ctx.stroke();

                            ctx.fillStyle = "#000088";
                            ctx.fillRect(30, 250, 5, -30);
                            ctx.fillRect(40, 250, 5, -60);
                            ctx.fillRect(50, 250, 5, -90);
                            ctx.fillRect(60, 250, 5, -30);
                            ctx.fillRect(70, 250, 5, -30);
                            ctx.fillRect(80, 250, 5, -0);
                            ctx.fillRect(90, 250, 5, -0);
                            ctx.fillRect(100, 250, 5, -30);
                            ctx.fillRect(110, 250, 5, -0);
                            ctx.fillRect(120, 250, 5, -0);
                            ctx.fillRect(130, 250, 5, -0);
                            ctx.fillRect(140, 250, 5, -60);
                            ctx.fillRect(150, 250, 5, -120);
                            ctx.fillRect(160, 250, 5, -60);
                            ctx.fillRect(170, 250, 5, -0);
                            ctx.fillRect(180, 250, 5, -0);
                            ctx.fillRect(190, 250, 5, -30);
                            ctx.fillRect(200, 250, 5, -60);
                            ctx.fillRect(210, 250, 5, -0);
                            ctx.fillRect(220, 250, 5, -0);
                            ctx.fillRect(230, 250, 5, -60);
                            ctx.fillRect(240, 250, 5, -60);
                            ctx.fillRect(250, 250, 5, -00);
                            ctx.fillRect(260, 250, 5, -30);

                        </script>
                <caption>Nedbør kommende døgn i 6650 Brørup</caption>
                Oh no HTML5 is not supported. Cant show graph.
              </canvas>

            </section>

            <section id="Udsigt" class="myitem col-md-4 ">
              <H2>Tabel</H2>
              <table>
                <caption>Vejret kommende time</caption>
                <tr>
                  <th>Postnr</th>
                  <th>Nedbør</th>
                  <th>Vind</th>
                </tr>
                <tr>
                  <td>6600</td>
                  <td>10</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>6621</td>
                  <td>0</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>6630</td>
                  <td>0</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>6640</td>
                  <td>2</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>6650</td>
                  <td>1</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>6683</td>
                  <td>1</td>
                  <td>3</td>
                </tr>
              </table>
            </section>

            <section class="myitem col-md-4 " id="campaign">
              <H2>Video</H2>
              <video width=100% controls video.preload="auto">
                <source src="video/intro.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
              <p>Se vores nye reklamevideo som kører på TV for øjeblikket.</p>
            </section>
          </div><!-- rows inner-->
        </div><!-- inner col-9 -->

        <aside class="col-md-3 sidebar">
          <a class="my-3 btn btn-primary btn-block" href="subscribe.php">Nyhedsbrev</a>
         
          

          <!-- <a class="my-3 btn btn-secondary btn-block " href="animate.php">Vejr Mascot</a>
          <a class="my-3 btn btn-secondary btn-block " href="imagetest.php">Imagetest</a> -->
        </aside> <!-- inner col-3 -->
      </div> <!-- outer devision -->
    </div> <!-- main content -->
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
