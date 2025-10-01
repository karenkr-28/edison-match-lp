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
            <p class="p-front__concept__catchcopy">
                <span class="p-front__concept__catchcopy-highlight">データを資産として活用</span>することで、<br>
                <span class="p-front__concept__catchcopy-highlight">収益向上を実現</span>します。
            </p>
            <div class="p-front__concept__explanation">
                <ol class="p-front__concept__explanation-list">
                    <li>顧客データの<span>収集</span></li>
                    <li>収集データの<span>分析</span></li>
                    <li>分析に基づいた<br><span>最適なアプローチを決定</span></li>
                </ol>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/concept_img.svg">
            </div>

        </div>
    </section>
    <section class="p-front__about">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div>
                    <span>エジソンマッチ</span>
                    EDISON MATCH とは
                </div>
            </h2>
        </div>
    </section>
</main>

<?php get_footer(); ?>
</body>