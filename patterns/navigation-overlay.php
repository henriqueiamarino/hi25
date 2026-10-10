<?php
/**
 * Title: navigation-overlay
 * Slug: hi25/navigation-overlay
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Navigation Overlay"},"style":{"dimensions":{"minHeight":"100vh"},"elements":{"link":{"color":{"text":"var:preset|color|quaternary"},":hover":{"color":{"text":"var:preset|color|base"}}}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"primary","textColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-quaternary-color has-primary-background-color has-text-color has-background has-link-color" style="min-height:100vh;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Overlay Close Wrapper"},"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:navigation-overlay-close {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"white","fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"display","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:400"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sHenrique Iamarino%2$s is a theme designer building WordPress at Automattic, from Milan, Italia.', 'hi25' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('He writes about his readings and experiences, including WordPress themes and football. Explore at your will and drop him a line; he’d love that.', 'hi25');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"portrait-tilt","style":{"border":{"radius":{"topLeft":"5px","topRight":"5px","bottomLeft":"5px","bottomRight":"5px"}}}} -->
<figure class="wp-block-image size-large has-custom-border portrait-tilt"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cover-cormayer.png" alt="<?php esc_attr_e('Henrique Iamarino in the snow at Courmayeur', 'hi25');?>" style="border-top-left-radius:5px;border-top-right-radius:5px;border-bottom-left-radius:5px;border-bottom-right-radius:5px;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->