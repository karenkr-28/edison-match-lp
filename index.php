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
                <span class="c-catchcopy__highlight">データを資産として活用</span>することで、<br>
                <span class="c-catchcopy__highlight">収益向上を実現</span>します。
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
                <span class="c-catchcopy__highlight">データの高度な検索</span>および<br>
                <span class="c-catchcopy__highlight">マッチングソリューション</span>を実装した、<br>
                <span class="c-catchcopy__highlight">データ管理基盤。</span>
            </p>
            <div class="p-front__about__item-list">
                <div class="p-front__about__item p-front__about__item--one">
                    <div class="p-front__about__item__top">
                        <p class="p-front__about__item__index">01</p>
                        <p class="p-front__about__item__title">高機能検索・マッチング</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_01_img.svg">
                    <p class="p-front__about__item__text">大量データから瞬時に最適情報を抽出。営業機会を逃さない！</p>
                </div>

                <div class="p-front__about__item p-front__about__item--two">
                    <div class="p-front__about__item__top">
                        <p class="p-front__about__item__index">02</p>
                        <p class="p-front__about__item__title">ノーコード・ローコード</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_02_img.svg">
                    <p class="p-front__about__item__text">専門知識不足で誰でも素早く改善・施策反映が可能！</p>
                </div>

                <div class="p-front__about__item p-front__about__item--three">
                    <div class="p-front__about__item__top">
                        <p class="p-front__about__item__index">03</p>
                        <p class="p-front__about__item__title">拡張性</p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_03_img.svg">
                    <p class="p-front__about__item__text">
                        成長や変化に合わせて柔軟に<br>
                        変化し続けるシステム
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-front__features">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div class="p-front__about__catchcopy">
                    特徴
                </div>
            </h2>
        </div>
        <div class="p-front__features__item-list">
            <div class="p-front__features__item">
                <div class="p-front__features__item-inner">
                    <div class="p-front__features__item--point">POINT 01</div>
                    <div class="p-front__features__item--title">
                        <span>「人材マッチング」テンプレート</span>を標準搭載
                    </div>
                    <div class="p-front__features__item--text">
                        人材業界での活用に最適化された候補者×求人のマッチングセットを標準装備。<br>
                        マッチング対象のオブジェクトや検索項目も初期構築済みのため、導入初日から即利用が可能です。貴社の業務フローや商習慣に応じたカスタマイズにも柔軟に対応します。
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_01.png">
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
</body>