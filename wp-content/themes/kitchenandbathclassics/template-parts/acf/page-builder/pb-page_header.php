<?php 
$background_color   = ( get_sub_field( '_page_header_background_color' ) ) ? get_sub_field( '_page_header_background_color' ) : "#ffffff";
$content_type       = get_sub_field( '_page_header_content_type' );
$_heading           = get_sub_field( '_page_header_heading' );
$_image             = get_sub_field( '_page_header_image' );
$_class             = ( 'text' == $content_type ) ? 'banner-title-wrapper' : 'banner-logo-wrapper';
$section_id        = ( get_sub_field( '_page_header_content_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_page_header_content_sectionid' ) ) : '';
?>

<section <?php echo $section_id; ?> class="<?php echo $_class; ?> text-center" style="background-color:<?php echo $background_color; ?>" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if( 'text' == $content_type && $_heading ): ?>
                    <div class="title-wrap">
                        <h1>
                            <?php echo $_heading; ?>
                        </h1>
                    </div><!--title-wrap-->
                <?php 
                elseif( "img" == $content_type && $_image ): 
                    echo wp_get_attachment_image( $_image, 'full', false, array( 'class' => 'svg' ) );
                endif; 
                ?>
            </div>
        </div>
    </div>
</section><!--banner-title-wrapper-->