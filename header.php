<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>サイトタイトル</title>
  <meta name="description" content="内容をディレクターに確認してください" />
  <meta name="keywords" content="内容をディレクターに確認してください" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="faviconデータをディレクターに確認してください" />
  <!-- JavaScript -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header layout-header">
    <div class="header__inner">
      <h1 class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/logo.png" alt="ライフグループのヘッダーロゴ"></h1>

      <nav class="header__nav">
        <ul class="header__nav-items">
          <li class="header__nav-item"><a href="">home</a></li>
          <li class="header__nav-item"><a href="">message</a></li>
          <li class="header__nav-item"><a href="">vision</a></li>
          <li class="header__nav-item"><a href="">news</a></li>
          <li class="header__nav-item"><a href="">recruit</a></li>
          <li class="header__nav-item-contact"><a href="">contact</a></li>
        </ul>
      </nav>

      <button class="header__drawer hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="header__sp-nav" id="js-drawer">
        <ul class="header__sp-nav-items">
          <li class="header__sp-nav-item"><a href="">home</a></li>
          <li class="header__sp-nav-item"><a href="">message</a></li>
          <li class="header__sp-nav-item"><a href="">vision</a></li>
          <li class="header__sp-nav-item"><a href="">news</a></li>
          <li class="header__sp-nav-item"><a href="recruit-introduction.html">recruit</a></li>
          <li class="header__sp-nav-item-contact"><a href="">contact</a></li>
        </ul>
      </nav>

    </div><!--header__inner-->
    <div class="header__page-scroll"></div>
  </header>
  <div class="header-spacer"></div><!-- /.header-spacer -->