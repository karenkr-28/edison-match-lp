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
                </ul>
            </div>
        </div>
    </header>