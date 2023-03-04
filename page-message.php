<?php get_header(); ?>
<div class="sub-message__bg-circle">
  <section class="sub-message">
    <div class="sub-message__inner">
      <h1 class="sub-message__head">message</h1>
      <div class="sub-message__reception">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/message/message-enterprise.svg" alt="グループエンタープライズ">
      </div>
      <div class="sub-message__companies">
        <div class="sub-message__company sub-company">
          <h2 class="sub-company__name">株式会社TSUBAKI不動産</h2>
          <div class="sub-company__link">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/message/arrow-diagonal.svg" alt="">
            <a href="">official hp</a>
          </div>
          <div class="sub-company__img">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/message/message1-sp.jpg" media="(max-width: 767px)" />
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/message/message1-pc.jpg" media="(min-width: 768px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/message/message1-pc.jpg" alt="社長の画像１">
            </picture>
            <figure class="sub-company__name-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/message/message-name1.png" alt="社長の名前">
            </figure>
          </div>
          <h3 class="sub-company__ceo">
            藤本 律夫<span>株式会社TSUBAKI不動産 代表取締役</span>
          </h3>
        </div>
  
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>