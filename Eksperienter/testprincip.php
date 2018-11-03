<!DOCTYPE HTML>
<html>

  <head>
    <title>PROJEKT3 Test serverside validerings princip</title>
  </head>

  <body>
    <?php
    include('common-functions.php');

    $nameErr = "";
    $name = "";
    $isValidated = false; //forvent det værste!
    $isGet = true; //init

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      //Der spørges på siden.
      $isValidated = true;
      $isGet = true;
    } else {
      $isGet = false;
      $isValidated = true;
      //Der postes fra siden start validering:
      if (empty($_POST["name"])) {
        $nameErr = "Name skal udfyldes";
        $isValidated = false;
      } else {
        $name = clean_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
          $nameErr = "Only letters and white space allowed";
          $isValidated = false;
        } //Check regular expresion
      } // Field empty?
    } // request is Get

    if (!$isGet and $isValidated) {  //POST + VALIDERET  
      ?>
      <h2>Du har nu postet data</h2>
      <p>Tak fordi du meldte dig til <?php echo $name; ?>. Mange tak.</p>
      <a href "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >Tryk her for at prøve igen.</a>
      <?php
    } else {
      //Enten er det en GET eller også en post som ikke blev valideret.
      //Uanset - så send registringsformen...
      ?>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Velkommen dette er starten</h2>
        Name: <input type="text" name="name" required="" value="<?php echo $name; ?>">
        <br>
        <?php echo $nameErr; ?>
        <br>
        <input type="submit" name="submit" value="Submit">
      </form>

    <?php } ?>
  </body>
</html>
