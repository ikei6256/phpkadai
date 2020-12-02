<?php session_start(); ?>
<?php require '_common/header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=prog_quiz;charset=utf8', 'prog_master', '9876zyx');
?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１２」プログラミング系英単語3択クイズ
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>データベースを使ったプログラミング系英単語のクイズを作成する。</p>
    <?php require 'kadai_12_subnav.php'; ?>

    <h3 class="roundedSquare">答え合わせ</h3>
    <?php
    if ( empty($_REQUEST['option']) || empty($_REQUEST['no'])) {
      echo '<p>エラーが発生しました。もう一度、問題を解いてください。</p>';
      echo '<form action="kadai_12.php">';
      echo '<p><input type="submit" value="戻る"></p>';
      echo '</form>';
    } else {
      $ans = $_REQUEST['option']; // 選択した回答
      $no = $_REQUEST['no']; // 問題番号
      $stmt = $pdo->query('select * from tangobook where id="'.$no.'"');
      $result = $stmt->fetch();
      echo '<p>', $result['tango'], '</p>';

      // 正誤判定
      if ($ans === $result['imi']) {
        echo '<p class="correct">正解です！！よくできました！</p>';
      } else {
        echo '<p class="mistake">残念。不正解です。</p>';
      }

      echo '<p>選択: ', $ans,'</p>';
      echo '<p>正答: ', $result['imi'],'</p>';

      echo '<form action="kadai_12.php">';
      echo '<p><input type="submit" value="次の問題へ"></p>';
      echo '</form>';
    }
    ?>
  </div>
</section>
<!-- <section>
  <div class="contentTitle">
    見出し
  </div>
  <div class="contentBody">
    内容
  </div>
</section> -->
<?php require '_common/footer.php'; ?>
