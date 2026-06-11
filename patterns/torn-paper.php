<?php
/**
 * Title: Torn Paper Section
 * Slug: sign-of-the-dove/torn-paper
 * Categories: featured
 */
?>
<!-- wp:group {"className":"torn-paper-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group torn-paper-wrapper">
    <!-- wp:image {"sizeSlug":"full","className":"torn-edge"} -->
    <figure class="wp-block-image size-full torn-edge"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/torn-edge-placeholder.png" alt="" /></figure>
    <!-- /wp:image -->

    <!-- wp:group {"className":"content-area","layout":{"type":"constrained"}} -->
    <div class="wp-block-group content-area">
        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading">Your Section Title</h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Your content goes here.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->