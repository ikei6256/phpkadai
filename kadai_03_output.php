<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題３」 クーポン割引の商品カート（出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <div class="roundedSquare">
      <h3>注文内容の確認</h3>
    </div>
    <?php
    if (isset($_REQUEST['price'])) {
      $price = $_REQUEST['price'];
      $quantity = $_REQUEST['quantity'];
      $coupon = $_REQUEST['coupon'];
      $total = $price * $quantity;
      echo '<p>めざましカーテン（スマホ連動型カーテン自動開閉機）</p>';
      echo '<p>価格：', $price, '円</p>';
      echo '<p>数量：', $quantity, '</p>';
      if ($coupon) {
        $discount = floor($total * 0.1);
        $total -= $discount;
        echo '<p>割引：-', $discount, '</p>';
      }
      echo '<p>注文合計：', $total, '</p>';
    } else {
      echo 'ご注文手続きにエラーが発生しました。もう一度お試しください。';
      echo '<form action="kadai_03.php"><input type="submit" value="カートへ戻る"></form>';
    }
    ?>
  </div>
</section>
<?php require '_common/footer.php'; ?>