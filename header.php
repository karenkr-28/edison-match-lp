<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <!-- Chromeのバグ対策用 -->
    <script>
        console.log("")
    </script>

</head>

<body>
    <header class="l-header">
        <div class="l-header__inner">
            <a class="l-header__logo" href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="EDISON MATCH">
            </a>
            <button class="l-header__menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav class="l-header__nav" id="js-header__nav">
                <ul class="l-header__nav__list">
                    <li class="l-header__nav__item"><a href=" <?php echo home_url('/#concept'); ?>">コンセプト</a></li>
                    <li class="l-header__nav__item"><a href="<?php echo home_url('/#features'); ?>">特徴</a></li>
                    <!-- <li class="l-header__nav__item"><a href="<?php echo home_url('/#'); ?>">実績</a></li> -->
                    <li class="l-header__nav__item"><a href="<?php echo home_url('/#plan'); ?>">プラン</a></li>
                    <li class="l-header__nav__item"><a href="<?php echo home_url('/#flow'); ?>">導入の流れ</a></li>
                    <!-- <li class="l-header__nav__item"><a href="<?php echo home_url('/#faq'); ?>">よくあるご質問</a></li> -->
                    <!-- <li class="l-header__nav__item"><a href="<?php echo home_url('/#'); ?>">お知らせ</a></li> -->
                </ul>
                <a class="c-btn-primary l-header__nav__contact-btn" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('無料トライアル'); ?>">
                    お問い合わせ
                </a>
                <div class="l-header__nav__cta-btn__box">
                    <a class="c-btn-cta c-btn-cta--green l-header__nav__cta-btn" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('無料トライアル'); ?>">
                        無料トライアル
                        <img class="c-btn-cta__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_green.svg">
                    </a>
                    <a class="c-btn-cta c-btn-cta--blue l-header__nav__cta-btn" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('資料請求'); ?>">
                        資料ダウンロード
                        <img class="c-btn-cta__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_blue.svg">
                    </a>
                </div>
            </nav>
            <a class="c-btn-primary l-header__contact__btn" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('無料トライアル'); ?>">
                お問い合わせ
            </a>
        </div>
    </header>

    <div class="l-sidebar">
        <!-- totop -->
        <button class="l-sidebar__totop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/totop_arrow.svg">
        </button>
        <?php if (!is_page(array('contact', 'contact/confirm/', 'contact/thanks/'))) : ?>
            <div class="l-sidebar__cta-wrap">
                <a class="c-btn-cta c-btn-cta--green" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('無料トライアル'); ?>">
                    無料トライアル
                    <img class="c-btn-cta__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_green.svg">
                </a>
                <a class="c-btn-cta c-btn-cta--blue" href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('資料請求'); ?>">
                    資料ダウンロード
                    <img class="c-btn-cta__arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_blue.svg">
                </a>
            </div>
        <?php endif; ?>
    </div>