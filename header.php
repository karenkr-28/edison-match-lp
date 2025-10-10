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
            <div class="l-header__nav">
                <ul>
                    <li><a href="<?php echo home_url('/#concept'); ?>">コンセプト</a></li>
                    <li><a href="<?php echo home_url('/#features'); ?>">特徴</a></li>
                    <li><a href="<?php echo home_url('/#works'); ?>">実績</a></li>
                    <li><a href="<?php echo home_url('/#plan'); ?>">プラン</a></li>
                    <li><a href="<?php echo home_url('/#flow'); ?>">導入の流れ</a></li>
                    <li><a href="<?php echo home_url('/#faq'); ?>">よくあるご質問</a></li>
                    <li><a href="<?php echo home_url('/#news'); ?>">お知らせ</a></li>
                </ul>
            </div>
            <a class="c-btn-primary" href="<?php echo home_url('/#contact'); ?>">お問い合わせ</a>
        </div>
    </header>

    <div class="l-sidebar">
        <!-- totpp -->
        <button class="l-sidebar__totop">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/totop_arrow.svg">
        </button>
        <div class="l-sidebar__cta-wrap">
            <a href="<?php echo home_url('/contact/'); ?>" class="c-btn-cta c-btn-cta--green">
                無料トライアル
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_green.svg" alt="" class="c-btn-cta__arrow">
            </a>
            <a href="<?php echo home_url('/contact/'); ?>" class="c-btn-cta c-btn-cta--blue">
                資料ダウンロード
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn_arrow_blue.svg" alt="" class="c-btn-cta__arrow">
            </a>
        </div>
    </div>