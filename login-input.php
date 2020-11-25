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

    <h3 class="roundedSquare">ログインページ（入力画面）</h3>
    <form action="login-output.php" method="post">
      <p><label>ログイン名* <input type="text" name="login" required></label></p>
      <p><label>パスワード* <input type="text" name="password" required></label></p>
      <p>*は必須項目です。</p>
      <p><input type="submit" value="ログイン"></p>
    </form>

    <p><a href="user-input.php">始めての方はこちら</a></p>
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
