<?php require '_common/header.php'; ?>
<section>
  <div id="borderGradient">
    <h2 id="contentTitleFirst">
      <?php echo 'Welcome to <span style="color: #92662d;">s02 Ikei\'s cafe</span>'; ?>
    </h2>
  </div>
  <div id="contentBodyFirst">
    <p>ここではPHPの課題を行います。ページ上部の課題リストから各課題へアクセスできます。</p>
  </div>
</section>
<section>
  <div class="contentTitle">
    <a id="gushikawa" href="https://www.pref.okinawa.jp/site/shoko/shokuno-gskw/" target="blank_">
      沖縄県立具志川職業能力開発校</a>
  </div>
  <div id="map" class="contentBody">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3574.81876424844!2d127.83092549275179!3d26.36472328671333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde083d2eb424ba01!2z5rKW57iE55yM56uL5YW35b-X5bed6IG35qWt6IO95Yqb6ZaL55m65qCh!5e0!3m2!1sja!2sjp!4v1593161883810!5m2!1sja!2sjp"
      width="100%" height="400" allowfullscreen="" aria-hidden="true" tabindex="0"></iframe>
  </div>
</section>
<section>
  <div class="contentTitle">
    参考サイト / 書籍
  </div>
  <div class="contentBody">
    <?php require 'loadLinks.php'; ?>
  </div>
</section>
<?php require '_common/footer.php'; ?>