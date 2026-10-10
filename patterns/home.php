<?php
/**
 * Title: home
 * Slug: hi25/home
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"wide","backgroundColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-contrast-background-color has-background"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:spacer {"height":"2.5vh","metadata":{"name":"2.5VH"}} -->
<div style="height:2.5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog Sticky"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"anchor":"latest-posts"} -->
<div class="wp-block-group alignwide" id="latest-posts" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[]},"metadata":{"name":"QL Latest"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":{"topLeft":"4px","topRight":"4px"}}},"backgroundColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert has-contrast-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"1px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-bottom:0;flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","width":"","className":"is-hero","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"4px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"color":{"duotone":"var:preset|duotone|duo-orange"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"level":1,"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"x-large"} /-->

<!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}}} /-->

<!-- wp:post-excerpt {"moreText":"More","showMoreOnNewLine":false,"excerptLength":35,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Blog"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"anchor":"latest"} -->
<div class="wp-block-group alignwide" id="latest" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"parents":[]},"metadata":{"name":"QL Columns"},"align":"wide","className":"ql-stretch","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ql-stretch"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert" style="border-radius:8px;min-height:100%"><!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"large"} /-->

<!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}}} /-->

<!-- wp:post-excerpt {"moreText":"More","showMoreOnNewLine":false,"excerptLength":25,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"metadata":{"name":"QL More"},"className":"hover-invert","style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group hover-invert has-base-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;min-height:100%;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"metadata":{"name":"Plus"},"className":"no-underline","style":{"typography":{"lineHeight":"1","textAlign":"center"}},"fontSize":"display"} -->
<p class="has-text-align-center no-underline has-display-font-size" style="line-height:1"><a href="#"><?php esc_html_e('+', 'hi25');?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"5vh","metadata":{"name":"5VH"}} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Sticked Posts"},"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"},"anchor":"most-read"} -->
<div class="wp-block-group alignwide" id="most-read" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Section Title"},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"metadata":{"name":"Caput"},"style":{"typography":{"letterSpacing":"0rem","lineHeight":"1.5"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="letter-spacing:0rem;line-height:1.5"><?php esc_html_e('Most Read Stories', 'hi25');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|40","metadata":{"name":"S"}} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[]},"metadata":{"name":"QL Columns"},"align":"wide","className":"ql-stretch","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide ql-stretch"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"metadata":{"name":"QL Card"},"className":"hover-invert","style":{"border":{"radius":"8px"},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group hover-invert" style="border-radius:8px;min-height:100%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"metadata":{"name":"QL Wrapper"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"align":"wide","className":"no-underline","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} /-->

<!-- wp:group {"metadata":{"name":"Date and stats"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-date {"datetime":"2025-11-03T10:32:30.523Z","format":"M j, Y","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textAlign":"left"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"7.5vh","metadata":{"name":"5VH"}} -->
<div style="height:7.5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"hi25/readings"} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->