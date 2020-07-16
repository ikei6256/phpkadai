// $(function(){ // ready
//   const proxyurl = "https://cors-anywhere.herokuapp.com/";
//   const url = 'https://www.sysbird.jp/webapi/?apikey=guest&format=json&max=1';

//   $.getJSON(proxyurl + url, function (data) {
//     // console.log(data);
//     $('#loading').remove();
//     $('#okashi').css('opacity', 0).animate({'opacity' : 1}, 1200);
//     $('#okashiName').html(data.item.name);
//     $('#okashiImg').html('<img src="' + data.item.image + '">');
//     $('#okashiComment').html(data.item.comment);
//   });
// });
