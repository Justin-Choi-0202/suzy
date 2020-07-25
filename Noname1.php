<meta charset="utf-8">
<?php
$name = $_POST['id'];
$password = $_POST['password'];

if(!$name)Error("아이디를 입력하세요.");
if(!$password)Error("비밀번호를 입력하세요.");

if($name=='suzy' AND $password=='891225'){

  echo "안수지 사랑해";
  echo "<img src='memories1.jpg'>";
} else {
  echo "준비중입니다.";
}
?>
