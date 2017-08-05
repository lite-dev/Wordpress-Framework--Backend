<?php echo paginate_links( array( 
	'base'		=>	esc_url( get_pagenum_link() ),
	'format'	=>	'/page/%#%' 
) ); ?>