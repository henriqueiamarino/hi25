<?php
/**
 * Title: Sidebar Author
 * Slug: hi25/sidebar-author
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"About"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"anchor":"Author"} -->
<div id="Author" class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"className":"no-underline","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03rem"}},"fontSize":"x-small"} -->
<h2 class="wp-block-heading no-underline has-x-small-font-size" style="letter-spacing:0.03rem;text-transform:uppercase"><?php esc_html_e('Meet Seneca', 'hi25');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Born in Corduba, at the edge of the Roman world, %1$sSeneca%2$s came to Rome as a boy and found philosophy early. Exile, power and illness taught him what he writes about: how to live well in the little time we have… %3$sMore%4$s.', 'hi25' ), '<strong>', '</strong>', '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Categories"},"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sWritings%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Category"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sNow%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"2.5vh","metadata":{"name":"2.5VH"}} -->
<div style="height:2.5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blogroll"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"},"anchor":"blogroll"} -->
<div id="blogroll" class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"className":"no-underline","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03rem"}},"fontSize":"x-small"} -->
<h2 class="wp-block-heading no-underline has-x-small-font-size" style="letter-spacing:0.03rem;text-transform:uppercase"><?php esc_html_e('Recommended Blogs', 'hi25');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Categories"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sLucilius%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sSeneca the Elder%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sLucan%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAttalus%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sSotion%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPapirius Fabianus%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sDemetrius the Cynic%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMusonius Rufus%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sZeno of Citium%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sChrysippus%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sPosidonius%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Link"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"top":{"width":"1px","style":"dotted"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:dotted;border-top-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"metadata":{"name":"Arrow"}} -->
<p><?php esc_html_e('→', 'hi25');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"no-underline"} -->
<p class="no-underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sEpicurus%2$s', 'hi25' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->