<?php
$links = [
  "kadai_12" => "クイズTOP",
  "tango-show" => "単語辞典",
  "login-input" => "ログイン",
  "logout-input" => "ログアウト",
  "user-input" => "新規登録"
]
?>
<ul class="quiz_nav">
<?php
foreach ($links as $url=>$name) {
  echo '<li><a href="'.$url.'.php">'.$name.'</a></li>';
}
?>
</ul>
<?php
if (isset($_SESSION['userinfo'])) {
  echo '<p>ようこそ、', $_SESSION['userinfo']['username'],'さん</p>';
} else {
  echo '<p>ようこそ、guestさん</p>';
}
?>
