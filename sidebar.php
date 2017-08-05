		<sidebar>
			<?php if( is_active_sidebar( 'main_sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'main_sidebar' ); ?>
				<?php else : ?>			<?php endif; ?>
		</sidebar>