<!DOCTYPE HTML>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <!-- Open-Iconic icons -->
        <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet"> 

        <!-- Add my own CSS Here-->
        <link rel="stylesheet" href="css/mystyling.css">

        <title>verjportalen.dk Subscribe</title>

    </head>

    <body>

        <?php require('site-header.php') ?>

        <div class="container">

            <div class="py-5 text-center">

<!--virker ikke    <span class="oi oi-arrow-thick-bottom"></span>
<span class="oi oi-arrow-thick-bottom" title="icon name" aria-hidden="true"></span> -->

                <img class="icon" src="open-iconic/svg/globe.svg" alt="globe.svg"> 
                <svg src="open-iconic/svg/globe.svg" >

                <h2>Tilmelding</h2>
                <p class="lead">Tilmeld dig vores nyhedsbrev herunder og få gode tilbud og nyheder.</p>
            </div>

            <form class="needs-validation" novalidate="">

                <div class="row"> 
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Fornavn</label>
                        <input class="form-control is-invalid" id="firstName" placeholder="" value="" required="" type="text"  aria-describedby="forstNameHelpBlock">
                        <small id="firstNameHelpBlock" class="form-text text-muted">
                          Dette er en hjælpetekst til fornavn
                        </small>
                        <div class="invalid-feedback">
                            Fornavn skal angives.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Efternavn</label>
                        <input class="form-control" id="lastName" placeholder="" value="" required="" type="text">
                        <div class="invalid-feedback">
                            Efternavn skal angives.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jobTitle">Jobtitel <span class="text-muted">(Frivillig)</span></label>
                    <input class="form-control" id="jobTitle" placeholder="Knaptrykker" value="" type="text">
                </div>

                <div class="mb-3">
                    <label for="email">Email </label>
                    <input class="form-control" id="email" placeholder="you@example.com" type="email">
                    <div class="invalid-feedback">
                        Gyldig Email skal angives.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Adresse </label>
                    <input class="form-control" id="address" placeholder="Solitudevej 3, 9999 Regnby" required="" type="text">
                    <div class="invalid-feedback">
                        Adresse skal angives.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="telephone">Telefon <span class="text-muted">(Frivillig)</span></label>
                    <input class="form-control" id="telephone" placeholder="11223344" type="text" >
                </div>

                <button class="mb-3 btn btn-success btn-lg btn-block" type="submit">Tilmeld</button>
            </form>
        </div>

    </div>

    <?php require 'site-footer.php'; ?>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- TODO!!! <script src="../../assets/js/vendor/holder.min.js"></script> -->
    <!--TODO holder.min.js er noget med billeder men nødvendig??-->

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
          'use strict';

          window.addEventListener('load', function () {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');

              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function (form) {
                  form.addEventListener('submit', function (event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              });
          }, false);
      })();

    </script>


</body>

</html>
