<?php get_header(); ?>

    <section class="p-main-visual">
        <img class="catch__logo" src="<?php echo esc_url(get_theme_file_uri('/images/badge.webp') ); ?>" alt="" loading="eager" decoding="async" width="1426" height="1434">
        <div class="main-visual__content">
            <div class="catch-title">
                <p class="catch-title__head">minkodes.com</p>
                <p class="catch-title__name">MINKO</p>
                <div class="catch-title__site">
                    <p>Portfolio</p>
                    <p>Site</p>
                </div>
            </div>
            <div class="description">
                <p class="description__head">Project</p>
                <div class="description__banner-wrap">
                    <div class="description__banner">
                        <p class="description__banner__title">Web Design</p>
                        <p class="description__banner__text">site design, <br class="break">logo/card design</p>
                    </div>
                    <div class="description__banner">
                        <p class="description__banner__title">Web Development</p>
                        <p class="description__banner__text">coding, WordPress, <br class="break">site production</p>
                    </div>
                </div>
                <p class="description__text">
                    <?php echo esc_html__( 'フリーランスでWeb制作を行なっています。', 'minko-portfolio' ); ?><br>
                    <?php echo esc_html__( 'Webデザイン、コーディング、', 'minko-portfolio' ); ?><br>
                    <?php echo esc_html__( 'WordPressサイトの構築に対応いたします。', 'minko-portfolio' ); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="p-service">
        <h2 class="p-section__title fadeIn">
            <span aria-hidden="true">Service</span>
            <?php echo esc_html__( '提供できること', 'minko-portfolio' ); ?><br>
        </h2>
        <div class="service__article-wrap slideInFromUnder">
            <article class="service__article">
                <h3 class="service__article__title">Webデザイン</h3>
                <div class="service__article__img">
                    <p class="c-sub-title">Web Design</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_design.png') ); ?>" alt="Webデザインのアイコン" loading="lazy">
                </div>
                <p class="service__article__description">
                    <?php echo esc_html__( 'お客様の想いや目的をしっかりくみ取り、見る人に伝わるデザインをご提案します。ユーザーの使いやすさを重視し、見た目の魅力と使いやすさを両立しながら、目的達成につながるデザインを心がけています。', 'minko-portfolio' ); ?>
                </p>
            </article>
            <article class="service__article">
                <h3 class="service__article__title">コーディング</h3>
                <div class="service__article__img">
                    <p class="c-sub-title">Coding</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_coding.png') ); ?>" alt="コーディングのアイコン" loading="lazy">
                </div>
                <p class="service__article__description">
                    <?php echo esc_html__( 'デザインの意図を正確にくみ取り、見た目を忠実に再現します。レスポンシブ対応やアニメーションの実装も対応可能です。表示速度やアクセシビリティ、保守性にも配慮したコーディングを心がけています。', 'minko-portfolio' ); ?>
                </p>
            </article>
            <article class="service__article">
                <h3 class="service__article__title">Webサイト制作</h3>
                <div class="service__article__img">
                    <p class="c-sub-title">Site Production</p>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_siteproduction.png') ); ?>" alt="Webサイト制作のアイコン" loading="lazy">
                </div>
                <p class="service__article__description">
                    <?php echo esc_html__( '企画からデザイン、実装までを一貫して担うことで、見た目と機能の両面から最適なご提案が可能です。スムーズなやりとりで、コストを抑えながら、ご要望に沿ったWebサイトを提供いたします。', 'minko-portfolio' ); ?>
                </p>
            </article>
        </div>
    </section>
    
    <section class="p-flow">
        <div class="flow__heading">
            <h2 class="flow__title fadeIn">
                <?php echo esc_html__( '制作の流れ', 'minko-portfolio' ); ?>
            </h2>
            <p aria-hidden="true" class="fadeOut">Flow</p>
        </div>
        <div class="flow__list slideInFromUnder">
            <ul class="flow__item-wrap">
                <li class="flow__item">
                    <p class="flow__item__number">1.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( 'ヒアリング', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( 'ご要望を詳しくお聞きし、お見積りを作成します', 'minko-portfolio' ); ?>
                    </p>
                </li>
                <li class="flow__item">
                    <p class="flow__item__number">2.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( '企画・設計', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( 'サイト構成や仕様を決定します', 'minko-portfolio' ); ?>
                    </p>
                </li>
                <li class="flow__item">
                    <p class="flow__item__number">3.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( 'デザイン', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( 'デザインのご提案と修正を繰り返します', 'minko-portfolio' ); ?>
                    </p>
                </li>
                <li class="flow__item">
                    <p class="flow__item__number">4.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( 'コーディング', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( 'デザインをWeb上に再現し、機能を実装します', 'minko-portfolio' ); ?>
                    </p>
                </li>
                <li class="flow__item">
                    <p class="flow__item__number">5.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( 'チェック・修正', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( 'ブラウザでの表示/動作確認を行います', 'minko-portfolio' ); ?>
                    </p>
                </li>
                <li class="flow__item">
                    <p class="flow__item__number">6.</p>
                    <p class="flow__item__title">
                        <?php echo esc_html__( '公開・納品', 'minko-portfolio' ); ?>
                    </p>
                    <p class="flow__item__text">
                        <?php echo esc_html__( '最終確認後、公開・納品いたします', 'minko-portfolio' ); ?>
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="p-works" id="works">
        <h2 class="p-section__title fadeIn">
            <span aria-hidden="true">Works</span>
            <?php echo esc_html__( '制作実績', 'minko-portfolio' ); ?>
        </h2>
        <div class="works__archive slideInFromUnder">
            <div class="works-item__container">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                get_template_part('template-parts/works-item');
                    endwhile;
                else :
                endif ;
                ?>
            </div>
        </div>
    </section>

    <section class="p-about" id="about">
        <h2 class="about__section__title fadeIn">
            <span aria-hidden="true">About</span>
            <span class="u-visually-hidden">私について</span>
        </h2>
        <article class="about__content">
            <div class="about__content__profile slideInFromUnder">
                <div class="personality">
                    <div class="personality__img">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/about_img.png') ); ?>" alt="minkoの顔写真" loading="lazy">
                    </div>
                    <p class="activityname">MINKO</p>
                    <div class="realname">
                        <p class="title">名前 |</p>
                        <p class="name">
                            宮澤 利季<br>
                            Toshiki Miyazawa
                        </p>
                    </div>
                </div>
                <div class="profile__article">
                    <h3 class="title">
                        <span aria-hidden="true">Profile</span>
                        <span class="u-visually-hidden">プロフィール</span>
                    </h3>
                    <p class="detail">
                        <?php echo esc_html__( '愛知県豊田市にてフリーランスのWeb制作をしています。以前は、地元の自動車製造業の会社で長年、技術職として勤務していました。事業の大きな変革をきっかけに、働き方や将来のあり方を見つめ直し、そこで始めたWeb制作の面白さと可能性に強く惹かれました。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '2023年7月頃からWeb制作の学習をスタートし、独学を経てオンラインスクール（RaiseTech）に入校。デザインの基礎から実務レベルの実装までを学び、スキルと自走力を身につけました。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '2024年3月頃からは、本業と並行しながら名刺やロゴ制作、コーポレートサイト制作など、実際の案件に携わらせていただけるようになりました。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '2024年12月に会社を退職し、フリーランスとして本格的に活動を開始。現在は実案件を通じてスキルアップを図るとともに、自身のポートフォリオサイトも公開し、営業活動にも力を入れて日々奮闘しています。', 'minko-portfolio' ); ?>
                    </p>
                </div>
            </div>
            <div class="about__content__thought slideInFromUnder">
                <div class="thought__article">
                    <h3 class="title">
                        <span aria-hidden="true">Thought</span>
                        <span class="u-visually-hidden">思想、理念</span>
                    </h3>
                    <p class="detail">
                        <?php echo esc_html__( 'お客様の想いや魅力を形にし、そこから新たなつながりが生まれる。そんなお手伝いができればと想い、活動しています。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '長年モノづくりの現場で培ってきた、新たなものを形にする創造力、最後までやりきる粘り強さと品質へのこだわり。これらは今、Web制作における私の強みとなっています。また、さまざまな趣味にアクティブに取り組んできた経験も、柔軟な発想や遊び心として制作に活きていると感じています。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '特に地元・愛知の企業や個人の魅力ある発信を通じて、新たなつながりや価値を生み出し、地域を盛り上げるお手伝いをしていきたいと考えています。', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( 'コミュニケーションを大切にし、安心して任せていただける関係づくりを心がけています。まずはお気軽にご相談ください。', 'minko-portfolio' ); ?>
                    </p>
                </div>
                <div class="p-artwork">
                    <img class="artwork__img--dark" src="<?php echo esc_url(get_theme_file_uri('/images/artwork_dark.jpg') ); ?>" alt="" loading="lazy">
                    <img class="artwork__img--light" src="<?php echo esc_url(get_theme_file_uri('/images/artwork_light.jpg') ); ?>" alt="" loading="lazy">
                    <p class="text__top">EXPRESS<span class="outline">ING</span></p>
                    <p class="text__middle" data-text="HOPE">HOPE</p>
                    <p class="text__bottom">CONNECT<span class="outline">ING</span></p>
                </div>
            </div>
        </article>
    </section>

    <section class="p-skills">
        <p class="bg-text fadeOut">Skills<span>&</span>Tools</p>
        <div class="skills__content slideInFromUnder">
            <h3 class="skills__title">
                <?php echo esc_html__( 'スキルと使用ツール', 'minko-portfolio' ); ?>
            </h3>
            <div class="skills__article-wrap">
                <article class="skills__article">
                    <p class="c-sub-title">Web Design</p>
                    <div class="skills__article__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_photoshop.svg') ); ?>" alt="Photoshopのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_illustrator.svg') ); ?>" alt="Illustratorのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_figma.svg') ); ?>" alt="Figmaのロゴ" loading="lazy">
                    </div>
                    <p class="skills__article__description">
                        <?php echo esc_html__( '・画像の補正、加工', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・ロゴやイラストなどのベクター画像制作', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・名刺などの印刷物のデザイン制作', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・Webサイトのデザインカンプ制作、基本的なプロトタイプ設定', 'minko-portfolio' ); ?>
                    </p>
                </article>
                <article class="skills__article">
                    <p class="c-sub-title">Coding</p>
                    <div class="skills__article__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_html.svg') ); ?>" alt="HTMLのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_sass.svg') ); ?>" alt="Sassのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_javascript.svg') ); ?>" alt="JavaScriptのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_vs-code.svg') ); ?>" alt="VisualStudioCodeのロゴ" loading="lazy">
                    </div>
                    <p class="skills__article__description">
                        <?php echo esc_html__( '・HTML/CSSによるデザインの忠実な再現', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・BEM記法とFLOCSS設計による保守性を意識したスタイル設計', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・Sassによる効率的な記述', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・JavaScriptによる基本的なUIアニメーション、Swiperを用いたスライダー実装', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・Git/GitHubを用いたバージョン管理', 'minko-portfolio' ); ?>
                    </p>
                </article>
                <article class="skills__article">
                    <p class="c-sub-title">Site Production</p>
                    <div class="skills__article__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon__local.svg') ); ?>" alt="Localのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_wordpress.svg') ); ?>" alt="WordPressのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_php.svg') ); ?>" alt="PHPのロゴ" loading="lazy">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/icon_filezilla.svg') ); ?>" alt="FileZillaのロゴ" loading="lazy">
                    </div>
                    <p class="skills__article__description">
                        <?php echo esc_html__( '・WordPressのオリジナルテーマ制作', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・カスタム投稿、カスタムフィールドを用いた更新しやすいサイト構築', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・プラグインを利用したお問合せフォームなどの機能拡張', 'minko-portfolio' ); ?><br>
                        <?php echo esc_html__( '・FileZillaを用いたFTP接続、さくらサーバー/エックスサーバーへのデプロイ実績あり', 'minko-portfolio' ); ?>
                    </p>
                </article>
            </div>
            <div class="skills__note">
                <h3 class="skills__note__title">
                    <?php echo esc_html__( '対応範囲について', 'minko-portfolio' ); ?>
                </h3>
                <p class="skills__note__text">
                    <?php echo esc_html__( '現在は中小規模のコーポレートサイトやサービス紹介サイトを中心に制作しています。', 'minko-portfolio' ); ?>
                    <?php echo esc_html__( 'アプリ開発や複雑なシステム構築、サーバー構築などの専門的なエンジニアリングには対応しておりませんが、ご要望に応じて柔軟にご提案いたします。', 'minko-portfolio' ); ?>
                    <?php echo esc_html__( '大規模サイトやECサイトについても、内容次第で対応可能な場合がありますので、まずはお気軽にご相談ください。', 'minko-portfolio' ); ?>
                </p>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>