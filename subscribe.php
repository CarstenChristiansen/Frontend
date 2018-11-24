<!DOCTYPE HTML>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Add my own CSS Here-->
    <link rel="stylesheet" href="css/mystyling.css">

    <title>verjportalen.dk Subscribe</title>

  </head>

  <body>
    <?php include 'site-header.php'; ?>
    <?php
    include('common-functions.php'); //sikkerhed/filskrivning...
    //Data der skal registreres:
    $firstName = $firstNameErr = "";
    $lastName = $lastNameErr = "";
    $jobTitle = $jobTitleErr = "";
    $email = $emailErr = "";
    $address = $addressErr = "";
    $telephone = $telephoneErr = "";

    //Status på validering
    $isValidated = false; //forvent det værste!
    $isGet = true;        //init

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      //Der spørges på siden.
      $isValidated = true;
      $isGet = true;
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
      $isGet = false;
      $isValidated = true;

      //Validering af input:

      if (empty($_POST["firstName"])) {
        $firstNameErr = "Server: Fornavn skal udfyldes";
        $isValidated = false;
      } else {
        $firstName = clean_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-]*$/", $firstName)) {
          $firstNameErr = "Server: Kun ET navn og ingen mellemrum";
          $isValidated = false;
        } //Check regular expresion
      } // Field empty?

      if (empty($_POST["lastName"])) {
        $nameErr = "Server: Efternavn skal udfyldes";
        $isValidated = false;
      } else {
        $lastName = clean_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-]*$/", $lastName)) {
          $lastNameErr = "Server: Kun ET navn og ingen mellemrum";
          $isValidated = false;
        } //Check regular expresion
      } // Field empty?

      if (empty($_POST["jobTitle"])) {
        $jobTitle = "";
      } else {
        $jobTitle = clean_input($_POST["jobTitle"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Server siger: Email skal udfyldes";
        $isValidated = false;
      } else {
        $email = clean_input($_POST["email"]);
        // Check at det er en dk adr ved at se på de 3 sidste karakterer.
        if (substr($email, -3) != ".dk") {
          $emailErr = "Server: Ikke en e-mail fra Danmark. This is a local shop for local people!";
          $isValidated = false;
        }
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Server: Forkert email format";
          $isValidated = false;
        }
      }

      if (empty($_POST["address"])) {
        $addressErrErr = "Server: Adresse skal udfyldes";
        $isValidated = false;
      } else {
        $address = clean_input($_POST["address"]);
      } // Field empty?

      if (empty($_POST["telephone"])) {
        $telephome = "";
      } else {
        $telephone = clean_input($_POST["telephone"]);
      }
    } else {
      //Behandeler alle andre requests end GET/POST som en GET.
      $isValidated = false;
      $isGet = true;
      die("IKKE understøttet request!");
    } // request metode.
    //echo "is get: $isGet isvalidated: $isValidated";
    //echo "firstName: $firstName firstNameErr: $firstNameErr";
    ?>

    <main class="container main-content pb-2"> <!-- Det er nødvendig med padding i bunden fordi knappen ellers går helt ned til footeren. -->
      <div class="general-item rounded">
      <?php
      if (!$isGet and $isValidated) {  //POST + VALIDERET  
        //Danne object:
        $subscriberObject = new stdClass();
        $subscriberObject->firstName = $firstName;
        $subscriberObject->lastName = $lastName;
        $subscriberObject->jobTitle = $jobTitle;
        $subscriberObject->email = $email;
        $subscriberObject->address = $address;
        $subscriberObject->telephone = $telephone;
        write_object_to_file_as_JSON($subscriberObject);
        ?>
        <div class="py-2 text-center">
          <img class="icon" src="open-iconic/svg/check.svg" alt="check.svg"> 
          <h2>Du er nu tilmeldt vores nyhedsbrev</h2>
          <p>Tak fordi du meldte dig til <?php echo $firstName . ' ' . $lastName; ?>. Mange tak.</p>
          <a href "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >Tryk her for at prøve igen.</a>
        </div> <!--Header text --> 

        <?php
      } else {
        //Enten er det en GET eller også en post som ikke blev valideret.
        //Uanset - så send registringsformen...
        ?>
        <div class="py-2 text-center">
          <img class="icon" src="open-iconic/svg/envelope-closed.svg" alt="envelope-closed">  
          <h2>Tilmelding</h2>
          <p class="lead">Tilmeld dig vores nyhedsbrev herunder og få gode tilbud og nyheder.</p>
        </div> <!--Header text -->

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="needs-validation" novalidate="">

          <div class="row"> 
            <div class="col-md-6 mb-3">
              <label for="firstName">Fornavn</label>
              <input class="form-control <?php if (!empty($firstNameErr)) echo "is-invalid"; ?>" id="firstName" 
                     placeholder="" name="firstName" value="<?php echo $firstName; ?>" required="" type="text"  aria-describedby="forstNameHelpBlock">
              <small id="firstNameHelpBlock" class="form-text text-muted">
                Dette er en hjælpetekst til fornavn 
              </small>
              <div class="invalid-feedback"> 
                Fornavn skal angives. <!--Clietside fejlmedd.--> 
                <?php echo $firstNameErr; //Dette er Serverside responce ved fejl  ?> 
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="lastName">Efternavn</label>
              <input class="form-control <?php if (!empty($lastNameErr)) echo "is-invalid"; ?>" id="lastName" 
                     required="" type="text" name="lastName" value="<?php echo $lastName; ?>">
              <div class="invalid-feedback">
                Efternavn skal angives.
                <?php echo $lastNameErr; //Dette er Serverside responce ved fejl  ?> 
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="jobTitle">Jobtitel <span class="text-muted">(Frivillig)</span></label>
            <input class="form-control" id="jobTitle" 
                   placeholder="Knaptrykker"  type="text" name="jobTitle" value="<?php echo $jobTitle; ?>">
          </div>

          <div class="mb-3">
            <label for="email">Email </label>
            <input class="form-control <?php if (!empty($emailErr)) echo "is-invalid"; ?>" id="email"  
                   required="" type="email" name="email" value="<?php echo $email; ?>">
            <div class="invalid-feedback">
              Gyldig Email skal angives.
              <?php echo $emailErr; //Dette er Serverside responce ved fejl  ?> 
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Adresse </label>
            <input class="form-control <?php if (!empty($addressErr)) echo "is-invalid"; ?>" id="address" 
                   required="" type="text" name="address" value="<?php echo $address; ?>">
            <div class="invalid-feedback">
              Adresse skal angives.
              <?php echo $addressErr; //Dette er Serverside responce ved fejl  ?> 
            </div>
          </div>

          <div class="mb-3">
            <label for="telephone">Telefon <span class="text-muted">(Frivillig)</span></label>
            <input class="form-control" id="telephone"  type="text" name="telephone" value="<?php echo $telephone; ?>">
          </div>

          <button class="btn btn-success btn-lg btn-block" type="submit">Tilmeld</button>
        </form>
      <?php } // Slut på form, GET eller ikke valideret POST  ?> 
      </div> <!-- general-item -->
    </main>  <!--Container main-content--> 

    <?php require 'site-footer.php'; ?>

    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        'use strict';
        console.log("disable submission script fired!");
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
