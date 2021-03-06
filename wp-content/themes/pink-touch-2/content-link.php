<?php
/**
 * @package Pink Touch 2
 */

// Let's get all the post content
$link_content = $post->post_content;

// And let's find the first url in the post content
$link_url = pinktouch_url_grabber();
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="date">
		<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'pinktouch' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
			<?php if ( ! is_singular() && is_sticky() ) : ?>
				<p><b><?php _e( 'Featured', 'pinktouch' ); ?></b></p>
			<?php else : ?>
				<p><span class="day"><?php the_time( 'd' ); ?></span><?php the_time( 'M / Y' ); ?></p>
			<?php endif; ?>
		</a>
	</div>

	<div class="content">
		<?php
			if ( ! empty( $link_url ) ) : // Let's make the title a link if there's a link in this link post
				the_title( '<h1 class="entry-title link"><a href="' . esc_url( $link_url ) . '">', '</a></h1>' );
			else :
				the_title( '<h1 class="entry-title">', '</h1>' );
			endif;

			// Sometimes links need descriptions and sometimes they don't ...

			// Let's compare the length of the first url with the length of the post content.
			// If they're one and the same we don't really need to show the post content BECAUSE ...
			// that's just a url and we're already using that url as a href for the title link above BUT ...
			// if they're NOT the same I think we should show that content.
			if ( strlen( $link_url ) != strlen( $link_content ) ) :

				// Let's make any bare URL a clickable link, too.
				add_filter( 'the_content', 'make_clickable' );
		?>

		<div class="entry-content">
			<?php
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'pinktouch' ) );
				wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'pinktouch' ), 'after' => '</div>' ) );
				if ( get_the_author_meta( 'description' ) && is_singular() ) pinktouch_author_info();
			?>
		</div><!-- .entry-content -->

		<?php endif; ?>
	</div><!-- .content -->

	<?php pinktouch_post_data(); ?>
</div><!-- /.post.text -->
