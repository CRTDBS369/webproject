<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$db = mysqli_connect('localhost', 'root', 'root', 'Userprofile');

$user_id = $_POST['Userid'];
$user_pass = $_POST['Userps'];
$user_name = $_POST['users_name'];
$user_phone = $_POST['phone'];

$sql = "insert into pro values(\"$user_id\", \"$user_pass\", \"$user_name\", \"$user_phone\" )";

mysqli_query($db,$sql);
mysqli_close($db);

?>
<script>
    alert("등록 완료");
</script>

<a herf="login.html">
돌아가기
</a>
</body>
</html>
