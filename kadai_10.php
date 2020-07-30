<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１０」ランダムな四則演算クイズ（入力画面）
    </h2>
    <p>rand関数や配列を使ってランダムな四則演算（ +、-、×、÷ ）の出題をする。</p>
  </div>
  <div id="contentBodyFirst">
    <h3 class="roundedSquare">問題</h3>
    <p>次の計算を整数で答えてください。</p>
    <form action="kadai_10_output.php" method="post">
      <?php
      $val1 = rand(1, 99);
      $val2 = rand(1, 99);
      $ope_arr = array('+', '-', '×', '÷');
      $ope = $ope_arr[rand(0,3)];

      echo '<p>', $val1, $ope, $val2, '＝<input type="text" name="input" required></p>';
      echo '<input type="hidden" name="val1" value="', $val1, '">';
      echo '<input type="hidden" name="val2" value="', $val2, '">';
      echo '<input type="hidden" name="ope" value="', $ope, '">';
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