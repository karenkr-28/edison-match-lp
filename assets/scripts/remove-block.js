wp.domReady(() => {
  if (typeof wp !== 'undefined') {
    // テキスト
    wp.blocks.unregisterBlockType('core/code'); // 段落
    wp.blocks.unregisterBlockType('core/preformatted'); // 整形済みテキスト
    wp.blocks.unregisterBlockType('core/verse'); // 詩
    wp.blocks.unregisterBlockType('core/pullquote'); // プルクオート
    wp.blocks.unregisterBlockType('core/cover'); // カバー
    wp.blocks.unregisterBlockType('core/more'); // 続き
    wp.blocks.unregisterBlockType('core/footnotes'); // 脚注
    wp.blocks.unregisterBlockType('core/freeform'); // クラシック
    wp.blocks.unregisterBlockType('core/details'); // 詳細
    wp.blocks.unregisterBlockType('core/nextpage'); // ページ区切り
    wp.blocks.unregisterBlockType('core/table'); // 区切り
    wp.blocks.unregisterBlockType('core/separator'); // 区切り

    // メディア
    wp.blocks.unregisterBlockType('core/archives'); // アーカイブ
    wp.blocks.unregisterBlockType('core/calendar'); // カレンダー
    wp.blocks.unregisterBlockType('core/categories'); // カテゴリー
    wp.blocks.unregisterBlockType('core/html'); // カスタムHTML
    wp.blocks.unregisterBlockType('core/latest-comments'); // 最新のコメント
    wp.blocks.unregisterBlockType('core/latest-posts'); // 最新の投稿
    wp.blocks.unregisterBlockType('core/page-list'); // 固定ページリスト
    wp.blocks.unregisterBlockType('core/rss'); // RSS
    wp.blocks.unregisterBlockType('core/search'); // 検索
    wp.blocks.unregisterBlockType('core/shortcode'); // ショートコード
    wp.blocks.unregisterBlockType('core/social-links'); // ソーシャルアイコン
    wp.blocks.unregisterBlockType('core/tag-cloud'); // タグクラウド
    wp.blocks.unregisterBlockType('core/media-text'); // メディアとテキスト

    // テーマ
    wp.blocks.unregisterBlockType('core/navigation'); // ナビゲーション
    wp.blocks.unregisterBlockType('core/site-logo'); // サイトロゴ
    wp.blocks.unregisterBlockType('core/site-title'); // サイトのタイトル
    wp.blocks.unregisterBlockType('core/site-tagline'); // サイトのキャッチフレーズ
    wp.blocks.unregisterBlockType('core/query'); // クエリグループ
    wp.blocks.unregisterBlockType('core/avatar'); // アバター
    wp.blocks.unregisterBlockType('core/post-title'); // タイトル
    wp.blocks.unregisterBlockType('core/post-excerpt'); // 抜粋
    wp.blocks.unregisterBlockType('core/post-featured-image'); // 投稿のアイキャッチ画像
    wp.blocks.unregisterBlockType('core/post-author'); // 投稿者
    wp.blocks.unregisterBlockType('core/post-author-name'); // 投稿者名
    wp.blocks.unregisterBlockType('core/post-date'); // 投稿日
    wp.blocks.unregisterBlockType('core/post-terms'); // カテゴリー・タグ
    wp.blocks.unregisterBlockType('core/post-navigation-link'); // 次の投稿・前の投稿
    wp.blocks.unregisterBlockType('core/read-more'); // 続きを読む
    wp.blocks.unregisterBlockType('core/comments'); // コメント
    wp.blocks.unregisterBlockType('core/post-comments-form'); // 投稿コメントフォーム
    wp.blocks.unregisterBlockType('core/loginout'); // ログイン/ログアウト
    wp.blocks.unregisterBlockType('core/term-description'); // タームの説明
    wp.blocks.unregisterBlockType('core/query-title'); // アーカイブタイトル
    wp.blocks.unregisterBlockType('core/post-author-biography'); // 投稿者のプロフィール情報

    // 埋め込みブロック
    wp.blocks.unregisterBlockVariation('core/embed', 'twitter'); // Twitter
    wp.blocks.unregisterBlockVariation('core/embed', 'wordpress'); // WordPress
    wp.blocks.unregisterBlockVariation('core/embed', 'soundcloud'); // SoundCloud
    wp.blocks.unregisterBlockVariation('core/embed', 'spotify'); // Spotify
    wp.blocks.unregisterBlockVariation('core/embed', 'flickr'); // Flickr
    wp.blocks.unregisterBlockVariation('core/embed', 'vimeo'); // Vimeo
    wp.blocks.unregisterBlockVariation('core/embed', 'animoto'); // Animoto
    wp.blocks.unregisterBlockVariation('core/embed', 'cloudup'); // Cloudup
    wp.blocks.unregisterBlockVariation('core/embed', 'crowdsignal'); // Crowdsignal
    wp.blocks.unregisterBlockVariation('core/embed', 'dailymotion'); // Dailymotion
    wp.blocks.unregisterBlockVariation('core/embed', 'imgur'); // Imgur
    wp.blocks.unregisterBlockVariation('core/embed', 'issuu'); // Issuu
    wp.blocks.unregisterBlockVariation('core/embed', 'kickstarter'); // Kickstarter
    wp.blocks.unregisterBlockVariation('core/embed', 'meetup-com'); // Meetup.com
    wp.blocks.unregisterBlockVariation('core/embed', 'mixcloud'); // Mixcloud
    wp.blocks.unregisterBlockVariation('core/embed', 'reddit'); // Reddit
    wp.blocks.unregisterBlockVariation('core/embed', 'reverbnation'); // ReverbNation
    wp.blocks.unregisterBlockVariation('core/embed', 'screencast'); // Screencast
    wp.blocks.unregisterBlockVariation('core/embed', 'scribd'); // Scribd
    wp.blocks.unregisterBlockVariation('core/embed', 'slideshare'); // Slideshare
    wp.blocks.unregisterBlockVariation('core/embed', 'smugmug'); // SmugMug
    wp.blocks.unregisterBlockVariation('core/embed', 'speaker-deck'); // Speaker Deck
    wp.blocks.unregisterBlockVariation('core/embed', 'tiktok'); // TikTok
    wp.blocks.unregisterBlockVariation('core/embed', 'ted'); // TED
    wp.blocks.unregisterBlockVariation('core/embed', 'tumblr'); // Tumblr
    wp.blocks.unregisterBlockVariation('core/embed', 'videopress'); // VideoPress
    wp.blocks.unregisterBlockVariation('core/embed', 'wordpress-tv'); // WordPress.tv
    wp.blocks.unregisterBlockVariation('core/embed', 'amazon-kindle'); // Amazon Kindle
    wp.blocks.unregisterBlockVariation('core/embed', 'pinterest'); // Pinterest
    wp.blocks.unregisterBlockVariation('core/embed', 'pocket-casts'); // Pocket Casts
    wp.blocks.unregisterBlockVariation('core/embed', 'wolfram-cloud'); // Wolfram

    // AISEO
    wp.blocks.unregisterBlockType('aioseo/breadcrumbs');
    wp.blocks.unregisterBlockType('aioseo/html-sitemap');
    wp.blocks.unregisterBlockType('aioseo/table-of-contents');
    wp.blocks.unregisterBlockType('aioseo/faq');
  }
});
