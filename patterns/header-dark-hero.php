<?php
/**
 * Title: Header dark with hero image
 * Slug: seance/header-dark-hero
 * Categories: header
 * Description: Header with large hero image on a dark block pattern
 * Keywords: header, media, hero
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 * 
 * @package seance
 * @since 1.0.0
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri("/assets/images/header-dark-hero.jpg")); ?>","id":1747,"dimRatio":90,"customGradient":"linear-gradient(180deg,rgba(14,14,15,0.67) 0%,rgb(15,15,16) 47%)","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-primary-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-bottom:0">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(14,14,15,0.67) 0%,rgb(15,15,16) 47%)"></span><img class="wp-block-cover__image-background wp-image-1747" alt="<?php echo esc_html_e('The Fox Sisters', 'seance'); ?>" src="<?php echo esc_url(get_theme_file_uri("/assets/images/header-dark-hero.jpg")); ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0px","right":"0px","left":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
            <div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0rem;padding-left:0px">
                <!-- wp:site-logo {"width":64,"shouldSyncIcon":true} /-->
                <!-- wp:navigation {"ref":1735,"overlayBackgroundColor":"foreground","overlayTextColor":"primary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dsmall, 1.25rem)","bottom":"var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dlarge, 8rem)"}}},"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
            <div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">
                <!-- wp:spacer {"width":"0px","style":{"layout":{"flexSize":"60px","selfStretch":"fixed"}}} -->
                <div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                <!-- wp:heading {"align":"wide","style":{"typography":{"fontSize":"clamp(3.25rem, 8vw, 6.25rem)","lineHeight":"1.15"}},"className":"has-text-color"} -->
                <h2 class="wp-block-heading alignwide has-text-color" style="font-size:clamp(3.25rem, 8vw, 6.25rem);line-height:1.15"><?php echo wp_kses_post(__('<em>Séance</em>: A Theme Born Out of Love and Death…', 'seance')); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:spacer {"width":"0px","style":{"layout":{"flexSize":"60px","selfStretch":"fixed"}}} -->
                <div style="height:100px;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->