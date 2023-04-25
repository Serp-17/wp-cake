<?php 
  /*
  Template Name: Toppings
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

				<div class="row nachinki-page">

					<?php
						$loop = CFS()->get('nachinkis');
						foreach ($loop as $row) {
						?>
							<div class="col-xs-12 col-md-6 col-lg-4">
								<h3 align="center">
									<?= $row['name'] ?>
								</h3>
								<p>
									<img class=" lazyloaded" src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>" width="264" height="263">
								</p>
								<div class="title-nachinki" style="margin-top: -20px;" align="left">
									<?php if ( $row['premium'] ) : ?>
										<span>PREMIUM начинка</span><br>
									<?php endif; ?>
									<?= $row['description'] ?>
								</div>
							</div>

						<?php
						}
					?>
				</div>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>