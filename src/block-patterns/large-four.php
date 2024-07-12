<?php

return [
    'title'      => __('Large Four', 'vip-layout'),
    'description' => __('Two columns, one large space on left, four rows on right.', 'vip-layout'),
    'categories' => ['layout'],
    'keywords' => ['large four', 'large', 'four'],
    'viewportWidth' => 960,
    'content'    => '
        <!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"960px"}} -->
        <div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|10"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"66.66%","style":{"border":{"width":"2px"},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-column" style="border-width:2px;padding-right:0;padding-left:0;flex-basis:66.66%"><!-- wp:cover {"url":"' . plugins_url('assets/lighthouse.jpg', __FILE__) . '","alt":"A Lighthouse shining out against a dark night","dimRatio":20,"focalPoint":{"x":0.5,"y":0.5},"minHeight":563,"minHeightUnit":"px","contentPosition":"bottom center","style":{"elements":{"heading":{"color":{"text":"var:preset|color|contrast","background":"var:preset|color|base"}},"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"2px"}},"textColor":"contrast","className":"is-style-full-link"} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-full-link has-contrast-color has-text-color has-link-color" style="border-width:2px;min-height:563px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="A Lighthouse shining out against a dark night" src="' . plugins_url('assets/lighthouse.jpg', __FILE__) . '" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
        <h2 class="wp-block-heading has-text-align-center has-large-font-size"><a href="https://wordpress.com" data-type="page">Light the Dark</a></h2>
        <!-- /wp:heading --></div></div>
        <!-- /wp:cover -->

        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
        <p class="has-text-align-left" style="margin-right:var(--wp--preset--spacing--10);margin-left:var(--wp--preset--spacing--10)">Perched on the rugged edge where land meets sea, the ancient Whitford Lighthouse has been a beacon of hope for sailors through countless tempests and a silent sentinel for the tranquil village of Seabury. After decades of disuse and on the brink of being swallowed by darkness, a passionate community effort is reigniting its powerful lamp, promising renewed safety for seafarers and revitalizing the heart of a coastal legacy.</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
        <div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-width:2px"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
        <figure class="wp-block-image size-full"><a href="https://wpvip.com"><img src="' . plugins_url('assets/market.jpg', __FILE__) . '" alt="A man arranging vegatables at market" style="aspect-ratio:16/9;object-fit:cover"/></a></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"border":{"width":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-width:2px;min-height:0px"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
        <figure class="wp-block-image size-full"><a href="https://wpvip.com"><img src="' . plugins_url('assets/alley.jpg', __FILE__) . '" alt="An overhead view of a person walking down a sidewalk" style="aspect-ratio:16/9;object-fit:cover"/></a></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-width:2px"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
        <figure class="wp-block-image size-full"><a href="https://wpvip.com"><img src="' . plugins_url('assets/yellowjar.jpg', __FILE__) . '" alt="A jar of yellow buttons that say &quot;You are the bees knees&quot;" style="aspect-ratio:16/9;object-fit:cover"/></a></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"border":{"width":"2px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-width:2px"><!-- wp:image {"lightbox":{"enabled":false},"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
        <figure class="wp-block-image size-full"><a href="https://wpvip.com"><img src="' . plugins_url('assets/oranges.jpg', __FILE__) . '" alt="Three oranges on a vine on a white surface" style="aspect-ratio:16/9;object-fit:cover"/></a></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
    ',
];
