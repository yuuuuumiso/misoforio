










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






//top logo anim

var Obj = {
	loop: false,
	minDisplayTime: 2000,// アニメーションの間隔時間
	initialDelay: 500, // アニメーション開始までの遅延時間
	autoStart: true,
	in: {
		effect: 'fadeInUp',//animate.css の中にある採用したい動きのクラス名
		delayScale: 1,// 遅延時間の指数
		delay: 100,// 文字ごとの遅延時間
		sync: false,// アニメーションをすべての文字に同時適用するかどうか
		shuffle: true,// 文字表示がランダムな順に表示されるかどうか
	},
	out: {// 終了時のアニメーション設定をしたい場合はここに追記
	}
}
var element
//初期設定
function RandomInit() {
	element= jQuery(".randomAnime");
	jQuery(element[0]).textillate(Obj);
}

function RandomAnimeControl() {
		var elemPos = jQuery(element[1]).offset().top - 50;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();

		if (scroll >= elemPos - windowHeight) {//要素が画面に入っていたら発火
			jQuery(element[1]).textillate(Obj);
		}
}

// 画面をスクロールをしたら動かしたい場合の記述
// jQuery(window).scroll(function () {
// 	RandomAnimeControl();/*アニメーション用の関数を呼ぶ*/
// });//ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
jQuery(window).on('load', function () {
	RandomInit(); /*初期設定を読み込み*/
	RandomAnimeControl();/*アニメーション用の関数を呼ぶ*/
});//ここまで画面が読み込まれたらすぐに動かしたい場合の記述


