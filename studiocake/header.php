<!DOCTYPE html>
<html lang="ru" class="">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
    <title>
      <?php
        if (is_404()) {
          echo 'Error';
        } else {
          the_title();
        }
      ?>
    </title>
    <link rel="stylesheet" id="herbit-theme-style-css" href="https://studiocake.kiev.ua/wp-content/themes/herbit/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="stylesheet" id="loftloader-style-css" href="https://studiocake.kiev.ua/wp-content/plugins/loftloader-pro/assets/css/loftloader.min.css?ver=2020081201" type="text/css" media="all">

    <link rel="dns-prefetch" href="//use.fontawesome.com">

    <link rel="stylesheet" id="easy-modal-site-css" href="https://studiocake.kiev.ua/wp-content/plugins/easy-modal/assets/styles/easy-modal-site.css?ver=0.1" type="text/css" media="all">
    <link rel="stylesheet" id="wp-block-library-css" href="https://studiocake.kiev.ua/wp-includes/css/dist/block-library/style.min.css?ver=6.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="https://studiocake.kiev.ua/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.6.3" type="text/css" media="all">
    <link rel="stylesheet" id="cookie-law-info-css" href="https://studiocake.kiev.ua/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-public.css?ver=3.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="cookie-law-info-gdpr-css" href="https://studiocake.kiev.ua/wp-content/plugins/cookie-law-info/legacy/public/css/cookie-law-info-gdpr.css?ver=3.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="walcf7-datepicker-css-css" href="https://studiocake.kiev.ua/wp-content/plugins/date-time-picker-for-contact-form-7/assets/css/jquery.datetimepicker.min.css?ver=1.0.0" type="text/css" media="all">
    <link rel="stylesheet" id="photoswipe-core-css-css" href="https://studiocake.kiev.ua/wp-content/plugins/photoswipe-masonry/photoswipe-dist/photoswipe.css?ver=6.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="pswp-skin-css" href="https://studiocake.kiev.ua/wp-content/plugins/photoswipe-masonry/photoswipe-dist/default-skin/default-skin.css?ver=6.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="https://studiocake.kiev.ua/wp-includes/css/dashicons.min.css?ver=6.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="to-top-css" href="https://studiocake.kiev.ua/wp-content/plugins/to-top/public/css/to-top-public.css?ver=2.5.1" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-official-css" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" type="text/css" media="all" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" id="font-awesome-official-v4shim-css" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css" type="text/css" media="all" integrity="sha384-WCuYjm/u5NsK4s/NfnJeHuMj6zzN2HFyjhBu/SnZJj7eZ6+ds4zqIM3wYgL59Clf" crossorigin="anonymous">
    <style id="font-awesome-official-v4shim-inline-css" type="text/css">
      @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.eot"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.woff2") format("woff2"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.woff") format("woff"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.ttf") format("truetype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-brands-400.svg#fontawesome") format("svg");
      }

      @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.eot"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.woff2") format("woff2"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.woff") format("woff"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.ttf") format("truetype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-solid-900.svg#fontawesome") format("svg");
      }

      @font-face {
      font-family: "FontAwesome";
      font-display: block;
      src: url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.eot"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.woff2") format("woff2"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.woff") format("woff"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.ttf") format("truetype"),
          url("https://use.fontawesome.com/releases/v5.15.1/webfonts/fa-regular-400.svg#fontawesome") format("svg");
      unicode-range: U+F004-F005,U+F007,U+F017,U+F022,U+F024,U+F02E,U+F03E,U+F044,U+F057-F059,U+F06E,U+F070,U+F075,U+F07B-F07C,U+F080,U+F086,U+F089,U+F094,U+F09D,U+F0A0,U+F0A4-F0A7,U+F0C5,U+F0C7-F0C8,U+F0E0,U+F0EB,U+F0F3,U+F0F8,U+F0FE,U+F111,U+F118-F11A,U+F11C,U+F133,U+F144,U+F146,U+F14A,U+F14D-F14E,U+F150-F152,U+F15B-F15C,U+F164-F165,U+F185-F186,U+F191-F192,U+F1AD,U+F1C1-F1C9,U+F1CD,U+F1D8,U+F1E3,U+F1EA,U+F1F6,U+F1F9,U+F20A,U+F247-F249,U+F24D,U+F254-F25B,U+F25D,U+F267,U+F271-F274,U+F279,U+F28B,U+F28D,U+F2B5-F2B6,U+F2B9,U+F2BB,U+F2BD,U+F2C1-F2C2,U+F2D0,U+F2D2,U+F2DC,U+F2ED,U+F328,U+F358-F35B,U+F3A5,U+F3D1,U+F410,U+F4AD;
      }
    </style>

    <script type="text/javascript" id="cookie-law-info-js-extra">
      /* <![CDATA[ */
      var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"non_necessary_cookies":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","strictlyEnabled":["necessary","obligatoire"],"ccpaType":"gdpr","js_blocking":"1","custom_integration":"","triggerDomRefresh":"","secure_cookies":""};
      var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#FFF","border":"#b1a6a6c2","border_on":"","button_1_button_colour":"#ff5e89","button_1_button_hover":"#cc4b6e","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":"","button_2_hidebar":"","button_3_button_colour":"#3566bb","button_3_button_hover":"#2a5296","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#333333","button_4_as_button":"","button_7_button_colour":"#61a229","button_7_button_hover":"#4e8221","button_7_link_colour":"#fff","button_7_as_button":"1","button_7_new_win":"","font_family":"inherit","header_fix":"","notify_animate_hide":"1","notify_animate_show":"1","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"","accept_close_reload":"","reject_close_reload":"","showagain_tab":"","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#333333","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
      var log_object = {"ajax_url":"https:\/\/studiocake.kiev.ua\/wp-admin\/admin-ajax.php"};
      /* ]]> */
    </script>
    <script type="text/javascript" id="to-top-js-extra">
      /* <![CDATA[ */
      var to_top_options = {"scroll_offset":"100","icon_opacity":"50","style":"icon","icon_type":"dashicons-arrow-up-alt2","icon_color":"#ffffff","icon_bg_color":"#ff658a","icon_size":"32","border_radius":"50","image":"https:\/\/studiocake.kiev.ua\/wp-content\/plugins\/to-top\/admin\/images\/default.png","image_width":"65","image_alt":"","location":"bottom-left","margin_x":"20","margin_y":"20","show_on_admin":"0","enable_autohide":"0","autohide_time":"2","enable_hide_small_device":"0","small_device_max_width":"640","reset":"0"};
      /* ]]> */
    </script>

    <link rel="https://api.w.org/" href="https://studiocake.kiev.ua/wp-json/"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://studiocake.kiev.ua/xmlrpc.php?rsd">
    <script>
      document.documentElement.className = document.documentElement.className.replace( 'no-js', 'js' );
    </script>
    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://studiocake.kiev.ua",
                    "name": "Home"
                }
            }
        ]
      }
    </script>
    <noscript><style>#loftloader-wrapper { display: none !important; }</style></noscript>
    <script type="text/javascript">
      var loftloaderProProgressInit = 0.6, init = 0, percentageStyles = '';
      function loftloaderProInsertStyle( styleID, styleContent ) {
          var style = document.createElement( 'style' );
          style.id = styleID;
          style.innerText = styleContent
          document.head.appendChild( style );
      }
      if ( window.sessionStorage.getItem( 'loftloader-pro-smooth-transition' ) && ( 'on' === window.sessionStorage.getItem( 'loftloader-pro-smooth-transition' ) ) ) {
          var onceStyles = '', initPercentage = loftloaderProProgressInit * 100;
          init = loftloaderProProgressInit; }
      percentageStyles = '#loftloader-wrapper span.percentage:after, #loftloader-wrapper .load-count:after { content: "' + ( init * 100 ) + '%"; }';
      percentageStyles += ' #loftloader-wrapper .load-count { width: ' + ( init * 100 ) + '%; }';
      loftloaderProInsertStyle( 'loftloader-pro-progress-bar-style', '#loftloader-wrapper span.bar span.load { transform: scaleX(' + init + '); }' );
      loftloaderProInsertStyle( 'loftloader-pro-progress-percentage-style', percentageStyles );
    </script>
    <style id="loftloader-pro-progress-bar-style">#loftloader-wrapper span.bar span.load { transform: scaleX(0); }</style>
    <style id="loftloader-pro-progress-percentage-style">#loftloader-wrapper span.percentage:after, #loftloader-wrapper .load-count:after { content: "0%"; } #loftloader-wrapper .load-count { width: 0%; }</style>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function(event) {
        gtag('event', 'send', {
          'event_category': 'форма',
          'event_action': 'отправить'
        });
      }, false);
    </script>
    <script type="module" src="chrome-extension://jdkknkkbebbapilgoeccciglkfbmbnfm/hook.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('loftloader-pro-enabled loaded loftloader-loaded'); ?>>
    <div id="loftloader-wrapper" class="end-split-v split-diagonally loftloader-imgfading">
        <div class="loader-bg" style="background: none;"></div>
        <div class="loader-inner">
            <div id="loader">
                <img data-no-lazy="1" class="skip-lazy" alt="loader image" src="https://studiocake.kiev.ua/wp-content/uploads/cake_logo.svg">
            </div>
        </div>
        <div class="loader-close-button" style="">
            <span class="screen-reader-text">Close</span>
        </div>
    </div>
    <div class="block-orientation" style="display: none;">
      <p><noscript><img  data-src='https://studiocake.kiev.ua/wp-content/themes/herbit/images/orientation.jpg' class='lazyload' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=='><noscript><img src="https://studiocake.kiev.ua/wp-content/themes/herbit/images/orientation.jpg"></noscript><img class="lazyload" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E" data-src="https://studiocake.kiev.ua/wp-content/themes/herbit/images/orientation.jpg"></p>
      <p>поверните устройство</p>
    </div>

  <button class="main-menu-toggle menu-toggle" aria-controls="main-menu" aria-expanded="false" id="toggler">
    <span class="menu-toggle-box">
      <span class="menu-toggle-inner"></span>
    </span>
  </button>

  <div id="box">
    <div class="menu-primary-container">
      <?php wp_nav_menu( array(
        'theme_location' => 'top',
        'container'      => null,
        'menu_class'     => 'menu',
        'menu_id'        => 'menu-primary-1'
      ) ) ?>
    </div>
  </div>

  <header class="header-page">
    <div class="container-fluid page-section">
      <div class="col-sm-3">        
        <a class="site-logo__link" href="<?= get_home_url() ?>" rel="home">
          <?php the_custom_logo(); ?>
        </a>
      </div>
      <div class="col-sm-5 navigation">
        <div class="menu-primary-container">
          <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'container'      => null,
            'menu_class'     => 'menu',
            'menu_id'        => 'menu-primary-1'
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
          <?php echo CFS()->get('phone_number'); ?>
        </a>
      </div>
    </div>
  </header>
