<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題７」 ラジオボタンとセレクトボックスとSWITCH文（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <h3 class="roundedSquare">お届けする商品</h3>
    <p>光目覚まし時計</p>
    <p>価格：5,260円</p>
    <h3 class="roundedSquare">お届けする商品の追加オプションを選択</h3>
    <form action="kadai_07_output.php" method="post">
      <div class="input-section">
        <p>・お得な配送オプション</p>
        <p><input type="radio" name="option" value="0" checked requried>通常配送 無料</p>
        <p><input type="radio" name="option" value="1">お急ぎ便 +200円</p>
        <p><input type="radio" name="option" value="2">当日お急ぎ便 +500円</p>
      </div>
      <div class="input-section">
        <p>・レビューを書いたら50円引き</p>
        <select name="review" id="">
          <option value="0">選択する</option>
          <option value="1">レビューを書く</option>
          <option value="2">レビューを書かない</option>
        </select>
      </div>
      <input type="hidden" value="5260" name="price">
      <input type="submit" value="確定する">
    </form>
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