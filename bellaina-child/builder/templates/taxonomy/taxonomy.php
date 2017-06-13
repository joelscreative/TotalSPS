<?php
/**
 * Template part for taxonomy module displaying
 */

	$delimiter = $this->_var( 'delimiter' );
	$super_title = $this->_var('super_title');
	$title = $this->_var('title');
	$subtitle = $this->_var('subtitle');
	$holder_inline_style = $this->_var('holder_inline_style');
	$html = '';

	if ( $super_title ) {
		$html .= '<h2>' . $this->_var('super_title') . '</h2>';
	}

	if ( $title ) {
		$html .= '<h3>' . $this->_var('title') . '</h3>';
	}

	if ( $subtitle ) {
		$html .= '<h5>' . $this->_var('subtitle') . '</h5>';
	}

	echo $html;
?>
<div class="row tm_pb_taxonomy__wrapper">
	<?php
		echo $this->_var('items');
	?>
</div>
