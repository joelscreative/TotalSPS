<?php
/**
 * Template for displaying standard post format item content
 */

$first_video = tm_get_first_video(); 
?>

<header class="entry-header">
	<h5 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h5>

	<?php echo $this->get_template_part( 'blog/meta-header.php' ); ?>

	<?php if ( $first_video ) : ?>
		<div class="tm_main_video_container">

			<?php if ( 'on' === $this->_var( 'show_categories' ) ) {
				echo get_the_category_list();
			} ?>

			<?php echo $first_video; ?>

		</div>
	<?php endif; ?>

	<?php if ( ! $first_video ) : ?>
		<?php if ( 'on' === $this->_var( 'show_categories' ) ) {
			echo get_the_category_list();
		} ?>
	<?php endif; ?>

</header>

<?php echo $this->get_post_content(); ?>

<footer class="entry-footer">
	<div class="row">
		<div class="col-xs-12 col-lg-8">
			<?php echo $this->get_template_part( 'blog/meta-footer.php' ); ?>
		</div>
		<div class="col-xs-12 col-lg-4 right-align">
			<?php echo $this->get_more_button(); ?>
		</div>
	</div>
</footer>