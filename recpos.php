<!DOCTYPE HTML>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>

    <?php
    include('common-functions.php'); //sikkerhed/filskrivning...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $lat = clean_input($_POST["lat"]);
      $lon = clean_input($_POST["lon"]);


      $MyObject = new stdClass();
      $MyObject->lat = $lat;
      $MyObject->lon = $lon;
      write_object_to_file_as_JSON2($subscriberObject);
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>
