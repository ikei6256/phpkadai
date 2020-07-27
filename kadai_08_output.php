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
$selectedOption = $_REQUEST['option'];
$price = array(
  $_REQUEST['price01'],
  $_REQUEST['price02']
);
$quantity = array(
  $_REQUEST['quantity01'],
  $_REQUEST['quantity02']
);
$totalPrice = $price[0]*$quantity[0] + $price[1]*$quantity[1] - $fee_array[$selectedOption];
if($_REQUEST['review'] == 2){
  $review = true;
  if($totalPrice >= 50){
    $totalPrice -= 50;
  }
} else {
  $review = false;
}
?>

<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題８」 商品の個数をfor文で作成する（出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <h3 class="roundedSquare">お届けする商品の送料のご確認</h3>
    <ul>
      <li>
        <p>光目覚まし時計</p>
        <p><span class="bold">価格：</span><?php echo $price[0]; ?>円</p>
        <p><span class="bold">個数：</span><?php echo $quantity[0]; ?>個</p>
      </li><hr>
      <li>
        <p>めざましカーテン（スマホ連動型カーテン自動開閉機）</p>
        <p><span class="bold">価格：</span><?php echo $price[1]; ?>円</p>
        <p><span class="bold">個数：</span><?php echo $quantity[1]; ?>個</p>
      </li><hr>
      <li>
        <p>選択した配送オプション：<?php echo $option[$selectedOption]; ?></p>
        <p><span class="bold">配送料：</span><?php echo $fee_array[$selectedOption]; ?>円</p>
        <p><span class="bold">レビュー：</span>
        <?php
        if($review){
          echo 'レビューを書く';
        } else {
          echo 'レビューを書かない';
        }
        ?>
        </p>
      </li><hr>
      <li><p><span class="bold">合計金額：</span></p><?php echo $totalPrice; ?></li>
    </ul>
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