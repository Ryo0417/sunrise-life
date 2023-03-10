console.log("hello.world!");

const mySwiper = new Swiper('.swiper', {
    loop: true,  // 無限ループさせる
    loopAdditionalSlides: 1, // 無限ループさせる場合に複製するスライド数

    speed: 3000, // スライドアニメーションのスピード（ミリ秒）

    autoplay: { // 自動再生させる
        delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
        disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
        waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
    },
});

//無限スライダー
// const infinite = new Swiper(".infinite", {
//     loop: true, // ループ有効
//     slidesPerView: 'auto', // 一度に表示する枚数
//     speed: 5000, // ループの時間
//     allowTouchMove: false, // スワイプ無効
//     autoplay: {
//       delay: 0, // 途切れなくループ
//     },
//   });

//ドロワーメニュー
$("#js-hamburger").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $("#js-hamburger").toggleClass("is-checked");
    $("#js-drawer").toggleClass("is-checked");
    $("html").toggleClass("is-fixed");

});


//mvにページが重なる
gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".panel").forEach((panel, i) => {
    ScrollTrigger.create({
        trigger: panel,
        start: "top top",
        // end: "top .co-creation__ttl",
        pin: true,
        pinSpacing: false,
    });
});

ScrollTrigger.create({
    snap: 0// snap whole page to the closest section!
  });

// スクロールのドラッグ有効化
jQuery.prototype.mousedragscrollable = function () {
    let target;
    $(this).each(function (i, e) {
        $(e).mousedown(function (event) {
            event.preventDefault();
            target = $(e);
            $(e).data({
                down: true,
                move: false,
                x: event.clientX,
                y: event.clientY,
                scrollleft: $(e).scrollLeft(),
                scrolltop: $(e).scrollTop(),
            });
            return false;
        });
        $(e).click(function (event) {
            if ($(e).data("move")) {
                return false;
            }
        });
    });
    $(document)
        .mousemove(function (event) {
            if ($(target).data("down")) {
                event.preventDefault();
                let move_x = $(target).data("x") - event.clientX;
                let move_y = $(target).data("y") - event.clientY;
                if (move_x !== 0 || move_y !== 0) {
                    $(target).data("move", true);
                } else {
                    return;
                }
                $(target).scrollLeft($(target).data("scrollleft") + move_x);
                $(target).scrollTop($(target).data("scrolltop") + move_y);
                return false;
            }
        })
        .mouseup(function (event) {
            $(target).data("down", false);
            return false;
        });
};
$(".about-us__sub-contents-wrap").mousedragscrollable();