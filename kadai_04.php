<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題４」 簡単な足し算クイズ（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <div class="roundedSquare">
      <h3>問題</h3>
    </div>
    <form action="kadai_04_output.php" method="post">
      <p><input type="text" name="val1" value="5">＋
        <input type="text" name="val2" value="3">＝
        <input type="text" name="input"></p>
      <p><input type="submit" value="解答する"></p>
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