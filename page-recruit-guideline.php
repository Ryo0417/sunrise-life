<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>りくるーと 行動指針</title>
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
            <h3 class="mv-sub__sub-title">guideline</h3>
          </div>
          <div class="mv-sub__items-wrapper">
            <ul class="mv-sub__items">
              <li class="mv-sub__item"><a href="">会社紹介</a></li>
              <li class="mv-sub__item mv-sub__item--black">
                <a href="">行動指針</a>
              </li>
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

      <!-- ミッションセクション -->
      <section class="mission-sub layout-mission-sub">
        <div class="mission-sub__inner">
          <div class="mission-sub__title-area guideline-title">
            <h2 class="guideline-title__main">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_mission.png"
                alt="ミッションセクションのタイトル"
              />
            </h2>
            <div class="guideline-title__sub-title">ミッション</div>
            <div class="guideline-title__decoration"></div>
          </div>
          <h3 class="mission-sub__message">
            常に向上し、顧客にとっての<br />
            最善を模索する伴走者である。
          </h3>
          <p class="mission-sub__text">
            我々は常に学び向上することで顧客から大きな信頼を得たいと考えています。<br />
            そして、その大きな信頼関係を将来にわたり維持し共に歩みます。
          </p>
        </div>
      </section>

      <!-- バリューセクション -->
      <section class="value-sub layout-value-sub">
        <div class="value-sub__bg-upper">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/bg_sub_section_upper.png"
            alt="背景画像"
          />
        </div>
        <div class="value-sub__inner">
          <div class="value-sub__title-area guideline-title">
            <h2 class="guideline-title__main">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_value.png"
                alt="バリューセクションのタイトル"
              />
            </h2>
            <div class="guideline-title__sub-title">バリュー</div>
            <div class="guideline-title__decoration"></div>
          </div>
          <div class="value-sub__contains">
            <div class="value-sub__item">
              <div class="value-sub__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_guideline01.png"
                  alt="期待の超越"
                />
              </div>
              <div class="value-sub__index">期待の超越</div>
              <p class="value-sub__text">
                自己研鑽に励み、自らに絶えず挑戦を課すことで、期待を超える高次元の価値を提供します。
              </p>
            </div>
            <!-- /.value-sub__item -->
            <div class="value-sub__item">
              <div class="value-sub__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_guideline02.png"
                  alt="迅速な対応"
                />
              </div>
              <div class="value-sub__index">迅速な対応</div>
              <p class="value-sub__text">
                深い傾聴を第一とし、全容を無駄なく捉え、本質的な課題に一直線に取り組むことで安心と満足を実現します。
              </p>
            </div>
            <!-- /.value-sub__item -->
            <div class="value-sub__item">
              <div class="value-sub__image">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_guideline03.png"
                  alt="感情への共感"
                />
              </div>
              <div class="value-sub__index">感情への共感</div>
              <p class="value-sub__text">
                常に相手の立場に立ち、心情に寄り添うことでニーズやインサイトを的確に理解し誠実に向き合います。
              </p>
            </div>
            <!-- /.value-sub__item -->
          </div>
        </div>
        <!--value-sub__inner-->
        <div class="value-sub__bg-upper">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/bg_sub_section_bottom.png"
            alt="背景画像"
          />
        </div>
      </section>

      <!-- クレドセクション -->
      <section class="credo-sub layout-credo-sub">
        <div class="credo-sub__inner">
          <div class="credo-sub__title-area guideline-title">
            <h2 class="guideline-title__main">
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/guideline/img_recruit_credo.png"
                alt="ミッションセクションのタイトル"
              />
            </h2>
            <div class="guideline-title__sub-title">クレド</div>
            <div class="guideline-title__decoration"></div>
          </div>
          <div class="credo-sub__message01">
            私たちは自らの家族同様に顧客の幸せを願い<br />
            常に誠実であります。
          </div>
          <div class="credo-sub__decoration"></div>
          <div class="credo-sub__message02">
            私たちは深く傾聴することで共感理解を示し<br />
            迅速な対応を心がけます。
          </div>
          <div class="credo-sub__decoration"></div>
          <div class="credo-sub__message03">
            私たちは人との繋がりに感謝し<br />
            関わる全ての人のQOL向上に尽力します。
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
