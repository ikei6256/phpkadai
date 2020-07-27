<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題８」 商品の個数をfor文で作成する（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <form action="kadai_08_output.php">
      <h3 class="roundedSquare">お届けする商品</h3>
      <ul>
        <li>
          <p>光目覚まし時計</p>
          <p><span class="bold">価格：</span>5,260円</p>
          <p><span class="bold">個数：</span>
            <select name="quantity01">
              <?php
              for ($i = 0; $i < 10; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
              }
              ?>
            </select>
          </p>
        </li>
        <hr>
        <li>
          <p>めざましカーテン（スマホ連動型カーテン自動開閉機）</p>
          <p><span class="bold">価格：</span>6,000円</p>
          <p><span class="bold">個数：</span>
            <select name="quantity02">
              <?php
              for ($i = 0; $i < 10; $i++) {
                echo '<option value="' . $i . '">' . $i . '</option>';
              }
              ?>
            </select>
          </p>
        </li>
        <h3 class="roundedSquare">お届けする商品の追加オプションを選択</h3>
        <ul>
          <li>
            <p>お得な配送オプション</p>
            <p><label><input type="radio" name="option" value="0" required checked>通常配送 無料</label></p>
            <p><label><input type="radio" name="option" value="1">お急ぎ便 +200円</label></p>
            <p><label><input type="radio" name="option" value="2">当日お急ぎ便 +500円</label></p>
          </li><hr>
          <li>
            <p>レビューを書いたら50円引き</p>
            <p>
              <select name="review">
                <option value="0">選択する</option>
                <option value="1">レビューを書かない</option>
                <option value="2">レビューを書く</option>
              </select>
            </p>
          </li>
        </ul>
      </ul>
      <input type="hidden" name="price01" value="5260">
      <input type="hidden" name="price02" value="6000">
      <input type="submit" value="確定する" class="submit">
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