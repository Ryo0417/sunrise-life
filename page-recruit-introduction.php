<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>りくるーと 会社紹介</title>
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
    <!-- css -->
    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css"
    />
    <!-- JavaScript -->
  </head>

  <body>
    <main>
      <!-- 下層MV -->
      <section class="mv-sub layout-mv-sub">
        <div class="mv-sub__image">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/bg_sub_mv.jpg"
            alt="リクルートページのメインビュー"
          />
        </div>
        <div class="mv-sub__inner">
          <div class="mv-sub__container">
            <h2 class="mv-sub__title">recruit</h2>
            <div class="mv-sub__decoration"></div>
            <h3 class="mv-sub__sub-title">introduction</h3>
          </div>
          <div class="mv-sub__items-wrapper">
            <ul class="mv-sub__items">
              <li class="mv-sub__item mv-sub__item--black">
                <a href="">会社紹介</a>
              </li>
              <li class="mv-sub__item"><a href="">行動指針</a></li>
              <li class="mv-sub__item"><a href="">カルチャー</a></li>
              <li class="mv-sub__item"><a href="">働く人たち</a></li>
              <li class="mv-sub__item">
                <a href=""
                  >エントリー<span
                    class="mv-sub__item-arrow mv-sub__item-arrow-right-up"
                  ></span
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- あとで背景の縦線いれる -->

      <!-- 会社紹介セクション -->
      <section class="introduction-sub layout-introduction-sub">
        <div class="introduction-sub__bg-left"></div>
        <div class="introduction-sub__inner">
          <h2 class="introduction-sub__title">会社紹介資料</h2>
          <div class="introduction-sub__decoration"></div>
          <div class="introduction-sub__contains">
            <!-- あとでスライダー -->
          </div>
        </div>
        <!--introduction-sub__inner-->
        <div class="introduction-sub__bg-right"></div>
      </section>

      <!-- 数字で紹介セクション -->
      <section class="figure-intro-sub layout-figure-intro-sub">
        <div class="figure-intro-sub__bg-image">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/bg_sub_section-upper.png"
            alt="背景画像"
          />
        </div>
        <div class="figure-intro-sub__inner">
          <div class="figure-intro-sub__contents">
            <div class="figure-intro-sub__wrapper">
              <div class="figure-intro-sub__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/introduction/img_recruit_introduction.png"
                  alt=""
                />
              </div>
              <div class="figure-intro-sub__text-area">
                <h2 class="figure-intro-sub__ttl">
                  LIFE Groupに<br />
                  まつわる情報を<br />
                  数字でご紹介
                </h2>
                <p class="figure-intro-sub__text">
                  実績や会社にまつわるデータを通じて LIFE
                  Groupをわかりやすくご紹介します。
                </p>
              </div>
            </div>
            <!--figure-intro-sub__wrapper -->
            <div class="figure-intro-sub__sub-contents">
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">社員数</div>
                <div class="figure-intro-sub__item-text"><span>24</span>人</div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">平均年齢</div>
                <div class="figure-intro-sub__item-text"><span>29</span>歳</div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">年間休日</div>
                <div class="figure-intro-sub__item-text">
                  <span>128</span>日
                </div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">有給休暇消化率</div>
                <div class="figure-intro-sub__item-text"><span>70</span>%</div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">平均年間総労働時間</div>
                <div class="figure-intro-sub__item-text">
                  <span>1,786</span>時間
                </div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">育休からの復帰率</div>
                <div class="figure-intro-sub__item-text"><span>100</span>%</div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item figure-intro-sub__item--long">
                <div class="figure-intro-sub__item-ttl">新卒・中途比率</div>
                <div class="figure-intro-sub__item-text">
                  <span class="figure-intro-sub__index"
                    ><span
                      class="figure-intro-sub__circle figure-intro-sub__circle--green"
                      >新卒</span
                    >15.1</span
                  >%
                  <span class="figure-intro-sub__index"
                    ><span
                      class="figure-intro-sub__circle figure-intro-sub__circle--yellow"
                      >中途</span
                    >84.9</span
                  >%
                </div>
              </div>
              <!-- /.figure-intro-sub__item -->
              <div class="figure-intro-sub__item">
                <div class="figure-intro-sub__item-ttl">グループ企業数</div>
                <div class="figure-intro-sub__item-text"><span>3</span>社</div>
              </div>
              <!-- /.figure-intro-sub__item -->
            </div>
            <!-- /.figure-intro-sub__sub-contents -->
          </div>
        </div>
      </section>

      <!-- エントリーセクション -->
      <section class="entry-sub layout-entry-sub">
        <div class="entry-sub__inner">
          <div class="entry-sub__container">
            <div class="entry-sub__text-area">
              <h2 class="entry-sub__ttl">entry</h2>
              <p class="entry-sub__text">
                あなたの成長できる環境をご用意いたします。<br />
                誠実で意欲のある方からのエントリーお待ちしております。
              </p>
            </div>
            <div class="entry-sub__button-area">
              <a href="" class="entry-sub__button entry-sub__arrow-right-up"
                >エントリーする<span class=""></span
              ></a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- フッター -->
    <footer class="footer layout-footer footer-sub">
      <div class="footer__inner">
        <div class="footer__contents">
          <div class="footer__logo">
            <a href="">
              <!--あとで   リクルートページのロゴ画像はトップと違うのでテンプレート分ける -->
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/logo_white.png"
                alt="ライフグループのフッターロゴ"
              />
            </a>
          </div>
          <div class="footer__lists">
            <div class="footer__list"><a href="">message</a></div>
            <div class="footer__list"><a href="">vision</a></div>
            <div class="footer__list"><a href="">news</a></div>
            <div class="footer__list"><a href="">recruit</a></div>
            <div class="footer__list"><a href="">プライバシーポリシー</a></div>
          </div>
        </div>
        <!--footer__contents-->
        <div class="footer__copyright">
          &copy; LIFE Group. All rights reserved.
        </div>
        <div class="footer__page-top">
          <a href="#" class=""><span></span>page&nbsp;top</a>
        </div>
      </div>
      <!--footer__inner-->
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  </body>
</html>
