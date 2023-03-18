<?php
$message = $_POST["message"];
$image = $_FILES["file_upload"];
$uploaded_filename = $image['name'];
move_uploaded_file(
    $image['tmp_name'],
    "Files/${uploaded_filename}"
);

date_default_timezone_set('Asia/Tokyo');
$timestamp = date('Y年m月d日H時i分s秒');

$fp = fopen("toukou.txt" , "a");
fwrite($fp,$timestamp . "\t" . $message. "\n");
fclose($fp);


if(isset($_POST['投稿']) === true){
    $message =$_POST['message'];

}

?>

<!DOCTYPE html>
<body>
    <h1>投稿が完了しました</h1>
    <br>
    <a href="index.php">掲示板に戻る</a>
</body>
</html>