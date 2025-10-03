<?php
/*
Template Name: お問い合わせ完了画面
*/
get_header(); ?>

<main class="p-contact p-contact__thanks">
    <div class="l-inner">
        <h1>お問い合わせ</h1>
        <p>
            お問い合わせいただきありがとうございます。<br>
            お問い合わせの内容を確認させていただき、追って担当者よりご連絡をさせていただきますので、今しばらくお待ちくださいませ。
        </p>
        <p>
            システムによる自動返信にて　受付完了メールを送信しております。<br>
            受付完了メールが届かない場合はお手数ですが、再度お問い合わせいただくか、弊社までご一報ください。<br>
            お問い合わせ：
        </p>
        <button class="p-contact__thanks__index-btn">
            <a href="<?php echo home_url(''); ?>">TOPへ</a>
        </button>
    </div>
</main>

<?php get_footer(); ?>
</body>