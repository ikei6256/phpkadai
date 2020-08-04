<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      「課題１１」ドット絵（入力画面）
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>２次元配列と表を使ってドット絵でイニシャルを描く</p>
    <h3 class="roundedSquare">２次元配列の出力の練習</h3>
    <?php
    $array = [0, 0, 0, 1];
    ?>
    <ul>
      <?php
      echo "<li>{$array[0]}</li>";
      echo "<li>{$array[1]}</li>";
      echo "<li>{$array[2]}</li>";
      echo "<li>{$array[3]}</li>";
      ?>
    </ul>

    <h3 class="roundedSquare">２次元配列をfor文で出力</h3>
    <?php
    $pixel = [
      [0, 0, 0, 0, 0, 0, 0],
      [0, 1, 1, 1, 1, 1, 0],
      [0, 0, 0, 0, 1, 1, 0],
      [0, 0, 1, 1, 1, 0, 0],
      [0, 1, 1, 0, 0, 0, 0],
      [0, 1, 1, 1, 1, 1, 0],
      [0, 0, 0, 0, 0, 0, 0]
    ];
    ?>

    <?php
    for ($i = 0; $i < count($pixel); $i++) {
      for ($j = 0; $j < count($pixel[$i]); $j++) {
        echo $pixel[$i][$j];
      }
      echo '<br>';
    }
    ?>

    <h3 class="roundedSquare">HTMLで下絵を作成</h3>
    <table class="pixelArt">
      <?php
      for ($i = 0; $i < count($pixel); $i++) {
        echo '<tr>';

        for ($j = 0; $j < count($pixel[$i]); $j++) {
          echo "<td>{$pixel[$i][$j]}</td>";
        }

        echo '</tr>';
      }
      ?>
    </table>

    <h3 class="roundedSquare">CSSで色見本を作成</h3>
    <table class="pixelArt">
      <?php
      for ($i = 0; $i < count($pixel); $i++) {
        echo '<tr>';

        for ($j = 0; $j < count($pixel[$i]); $j++) {
          switch ($pixel[$i][$j]) {
            case 0:
              echo '<td class="bg-gray">' . $pixel[$i][$j] . '</td>';
              break;
            case 1:
              echo '<td class="bg-green">' . $pixel[$i][$j] . '</td>';
              break;
          }
        }

        echo '</tr>';
      }
      ?>
    </table>

    <h3 class="roundedSquare">色見本を完成</h3>
    <table class="pixelArt">
      <?php
      for ($i = 0; $i < count($pixel); $i++) {
        echo '<tr>';

        for ($j = 0; $j < count($pixel[$i]); $j++) {
          switch ($pixel[$i][$j]) {
            case 0:
              echo '<td class="bg-gray border-none"></td>';
              break;
            case 1:
              echo '<td class="bg-green border-none"></td>';
              break;
          }
        }

        echo '</tr>';
      }
      ?>
    </table>

    <h3 class="roundedSquare">for文で作成</h3>
    <table class="pixelArt">
      <?php
      for ($i = 0; $i < count($pixel); $i++) {
        echo '<tr>';

        for ($j = 0; $j < count($pixel[$i]); $j++) {
          switch ($pixel[$i][$j]) {
            case 0:
              echo '<td class="bg-gray border-none"></td>';
              break;
            case 1:
              echo '<td class="bg-green border-none"></td>';
              break;
          }
        }

        echo '</tr>';
      }
      ?>
    </table>

    <h3 class="roundedSquare">foreach文で作成</h3>
    <table class="pixelArt">
      <?php
      foreach($pixel as $row){
        echo '<tr>';

        foreach($tr as $dot){
          switch ($dot) {
            case 0:
              echo '<td class="bg-gray border-none"></td>';
              break;
            case 1:
              echo '<td class="bg-green border-none"></td>';
              break;
          }
        }

        echo '</tr>';
      }
      ?>
    </table>

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