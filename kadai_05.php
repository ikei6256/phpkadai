<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題５」簡単なかけ算クイズ （入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <div class="roundedSquare">
      <h3>問題</h3>
    </div>
    <?php
    $val1 = 5;
    $val2 = 2;
    echo '<form action="kadai_05_output.php" method="post">';
    echo '<p>', $val1, '×', $val2, '＝<input type="text" name="input"></p>';
    echo '<input type="hidden" name="val1" value="', $val1, '">';
    echo '<input type="hidden" name="val2" value="', $val2, '">';
    echo '<input type="submit" value="解答する">';
    echo '</form>';
    ?>
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