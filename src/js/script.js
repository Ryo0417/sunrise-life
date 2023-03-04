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
        end: "top .co-creation__ttl",
        pin: true,
        pinSpacing: false,
    });
});