<?php 
$_background_color = ( get_sub_field( '_fullwidth_featured_product_background_color' ) ) ? get_sub_field( '_fullwidth_featured_product_background_color' ) : "#ffffff";
$_img_column_size  = ( get_sub_field( '_fullwidth_featured_product_textimage_split_ratio' ) ) ? ( get_sub_field( '_fullwidth_featured_product_textimage_split_ratio' ) ) : 6;
$_text_colum_size  = 12 - intval( $_img_column_size );
$section_id        = ( get_sub_field( '_fullwidth_featured_product_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_fullwidth_featured_product_sectionid' ) ) : '';
?>

<section <?php echo $section_id; ?> class="full-block-description-wrapper white-text" style="background-color: <?php echo $_background_color; ?>;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-<?php echo $_img_column_size; ?>">
                <div class="image-wrap">
                    <?php if( $_graphic_img = get_sub_field( '_fullwidth_featured_product_graphic_img' ) ): ?>
                        <div class="graphic-image">
                            <?php echo wp_get_attachment_image( $_graphic_img, 'full', false, '' ); ?>
                        </div><!--graphic-image-->
                    <?php 
                    endif; 

                    if( $_product_img = get_sub_field( '_fullwidth_featured_product_img' ) ):
                        echo wp_get_attachment_image( $_product_img, 'full', false, '' );
                    endif;
                    ?>
                </div><!--image-wrap-->
            </div>
            <div class="col-md-<?php echo $_text_colum_size; ?>">
                <?php if( $_logo = get_sub_field( '_fullwidth_featured_product_logo' ) ): ?>
                    <div class="logo">
                        <?php echo wp_get_attachment_image( $_logo, 'full', false, array( 'class' => 'svg' ) ); ?>
                    </div><!--logo-->
                <?php endif; ?>

                <div class="title-wrap">
                    <?php 
                    if( $_heading = get_sub_field( '_fullwidth_featured_product_heading' ) ): 
                        echo sprintf( '<h2>%s</h2>', $_heading );
                    endif;

                    if( $_sub_heading = get_sub_field( '_fullwidth_featured_product_subheading' ) ): 
                        echo sprintf( '<h3>%s</h3>', $_sub_heading );
                    endif;
                    ?>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <?php 
                    if( $_description = get_sub_field( '_fullwidth_featured_product_description' ) ): 
                        echo sprintf( '<p>%s</p>', $_description );
                    endif;

                    $_prod_link = get_sub_field( '_fullwidth_featured_product_link' );

                    if( is_array( $_prod_link ) && !empty( $_prod_link ) ):
                        $_link_url      = ( isset( $_prod_link['url'] ) && $_prod_link['url'] ) ? $_prod_link['url'] : "javascript:void(0);";
                        $_link_title    = (isset( $_prod_link['title'] ) && $_prod_link['title']) ? $_prod_link['title'] : false;;
                        $_link_target   = ( isset($_prod_link['target']) ) ? $_prod_link['target'] : '_self';
                    ?>
                        <div class="link">
                            <a href="<?php echo $_link_url ?>" target="<?php echo $_link_target; ?>">
                                <?php echo $_link_title; ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </a>
                        </div><!--link-->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--full-block-description-wrapper-->