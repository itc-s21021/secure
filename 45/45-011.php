<?php
  function ex($s) { 
    echo htmlspecialchars($s, ENT_COMPAT, 'UTF-8');
  }
  session_start();
  $id = @$_SESSION['id']; 
  $msg = filter_input(INPUT_POST, 'msg');
  $token = filter_input(INPUT_POST, 'token');
  if (empty($token) || $token !== $_SESSION['token'])
    die('正規の画面から投稿ください');
?><body style="background-color: #FFFFFF">
<?php ex($id); ?>さん、以下の内容を投稿しました<br>
<?php ex($msg); ?>
</body>
