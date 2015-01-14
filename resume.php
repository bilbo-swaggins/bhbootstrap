<?php
/*
Template Name: Resume
*/
?>

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
					<h2><span class="glyphicon glyphicon-map-marker"></span> Find Me</h2>
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

				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content">
							<?php the_content(); ?>

						</section> <!-- end article section -->

						<footer>

							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php comments_template(); ?>

					<?php endwhile; ?>

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

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
