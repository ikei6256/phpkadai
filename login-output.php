<?php session_start(); ?>
<?php
unset($_SESSION['userinfo']);
$pdo = new PDO('mysql:host=localhost;dbname=prog_quiz;charset=utf8', 'prog_master', '9876zyx');
$sql = $pdo->prepare('select * from userinfo where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql as $row) {
  $_SESSION['userinfo'] = [
    'userid'=>$row['userid'],
    'username'=>$row['username'],
    'login'=>$row['login'],
    'password'=>$row['password']
  ];
}
?>
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
    <h3 class="roundedSquare">ログインページ（出力画面）</h3>
    <?php
    if (isset($_SESSION['userinfo'])) {
      echo '<p>ようこそ、', $_SESSION['userinfo']['username'],'さん。</p>';
      echo '<p><a href="kadai_12.php"></a></p>';
      echo '<form action="kadai_12.php"><input type="submit" value="クイズＴＯＰへ"></form>';
    } else {
      echo '<p>ログイン名またはパスワードが違います。</p>';
      echo '<form action="login-input.php"><input type="submit" value="戻る"></form>';
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
<?php require '_common/footer.php';?>
