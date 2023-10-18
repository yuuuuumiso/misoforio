//for ipad
var ua = navigator.userAgent;
var getDevice = (function() {
if (ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
document.write('<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">');
} else if (ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0) {
document.write('<meta name="viewport" content="width=1280, user-scalable=no, maximum-scale=1.0">');
} else {
document.write('<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes">');
}
})();




$(function() {

//vars
var flug = true,
    $openBtn = $('.openbtn'),
    $body = $(document.body), 
    $navBg = $('.g-nab-bg'),
    $window = $(window);

$window.on('scroll',function(){
  $('.xxx').each(function(){
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight / 4){
        $(this).addClass('is-active');
      } else {
        $(this).removeClass('is-active');
      }
  });
});

$openBtn.click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
  $("#g-nav li").toggleClass('smooth');//li に smoothクラスを付与
  $body.toggleClass('is-open');
  $navBg.toggleClass('is-open');
});

$navBg.on("click", function () {
	$(this).removeClass('is-open');
  $openBtn.removeClass('active');
  $("#g-nav").removeClass('panelactive');
  $("#g-nav li").removeClass('smooth');
  $body.removeClass('is-open');
});
});