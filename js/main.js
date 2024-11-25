
// $(document).ready(function() {
jQuery(document).ready(function($) {  //WordPressではデフォルトでjQueryがnoConflictモードで動作するため、他のライブラリとの競合を避けるために、通常 $ は jQuery として記述する必要があります

    // 下層ページのヘッダーのカラー切替え
    const $hamburgerBtn = $(".c-hamburger-btn");
    const $header = $(".p-header");

    if ($("body").hasClass("home") || $("body").hasClass("page-template-index")) {
    
    } else if ($("body").hasClass("page") || $("body").hasClass("single")) {
        $hamburgerBtn.addClass("menuBtnStyle");
        $header.addClass("headerStyle");
    }
    

    // ドロップダウンメニュー
    const $menuBtn = $(".menu-btn");
    const $menuBar = $(".l-sidebar");

    $menuBtn.on("click", function(){
        $menuBar.toggleClass("u-dropMenu");
    })
    $(window).on("scroll", function(){
        $menuBar.removeClass("u-dropMenu")
    })


    // 画面スクロール
    const $scrollBtn = $(".scroll-btn");

    $scrollBtn.on('click', function(){
        $('html, body').animate({ scrollTop: 0 }, 'slow');
    });


    // アニメーション、スクロール位置監視して要素が画面に表れたら開始する
    $(window).on('scroll', function() {
        $('.slideInFromUnder, .slideInFromLeft, .slideInFromRight, .fadeIn').each(function() {
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
                } else if ($(this).hasClass("fadeIn")) {
                    $(this).addClass('u-active--fadeIn');
                }
            }
        })
    })


    // メインビジュアルのnameのスライドアニメーション
    const $sliderContainer = $(".catch-title__name__container");
    const $sliderItem = $(".catch-title__name");
    const $clone = $sliderItem.clone();
    $sliderContainer.append($clone);

    let currentPosition = 0;
    const itemWidth = $sliderItem.outerWidth();

    function slide() {
        currentPosition -= 0.3;
        if (Math.abs(currentPosition) >= itemWidth) {
            currentPosition = 0;
        }
        $sliderContainer.css("transform", `translateX(${currentPosition}px)`);
        requestAnimationFrame(slide);
    }

    slide();

});