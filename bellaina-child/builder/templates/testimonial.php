<?php
/**
 * Template part for Testimonial module displaying
 */
?>
<div class="tm_pb_testimonial_description">
	<div class="tm_pb_testimonial_description_inner">
		<?php echo $this->shortcode_content; ?>

		<div class="tm_pb_testimonial_meta">
			<?php echo $this->_var( 'portrait_image' ); ?>

			<div class="tm_pb_testimonial_details_wrap">
				<div class="tm_pb_testimonial_author">
					<?php echo $this->_var( 'author' ); ?>
				</div>
				<?php if ( $this->_var( 'company_name' ) || $this->_var( 'job_title' ) || $this->_var( 'testi_date' ) ) { ?>
					<div class="tm_pb_testimonial_details">
						<?php
							echo $this->_var( 'job_title' );
							if ( $this->_var( 'company_name' ) ) {
								printf( ', %s', $this->_var( 'company_name' ) );
							}
							if ( $this->_var( 'testi_date' ) ) {
								printf( ' - %s', $this->_var( 'testi_date' ) );
							} 
						?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div><!-- .tm_pb_testimonial_description_inner -->
</div><!-- .tm_pb_testimonial_description -->