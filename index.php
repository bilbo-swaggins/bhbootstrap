<?php get_header(); ?>

		<div class="row  main">
			<div class="col-md-4 col-xs-6">
				<p>
					<img src="<?php bloginfo('template_directory'); ?>/images/me.png" alt="Eric Willis" class="img-responsive">
				</p>
			</div>
			<div class="col-md-4 col-xs-6 logo-thumb">
				<p>
					<img src="<?php bloginfo('template_directory'); ?>/images/logo-thumb.png" alt="Eric Willis" class="img-responsive">
				</div>
				<div class="col-md-4 col-xs-12 contact">
					<h2><span class="fa fa-comment"></span> Contact Me</h2>
					<ul>
						<li><a href="http://www.formget.com/app/form/share/KvsD-105192" class="fa fa-envelope fa-2x" target="_blank"></a></li>
						<li><a href="http://www.linkedin.com/in/ewillis182/" class="fa fa-linkedin fa-2x" target="_blank"></a></li>
						<li><a href="https://github.com/bilbo-swaggins" class="fa fa-github fa-2x" target="_blank"></a></li>

					</ul>
				</div>
				<div class="col-xs-12 contact-print">
					<h2><span class="glyphicon glyphicon-map-marker"></span> Find Me</h2>
					<ul>
						<li><span class="glyphicon glyphicon-earphone"></span> 574-370-8064</li>
						<li><span class="glyphicon glyphicon-envelope"></span> ewillis182@gmail.com</li>
					</ul>

				</div>
			</div>


			<div id="content" class="clearfix row">

				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>

							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>

							<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <span class="fa fa-calendar-o"></span> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <span class="fa fa-user"></span> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <span class="fa fa-folder"></span> <?php the_category(', '); ?>.</p>

						</header> <!-- end article header -->

						<section class="post_content clearfix">
						<p><?php the_excerpt(); ?></p>
						</section> <!-- end article section -->

						<footer>

							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', ''); ?></p>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php endwhile; ?>

					<?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>

						<?php wp_bootstrap_page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
							</ul>
						</nav>
					<?php } ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
