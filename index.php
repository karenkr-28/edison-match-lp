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
                <div>
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
                        <h3 class="p-front__about__item__title">高機能検索・マッチング</h3>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_01_img.svg">
                    <p class="p-front__about__item__text">大量データから瞬時に最適情報を抽出。営業機会を逃さない！</p>
                </div>

                <div class="p-front__about__item p-front__about__item--two">
                    <div class="p-front__about__item__top">
                        <p class="p-front__about__item__index">02</p>
                        <h3 class="p-front__about__item__title">ノーコード・ローコード</h3>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/about_02_img.svg">
                    <p class="p-front__about__item__text">専門知識不足で誰でも素早く改善・施策反映が可能！</p>
                </div>

                <div class="p-front__about__item p-front__about__item--three">
                    <div class="p-front__about__item__top">
                        <p class="p-front__about__item__index">03</p>
                        <h3 class="p-front__about__item__title">拡張性</h3>
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
        <img class="p-front__features__backimg-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_img_left.png">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div>
                    特徴
                </div>
            </h2>
            <div class="p-front__features__item-list">
                <div class="p-front__features__item">
                    <div class="p-front__features__item__content">
                        <div class="p-front__features__item__tag">POINT 01</div>
                        <h3 class="p-front__features__item__title">
                            <span>「人材マッチング」テンプレート</span>を標準搭載
                        </h3>
                        <p class="p-front__features__item__text">
                            人材業界での活用に最適化された候補者×求人のマッチングセットを標準装備。<br>
                            マッチング対象のオブジェクトや検索項目も初期構築済みのため、導入初日から即利用が可能です。貴社の業務フローや商習慣に応じたカスタマイズにも柔軟に対応します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_01.png">
                </div>

                <div class="p-front__features__item">
                    <div class="p-front__features__item__content">
                        <div class="p-front__features__item__tag">POINT 02</div>
                        <h3 class="p-front__features__item__title">
                            <span>柔軟なマッチングロジック</span>の<br class="sp">設定が可能
                        </h3>
                        <p class="p-front__features__item__text">
                            Salesforce上の任意の2オブジェクト間でマッチングが可能。<br>
                            「人材×案件」「企業×企業」「物件×希望条件」など、業界・業務を問わず利用できます。
                            GUIベースで設定できるため、現場主導での運用にも最適です。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_02.png">
                </div>

                <div class="p-front__features__item">
                    <div class="p-front__features__item__content">
                        <div class="p-front__features__item__tag">POINT 03</div>
                        <h3 class="p-front__features__item__title">
                            条件・項目を<span>自由にカスタマイズ</span>
                        </h3>
                        <p class="p-front__features__item__text">
                            AND/OR条件・かっこ（括弧）を含む高度な論理検索式にも対応。検索項目や結果の表示内容も、コード不要で簡単に変更可能です。精度の高い絞り込みにより、“今すぐ使えるデータ”に瞬時にアクセスできます。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_03.png">
                </div>

                <div class="p-front__features__item">
                    <div class="p-front__features__item__content">
                        <div class="p-front__features__item__tag">POINT 04</div>
                        <h3 class="p-front__features__item__title">
                            地理情報を活用した<br class="sp"><span>ローカルマッチング</span>にも対応
                        </h3>
                        <p class="p-front__features__item__text">
                            地図連携機能により、位置情報をベースにした検索やマッチングが可能。<br>
                            「1km圏内の案件」「特定エリアの登録者」など、視覚的に把握しながらデータ選定できます。<br>
                            拠点戦略や地域営業の精度向上にも貢献します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_04.png">
                </div>

                <div class="p-front__features__item">
                    <div class="p-front__features__item__content">
                        <div class="p-front__features__item__tag">POINT 05</div>
                        <h3 class="p-front__features__item__title">
                            Salesforce Flowとの連携で<br class="sp"><span>業務処理の自動化</span>
                        </h3>
                        <p class="p-front__features__item__text">
                            検索・マッチング結果に応じてSalesforce Flowを自動実行。
                            通知・レコード更新・Slack連携など、多様なビジネスロジックと組み合わせて、高度なワークフローを構築できます。<br>
                            人手を介さない次世代の“スマートマッチング”を実現します。
                        </p>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_point_05.png">
                </div>
            </div>
        </div>
        <img class="p-front__features__backimg-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/feature_img_right.png">
    </section>

    <section class="p-front__custom-object">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip.svg">
                <div>
                    カスタムオブジェクト
                </div>
            </h2>
            <p>御社でお持ちのあらゆるビッグデータが、様々な機能と組み合わさり、新たなソリューションとして生まれ変わります。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/custom-object_img.svg">
        </div>
    </section>

    <!-- 実績 -->

    <section class="p-front__plan">
        <div class="l-inner">
            <h2 class="c-title--icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clip_green.svg">
                <div>
                    プラン
                </div>
            </h2>
            <div class="p-front__plan__content">
                <div class="p-front__plan__card p-front__plan__card--green">
                    <div class="p-front__plan__card__header">
                        <h3 class="p-front__plan__card__title">CRM未導入のお客様</h3>
                        <p class="p-front__plan__card__plan">Edison Match</p>
                        <p class="p-front__plan__card__user">
                            <span>１ユーザー</span><br>
                            ¥5,000 JPY / 月
                        </p>
                    </div>
                    <ul class="p-front__plan__content--check">
                        <li>30日間の無料トライアル</li>
                        <li>初期費用：100,000円(税抜)</li>
                        <li>最低契約期間：１年間</li>
                        <li>最低契約数：５ユーザー</li>
                        <li>ユーザー追加単価：１ユーザー</li>
                        <li>ご契約の更新：１年間ごとに自動更新</li>
                        <li>サポートサービス：メールによるテクニカル<br>サポート</li>
                    </ul>
                </div>
                <div class="p-front__plan__card p-front__plan__card--blue">
                    <div class="p-front__plan__card__header">
                        <h3 class="p-front__plan__card__title">CRM未導入のお客様</h3>
                        <p class="p-front__plan__card__plan">Edison Match ISV版</p>
                        <p class="p-front__plan__card__user">
                            <span>１ユーザー</span><br>
                            ¥2,000 JPY / 月
                        </p>
                    </div>
                    <ul class="p-front__plan__content--check">
                        <li>14日間の無料トライアル</li>
                        <li>初期費用：100,000円(税抜)</li>
                        <li>最低契約期間：１年間</li>
                        <li>最低契約数：５ユーザー</li>
                        <li>ユーザー追加単価：１ユーザー</li>
                        <li>ご契約の更新：１年間ごとに自動更新</li>
                        <li>サポートサービス：メールによるテクニカル<br>サポート</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
</body>