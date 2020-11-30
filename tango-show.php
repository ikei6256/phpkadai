<?php session_start(); ?>
<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１２」プログラミング系英単語3択クイズ
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>データーベースを使ったプログラミング系英単語のクイズを作成する。</p>
    <?php require 'kadai_12_subnav.php'; ?>

    <h3 class="roundedSquare">単語辞典ページ</h3>
    <form action="tango-show.php" method="post">
      <p>単語検索 <input type="text" name="keyword"> <input type="submit" value="検索"></p>
    </form>

    <hr>

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=prog_quiz;charset=utf8', 'prog_master', '9876zyx');
    if (isset($_REQUEST['keyword']) && !empty($_REQUEST['keyword'])) {
      $keyword = mb_convert_kana($_REQUEST['keyword'], 'n'); // 半角に変換

      if (preg_match('/[0-9]+/', $keyword)) {
        // 数値ならID検索
        $sql = $pdo->prepare('select * from tangobook where id=?');
        $sql->execute([$keyword]);
      } else {
        $sql = $pdo->prepare('select * from tangobook where name like ?');
        $sql->execute(['%' . $_REQUEST['keyword'] . '%']);
      }

      if ($sql->rowCount() === 0) {
        // 検索結果が空の場合
        echo '<p>検索結果はありませんでした。IDは数字、単語は英語で検索できます。</p>';
        $sql = $pdo->prepare('select * from tangobook');
        $sql->execute([]);
      }
    } else {
      $sql = $pdo->prepare('select * from tangobook');
      $sql->execute([]);
    }
    echo '<table class="table-dictionaly">';
    echo '<th>ID</th><th>単語</th><th>読み</th><th>意味</th>';
    foreach ($sql as $row) {
      echo '<tr>';
      echo '<td>', $row['id'], '</td>';
      echo '<td>', $row['tango'], '</td>';
      echo '<td>', $row['yomi'], '</td>';
      echo '<td>', $row['imi'], '</td>';
      echo '</tr>';
    }
    echo '</table>';
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
