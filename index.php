<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<h1>CONTENT</h1>
			<?php
				// Query
				query_posts( $args );
				// Loop
				while ( have_posts() ) : the_post();
				the_title(); ?>
				<div><?php the_content();?></div>
				<?php
				endwhile;
				// Reset
				wp_reset_query();
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div id="both"></div>
<?php get_footer(); ?>