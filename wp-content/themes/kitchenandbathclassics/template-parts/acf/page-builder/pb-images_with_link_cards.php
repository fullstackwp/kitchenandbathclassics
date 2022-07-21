<?php 
$border_classes = "";
$borders = get_sub_field( '_image_card_section_border' );
if( is_array( $borders ) && !empty( $borders ) ) {
    // options : bt-1 & bb-1
    $border_classes = implode( " ", $borders );
}

$section_id = ( get_sub_field( '_image_card_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_image_card_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="image-block-link-wrapper <?php echo $border_classes; ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center g-1">
            <?php if( $_heading = get_sub_field( '_image_card_section_heading' ) ): ?>
                <div class="col-md-12">
                    <div class="title-wrap">
                        <h2><?php echo $_heading; ?></h2>
                    </div>
                </div>
            <?php 
            endif;

            if( have_rows( '_image_cards' ) ):
                while( have_rows( '_image_cards' ) ): the_row();
            ?>
                    <div class="col-md-3 p-1">
                        <div class="image-link-block">
                            <?php if( $_card_heading = get_sub_field( '_card_heading' ) ): ?>
                                <div class="block-title">
                                    <h3><?php echo $_card_heading; ?></h3>
                                </div><!--block-title-->
                            <?php endif; ?>

                            <?php 
                            $_card_link_arr = get_sub_field( '_card_link' );

                            if( is_array( $_card_link_arr ) && !empty( $_card_link_arr ) ):
                                $_link_url      = ( isset( $_card_link_arr['url'] ) && $_card_link_arr['url'] ) ? $_card_link_arr['url'] : "javascript:void(0);";
                                $_link_title    = $_card_link_arr['title'];
                                $_link_target   = $_card_link_arr['target'] ? $_card_link_arr['target'] : '_self';
                    
                                ?>
                                <div class="block-image-link">
                                    <a href="<?php echo $_link_url; ?>" target="<?php echo $_link_target; ?>">
                                        <?php if( $_card_image = get_sub_field( '_card_image' ) ): ?>
                                            <div class="image-wrap">
                                                <?php echo wp_get_attachment_image( $_card_image, 'large', false, '' ); ?>
                                            </div><!--image-wrap-->
                                        <?php endif; ?>
                                        <div class="link">
                                            <?php echo $_link_title; ?>
                                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                        </div><!--link-->
                                    </a>
                                </div><!--block-image-link-->
                            <?php endif; ?>
                        </div><!--image-link-block-->
                    </div>
            <?php 
                endwhile; 
            endif;
            ?>
        </div>
    </div>
</section><!--image-block-link-wrapper-->