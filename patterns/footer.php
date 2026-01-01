<?php
/**
 * Title: footer
 * Slug: fngl-lw/footer
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}},"backgroundColor":"fngllw-background-footer","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-fngllw-background-footer-background-color has-background" style="padding-top:80px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|fngllw-zwart"}}}},"textColor":"fngllw-zwart"} -->
<p class="has-text-align-center has-fngllw-zwart-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Proudly Powered by %1$sWordPress%2$s', 'fngl-lw' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->