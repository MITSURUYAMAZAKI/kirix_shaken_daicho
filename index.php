<?php

  require_once("./function.php");

# DBと接続

  $dsn = 'mysql:dbname=shaken_daicho;host=localhost';
  $user = 'root';
  $password='';
  $dbh = new PDO($dsn, $user, $password);
  $dbh->query('SET NAMES utf8');

# SQL文の実行

$sql = 'SELECT * FROM `kichu_shaken_202108`';
$stmt = $dbh->query($sql);
$dbh = null;

$index =["契約番号","お客様名","営業所名","地域名","分類番号","ひらがな","一連指定番号","期日"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>期中車検</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>

  </header>
  <main>
    <div class="row">
      <div class="number">契約番号</div>
      <div class="name">お客様名</div>
      <div class="department">営業所名</div>
      <div class="plate">登録番号</div>
      <div class="up">満了日</div>
      <div class="will">予定日</div>
      <div class="completed">完了日</div>
      <div class="hoteki">保安基準適合証</div>
      <div class="sheet">車検証</div>
      <!-- <div class="box"></div> -->
    </div>
    <?php foreach ($stmt as $data): ?>
    <form action="#" method="post">
      <div class="row">
        <!-- <input type="hidden" name="id" value="<?= $data[0]; ?>">> -->
        <div class="number"><?= $data[1];?></div>
        <div class="name"><?= $data[2];?></div>
        <div class="department"><?= $data[3];?></div>
        <div class="plate"><?= $data[4]." ".$data[5]." ".$data[6]." ".$data[7];?></div>
        <div class="up"><?= $data[8];?></div>
        <input type="date" class="will">
        <input type="date" class="completed">
        <div class="hoteki">保安基準適合証</div>
        <div class="sheet">車検証</div>
        <!-- <div class="box"></div> -->    
      </div>
    </form>
    <?php endforeach?>
  </main>
  <footer>

  </footer>
</body>
</html>