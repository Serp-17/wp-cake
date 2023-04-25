<?php 
  /*
  Template Name: Cakes
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
                <div class="posts-list posts-list--grid-3-cols content-excerpt fullwidth card-deck no-sidebars-before">
                    <?php
                        $posts = get_posts([
                            'numberposts' => -1,
                            'category_name' => CFS()->get('category'),
                            'orderby' => 'title',
                            'order' => 'ASC',
                            'post_type' => 'post',
                            'suppres_filter' => true
                        ]);
                        foreach($posts as $post) {
                            setup_postdata( $post );
                            ?>
                            <article id="post-172" class="col-xs-6 posts-list__item card post-172 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-asthma tag-gastrointestinal has-thumb">
                                <div class="post-list__item-content">
                                    <figure class="post-thumbnail">
                                        <a
                                            href="<?php echo get_permalink(); ?>"
                                            class="post-thumbnail__link post-thumbnail--fullwidth"
                                            style="background: url(https://studiocake.kiev.ua/wp-content/webpc-passthru.php?src=https://studiocake.kiev.ua/wp-content/uploads/tort-cyfra-9-min.png&amp;nocache=1) center;">
                                            <div class="code"><?php echo CFS()->get('code'); ?></div>
                                        </a>
                                    </figure>
                                    <header class="entry-header">
                                        <h5>
                                            <a href="<?php echo get_permalink(); ?>" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h5>
                                    </header>
                                    <div class="entry-meta" style="text-align: center">
                                        <span class="post__date">
                                            <a href="<?php echo get_permalink(); ?>" class="post__date-link" style="display: inline-block">
                                                <time>
                                                    Оформить заказ 
                                                </time>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>