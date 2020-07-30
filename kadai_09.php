<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題９」ランダムな足し算クイズ（入力画面）
    </h2>
    <p>rand関数を使ってランダムな２桁の数字を出題をする。</p>
  </div>
  <div id="contentBodyFirst">
    <h3 class="roundedSquare">問題</h3>
    <p>次の計算をしてください。</p>
    <form action="kadai_09_output.php" method="post">
      <?php
      $val1 = rand(1,99);
      $val2 = rand(1,99);
      echo '<p>', $val1, '+', $val2, '＝<input type="text" name="input" required></p>';
      echo '<input type="hidden" name="val1" value="', $val1, '">';
      echo '<input type="hidden" name="val2" value="', $val2, '">';
      echo '<input type="submit" value="判定する">';
      ?>
    </form>
  </div>
  <!-- </section>
<section>
  <div class="contentTitle">
    見出し
  </div>
  <div class="contentBody">
    内容
  </div>
</section> -->
  <?php require '_common/footer.php'; ?>