<?php 
/**
 * Builds the correct amount of columns based on the theme options.
 *
 * @package WordPress-960
 * @author Michael Enger <mike@thelonelycoder.com>
 *
 * @param string $loop (optional) Which loop to get the contents for
 */

if ( !function_exists( 'wp960_get_columns' ) ) {
	function wp960_get_columns( $loop = 'index' ) {
		$options = get_option( 'wp960_theme_options' );
		$sidebars = ! empty( $options['sidebars'] ) ? $options['sidebars'] : 'right';
		$grid = $class = 0;
		
		// Left sidebar
		if ( 'left' === $sidebars or 'both' === $sidebars ) :
			$grid = 'both' === $sidebars ? 6 : 8;
			?>
			<aside class="grid_<?php echo $grid; ?> alpha">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) { _e( 'Left Sidebar', 'wp960' ); } ?>
			</aside>
		<?php endif;
		
		// Main content
		switch ( $sidebars ) {
			case 'left':
				$grid = 16;
				$class = 'omega';
				break;
			case 'right':
				$grid = 16;
				$class = 'alpha';
				break;
			case 'both':
				$grid = 12;
				$class = '';
				break;
			case 'none':
			default:
				$grid = 24;
				$class = 'alpha omega';
				break;
		}
		?>
		<div id="wp960-blog-content" class="<?php printf( 'grid_%d %s', $grid, $class ); ?>">
			<?php
			get_template_part( 'loop', $loop );
			get_template_part( 'pagination', $loop );
			?>
		</div>
		<?php
		
		// Right Sidebar
		if ( 'right' === $sidebars or 'both' === $sidebars ) :
			$grid = 'both' === $sidebars ? 6 : 8; ?>
		<aside id="sidebar-blog" class="grid_<?php echo $grid; ?> omega">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) { _e( 'Right Sidebar', 'wp960' ); } ?>
		</aside>
		<?php endif; ?>
		<div class="clear"></div>
		<?php
	}
}
