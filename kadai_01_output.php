<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１」ユーザーが入力したメッセージの表示（出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p><?php
        if (isset($_REQUEST['name'])) { // 入力チェック
          echo 'いらっしゃいませ、', $_REQUEST['name'], '様。';
        } else {
          echo 'いらっしゃいませ、ゲスト様。';
        }
        ?></p>
  </div>
  <?php require '_common/footer.php'; ?>