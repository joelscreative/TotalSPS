<?php
/**
 * Template part for displaying carousel item slides
 */
?>
<!-- Slide-->
<div class="swiper-slide">
	<div class="entry-image">
		<?php echo $this->_var( 'image' ); ?>
		<?php echo $this->_var( 'category' ); ?>
	</div>
	<header class="entry-header">
		<div class="entry-meta small">
			<?php echo $this->_var( 'author' ); ?>
			<?php echo $this->_var( 'date' ); ?>
		</div>

		<?php echo $this->_var( 'post_title' ); ?>
	</header>
	<article class="entry-content">
		<?php echo $this->_var( 'excerpt' ); ?>

		<div class="entry-meta small">
			<?php echo $this->_var( 'count' ); ?>
			<?php echo $this->_var( 'tag' ); ?>
		</div>
	</article>
	<footer class="entry-footer">
		<?php echo $this->_var( 'more_button' ); ?>
	</footer>
</div>
