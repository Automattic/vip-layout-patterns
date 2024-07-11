<?php

return array(
    'title'      => __('Large Four', 'vip-layout'),
    'description' => __('Two columns, one large space on left, four rows on right.', 'vip-layout'),
    'blockTypes' => array('core/image'),
    'categories' => array('layout'),
    'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"80%","justifyContent":"center"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"66%","style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0;flex-basis:66%"><!-- wp:cover {"url":"http://localhost:8888/wp-content/uploads/2024/07/Screenshot-2024-07-06-at-1.56.24 PM.png","id":13,"dimRatio":10,"customOverlayColor":"#a18e89","focalPoint":{"x":0.5,"y":0.68},"contentPosition":"bottom center","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}},"heading":{"color":{"text":"var:preset|color|base","background":"var:preset|color|accent-3"}}}},"textColor":"base","layout":{"type":"constrained"},"fontSize":"medium"} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center has-base-color has-text-color has-link-color has-medium-font-size"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#a18e89"></span><img class="wp-block-cover__image-background wp-image-13" alt="" src="http://localhost:8888/wp-content/uploads/2024/07/Screenshot-2024-07-06-at-1.56.24 PM.png" style="object-position:50% 68%" data-object-fit="cover" data-object-position="50% 68%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size">Happy Caturday</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:pullquote -->
<figure class="wp-block-pullquote"><blockquote><p>Muh muh muh</p></blockquote></figure>
<!-- /wp:pullquote --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
