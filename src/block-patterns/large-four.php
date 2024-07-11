<?php

return [
    'title'      => __('Large Four', 'vip-layout'),
    'description' => __('Two columns, one large space on left, four rows on right.', 'vip-layout'),
    'blockTypes' => [
        'core/image',
        'vip-cb/context-container',
    ],
    'categories' => ['layout'],
    'content'    => '
        <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained","justifyContent":"center","contentSize":"800px"}} -->
        <div class="wp-block-group" style="min-height:0px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|10"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"66.66%","layout":{"type":"default"}} -->
        <div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:cover {"url":"' . plugins_url('assets/lighthouse.jpg', __FILE__) . '","dimRatio":20,"minHeight":501,"minHeightUnit":"px","contentPosition":"bottom center","style":{"elements":{"heading":{"color":{"text":"var:preset|color|contrast","background":"var:preset|color|base"}},"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"width":"2px"}},"textColor":"contrast","className":"is-style-full-link"} -->
        <div class="wp-block-cover has-custom-content-position is-position-bottom-center is-style-full-link has-contrast-color has-text-color has-link-color" style="border-width:2px;min-height:501px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="' . plugins_url('assets/lighthouse.jpg', __FILE__) . '" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
        <h2 class="wp-block-heading has-text-align-center has-large-font-size"><a href="https://wordpress.com" data-type="page">Light the Dark</a></h2>
        <!-- /wp:heading --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
        <div class="wp-block-column" style="padding-top:0;padding-bottom:0;flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"2px"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="' . plugins_url('assets/market.jpg', __FILE__) . '" alt="" style="border-width:2px;aspect-ratio:16/9;object-fit:cover"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"2px"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="' . plugins_url('assets/alley.jpg', __FILE__) . '" alt="" style="border-width:2px;aspect-ratio:16/9;object-fit:cover"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"2px"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="' . plugins_url('assets/yellowjar.jpg', __FILE__) . '" alt="" style="border-width:2px;aspect-ratio:16/9;object-fit:cover"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"2px"}}} -->
        <figure class="wp-block-image size-full has-custom-border"><img src="' . plugins_url('assets/oranges.jpg', __FILE__) . '" alt="" style="border-width:2px;aspect-ratio:16/9;object-fit:cover"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
    ',
];
