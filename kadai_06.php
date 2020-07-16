<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題６」２回繰り返し出題できるかけ算クイズ （入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <div class="roundedSquare">
      <h3>問題</h3>
    </div>
    <?php
    if (isset($_REQUEST['userAns1'])) {
      // 2回目
      $userAns1 = $_REQUEST['userAns1'];
      $q1_val1 = $_REQUEST['q1_val1'];
      $q1_val2 = $_REQUEST['q1_val2'];
      $q2_val1 = 8;
      $q2_val2 = 4;
      echo '<form action="kadai_06_output.php" method="post">';
      echo '<p>', $q2_val1, '×', $q2_val2, '＝<input type="text" name="userAns2"></p>';
      echo '<input type="hidden" name="q1_val1" value="', $q1_val1, '">';
      echo '<input type="hidden" name="q1_val2" value="', $q1_val2, '">';
      echo '<input type="hidden" name="q2_val1" value="', $q2_val1, '">';
      echo '<input type="hidden" name="q2_val2" value="', $q2_val2, '">';
      echo '<input type="hidden" name="userAns1" value="', $userAns1, '">';
      echo '<input type="submit" value="解答する">';
      echo '</form>';
    } else {
      // 初回
      $q1_val1 = 6;
      $q1_val2 = 2;
      echo '<form action="kadai_06.php" method="post">';
      echo '<p>', $q1_val1, '×', $q1_val2, '＝<input type="text" name="userAns1"></p>';
      echo '<input type="hidden" name="q1_val1" value="', $q1_val1, '">';
      echo '<input type="hidden" name="q1_val2" value="', $q1_val2, '">';
      echo '<input type="submit" value="解答する">';
      echo '</form>';
    }
    ?>
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