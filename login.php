<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div{            
            
        }
        button{
            background-color: #EEEFF1;
            width: 100px;
        }
        fieldset{
            border: 3px solid;
            width: 300px;
            height: 200px;
        }
        h1{
            font-family: "맑은 고딕";
        }
        body {
        margin: 0;
        background-color: #1BBC9B;
}
        .login{
        width: 350px;
        background-color: #EEEFF1;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        padding: 20px;
        text-align: center;
        border: none;
    
}
.submit {
  font-size: 14px;
  border: none;
  padding: 10px;
  width: 260px;
  background-color: #1BBC9B;
  margin-bottom: 30px;
  color: white;
}
.text-field {
      font-size: 14px;
      padding: 10px;
      border: none;
      width: 260px;
      margin-bottom: 10px;
 
}
    </style>
    <?php
    if(isset($_POST['ID'])&&isset($_POST['PW'])){
  $userid=$_POST['ID'];
  $userpw=$_POST['PW'];

  $conn= mysqli_connect('localhost', 'root', 'root', 'Userprofile');

  $sql="SELECT * FROM pro where id='$userid'&& psw='$userpw'";
  
  if($result=mysqli_fetch_array(mysqli_query($conn,$sql))){
      echo("<script>location.href='mainon.html';</script>"); 
  }
  else{
    echo "<script>alert("존재하지 않는 사용자 입니다")</script>";
  }
}
?>
</head>
<body>

    <div class="login">
        <h1>Logo</h1>
    <form id="user_login" method="post">
        <p>
        <input type ="text" name="ID" class="text-field" placeholder="아이디" size ="15" required>
        <input type ="password" name="PW" class="text-field" placeholder="비밀번호" size ="15" required> </p>
        <input type ="submit" value ="로그인" class="submit">
        <br>
    <p id="regist"><a href="find_account.html" target="_blank">아이디 찾기/비밀번호 찾기</a>&nbsp; &nbsp; &nbsp; &nbsp;<a href="regist.html">회원가입</a></p>
    </form>
</div>
</body>
</html>