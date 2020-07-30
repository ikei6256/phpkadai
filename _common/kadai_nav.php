<?php
$KADAI_NUM = 10; // 課題数
?>
<nav id="kadai_nav" class="clearfix">
  <ul>
    <li><span class="material-icons source">source</span></li>
    <?php
    for ($i = 0; $i < $KADAI_NUM; $i++) {
      echo '<li><a href="kadai_', sprintf('%02d', $i + 1), '.php">課題', $i + 1, '</a>';
      if ($i == $KADAI_NUM - 1) {
        echo '<span style="color:tomato;">new</span>';
      }
      echo '</li>';
    }
    ?>
  </ul>
</nav>