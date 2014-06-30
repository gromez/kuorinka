<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kuorinka
 */
?>

		<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>
		
		</div><!-- .wrap -->
	</div><!-- #content -->
	
	<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<?php get_template_part( 'menu', 'social' ); // Loads the menu-social.php template. ?>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'kuorinka' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'kuorinka' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kuorinka' ), 'Kuorinka', '<a href="https://foxnet-themes.fi" rel="designer">Sami Keijonen</a>' ); ?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
