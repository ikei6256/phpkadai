<?php session_start(); ?>
<?php require '_common/header.php';?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
    「課題１２」プログラミング系英単語3択クイズ
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>データーベースを使ったプログラミング系英単語のクイズを作成する。</p>
    <?php require 'kadai_12_subnav.php';?>

    <h3 class="roundedSquare">ログアウトページ（入力画面）</h3>
    <p>ログアウトしますか？</p>
    <p><a href="logout-output.php">ログアウト</a></p>
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
<?php require '_common/footer.php';?>
