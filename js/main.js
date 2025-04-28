
document.addEventListener("DOMContentLoaded", () => {
    
    // ドロップダウンメニュー
    const menuBtn = document.querySelector(".menu-btn");
    const menuBar = document.querySelector(".l-sidebar");
    
    menuBtn.addEventListener("click", function () {
        menuBar.classList.toggle("u-dropMenu");
    });
    
    window.addEventListener("scroll", function () {
        menuBar.classList.remove("u-dropMenu");
    });


    // フッターのスクロールボタンクリックで画面スクロール
    const scrollBtn = document.querySelector(".scroll-btn");

    scrollBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });


    // スクロール位置でのアニメーション発火関数、（要素が画面に入ったら発動）
    window.addEventListener('scroll', function () {
        const targets = document.querySelectorAll('.slideInFromUnder, .slideInFromLeft, .slideInFromRight, .fadeIn, .fadeOut');
    
        targets.forEach(function (el) {
            const targetPosition = el.getBoundingClientRect().top + window.pageYOffset;
            const scrollPosition = window.pageYOffset;
            const windowHeight = window.innerHeight;
    
            if (scrollPosition + windowHeight > targetPosition) {
                if (el.classList.contains('slideInFromUnder')) {
                    el.classList.add('u-active--slideInFromUnder');
                }
                if (el.classList.contains('slideInFromLeft')) {
                    el.classList.add('u-active--slideInFromLeft');
                }
                if (el.classList.contains('slideInFromRight')) {
                    el.classList.add('u-active--slideInFromRight');
                }
                if (el.classList.contains('fadeIn')) {
                    el.classList.add('u-active--fadeIn');
                }
                if (el.classList.contains('fadeOut')) {
                    el.classList.add('u-active--fadeOut');
                }
            }
        });
    });

    // artworkのアニメーション発火関数（要素全体が画面に入りきったら発動）
    window.addEventListener('scroll', function () {
        const artwork = document.querySelector('.p-artwork');
        if (!artwork) return;
    
        const rect = artwork.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        const isFullyVisible = rect.top >= 0 && rect.bottom <= windowHeight;
    
        if (isFullyVisible && !artwork.classList.contains('u-is-animated')) {
            artwork.classList.add('u-is-animated');
        }
    });

});