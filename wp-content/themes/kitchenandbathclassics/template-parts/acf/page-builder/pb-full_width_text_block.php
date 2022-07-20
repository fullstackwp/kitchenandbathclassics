<?php 
$center_align_class = ( get_sub_field( '_fullwidth_text_content_align' ) ) ? 'text-center' : false; 
$section_id         = ( get_sub_field( '_fullwidth_text_content_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_fullwidth_text_content_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="full-text-block-wrapper <?php echo $center_align_class; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                if( $heading = get_sub_Field( '_full_width_text_content_heading' ) ): 
                    $heading_tag = get_sub_Field( '_full_width_text_content_heading_tag' ) ? get_sub_Field( '_full_width_text_content_heading_tag' ) : 'h2';
                ?>
                    <div class="title-wrap">
                        <?php echo sprintf( '<%1$s>%2$s</%1$s>',$heading_tag, $heading ); ?>
                    </div><!--title-wrap-->
                <?php 
                endif;
                
                if( $desc = get_sub_Field( '_full_width_text_content_description' ) ):
                ?>
                    <div class="content-wrap">
                        <?php 
                        echo $desc; 
                        
                        $_show_btn  = get_sub_field( '_full_width_text_add_cta_button' );
                        $_cta_btn   = get_sub_field( '_full_width_text_cta_link' );

                        if( $_show_btn && is_array( $_cta_btn ) && !empty( $_cta_btn ) ) :
                ?> 
                            <div class="button">
                                <?php echo tapsbath_get_link_html( $_cta_btn, 'btn btn-red' ); ?>
                            </div><!--button-->
                        <?php endif; ?>
                    </div><!--content-wrap-->
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->