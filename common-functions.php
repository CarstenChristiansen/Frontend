<?php

function clean_input($data) {
  $data = trim($data);              // Fjerner mellemrum start/slut 
  $data = stripslashes($data);      // Fjerner slash /
  $data = htmlspecialchars($data);  // Fjerner TODO - EXPLAIN!!!????
  return $data;
}

function write_object_to_file_as_JSON($object) {
  //encode as JSON
  $myJSON = json_encode($object);
  $filename = 'subscribers/' . $object->firstName .'_'.$object->lastName.'.json';
  //Write to file
  $myfile = fopen($filename, "w") or die("Unable to open file! $filename");
  fwrite($myfile, $myJSON);
  fclose($myfile);
}

//Writes to same logfile...
function write_object_to_file_as_JSON2($object) {
  //encode as JSON
  
  $myJSON = json_encode($object);
  $myJSON = date('l jS \of F Y h:i:s A').$myJSON."\n";
  $filename = 'subscribers/positions.json';
  //Write to file
  $myfile = fopen($filename, "a") or die("Unable to open file! $filename");
  fwrite($myfile, $myJSON);
  fclose($myfile);
}

?>

