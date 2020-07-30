<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１０」ランダムな四則演算クイズ（出力画面）
    </h2>
    <p>rand関数や配列を使ってランダムな四則演算（ +、-、×、÷ ）の出題をする。</p>
  </div>
  <div id="contentBodyFirst">
    <?php
    if (isset($_REQUEST['input']) && isset($_REQUEST['val1']) && isset($_REQUEST['val2']) && isset($_REQUEST['ope'])) {
      // echo gettype($_REQUEST['input']); // string
      $input = $_REQUEST['input'];
      $val1 = $_REQUEST['val1'];
      $val2 = $_REQUEST['val2'];
      $ope = $_REQUEST['ope'];
      $answer = null;
      switch ($ope) {
        case '+':
          $answer = $val1 + $val2;
          break;
        case '-':
          $answer = $val1 - $val2;
          break;
        case '×':
          $answer = $val1 * $val2;
          break;
        case '÷':
          $answer = $val1 / $val1;
          break;
      }

      echo '<h3 class="roundedSquare">解答</h2>';
      if ($answer == $input) {
        echo '<p style="color:red;">正解！</p>';
      } else {
        echo '<p style="color:blue;">残念！違います！</p>';
      }
      echo '<p>問題：', $val1, $ope, $val2, '</p>';
      echo '<p>あなたの答え：', $input, '</p>';
      echo '<p>正しい答え：', $answer, '</p>';
    } else {
      echo '<p>エラーが発生しました。もう一度解いて下さい。<p>';
      echo '<form action="kadai_10.php"><input type="submit" value="問題へ戻る"></from>';
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