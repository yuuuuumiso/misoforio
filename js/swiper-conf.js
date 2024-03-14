








var theSwiper = new Swiper('.worksItems', {
    loop: true,//繰り返し
    direction: 'horizontal',//横
    //slidesPerView: 'auto',//幅を決め打ちする時に使う
//    centeredSlides: true, // アクティブなスライドを中央に配置する
//    loop: true,  // 無限ループさせる
//    loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数
    speed: 300, // 1スライドアニメーションのスピード（ミリ秒）
   // width: 280,
   freeModeSticky: true,//スライドに合わせてスクロールがストップしてくれます。
   grabCursor: true, // PCでマウスカーソルを「掴む」マークにする
   watchSlidesProgress: true, // スライドの進行状況を監視する
   preventClicks: false,
   preventClicksPropagation: false,
   pagination: {
      el: '.swiper-pagination',
      clickable: true, // クリックによるスライド切り替えを有効にする
      type: 'bullets' // 'bullets'（デフォルト） | 'fraction' | 'progressbar'
    },

    navigation: {
      // nextEl: '.swiper-button-next',デフォルトのボタン
      // prevEl: '.swiper-button-prev',
      nextEl: '.swiper-left-btn',//自作ボタンを割り当てる
      prevEl: '.swiper-right-btn',//自作ボタンを割り当てる
    },

    // scrollbar: {//スクロールバー
    //   el: '.swiper-scrollbar',
    //   draggable: true,
    // },

    // autoplay: {
    //   delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
    //   disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
    //   waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
    // },
    breakpoints: {
      // スライドの表示枚数：600px以上の場合
      0: {
        slidesPerView: 1.8,
        centeredSlides: true, // アクティブなスライドを中央に配置する
        spaceBetween: 50, // スライド間の余白（px）
      },
      // スライドの表示枚数：768px以上の場合
      768: {
        slidesPerView: 3.5,
        centeredSlides: false, // アクティブなスライドを中央に配置する
        spaceBetween: 40, // スライド間の余白（px）
      }
    },
  });




  // カーソル用のdivタグを取得してcursorに格納
// var cursor = document.getElementById('cursor'); 

// // カーソル用のdivタグをマウスに追従させる
// document.addEventListener('mousemove', function (e) {
//     cursor.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
// });

// // リンクにホバーした時にクラス追加、離れたらクラス削除
// var link = document.querySelectorAll('a');
// for (var i = 0; i < link.length; i++) {
//     link[i].addEventListener('mouseover', function (e) {
//         cursor.classList.add('cursor--hover');
//     });
//     link[i].addEventListener('mouseout', function (e) {
//         cursor.classList.remove('cursor--hover');
//     });
// }





var swiper1 = new Swiper('.postBlock__img', {
loop: true,//繰り返し
direction: 'horizontal',//横
slidesPerView: 1,
loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数
speed: 300, // 1スライドアニメーションのスピード（ミリ秒）
freeModeSticky: true,//スライドに合わせてスクロールがストップしてくれます。
grabCursor: true, // PCでマウスカーソルを「掴む」マークにする
watchSlidesProgress: true, // スライドの進行状況を監視する
pagination: {
  el: '.swiper-pagination',
  dynamicBullets: true,
  dynamicMainBullets: 2,
},
navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},
autoplay: {
delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
},
});


