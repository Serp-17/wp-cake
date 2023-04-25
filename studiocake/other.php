<?php 
  /*
  Template Name: Other
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
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>