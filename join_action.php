<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>회원가입중..</title>
    </head>
    <body>

    </body>
</html>
<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  'qwopaskl0532',
  'hihutest');
$sql = "
  INSERT INTO std_info
    (std_id, std_name, std_dep, std_pwd, std_email, created)
    VALUES(
        '{$_POST['std_id']}',
        '{$_POST['std_name']}',
        '{$_POST['std_dep']}',
        '{$_POST['std_pwd']}',
        '{$_POST['std_email']}',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  ?>
  <script>
   alert('저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요');
   location.replace("join.php");
  </script>
  <?php
  error_log(mysqli_error($conn));
} else {
  ?>
  <script>
  alert('가입 완료');
  location.replace("login.php");
  </script>
  <?php
}
?>
