<?php
/**
 * Template for displaying standard post format item content
 */
?>
<header class="entry-header">
	<h5 class="entry-title"><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a></h5>

	<?php echo $this->get_template_part( 'blog/meta-header.php' ); ?>

	<figure class="post-slider">

		<?php if ( 'on' === $this->_var( 'show_categories' ) ) {
			echo get_the_category_list();
		} ?>

		<?php tm_pb_gallery_images( 'slider' ); ?>

	</figure>

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