<div id="sub">
  <div id="twitter">
    <a class="twitter-timeline" data-height="400" data-width="300" data-dnt="true" href="https://twitter.com/gushi_noukai?ref_src=twsrc%5Etfw">Tweets by gushi_noukai</a>
    <script async src="https://platform.twitter.com/widgets.js"></script>
  </div>
  <!-- <div id="okashi">
    <div id="toriko"><a href="https://sysbird.jp/toriko" target="blank_">お菓子の虜</a> - 新着</div>
    <div id="loading"><img id="loading" src="images/loading.gif"></div>
    <div id="okashiName"></div>
    <div id="okashiLinear"></div>
    <div id="okashiImg"></div>
    <div id="okashiComment"></div>
  </div>
  <script>
  $(function() { // ready
    const proxyurl = "https://cors-anywhere.herokuapp.com/";
    const url = 'https://www.sysbird.jp/webapi/?apikey=guest&format=json&max=1';

    $.getJSON(proxyurl + url, function(data) {
      // console.log(data);
      $('#loading').remove();
      $('#okashi').css('opacity', 0).animate({
        'opacity': 1
      }, 1200);
      $('#okashiName').html(data.item.name);
      $('#okashiImg').html('<img src="' + data.item.image + '">');
      $('#okashiComment').html(data.item.comment);
    });
  });
  </script> -->
</div>