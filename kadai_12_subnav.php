<ul class="quiz_nav">
  <li><a href="kadai_12.php">クイズＴＯＰ</a></li>
  <li><a href="tango-show.php">単語辞典</a></li>
  <li><a href="login-input.php">ログイン</a></li>
  <li><a href="logout-input.php">ログアウト</a></li>
  <li><a href="user-input.php">新規登録</a></li>
</ul>
<?php
if (isset($_SESSION['user'])) {
  echo '<p>ようこそ、', $_SESSION['user']['name'],'さん</p>';
} else {
  echo '<p>ようこそ、guestさん</p>';
}
?>
