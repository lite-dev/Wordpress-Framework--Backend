			<div id="post_log">
			<?php global $multipage, $wp_query; ?>
			<?php if( is_category() ) : ?>
				<h2><?php single_cat_title(); ?></h2>
			<?php elseif( is_tag() ) : ?>
				<h2><?php single_tag_title; ?></h2>
			<?php elseif( is_author() ) : ?>
				<h2><?php the_author(); ?></h2>
			<?php elseif( is_date() ) : ?>
				<h2><?php the_date( 'F Y' ); ?></h2>
			<?php endif; ?>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> >
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h2>
				<span><?php the_category() ?></span>
				<span><?php the_author() ?></span>
				<span><?php the_time( 'F j, Y' ); ?></span>
				<p><?php the_content(); ?></p>
				<?php if( $multipage && is_singular() ) : ?>
					<div id="p_pagination"><?php wp_link_pages(); ?></div>
				<?php endif; ?>
			</article>
			<?php endwhile; ?>
			<?php else : ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
			<?php if( $wp_query->max_num_pages > 1 ) : ?>
			<div id="sp_pagination"><?php echo paginate_links(); ?></div>
			<?php endif; ?>
			</div>