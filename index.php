<?php get_header(); ?>

            <section class="p-main-visual">
                <div class="catch-title c-heading--playfair-display">
                    <p class="catch-title__head">Hello,My name is</p>
                    <div class="catch-title__name__container">
                        <p class="catch-title__name">Toshiki Miyazawa</p>
                    </div>
                </div>
                <div class="title__lead c-heading--playfair-display">
                    <p class="title__lead__type">Web Designer</p>
                    <p class="title__lead__text">site design,logo design,card production</p>
                    <p class="title__lead__type">Web Developer</p>
                    <p class="title__lead__text">coding,wordpress theme development</p>
                </div>
                <p class="bg-text c-heading--playfair-display">MINKO</p>
                <img class="catch__logo" src="./images/logo.png" alt="バッジロゴ">
            </section>

            <section class="p-about">
                <h2 class="p-section-title">About</h2>
                <div class="about-content">
                    <figure class="about-content__caption slideInFromUnder">
                        <div class="about-content__caption__img">
                            <img src="./images/about.png" alt="minkoの写真">
                        </div>
                        <figcaption class="about-content__caption__name" >
                            <p>Toshiki Miyazawa | 宮澤 利季</p>
                            <p><span>handlename</span> : MINKO</p>
                        </figcaption>
                    </figure>
                    <div class="about-content__lead slideInFromUnder">
                        <p class="about-content__lead__heading c-heading--noto-serif-jp">私について</p>
                        <p class="about-content__lead__text">ポートフォリオをご覧いただきありがとうございます。<br>
                            これまで自動車部品メーカーの技術職で20年以上モノづくりに携わってきました。2023年からウェブデザインやフロントエンド開発に関心を持ち、独学やオンラインスクールで学び始めました。
                            ウェブ制作に惹かれたのは、モノづくりの楽しさと通じる部分が多く、さらにはその可能性の広さです。
                            現在、ウェブ制作の分野でのキャリアチェンジを目指し活動中です。</p>
                        <button class="c-link-btn slideInFromRight"><a href="./page-about.html"><pre class="c-heading--inter">View More</pre></a></button>
                    </div>
                </div>
            </section>

            <section class="p-skills slideInFromLeft">
                <h2 class="p-section-title">Skills<span>できること</span></h2>
                <div class="skill__content-wrap">

                    <div class="skill__content">
                        <p class="skill__content__label">Design</p>
                        <div class="skill__content__detail">
                            <h3 class="skill__content__detail__title">WEBデザイン</h3>
                            <div class="skill__content__detail__text">
                                <div class="c-line--height"></div>
                                <p>WEBサイト、バナー、ロゴデザインや名刺制作などができます。
                                    コンテンツ設計や機能面にも配慮し、ユーザーにとって魅力的で快適な操作性のデザインを心がけています。また、出来栄え、品質には妥協せず細部までこだわりを持って作り込みます。
                                    お客様のニーズを深く理解し、目的を達成できるような成果物を提供すること、さらには期待を超える成果を提供できることを目指します。</p>
                            </div>
                        </div>
                        <div class="skill__content__category-wrap">
                            <div class="skill__content__category">
                                <h3 class="skill__content__category__title">ツール</h3>
                                <div class="skill__content__category__tool c-heading--inter">
                                    <div class="c-line--height"></div>
                                    <p>Figma<br>Illustrator<br>Photoshop</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill__content">
                        <p class="skill__content__label">Development</p>
                        <div class="skill__content__detail">
                            <h3 class="skill__content__detail__title">WEB開発</h3>
                            <div class="skill__content__detail__text">
                                <div class="c-line--height"></div>
                                <p>HTMLやCSSを用いてデザインを正確に再現することができます。メディアクエリを使用したレスポンシブ対応やjQuery/JavaScriptを使用した動きのあるサイトも対応可能です。BEM命名/FLOCSS設計を取り入れ、無駄がなく管理のしやすい構造を心がけています。WordPress化、オリジナルテーマ作成をすることができます。phpを活用し直感的な編集を可能にし、セキュリティ対策にも考慮した実装を心がけます。</p>
                            </div>
                        </div>
                        <div class="skill__content__category-wrap">
                            <div class="skill__content__category">
                                <h3 class="skill__content__category__title">言語</h3>
                                <div class="skill__content__category__tool c-heading--inter">
                                    <div class="c-line--height"></div>
                                    <p>HTML<br>CSS/SCSS<br>JavaScript/jQuery<br>php</p>
                                </div>
                            </div>
                            <div class="skill__content__category">
                                <h3 class="skill__content__category__title">ツール</h3>
                                <div class="skill__content__category__tool c-heading--inter">
                                    <div class="c-line--height"></div>
                                    <p>Visual Studio Code<br>Git/GitHub<br>WordPress</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-works" id="works">
                <p class="section-lead">製作品</p>
                <h2 class="p-section-title">Works</h2>
                <p class="bg-text--left">Expressing Hope</p>
                <p class="bg-text--right">Connecting Hope</p>

                <div class="works-archive slideInFromUnder">
                    <article class="p-works-item">
                        <a class="works-item__content-wrap" href="./single.html">
                            <figure class="works-item__caption">
                                <img class="works-item__caption__thumbnail" src="./images/gbt-site.jpg" alt="記事のサムネイル">
                                    <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                                    <h5>GBTサービス WEBサイト</h5>
                                    <p>自動車販売、修理、カスタム会社GBTサービス様のWEBサイトのデザインを制作しました。</p>
                                </figcaption>
                            </figure>
                            <div class="works-item__tag__wrap">
                                <p class="c-tag__work-type--small">クライアントワーク</p>
                                <ul class="tag__field__group">
                                    <li class="c-tag__field">Direction</li>
                                    <li class="c-tag__field">Design</li>
                                    <li class="c-tag__field">Coding</li>
                                    <li class="c-tag__field">Deploy</li>
                                </ul>
                            </div>
                        </a>
                    </article>
                    <article class="p-works-item">
                        <a class="works-item__content-wrap" href="/">
                            <figure class="works-item__caption">
                                <img class="works-item__caption__thumbnail" src="./images/gbt-site.jpg" alt="記事のサムネイル">
                                <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                                    <h5>GBTサービス WEBサイト</h5>
                                    <p>自動車販売、修理、カスタム会社GBTサービス様のWEBサイトのデザインを制作しました。</p>
                                </figcaption>
                            </figure>
                            <div class="works-item__tag__wrap">
                                <p class="c-tag__work-type--small">クライアントワーク</p>
                                <ul class="tag__field__group">
                                    <li class="c-tag__field">Direction</li>
                                    <li class="c-tag__field">Design</li>
                                    <li class="c-tag__field">Coding</li>
                                    <li class="c-tag__field">Deploy</li>
                                </ul>
                            </div>
                        </a>
                    </article>
                    <article class="p-works-item">
                        <a class="works-item__content-wrap" href="/">
                            <figure class="works-item__caption">
                                <img class="works-item__caption__thumbnail" src="./images/gbt-site.jpg" alt="記事のサムネイル">
                                <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                                    <h5>GBTサービス WEBサイト</h5>
                                    <p>自動車販売、修理、カスタム会社GBTサービス様のWEBサイトのデザインを制作しました。</p>
                                </figcaption>
                            </figure>
                            <div class="works-item__tag__wrap">
                                <p class="c-tag__work-type--small">クライアントワーク</p>
                                <ul class="tag__field__group">
                                    <li class="c-tag__field">Direction</li>
                                    <li class="c-tag__field">Design</li>
                                    <li class="c-tag__field">Coding</li>
                                    <li class="c-tag__field">Deploy</li>
                                </ul>
                            </div>
                        </a>
                    </article>
                    <article class="p-works-item">
                        <a class="works-item__content-wrap" href="/">
                            <figure class="works-item__caption">
                                <img class="works-item__caption__thumbnail" src="./images/gbt-site.jpg" alt="記事のサムネイル">
                                <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                                    <h5>GBTサービス WEBサイト</h5>
                                    <p>自動車販売、修理、カスタム会社GBTサービス様のWEBサイトのデザインを制作しました。</p>
                                </figcaption>
                            </figure>
                            <div class="works-item__tag__wrap">
                                <p class="c-tag__work-type--small">クライアントワーク</p>
                                <ul class="tag__field__group">
                                    <li class="c-tag__field">Direction</li>
                                    <li class="c-tag__field">Design</li>
                                    <li class="c-tag__field">Coding</li>
                                    <li class="c-tag__field">Deploy</li>
                                </ul>
                            </div>
                        </a>
                    </article>
                    <article class="p-works-item">
                        <a class="works-item__content-wrap" href="/">
                            <figure class="works-item__caption">
                                <img class="works-item__caption__thumbnail" src="./images/gbt-site.jpg" alt="記事のサムネイル">
                                <figcaption class="works-item__caption__lead c-heading--noto-sans-jp" >
                                    <h5>GBTサービス WEBサイト</h5>
                                    <p>自動車販売、修理、カスタム会社GBTサービス様のWEBサイトのデザインを制作しました。</p>
                                </figcaption>
                            </figure>
                            <div class="works-item__tag__wrap">
                                <p class="c-tag__work-type--small">クライアントワーク</p>
                                <ul class="tag__field__group">
                                    <li class="c-tag__field">Direction</li>
                                    <li class="c-tag__field">Design</li>
                                    <li class="c-tag__field">Coding</li>
                                    <li class="c-tag__field">Deploy</li>
                                </ul>
                            </div>
                        </a>
                    </article>
                </div>
            </section>

<?php get_footer(); ?>