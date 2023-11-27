
//top SVGアニメーションの描画
var stroke;

stroke = new Vivus('mask', {//アニメーションをするIDの指定
    start:'manual',//自動再生をせずスタートをマニュアルに
    type: 'scenario-sync',// アニメーションのタイプを設定
    duration: 6,//アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false,//パスが更新された場合に再レンダリングさせない
    animTimingFunction:Vivus.EASE,//動きの加速減速設定
},
function(){
	// jQuery("#mask").attr("class", "done");//描画が終わったらdoneというクラスを追加
	var mask = document.getElementById('mask');
	mask.classList.add('done');
}
);





//top logo anim
var Obj = {
	loop: false,
	minDisplayTime: 1000,// アニメーションの間隔時間
	initialDelay: 2, // アニメーション開始までの遅延時間
	autoStart: true,
	in: {
		effect: 'fadeInUp',//animate.css の中にある採用したい動きのクラス名
		delayScale: 7,// 遅延時間の指数
		delay: 10,// 文字ごとの遅延時間
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
		var elemPos = jQuery(element[1]).offset().top;
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
// jQuery(window).on('load', function () {
// 	RandomInit(); /*初期設定を読み込み*/
// 	RandomAnimeControl();/*アニメーション用の関数を呼ぶ*/
// });//ここまで画面が読み込まれたらすぐに動かしたい場合の記述


















const webStorage = function () {
	if (sessionStorage.getItem('visit')) {//2回目以降
		jQuery('.mv__img').addClass('site-title is-second');
		RandomInit(); 
		RandomAnimeControl();
	} else {//初回
	  sessionStorage.setItem('visit', 'true'); 
	  document.addEventListener('DOMContentLoaded', function() {
		jQuery("#splash").css("display", "block");
		stroke.play();//SVGアニメーションの実行
		jQuery("#splash_logo").delay(2800).fadeOut('slow');//ロゴを3秒（3000ms）待機してからフェイドアウト
		jQuery("#splash").delay(2800).fadeOut('slow',function(){
		jQuery('.mv__img').delay(1500).addClass('site-title');//フェードアウト後bodyにappearクラス付与
		RandomInit(); /*初期設定を読み込み*/
		RandomAnimeControl();/*アニメーション用の関数を呼ぶ*/
	  });
	});	
  }
}

webStorage();




//記事タブ
  document.addEventListener('DOMContentLoaded', function() {
    var tabTitles = document.querySelectorAll('.tab-title');
    var tabLists = document.querySelectorAll('.tab-list');

    tabTitles.forEach(function(tabTitle, index) {
      tabTitle.addEventListener('click', function() {
        // クリックされたタブにselectedクラスを追加し、他のタブからは削除
        tabTitles.forEach(function(title) {
          title.classList.remove('selected');
        });
        tabTitle.classList.add('selected');

        // 表示されているタブコンテンツを非表示にし、クリックされたタブに対応するタブコンテンツを表示
        tabLists.forEach(function(tabList) {
          tabList.classList.remove('show');
        });
        tabLists[index].classList.add('show');
      });
    });
  });



