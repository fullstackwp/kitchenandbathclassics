<?php 
$_text_color        = ( get_sub_field( '_split_text_font_color' ) ) ? get_sub_field( '_split_text_font_color' ) : 'white-text';
$_background_color  = ( get_sub_field( '_split_text_background_color' ) ) ? get_sub_field( '_split_text_background_color' ) : '#ffffff';
$_text              = get_sub_field( '_split_text' );
$_img               = get_sub_field( '_split_image' );
?>
<section class="left-right-wrapper <?php echo $_text_color; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-right-content-wrap" style="background-color: <?php echo $_background_color; ?>;">
                    <?php echo $_text; ?>
                </div><!--left-right-content-wrap-->
            </div>
            <div class="col-md-6">
                <div class="left-right-image-wrap">
                    <?php echo wp_get_attachment_image( $_img, 'full', false, '' ); ?>
                </div><!--left-right-image-wrap-->
            </div>
        </div>
    </div>
</section><!--left-right-wrapper-->