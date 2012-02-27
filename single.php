<?php get_header(); ?>
	<div id="main">
		<div id="content">
			<h1>CONTENT</h1>
			<?php
				// Query
				the_post();
				?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				<div>
				<?php the_content();?>
				</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<div id="both"></div>
<?php get_footer(); ?>