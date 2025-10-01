<?php get_header(); ?>

<main class="p-front">

    <div class="p-front__bg"></div>
    <div class="p-front__fv" data-theme-uri="<?php echo get_template_directory_uri(); ?>">
        <div class="p-front__fv__content">
            <p>“埋もれた情報”を“次のアクション”へつなげる、<br>
                最強のマッチングパートナー</p>
            <img class="p-front__fv__logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="EDISON MATCH">
        </div>
        <img class="p-front__fv__main-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/fv_main.png">

        <img class="p-front__fv__bottom-bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/fv_bottom.png">
    </div>

    <section class="p-front__concept">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div>
                    コンセプト
                </div>
            </h2>
            <p class="c-catchcopy">
                <span class="c-catchcopy-highlight">データを資産として活用</span>することで、<br>
                <span class="c-catchcopy-highlight">収益向上を実現</span>します。
            </p>
            <div class="p-front__concept__explanation">
                <ol class="p-front__concept__explanation-list">
                    <li>顧客データの<span>収集</span></li>
                    <li>収集データの<span>分析</span></li>
                    <li>分析に基づいた<br class="pc"><span>最適なアプローチを決定</span></li>
                </ol>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/concept_img.svg">
            </div>
        </div>
    </section>

    <section class="p-front__about">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div class="p-front__about__catchcopy">
                    <span>エジソンマッチ</span>
                    EDISON MATCH とは
                </div>
            </h2>
            <p class="c-catchcopy">
                <span class="c-catchcopy-highlight">データの高度な検索</span>および<br>
                <span class="c-catchcopy-highlight">マッチングソリューション</span>を実装した、<br>
                <span class="c-catchcopy-highlight">データ管理基盤。</span>
            </p>
            <div class="p-front__about__features-box">
                <div class="p-front__about__features">
                    <div class="p-front__about__features__top p-front__about__one">
                        <p class="p-front__about__features__top-number">01</p>
                        <p class="p-front__about__features__top-text">高機能検索・マッチング</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_01_img.svg">
                    <p>大量データから瞬時に最適情報を抽出。営業機会を逃さない！</p>
                </div>

                <div class="p-front__about__features">
                    <div class="p-front__about__features__top p-front__about__two">
                        <p class="p-front__about__features__top-number">02</p>
                        <p class="p-front__about__features__top-text">ノーコード・ローコード</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_02_img.svg">
                    <p>専門知識不足で誰でも素早く改善・施策反映が可能！</p>
                </div>

                <div class="p-front__about__features">
                    <div class="p-front__about__features__top p-front__about__three">
                        <p class="p-front__about__features__top-number">03</p>
                        <p class="p-front__about__features__top-text">拡張性</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_03_img.svg">
                    <p>
                        成長や変化に合わせて柔軟に<br>
                        変化し続けるシステム
                    </p>
                </div>
            </div>


        </div>
    </section>

</main>

<?php get_footer(); ?>
</body>