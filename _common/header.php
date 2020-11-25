<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>s02 Ikei's Cafe</title>
  <link rel="icon" href="images/favicon.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP">
  <script src="js/jquery-3.5.1.min.js"></script>
  <!-- <script src="js/okashi.js"></script> -->
</head>

<body>
  <header>
    <div><a href="index.php"><img src="images/logo480.png" alt="Ikei's Cafe"></a></div>
    <!-- <nav id="headerNav">
      <ul>
        <li><a href="#">none</a></li>
        <li><a href="#">none</a></li>
        <li><a href="#">none</a></li>
      </ul>
    </nav> -->
  </header>
  <?php require '_common/kadai_nav.php'; ?>
  <?php
  $pathNow =  $_SERVER['PHP_SELF']; // 現在ページのパス
  $pathNowArray = explode("/", $pathNow); // 現在ページのパスの文字列を分割
  $pathNowLast = $pathNowArray[array_key_last($pathNowArray)]; // 現在ページのファイル名
  // クエリパラメータを含む場合取り除く
  if (strpos($pathNowLast, '?') !== false) {
    $pathNowLast = explode("?", $pathNowLast)[0];
  }
  // ホーム以外の時にパンくずリストを表示
  // if ($pathNowLast !== 'index.php') {
  //   require '_common/breadcrumb.php';
  // }
  ?>
  <div id="contents" class="clearfix">
    <div id="main">
