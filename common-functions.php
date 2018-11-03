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
?>

