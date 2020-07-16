<ul id="linkList">
  <?php
  // リスト見出し
  $linksHead = [
    'CSS', 'PHP', 'JavaScript', 'API', 'その他', '書籍'
  ];

  // foreach文でjsonファイルから列挙する
  $jsonFile = 'links.json';
  // jsonファイルの存在チェック
  if (file_exists($jsonFile)) {
    $linksArray = json_decode(file_get_contents($jsonFile), true);
    $i = 0;
    foreach ($linksArray as $links) {
      echo '<li class="linkListHead">', $linksHead[$i], '</li>';
      $i++;
      foreach ($links as $linkHead => $link) {
        echo '<li>';
        echo '<span class="linkHead">【', htmlspecialchars($linkHead), '】</span>';
        foreach ($link as $title => $url) {
          echo '<a href="', $url, '" target="_blank">';
          echo $title;
          echo '</a>';
        }
        echo '</li>';
      }
    }
  } // ファイルがなければなにも表示しない
  ?></ul>