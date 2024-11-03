
$(document).ready(function() {

    // 下層ページのヘッダーのメニューボタンのカラー切替え
    const $hamburgerBtn = $(".c-hamburger-btn");
    
    if (window.location.pathname === "/" || window.location.pathname.includes('index.html')) {

    }else if (window.location.pathname.includes('page-about.html') || window.location.pathname.includes('single.html')) {
        $hamburgerBtn.addClass("menuBtnStyle");
    }
    

    // ドロップダウンメニュー
    const $menuBtn = $(".menu-btn");
    const $menuBar = $(".l-menubar");

    $menuBtn.on("click", function(){
        $menuBar.toggleClass("u-dropMenu");
    })
    $(window).on("scroll", function(){
        $menuBar.removeClass("u-dropMenu")
    })


    // アニメーション、スクロール位置監視して要素が画面に表れたら開始する
    $(window).on('scroll', function() {
        $('.slideInFromUnder, .slideInFromLeft, .slideInFromRight').each(function() {
            // 要素の上端位置
            let targetPosition = $(this).offset().top;
            // 画面のスクロール位置と画面高さを取得
            let scrollPosition = $(window).scrollTop();
            let windowHight = $(window).height();
            // 要素が画面内に入ったらクラスごとに各クラスを追加
            if (scrollPosition + windowHight > targetPosition) {
                if ($(this).hasClass('slideInFromUnder')) {
                    $(this).addClass('u-active--slideInFromUnder');
                } else if ($(this).hasClass('slideInFromLeft')) {
                    $(this).addClass('u-active--slideInFromLeft');
                } else if ($(this).hasClass("slideInFromRight")) {
                    $(this).addClass('u-active--slideInFromRight');
                }
            }
        })
    })

});