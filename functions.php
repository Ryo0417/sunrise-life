<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( // HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
};
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init()
{
  //WordPress 本体の jQuery を登録解除
  wp_deregister_script('jquery');
  // swiper
  wp_enqueue_style(
    'swiper',
    '//unpkg.com/swiper@8/swiper-bundle.min.css',
    array(),
    '1.0.1',
    'all'
  );
  wp_enqueue_script(
    'swiper',
    '//unpkg.com/swiper@8/swiper-bundle.min.js'
  );
  wp_enqueue_script(
		'jquery',
		'//code.jquery.com/jquery-3.6.1.min.js'
	);
  // 自作jsファイルの読み込み
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.1', true);
  // 自作cssファイルの読み込み
  wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.1', false);
};
add_action('wp_enqueue_scripts', 'my_script_init');
