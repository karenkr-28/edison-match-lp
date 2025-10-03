<?php
/*
Template Name: Contact
*/
get_header(); ?>

<main class="p-contact">
    <div class="l-inner">

        <h1>お問い合わせ</h1>
        <form action="">
            <div class="p-contact__radio-btn">
                <label for="">
                    <input type="radio"> 無料トライアル
                </label>
                <label for="">
                    <input type="radio"> 資料請求
                </label>
            </div>
            <p>※必須項目</p>
            <div class="p-contact__form__row">
                <label for="">法人名または団体名</label>
                <input type="text">
            </div>
            <div class="p-contact__form__row">
                <label for="">お名前 ※</label>
                <input type="text" required>
            </div>
            <div class="p-contact__form__row">
                <label for="">フリガナ ※</label>
                <input type="text" required>
            </div>
            <div class="p-contact__form__row">
                <label for="">メールアドレス ※</label>
                <input type="email" required>
            </div>
            <div class="p-contact__form__row">
                <label for="">電話番号 ※</label>
                <input type="tel" required>
            </div>
            <div class="p-contact__form__row">
                <label for="">お問い合わせ内容 ※</label>
                <input type="textarea" required>
            </div>
            <input type="checkbox" required>
            <a href="<?php echo admin_url('/privacypolicy'); ?>">
                「個人情報の取り扱いについて」</a>に同意する ※

            <button type="submit" class="p-contact__form__submit-btn">確認画面へ</button>
        </form>
    </div>
</main>

<?php get_footer(); ?>
</body>