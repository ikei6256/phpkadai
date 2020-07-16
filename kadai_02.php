<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題２」 商品カート（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <div class="roundedSquare">
      <h3>カート商品一覧</h3>
    </div>
    <p>めざましカーテン（スマホ連動型カーテン自動開閉機）</p>
    <form action="kadai_02_output.php" method="post">
      <p>価格：<input type="text" name="price" id="" required>円</p>
      <p>数量：<input type="text" name="quantity" id="" required></p>
      <p><input type="submit" value="購入する"></p>
    </form>
  </div>
</section>
<?php require '_common/footer.php'; ?>