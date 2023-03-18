<?php
  
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];

  $file = 'data.json';
  $json_str = file_get_contents($file);

 
  $json[$user_id] = [
    'user_id' => $user_id,
    'password' => $password
  ];
  $json_str = json_encode($json);


  if ( ($fp = fopen($file, 'wb')) ) {
    fwrite($fp, $json_str,);
    fclose($fp);
  }
  header('Location: login.php');



