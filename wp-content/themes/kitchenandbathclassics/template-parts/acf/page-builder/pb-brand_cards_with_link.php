<?php 
$column          = get_sub_field( '_brand_card_column_size' );
$show_desc       = get_sub_field( '_brand_card_section_description' );
$section_heading = get_sub_field( '_brand_card_heading' );
$section_desc    = get_sub_field( '_brand_card_description' );
$section_id      = ( get_sub_field( '_brand_card_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_brand_card_sectionid' ) ) : '';
$section_class   = "";
if( 12 == $column ):
    $section_class = ( $show_desc && ( $section_heading || $section_desc ) ) ? 'fullwidth-block-title-link-wrapper' : 'fullwidth-block-link-wrapper';
elseif( 4 == $column ):
    $section_class = ( $show_desc && ( $section_heading || $section_desc ) ) ? 'triple-block-title-link-wrapper' : 'triple-block-link-wrapper';
else:
    $section_class = ( $show_desc && ( $section_heading || $section_desc ) ) ? 'double-block-title-link-wrapper' : 'double-block-link-wrapper';
endif;
?>
<section <?php echo $section_id ?> class="<?php echo $section_class; ?>">
    <div class="container">
        <div class="row g-1">
            <?php if( $show_desc && ( $section_heading || $section_desc ) ) : ?>
                <div class="col-md-12 p-1">
                    <?php if( $section_heading ): ?>
                        <div class="title-wrap">
                            <h3>
                                <?php echo $section_heading; ?>
                            </h3>
                        </div><!--title-wrap-->
                    <?php 
                    endif;
                    
                    if( $section_desc ):
                    ?>
                        <div class="content-wrap">
                            <p>
                               <?php echo $section_desc; ?>
                            </p>
                        </div><!--content-wrap-->
                    <?php endif; ?>
                </div>
            <?php 
            endif;

            if( have_rows( '_brand_cards' ) ):
                while( have_rows( '_brand_cards' ) ) : the_row();
                    $_card_link_arr = get_sub_field( '_card_link' );
                    $_link_url      = ( isset( $_card_link_arr['url'] ) && $_card_link_arr['url'] ) ? $_card_link_arr['url'] : "javascript:void(0);";
                    $_link_title    = (isset( $_card_link_arr['title'] ) && $_card_link_arr['title']) ? $_card_link_arr['title'] : false;;
                    $_link_target   = ( isset($_card_link_arr['target']) ) ? $_card_link_arr['target'] : '_self';

            ?>
                    <div class="col-md-<?php echo $column; ?> p-1">
                        <div class="block-image-link">
                            <a href="<?php echo $_link_url; ?>">
                                <?php
                                $feature_img = get_sub_field( '_card_feature_image' );
                                $logo_img = get_sub_field( '_card_logo_image' );

                                if( $feature_img || $logo_img ): ?>
                                    <div class="image-wrap">
                                        <?php 
                                        echo ( $feature_img ) ? wp_get_attachment_image( $feature_img, 'full', false, '' ) : '';

                                        if( $logo_img ):
                                        ?>
                                            <div class="logo">
                                                <?php echo wp_get_attachment_image( $logo_img, 'full', false, array( 'class' => 'svg' ) ); ?>
                                            </div><!--logo-->
                                        <?php endif; ?>
                                    </div><!--image-wrap-->
                                <?php 
                                endif;
                            
                                if( $_link_title ):
                                ?>
                                    <div class="link">
                                        <?php echo $_link_title; ?>
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                <?php endif; ?>
                            </a>
                        </div><!--block-image-link-->
                    </div>
            <?php 
                endwhile;
            endif;
            ?>
           
        </div>
    </div>
</section><!--triple-block-title-link-wrapper-->