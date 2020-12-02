<?php session_start(); ?>
<?php require '_common/header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=prog_quiz;charset=utf8', 'prog_master', '9876zyx');
$sql = $pdo->query('select count(*) from tangobook');
$count = $sql->fetchColumn(); // 単語数
?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１２」プログラミング系英単語3択クイズ
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>データベースを使ったプログラミング系英単語のクイズを作成する。</p>
    <?php require 'kadai_12_subnav.php'; ?>

    <h3 class="roundedSquare">問題</h3>
    <?php
    $question_nums = [];
    $i = 1;
    do {
      $rand = rand(1, $count);
      if (in_array($rand, $question_nums)) {
        continue; // 重複した場合はやり直す
      } else {
        $question_nums[] = $rand;
      }

      $i++;
    } while($i <= 3);

    echo '問題数: ', $count,'<br>';
    echo '問題文の問題番号: ', $question_nums[0], '<br>';
    echo 'ダミー1の問題番号: ', $question_nums[1], '<br>';
    echo 'ダミー2の問題番号: ', $question_nums[2], '<br>';

    $tango = '';
    $imi = [null, '', '', ''];
    foreach ($pdo->query('select * from tangobook') as $row) {
      switch ($row['id']) {
        case $question_nums[0]:
        $tango = $row['tango'];
        $imi[1] = $row['imi'];
        break;

        case $question_nums[1]:
        $imi[2] = $row['imi'];
        break;

        case $question_nums[2]:
        $imi[3] = $row['imi'];
        break;
      }
    }
    ?>

    <p>次の単語の意味を選択しなさい。</p>
    <p><?php echo $tango; ?></p>

    <form action="kadai_12_output.php" method="post">
      <?php
      $num = 0;
      $nums = [0,0,0];
      $i = 1;
      do {
        $num = rand(1, 3);
        if (in_array($num, $nums)){
          // 重複した場合はやり直し
          continue;
        } else {
          $nums[] = $num;
          $q = $imi[$num];
          echo '<p><label><input type="radio" name="option" value="', $q, '" required>', $q, '</label></p>';
        }
        $i++;
      } while($i <= 3);

      echo '<input type="hidden" name="no" value="', $question_nums[0], '">';
      ?>
      <p><input type="submit" value="答え合わせ"></p>
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
