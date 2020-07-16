<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題５」簡単なかけ算クイズ （出力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <?php
    if (isset($_REQUEST['input'])) {
      // echo gettype($_REQUEST['input']); // string
      $input = $_REQUEST['input'];
      $val1 = $_REQUEST['val1'];
      $val2 = $_REQUEST['val2'];
      $answer = $_REQUEST['val1'] * $_REQUEST['val2'];

      echo '<div class="roundedSquare"><h3>解答</h2></div>';
      if (strcmp($answer, $_REQUEST['input']) == 0) {
        echo '<p style="color:red;">正解です！</p>';
      } else {
        echo '<p style="color:blue;">間違いです！</p>';
      }
      echo '<p>問題：', $val1, '×', $val2, '</p>';
      echo '<p>あなたの答え：', $input, '</p>';
      echo '<p>正しい答え：', $answer, '</p>';
    } else {
      echo '<p>エラーが発生しました。もう一度解いて下さい。<p>';
      echo '<form action="kadai_05.php"><input type="submit" value="問題へ戻る"></from>';
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