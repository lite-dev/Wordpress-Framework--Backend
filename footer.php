		<footer id="f_main">
			<div id="footer_columns">
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div id="legal">
				<?php if( has_nav_menu( 'footer_menu' ) ) : ?>
					<nav id="nav_footer"><?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?></nav>
			<?php endif; ?>
			<span>&copy;&nbsp;<?php echo date('Y') . '&nbsp;'; echo bloginfo( 'name' ) . '. All Rights Reserved.'; ?></span>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>