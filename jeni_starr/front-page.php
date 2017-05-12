<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jeni_starr
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="jumbotron">
				<div class="container">
				<!-- background-image -->
				<!-- slogan -->
					<h1>Love who you are<br />and<br />Live a plus size life</h1>
				</div>
			</div>

	<div class="email-section">
		<div class="container">
				<?php get_sidebar('sidebar-1'); ?>
		</div>
	</div>

	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<!-- Mindful Eating Program -->
					<div class="row">
						<h2>Mindful Eating</h2>
					</div>
					<!-- picture -->
					<div class="row">
						<img src="<?php bloginfo('template_directory'); ?> /assets/images/cutting-board-food3.jpg"/>
					</div>
					<!-- Learn More -->
					<div class="row">
						<a class="btn btn-default" href="#" role="button">Learn More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Walking Program -->
					<div class="row">
						<h2>Walking Program</h2>
					</div>
					<!-- picture -->
					<div class="row">
						<img src="<?php bloginfo('template_directory'); ?> /assets/images/walking-path3.jpg"/>
					</div>
					<!-- Learn More -->
					<div class="row">
						<a class="btn btn-default" href="#" role="button">Learn More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- Blog -->
					<div class="row">
						<h2>Latest Blog</h2>
					</div>
					<!-- picture -->
					<div class="row">
						<img src="<?php bloginfo('template_directory'); ?> /assets/images/typewriter_small.jpg"/>
					</div>
					<!-- Read More -->
					<div class="row">
						<a class="btn btn-default" href="#" role="button">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();