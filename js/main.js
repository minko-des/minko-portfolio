document.addEventListener("DOMContentLoaded", () => {
    
  // ドロップダウンメニュー
  const menuBtn = document.querySelector(".menu-btn");
  const menuBar = document.querySelector(".l-sidebar");
  
  menuBtn.addEventListener("click", function (e) {
      e.stopPropagation(); // 親要素へのイベント伝播を止める
      menuBar.classList.toggle("u-dropMenu");
  });

  window.addEventListener("scroll", function () {
      menuBar.classList.remove("u-dropMenu");
  });

  document.addEventListener("click", function (e) {
      if (!menuBar.contains(e.target) && !menuBtn.contains(e.target)) {
          menuBar.classList.remove("u-dropMenu");
      }
  });


  // フッターのスクロールボタンクリックで画面スクロール
  const scrollBtn = document.querySelector(".scroll-btn");

  scrollBtn.addEventListener("click", function (e) {
    e.preventDefault();
      window.scrollTo({
          top: 0,
          behavior: "smooth"
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


  // reCAPTCHAバッジ移動関数
  window.addEventListener('scroll', function () {
      const badge = this.document.querySelector('.grecaptcha-badge');
      const footer = this.document.querySelector('.p-footer');

      if (!badge || !footer) return; //どちらかでも存在しなければ処理を終了

      const footerTop = footer.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (footerTop < windowHeight) {

          const newBottom = windowHeight - footerTop;
          badge.style.bottom = `${newBottom}px`;
      } else {
          badge.style.bottom = '0px';
      }
  });


  // カスタムリンクのスムーススクロール
  const isTop = location.pathname === "/" || location.pathname === "/index.php";

  if (isTop) {
    document.querySelectorAll('a[href^="/#"]').forEach(link => {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        const href = this.getAttribute("href"); // 例: "/#about"
        const id = href.replace("/#", "#");     // "#about" に変換
        const target = document.querySelector(id);
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
            block: "start"
          });
          history.replaceState(null, null, id); // URLの#だけ更新
        }
      });
    });
  }


  // 投稿ページのページネーションエリアの背景色制御
  const pageNation = document.querySelector(".p-post-pagination");
  const designview = document.querySelector(".designview");

  if (designview && pageNation) {
    pageNation.style.backgroundColor = '#f7f7f7';
  }

});