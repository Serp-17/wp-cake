<?php 
  /*
  Template Name: Home
  */
?>

<?php get_header(); ?>
<div id="page" class="site">
  <div class="home-page">
    <div class="container-fluid page-section-home">
      <header>
        <div>
          <div class="col-sm-3">
            <?php the_custom_logo(); ?>
          </div>
          <div class="col-sm-5 navigation">
            <div class="menu-primary-container">
              <?php wp_nav_menu( array(
                'theme_location' => 'top',
                'container'      => null,
                'menu_class'     => 'menu',
                'menu_id'        => 'menu-primary-2'
              ) ) ?>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="social-home">
              <ul>
                <?php if ( CFS()->get('facebook') ) : ?>
                  <li><a href="<?php echo CFS()->get('facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <?php endif; ?>
                <?php if ( CFS()->get('instagram') ) : ?>
                  <li><a href="<?php echo CFS()->get('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <a href="tel:<?= CFS()->get('phone_number'); ?>" class="telephone">
              <?= CFS()->get('phone_number'); ?>
            </a>
          </div>
        </div>
      </header>
      <div class="home-page-title">
        <h1>
          <?php echo CFS()->get('title'); ?>
        </h1>
        <ul class="list-link">
          <?php if ( CFS()->get('callback') ) : ?>
            <li>
              <a href="#" class="callback eModal-1" style="cursor: pointer;">
                <span>
                  <?= CFS()->get('callback')['text']; ?>
                </span>
              </a>
            </li>
          <?php endif; ?>
          <?php if ( CFS()->get('location') ) : ?>
            <li>
              <a href="<?= CFS()->get('location')['url']; ?>" target="_blank" class="location">
                <span>
                  <?= CFS()->get('location')['text']; ?>
                </span>
              </a>
            </li>
          <?php endif; ?>
          <?php if ( CFS()->get('review') ) : ?>
            <li>
              <a href="/otzivi/" class="review">
                <span><?= CFS()->get('review')['text']; ?></span>
              </a>
            </li>
          <?php endif; ?>
        </ul>
    </div>
  </div>
</div>

    <div class="scroll-link animated">
        <a href="#secondScreen">Вниз</a>
    </div>
    <video autoplay="" loop="" autobuffer="" muted="" playsinline="" class="video">
     <source src="<?php echo CFS()->get('video'); ?>" type="video/mp4">
    </video>
  </div>
</div>

<div class="home-category" id="secondScreen">
  <div class="container-fluid page-section">
    <div class="">
      <?php
        $loop = CFS()->get('cake_card');
        foreach ($loop as $row) {
          ?>
            <div class="col-sm-4">
              <a href="<?= $row['link']['url']; ?>" class="item item-1" style="background: url(<?= $row['image']; ?>) center no-repeat;">
                <div class="category-title">
                  <?= $row['name']; ?>
                </div>
              </a>
            </div>
          <?php
        }
      ?>
    </div>
  </div>
</div>

<div class="toppings-section">
  <div class="container-fluid page-section tm_pb_text">
    <h3><?php echo CFS()->get('block_topings_title'); ?> <a href="<?php echo CFS()->get('topings_link')[url]; ?>" class="view-toppings"><?php echo CFS()->get('topings_link')[text]; ?></a></h3>
    <div class="owl-carousel owl-theme owl-loaded owl-drag">
      <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(-260px, 0px, 0px); transition: all 0.25s ease 0s; width: 3391px;">
          <?php
            $loop = CFS()->get('toping_cards');
            foreach ($loop as $row) {
              ?>
              <div class="owl-item" style="width: 250.833px; margin-right: 10px;">
                <div class="item">
                  <?php if ( $row['premium'] ) : ?>
                    <span class="premium-text">PREMIUM</span>
                  <?php endif; ?>
                  <img src="<?= $row['image']; ?>" alt="<?= $row['name']; ?>" />
                  <span class="img-text"><?= $row['name']; ?></span>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>  
      <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><div class="nav-btn prev-slide"></div></button><button type="button" role="presentation" class="owl-next"><div class="nav-btn next-slide"></div></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
  </div>
</div>

<div id="content" class="site-content review-news">
  <div class="site-content_wrap">
    <div>
      <div id="primary" class="col-xs-12 col-md-12">
        <main id="main" class="site-main" role="main">
          <article id="post-184" class="page type-page status-publish hentry no-thumb">
            <div class="kutsenko">
              <div style="display: table; margin: 50px auto 30px auto;" class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_left  tm_pb_text_0">
              <h3><?php echo CFS()->get('photos_block_title'); ?></h3>
            </div>
            <div style="clear:both"></div>
		        <div class="psgal_wrap">
              <div id="psgal_15942_1" data-psgal_id="15942_1" data-psgal_container_id="container_15942_1" data-psgal_thumbnail_width="222" data-psgal_use_masonary="0" class="psgal-inline psgal gallery-columns-3 gallery-size-thumbnail use_masonry_ show_captions_1 photoswipe_showme" itemscope="" itemtype="http://schema.org/ImageGallery" style="position: relative; width: 888px; height: 1094.47px;">
                <?php
                  $loop = CFS()->get('photos');
                  foreach ($loop as $row) {
                    ?>
                      <figure class="msnry_items" itemscope="" itemtype="http://schema.org/ImageObject" style="width: 222px; position: absolute; left: 0px; top: 0px;">
                          <img class="lazyload msnry_thumb" src="<?= $row['photo'] ?>" alt="">
                        <figcaption class="photoswipe-gallery-caption" style=" "></figcaption>
                      </figure>
                    <?php
                  }
                ?>
              </div>
		        </div>
		        <div style="clear:both"></div>
              <div class="tm_pb_button_module_wrapper tm_pb_module" style="margin: 0 auto; display: table;">
                <a
                  class="tm_pb_button tm_pb_custom_button_icon  tm_pb_button_2 tm_pb_module tm_pb_bg_layout_light tm_pb_icon_right"
                  href="<?php echo CFS()->get('photos_block_link')[url]; ?>"
                >
                  <?php echo CFS()->get('photos_block_link')[text]; ?>
                </a>
              </div>
            </div>

            <div class="container">
              <div class="   tm_pb_   tm_pb_  _3" style="margin: 40px 0 0 0;">
                  <div class="tm_pb_column tm_pb_column_1_2  tm_pb_column_5 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 tm_pb_vertical_alligment_start">
                    <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_left  tm_pb_text_7">
                    </div>
                  </div>
                </div>
              </div>
              <div style="padding:0;" class="tm_pb_section  tm_pb_section_3 tm_pb_with_background tm_section_regular tm_section_transparent">
                <div class="container-fluid page-section">
                  <div class="    tm_pb_   tm_pb_  _5">
                    <div style="padding: 60px;" class="news-section tm_pb_column tm_pb_column_1_2  tm_pb_column_8 tm_pb_column_empty col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm_pb_vertical_alligment_start">
                      <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_left  tm_pb_text_9">
                          <h3>Новости</h3>
                      </div>
                      <ul class="news-list">
                                                                                        <li>
                            <a href="https://studiocake.kiev.ua/novosti/kak-vybrat-tort-na-den-rozhdeniya-rebenka/" title="Как выбрать торт на день рождения ребенка?">Как выбрать торт на день рождения ребенка?</a><br>
                            <span>03.03.21</span>
                        </li>
                                                      <li>
                          <a href="https://studiocake.kiev.ua/novosti/chto-takoe-falsh-yarus-dlya-torta/" title="Что такое фальш ярус для торта">Что такое фальш ярус для торта</a><br>
                          <span>12.11.19</span>
                        </li>
                                                      <li>
                          <a href="https://studiocake.kiev.ua/novosti/v-kakih-produktah-soderzhatsya-transzhiry/" title="Трансжиры: что это и в каких продуктах содержатся трансжиры?">Трансжиры: что это и в каких продуктах содержатся трансжиры?</a><br>
                          <span>06.11.19</span>
                        </li>
                      </ul>

                      <div class="tm_pb_button_module_wrapper tm_pb_module">
                          <a class="tm_pb_button tm_pb_custom_button_icon  tm_pb_button_2 tm_pb_module tm_pb_bg_layout_light tm_pb_icon_right" href="https://studiocake.kiev.ua/novosti/">Читать все</a>
                      </div>

                         </div>
                         <!-- .tm_pb_column -->
                         <div style="padding: 60px;" class="review-section tm_pb_column tm_pb_column_1_2  tm_pb_column_8 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm_pb_vertical_alligment_start">
                            <div class="tm_pb_text tm_pb_module tm_pb_bg_layout_light tm_pb_text_align_left  tm_pb_text_8">
                               <h3>Отзывы</h3>
                            </div>

                            <!-- .tm_pb_text -->
                            <div class="tm_pb_cherry_testi tm_pb_cherry_testi_0">
                               <div class="tm-testi">
                                  <div id="tm-testi-slider-1" class="tm-testi__wrap tm-testi__wrap--perview-1 tm-testi__wrap--shortcode swiper-container tm-testi-slider tm-testi--default" data-atts="{&quot;autoplay&quot;:0,&quot;effect&quot;:&quot;slide&quot;,&quot;loop&quot;:true,&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15,&quot;breakpoints&quot;:{&quot;1199&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15},&quot;991&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15},&quot;767&quot;:{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:15}},&quot;id&quot;:1}">
                                     <div class="tm-testi__list swiper-wrapper tm-testi-slider__items">


                                        <div class="tm-testi__item swiper-slide tm-testi-slider__item">
                                           <div class="tm-testi__inner">
                                              <blockquote>
                                                <div class="tm-testi-date">01.10.22</div>
                                                 <div class="tm-testi__item-body">
                                                    <p>
                                                    “ <span class="comments-widget-entry">Словами не могу передать восторг, заказывал торт сестре на день рождения, начинка шоколадная смороди</span>... ”
                                                    </p>
                                                    <footer>
                                                       <div class="tm-testi__item-avatar avatar wp-post-image">
                                                       <noscript><img alt=''  data-srcset='https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=84&#038;d=mm&#038;r=g 2x'  height='42' width='42' data-src='https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=42&#038;d=mm&#038;r=g' class='avatar avatar-42 photo lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' /><noscript><img alt='' src='https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=42&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=84&#038;d=mm&#038;r=g 2x' class='avatar avatar-42 photo' height='42' width='42' /></noscript><img alt="" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2042%2042%22%3E%3C/svg%3E" data-src="https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=42&amp;d=mm&amp;r=g" data-srcset="https://secure.gravatar.com/avatar/ce4f700afb8ab9dccc949f4c9db6638d?s=84&amp;d=mm&amp;r=g 2x" class="lazyload avatar avatar-42 photo" height="42" width="42">                                                       </div>
                                                       <span class="tm-testi__item-position">
                                                          Ярослав
                                                       </span>
                                                    </footer>
                                                 </div>
                                              </blockquote>
                                           </div>
                                        </div>

                                     </div>
                                     <div class="tm_pb_button_module_wrapper tm_pb_module" style="margin: 2em 0;">
                                        <a class="tm_pb_button tm_pb_custom_button_icon  tm_pb_button_2 tm_pb_module tm_pb_bg_layout_light tm_pb_icon_right" href="https://studiocake.kiev.ua/otzivi/">Читать все</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <!-- .tm_pb_cherry_testi -->
                         </div>
                         <!-- .tm_pb_column -->
                      </div>
                      <!-- .tm_pb_   -->
                   </div>
                </div>

              </article>
              <!-- #post-## -->
           </main>
           <!-- #main -->
        </div>
      <div class="content-home-page container-fluid page-section">
        <div class="col-sm-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>


<span aria-hidden="true" id="to_top_scrollup" class="dashicons dashicons-arrow-up-alt2" style="opacity: 0;">
<span class="screen-reader-text">Прокрутка вверх</span>
</span>
<noscript>
  <style>.lazyload{display:none;}</style>
</noscript>



<script data-noptimize="1">window.lazySizesConfig=window.lazySizesConfig||{};window.lazySizesConfig.loadMode=1;</script>

    <script type="text/javascript" id="lazysizes-js-before">
      window.lazySizesConfig = window.lazySizesConfig || {};
    </script>

    <script type="text/javascript" id="jquery-waitformedias-js-extra">
    /* <![CDATA[ */
      var loftloaderProWaitForMediaSettings = {"detectElement":"image","detectAutoplayVideo":""};
    /* ]]> */
    </script>

    <script type="text/javascript" id="loftloader-front-main-js-extra">
      var loftloaderPro = {"leavingProgressMax":"0.6","insiteTransitionShowAll":"","insiteTransitionURLExcluded":["https:\/\/studiocake.kiev.ua\/wp-admin\/","https:\/\/studiocake.kiev.ua\/logincake\/"],"showCloseBtnTime":"15000"};
    </script>
  
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
  </body>
</html>