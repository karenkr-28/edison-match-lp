<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__info">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="EDISON MATCH">
            <p>
                thomas株式会社<br>
                東京都港区六本木7-21-24 THE MODULE roppongi 2F
            </p>
        </div>
        <div class="l-footer__menu__box">
            <div class="l-footer__menu l-footer__menu__left">
                <ul>
                    <li><a href="<?php echo home_url('/#/'); ?>">お知らせ</a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a></li>
                    <li><a href="<?php echo home_url('/contact/'); ?>">資料ダウンロード</a></li>
                </ul>
            </div>
            <div class="l-footer__menu l-footer__menu__right">
                <li>
                    <a href="https://thomas-gr.com/" target="_blank">企業サイト</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="EDISON MATCH">
                </li>
                <li>
                    <a href="https://careers.thomas-gr.com/" target="_blank">採用情報</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="EDISON MATCH">
                </li>
                <li>
                    <a href="https://appexchangejp.salesforce.com/appxListingDetail?listingId=7c5c273d-20cf-47ce-b667-fee02f065321" target="_blank">AppExchange</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/external_link.svg" alt="EDISON MATCH">
                </li>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>