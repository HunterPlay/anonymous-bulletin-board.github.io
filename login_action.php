<?php

session_start();

$user_id = $_POST['user_id'];
$password = $_POST['password'];

if($user_id == '123' && $password == '123') {
    $_SESSION['user_id'] = $user_id;
} else {
echo "ログインID もしくは パスワードが間違っています。";
}

if(isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<body>
    <br>
    <a href="login.php">ログインページに戻る</a>
</body>
</html>