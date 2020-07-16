<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題６」２回繰り返し出題できるかけ算クイズ （出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <?php
    if (isset($_REQUEST['ans2']) && $_REQUEST['userAns2']) {
      // 解答2回目
      $userAns2 = $_REQUEST['userAns2'];
      $q2_val1 = $_REQUEST['q2_val1'];
      $q2_val2 = $_REQUEST['q2_val2'];
      $answer2 = $q2_val1 * $q2_val2;

      echo '<div class="roundedSquare"><h3>解答</h2></div>';
      if (strcmp($answer2, $userAns2) == 0) {
        echo '<p style="color:red;">正解です！</p>';
      } else {
        echo '<p style="color:blue;">間違いです！</p>';
      }
      echo '<p>問題：', $q2_val1, '×', $q2_val2, '</p>';
      echo '<p>あなたの答え：', $userAns2, '</p>';
      echo '<p>正しい答え：', $answer2, '</p>';
    } else if (isset($_REQUEST['userAns1']) && isset($_REQUEST['userAns2'])) {
      // 解答初回
      $userAns1 = $_REQUEST['userAns1'];
      $q1_val1 = $_REQUEST['q1_val1'];
      $q1_val2 = $_REQUEST['q1_val2'];
      $answer1 = $q1_val1 * $q1_val2;

      $userAns2 = $_REQUEST['userAns2'];
      $q2_val1 = $_REQUEST['q2_val1'];
      $q2_val2 = $_REQUEST['q2_val2'];

      echo '<div class="roundedSquare"><h3>解答</h2></div>';
      if (strcmp($answer1, $userAns1) == 0) {
        echo '<p style="color:red;">正解です！</p>';
      } else {
        echo '<p style="color:blue;">間違いです！</p>';
      }
      echo '<p>問題：', $q1_val1, '×', $q1_val2, '</p>';
      echo '<p>あなたの答え：', $userAns1, '</p>';
      echo '<p>正しい答え：', $answer1, '</p>';
      echo '<form action="kadai_06_output.php" method="post"><input type="submit" value="次の問題へ">';
      echo '<input type="hidden" name="ans2" value="true">';
      echo '<input type="hidden" name="q2_val1" value="', $q2_val1, '">';
      echo '<input type="hidden" name="q2_val2" value="', $q2_val2, '">';
      echo '<input type="hidden" name="userAns2" value="', $userAns2, '">';
      echo '</form>';
    } else {
      echo '<p>エラーが発生しました。もう一度解いて下さい。<p>';
      echo '<form action="kadai_06.php"><input type="submit" value="問題へ戻る"></from>';
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