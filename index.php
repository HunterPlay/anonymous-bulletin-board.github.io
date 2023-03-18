<?php
session_start();
?>
<?php

if(isset($_SESSION['user_id'])) {
    echo 'ようこそ' . $_SESSION['user_id'] . 'さん';
 } else {
     header('Location: login.php');
     exit();
 } 
?>

<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>DHちゃんねる</title>
    <style type="text/css">
<!--
body{background-color:#e0f8ff;}
h2{border-bottom:solid 1px #000;}
input[type="submit"]{
    width:125px;
}
-->
</style>
</head>
<body>

<h1>DHちゃんねる</h1>
<br>
<h2>スレッド</h2>
<?php
$fp = fopen("toukou.txt" , "r");
while ($line = fgets($fp)) {
    echo "$line<br />";
  }
  fclose($fp);
  
?>

<br>
<form method="POST" action="enter.php" enctype="multipart/form-data">
  <div>
    <textarea cols="100" rows="10" name="message" placeholder="本文を入力してください"></textarea>
      <br>
      <input type="file" name="file_upload">
      <input type="text" name="mail" placeholder="Mail(省略可)">
      <input type="reset" name="clear" value="クリア">
      <input type="submit" name="Enter" value="投稿">
  </div>
</form>
</body>
</html>