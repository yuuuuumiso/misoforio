
//enquede読む場合は$をjQueryにするwp仕様にする必要がある
// 書き出し部分だけの変更すればその中は$で動く

jQuery(function($) {

//vars
var flug = true,
    $openBtn = $('.openbtn'),
    $body = $(document.body), 
    $navBg = $('.g-nab-bg');

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

});//ready
