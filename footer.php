<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__info">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="EDISON MATCH">
            </a>
            <p>
                thomas株式会社<br>
                東京都港区六本木7-21-24 THE MODULE roppongi 2F
            </p>
        </div>
        <div class="l-footer__menu__box">
            <div class="l-footer__menu l-footer__menu__left">
                <ul>
                    <li><a href="<?php echo home_url('/#/'); ?>">お知らせ</a></li>
                    <li> <a href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('無料トライアル'); ?>">
                            お問い合わせ
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo rtrim(home_url('/contact'), '/'); ?>?item=<?php echo urlencode('資料請求'); ?>">
                            資料ダウンロード
                        </a>
                    </li>
                </ul>
            </div>
            <div class="l-footer__menu l-footer__menu__right">
                <li>
                    <a href="https://thomas-gr.com/" target="_blank">企業サイト
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="link_icon">
                    </a>
                </li>
                <li>
                    <a href="https://careers.thomas-gr.com/" target="_blank">採用情報
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="link_icon">
                    </a>
                </li>
                <li>
                    <a href="https://appexchangejp.salesforce.com/appxListingDetail?listingId=7c5c273d-20cf-47ce-b667-fee02f065321" target="_blank">AppExchange
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="link_icon">
                    </a>
                </li>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>