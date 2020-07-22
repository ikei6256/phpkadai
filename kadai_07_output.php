<?php require '_common/header.php'; ?>
<?php
$option = array(
  "通常配送",
  "お急ぎ便",
  "当日お急ぎ便"
);
$fee_array = array(
  0,
  200,
  500
);
$error = true;
if (isset($_REQUEST['price'], $_REQUEST['option'], $_REQUEST['review'])) {
  $price = (int)$_REQUEST['price'];
  $fee = $fee_array[$_REQUEST['option']];
  $price_result = $price + $fee;
  if ((int)$_REQUEST['review'] === 1) {
    $price_result = $price - 50;
  }
  $error = false;
}
?>

<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題７」 ラジオボタンとセレクトボックスとSWITCH文（出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <h3 class="roundedSquare">お届けする商品の送料のご確認</h3>
    <?php if (!$error) { ?>
    <p>光目覚まし時計</p>
    <p>価格：<?php echo $price; ?>円</p>
    <p>選択した配送オプション：<?php echo $option[$_REQUEST['option']]; ?></p>
    <p>配送料：
      <?php echo $fee;
        $price += $fee; ?>円</p>
    <p>レビュー：
      <?php
        if ((int)$_REQUEST['review'] === 1) {
          echo 'レビューを書く';
        } else if ((int)$_REQUEST['review'] === 2) {
          echo 'レビューを書かない';
        }
        ?>
    </p>
    <p>合計価格：<?php echo $price_result; ?>円</p>
    <?php } else { ?>
    <p>エラーが発生しました。もう一度オプションの選択をお願いします。</p>
    <form action="kadai_07.php">
      <input type="submit" value="戻る">
    </form>
    <?php } ?>
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