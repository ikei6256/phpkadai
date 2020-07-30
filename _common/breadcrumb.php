<div id="breadcrumb">
  <?php
  $breadcrumbs = array(
    "index.php" => "ホーム",
    "kadai_01.php" => "課題1",
    "kadai_01_output.php" => "課題1",
    "kadai_02.php" => "課題2",
    "kadai_02_output.php" => '課題2',
    "kadai_03.php" => "課題3",
    "kadai_03_output.php" => "課題3",
    "kadai_04.php" => "課題4",
    "kadai_04_output.php" => "課題4",
    "kadai_05.php" => "課題5",
    "kadai_05_output.php" => "課題5",
    "kadai_06.php" => "課題6",
    "kadai_06_output.php" => "課題6",
    "kadai_07.php" => "課題7",
    "kadai_07_output.php" => "課題7",
    "kadai_08.php" => "課題8",
    "kadai_08_output.php" => "課題8",
    "kadai_09.php" => "課題9",
    "kadai_09_output.php" => "課題9",
    "kadai_10.php" => "課題10",
    "kadai_10_output.php" => "課題10"
  );
  $pathNow =  $_SERVER['PHP_SELF']; // 現在ページ(移動後)のパス
  $pathNowArray = explode("/", $pathNow); // 現在ページのパスの文字列を分割
  $pathNowLast = $pathNowArray[array_key_last($pathNowArray)]; // 現在ページのファイル名
  // クエリパラメータを含む場合取り除く
  if (strpos($pathNowLast, '?') !== false) {
    $pathNowLast = explode("?", $pathNowLast)[0];
  }

  // パンくずリストの出力
  // 今のところホームからの2階層目までしかない
  // パスの書き方は未解決でindex.phpと同じ階層にリンク先の全phpファイルをおくことで対処しておく
  // 「kadai」をホームディレクトリと考えればいける(?)
  echo '<a href="index.php"> ホーム</a> &gt;';
  echo " $breadcrumbs[$pathNowLast]";
  ?>

</div>