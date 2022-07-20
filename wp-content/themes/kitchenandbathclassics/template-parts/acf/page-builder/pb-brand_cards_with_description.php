<?php 
$column = get_sub_field( '_brand_card_with_desc_column_size' );

$section_id = ( get_sub_field( '_brand_card_with_desc_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_brand_card_with_desc_sectionid' ) ) : '';

if( 4 == $column ):
    $section_class = 'triple-block-description-link-wrapper';
else:
    $section_class = 'double-block-description-link-wrapper';
endif;

if( have_rows( '_brand_desc_cards' ) ): 
?>
    <section <?php echo $section_id; ?> class="<?php echo $section_class; ?>">
        <div class="container">
            <div class="row g-1">
                <?php 
                while( have_rows( '_brand_desc_cards' ) ): the_row(); 
                    $_card_link_arr = get_sub_field( '_card_link' );
                    $_link_url      = ( isset( $_card_link_arr['url'] ) && $_card_link_arr['url'] ) ? $_card_link_arr['url'] : "javascript:void(0);";
                    $_link_title    = (isset( $_card_link_arr['title'] ) && $_card_link_arr['title']) ? $_card_link_arr['title'] : false;;
                    $_link_target   = ( isset($_card_link_arr['target']) ) ? $_card_link_arr['target'] : '_self';
                ?>
                    <div class="col-md-<?php echo $column; ?> p-1">
                        <div class="block-image-link">
                            <a href="<?php echo $_link_url; ?>">
                                <div class="image-wrap">
                                    <?php 
                                    if( $_feature_img = get_sub_field( '_card_feature_image' ) ): 
                                        echo ( 4 == $column  ) ? '<div class="image">' : '';
                                        echo wp_get_attachment_image( $_feature_img, 'full', false, '' );
                                        echo ( 4 == $column  ) ? '</div>' : '';
                                    endif;
                                    ?>
                                    <div class="description">
                                        <div class="left">
                                            <?php 
                                            if( $_description = get_sub_field( '_card_description' ) ):
                                                echo $_description;
                                            endif;

                                            if( $_link_title ):
                                            ?>
                                                <div class="link">
                                                    <?php echo $_link_title; ?>
                                                    <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                                </div><!--link-->
                                            <?php endif; ?>
                                        </div>

                                        <?php if( $_feature_img = get_sub_field( '_card_logo_image' ) ):  ?>
                                            <div class="right">
                                                <?php echo wp_get_attachment_image( $_feature_img, 'full', false, array('class'=>'svg') ); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div><!--description-->
                                </div><!--image-wrap-->
                            </a>
                        </div><!--block-image-link-->
                    </div>
                <?php endwhile; ?>
                
            </div>
        </div>
    </section><!--double-block-description-link-wrapper-->
<?php endif; ?>