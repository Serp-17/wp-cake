<footer id="colophon" class="site-footer default" role="contentinfo">
   <div class="footer-area-wrap">
      <div class="container-fluid page-section">
         <section id="footer-area" class="footer-area widget-area footer-area--4-cols   ">
            <aside id="herbit_widget_about-3" class="col-xs-12 col-sm-12 col-md-6 col-lg-3  widget widget-about">
               <div class="widget-about__logo">
                  <a class="widget-about__logo-link" href="/">
                     <img src="<?php echo CFS()->get('logo_footer'); ?>" alt="StudioCake" class="widget-about__logo-img lazyload">
                  </a>
               </div>
               <div class="widget-about__tagline"></div>
               <div class="widget-about__content"><?php echo CFS()->get('test_after_logo'); ?><br><br>
               <div class="g-plusone" data-annotation="inline" data-width="300"></div></div>
            </aside>
            <aside id="nav_menu-5" class="col-xs-12 col-sm-12 col-md-6 col-lg-3  widget widget_nav_menu">
               <h6 class="widget-title">Menu</h6>
               <div class="menu-services-container">
                  <?php wp_nav_menu( array(
                     'theme_location' => 'footer',
                     'container'      => null,
                     'menu_class'     => 'menu',
                     'menu_id'        => 'menu-services'
                  ) ) ?>
                  
               </div>
            </aside>
            <aside id="herbit_contact_information_widget-3" class="col-xs-12 col-sm-12 col-md-6 col-lg-3  widget contact-information-widget">
               <h6 class="widget-title">Contact</h6>
               <ul class="contact-information-widget__inner">
                  <li class="contact-information__item ">
                     <?php echo CFS()->get('adress'); ?>
                  </li>
                  <li class="contact-information__item ">
                     <a href="tel:<?php echo CFS()->get('phone_number'); ?>">
                        <?php echo CFS()->get('phone_number'); ?>
                     </a>
                  </li>
                  <li class="contact-information__item ">
                     <a href="mailto:<?php echo CFS()->get('email'); ?>">
                        <?php echo CFS()->get('email'); ?>
                     </a>
                  </li>
                  <li class="contact-information__item ">
                     <?php echo CFS()->get('work_time'); ?>
                  </li>
                </ul>
            </aside>
            <aside class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
               <h6 class="widget-title">About me</h6>
               <div class="widget-about__content">
                  <?php echo CFS()->get('slogon'); ?>
               </div>
            </aside>
         </section>
      </div>
      <div class="footer-container">
         <div class="site-info container-fluid page-section">
            <div class="site-info-wrap">
               <div class="footer-copyright col-sm-3">2008-2022 © All rights reserved.</div>
               <div class="social-list col-sm-6 social-list--footer social-list--icon">
                  <ul id="social-list-2" class="social-list__items inline-list">
                     <?php if ( CFS()->get('facebook') ) : ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-212">
                           <a href="<?php echo CFS()->get('facebook'); ?>">
                              <span class="screen-reader-text">Facebook</span>
                           </a>
                        </li>
                     <?php endif; ?>
                     <?php if ( CFS()->get('instagram') ) : ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-214">
                           <a href="<?php echo CFS()->get('instagram'); ?>">
                              <span class="screen-reader-text">Instagram</span>
                           </a>
                        </li>
                     <?php endif; ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<script type="text/javascript" id="easy-modal-site-js-extra">
  var emodal_themes = [];
  emodal_themes = {"1":{"id":"1","theme_id":"1","overlay":{"background":{"color":"#0a0a0a","opacity":27}},"container":{"padding":30,"background":{"color":"#ffffff","opacity":100},"border":{"style":"none","color":"#000000","width":1,"radius":0},"boxshadow":{"inset":"no","horizontal":1,"vertical":1,"blur":100,"spread":0,"color":"#020202","opacity":23}},"close":{"text":"x","location":"topright","position":{"top":"0","left":"0","bottom":"0","right":"0"},"padding":8,"background":{"color":"#f96084","opacity":100},"font":{"color":"#ffffff","size":12,"family":"Sans-Serif"},"border":{"style":"none","color":"#ffffff","width":1,"radius":0},"boxshadow":{"inset":"no","horizontal":0,"vertical":0,"blur":0,"spread":0,"color":"#020202","opacity":23},"textshadow":{"horizontal":0,"vertical":0,"blur":0,"color":"#000000","opacity":23}},"title":{"font":{"color":"#000000","size":32,"family":"Sans-Serif"},"text":{"align":"left"},"textshadow":{"horizontal":0,"vertical":0,"blur":0,"color":"#020202","opacity":23}},"content":{"font":{"color":"#8c8c8c","family":"Sans-Serif"}}}};;
</script>
<div class="ballon-popup">
   <a href="https://studiocake.kiev.ua/aksessuary/shariki"><noscript>
      <img src="https://studiocake.kiev.ua/wp-content/webpc-passthru.php?src=https://studiocake.kiev.ua/wp-content/uploads/Ballon.png&nocache=1" alt=""></noscript>
      <img class=" lazyloaded" src="https://studiocake.kiev.ua/wp-content/webpc-passthru.php?src=https://studiocake.kiev.ua/wp-content/uploads/Ballon.png&amp;nocache=1" data-src="https://studiocake.kiev.ua/wp-content/webpc-passthru.php?src=https://studiocake.kiev.ua/wp-content/uploads/Ballon.png&amp;nocache=1" alt="">Добавьте<br> шарики
   </a>
</div>