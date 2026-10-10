<?php
/**
 * Title: Readings with Covers
 * Slug: hi25/readings-with-covers
 * Categories: media
 * Description: A titled row of four book covers, each with its title and author set on the cover.
 */
?>
<!-- wp:group {"metadata":{"name":"Readings with Covers"},"align":"wide","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"},"anchor":"books-in-covers"} -->
<div class="wp-block-group alignwide" id="books-in-covers" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Title Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"style":{"typography":{"letterSpacing":"0rem","lineHeight":"1.5"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0rem;line-height:1.5"><?php esc_html_e('Readings', 'hi25');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'I linger among a few great minds and let them nourish me. %1$sMore%2$s.', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0.67rem","width":"0px","metadata":{"name":"XS"},"style":{"layout":[]}} -->
<div style="height:0.67rem;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356318.jpg","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"large","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"color":{"duotone":"var:preset|duotone|duo-golden"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356318.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Book Info Label"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-color has-base-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center","lineHeight":"1.2"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Phaedo', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Plato, c. 360 BC', 'hi25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356322.jpg","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"sizeSlug":"large","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"color":{"duotone":"var:preset|duotone|duo-pink"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356322.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Book Info Label"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-color has-base-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center","lineHeight":"1.2"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Letter to Menoeceus', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Epicurus, c. 300 BC', 'hi25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-9851090.jpg","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","sizeSlug":"large","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"color":{"duotone":"var:preset|duotone|duo-teal"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-9851090.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Book Info Label"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-color has-base-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center","lineHeight":"1.2"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Aeneid', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Virgil, 19 BC', 'hi25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356338.jpg","dimRatio":0,"isUserOverlayColor":true,"contentPosition":"bottom center","isDark":false,"sizeSlug":"large","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}},"color":{"duotone":"var:preset|duotone|duo-green"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/marbled-paper-2356338.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Book Info Label"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"backgroundColor":"base","textColor":"primary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-primary-color has-base-background-color has-text-color has-background has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textAlign":"center","lineHeight":"1.2"}},"fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Metamorphoses', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php esc_html_e('Ovid, 8 AD', 'hi25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->