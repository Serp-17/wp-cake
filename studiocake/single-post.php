<?php get_header(); ?>
<div id="page" class="site">
    <div id="content" class="site-content">
        <div class="site-content_wrap container">
            <header class="entry-header">
                <h1 class="entry-title" style="text-align:center" class="entry-title" title="<?= get_the_title() ?>">
                    <?= get_the_title() ?>
                    <span><?php echo CFS()->get('code'); ?></span>
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