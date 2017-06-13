<?php
/**
 * Posts module title template
 */
?>
<div class="tm-posts_title_group">
	<?php echo $this->html( $this->_var( 'super_title' ), '<h2 class="tm-posts_supertitle">%s</h2>' ); ?>
	<?php echo $this->html( $this->_var( 'title' ), '<h3 class="tm-posts_title">%s</h3>' ); ?>
	<?php echo $this->html( $this->_var( 'subtitle' ), '<h5 class="tm-posts_subtitle">%s</h5>' ); ?>
</div>