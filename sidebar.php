		<div id="sidebar">
			<h1>SIDEBAR</h1>
			<div class="title">NAV</div>
			
			<?php
				// Query
				query_posts( $args );
				// Loop
				while ( have_posts() ) : the_post();?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				<?php
				endwhile;
				// Reset
				wp_reset_query();
			?>
		</div>