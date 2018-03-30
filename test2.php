<?php
/**
 * Created by PhpStorm.
 * User: nako
 * Date: 2018/03/30
 * Time: 16:18
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>伊奈のページ</title>
<?php
$name=$_GET["name"];
$pass=$_GET["pass"];
if($name=="ando"&&$pass=="test"){
    http_response_code(301);
    header("location:http://google.com/");
    exit;
}else{
    $message="バカ";
}
?>
</head>
<body>
<?php echo $message; ?>
<form action="test2.php">
    <input type="text" name="name">
    <input type="password" name="pass">
</form>
</body>
</html>