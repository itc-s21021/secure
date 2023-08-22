<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  $id = @$_POST['ID'];   
  $pwd = @$_POST['PWD']; 
  $dbhost = $_ENV['MYSQL_HOST'] ?? '127.0.0.1';
  $db = new PDO("mysql:host=$dbhost;dbname=wasbook", "root", "wasbook");
  $sql = "SELECT * FROM users WHERE id ='$id' AND PWD = '$pwd'";
  $ps = $db->query($sql);   
?>
<html>
<body>
<?php
  if ($ps->rowCount() > 0) { 
    $_SESSION['id'] = $id;
    echo 'ログイン成功です';
  } else {
    echo 'ログイン失敗です';
  }
  // pg_close($con);
?>
</body>
</html>
