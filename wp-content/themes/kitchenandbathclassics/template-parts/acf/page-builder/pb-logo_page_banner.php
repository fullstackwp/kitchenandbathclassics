<?php 
$_background_color = get_sub_field( '_logo_page_banner_background_color' ) ? get_sub_field( '_logo_page_banner_background_color' ) : '#ffffff';
$_main_image       = get_sub_field( '_logo_page_banner_main_image' );
$_graphic_image    = get_sub_field( '_logo_page_banner_graphic_image' );
$section_id        = ( get_sub_field( '_logo_page_banner_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_logo_page_banner_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="inner-main-banner-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-banner-wrap" style="background-color: <?php echo $_background_color; ?>;">
                    <?php if( $_graphic_image ): ?>
                        <div class="graphic">
                            <img src="<?php echo wp_get_attachment_url( $_graphic_image ); ?>">
                        </div><!--graphic-->
                    <?php 
                    endif;

                    if( $_main_image ):
                    ?>
                        <div class="image-block">
                            <?php echo wp_get_attachment_image( $_main_image, 'full', false, array( 'class' => 'svg' ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--inner-main-banner-wrapper-->