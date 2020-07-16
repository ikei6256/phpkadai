<?php require '_common/header.php';?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１」 ユーザーが入力したメッセージの表示（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>登録するユーザー名を入力して下さい。
    </p>
    <form action="kadai_01_output.php" method="post">
      <input type="text" name="name" placeholder="ユーザー名を入力..." required>
      <input type="submit" value="登録" id="register">
    </form>
  </div>
</section>
<?php require '_common/footer.php';?>