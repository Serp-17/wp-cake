<?php 
  /*
  Template Name: Photos
  */
?>


<?php get_header(); ?>
<div id="page" class="site">
    <div id="content" class="site-content">
        <div class="site-content_wrap container">
            <header class="entry-header">
                <h1 class="entry-title">
                    <?= get_the_title() ?>
                </h1>
            </header>
            <div class="wrapper single-page">
                <div class="psgal_wrap">
			        <div id="psgal_106_1" data-psgal_id="106_1" data-psgal_container_id="container_106_1" data-psgal_thumbnail_width="222" data-psgal_use_masonary="0" class="psgal-inline psgal gallery-columns-3 gallery-size-thumbnail use_masonry_ show_captions_1 photoswipe_showme" itemscope="" itemtype="http://schema.org/ImageGallery" style="position: relative; width: 1110px; height: 4665.66px;">
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
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>