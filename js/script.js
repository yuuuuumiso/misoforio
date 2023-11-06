
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






//ヘッダーナビ
  var timeoutId;
  const header = document.querySelector("header");

  function scrollCheck(){
    // setTimeout()がセットされていたら無視
    if ( timeoutId ) return ;

    timeoutId = setTimeout( function () {
      timeoutId = 0 ;
      header.classList.toggle("is-scrolled", window.scrollY > 0);
    }, 500 ) ;
}
  window.addEventListener( "scroll", scrollCheck);





  //使えそう リサイズ
  // var flag = '';
  // // 画面サイズの判定
  // function windowSize() {
  //     // 画面幅取得
  //     var w = $(window).innerWidth();
   
  //     // 画面幅767以下（フラグがspではない時）
  //     if (w <= 767 && flag != 'sp') {
  //         flag = 'sp';
  //         // sp時の処理をここに書く
  //       console.log('spの処理')
  //       // 画面幅768以上（フラグがpcではない時）
  //     } else if (w > 767 && flag != 'pc') {
  //         flag = 'pc';
  //         // pc時の処理をここに書く
  //       console.log('pcの処理')
  //     }
  // }
  
  // $(function() {
  //     // 画面サイズのチェック
  //     $(window).on('load resize', function() {
  //         windowSize();
  //     });
  // });

});//ready
