<?php 
$_img_col           = get_sub_field( '_split_product_textimage_ratio' ) ? get_sub_field( '_split_product_textimage_ratio' ) : 6;
$_text_col          = 12 - intval( $_img_col );


$_background_color  = get_sub_field( '_split_product_background_color' ) ? get_sub_field( '_split_product_background_color' ) : '#ffffff';
$_heading           = get_sub_field( '_split_product_heading' );
$_description       = get_sub_field( '_split_product_description' );
$_txt_img           = get_sub_field( '_split_product_image' );
$_graphic_img       = get_sub_field( '_split_product_graphic_image' );

$class              = ( $_graphic_img ) ? 'graphic' : '';

$_reverse_order     = get_sub_field( '_split_reverse_content_order' );
$_text_class        = "";
$_img_class         = "";

if( $_reverse_order ) {
    $_text_class = "order-md-1";
    $_img_class  = "order-md-2";
}

?>

<section class="image-description-wrapper <?php echo $_graphic_img; ?>">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-<?php echo $_img_col; ?> p-0 <?php echo $_img_class; ?>">
                <?php if( $_main_img = get_sub_field( '_split_product_main_image' ) ): ?>
                    <div class="image-wrap">
                        <?php echo wp_get_attachment_image( $_main_img, 'full', false, '' ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-<?php echo $_text_col; ?> p-0 <?php echo $_text_class; ?>">
                <div class="description-wrap" style="background-color: <?php echo $_background_color; ?>;">

                    <?php if( $_graphic_img ): ?>
                        <div class="graphic">
                            <?php echo wp_get_attachment_image( $_graphic_img, 'full', false, '' ); ?>
                        </div><!--graphic-->
                    <?php 
                    endif; 
                    
                    if( $_heading ):
                    ?>
                        <h2>
                            <?php echo $_heading; ?>
                        </h2>
                    <?php 
                    endif; 

                    if( $_txt_img ):
                    ?>
                        <div class="image-wrap">
                            <?php echo wp_get_attachment_image( $_txt_img, 'full', false, array() ); ?>
                        </div>
                    <?php
                    endif;

                    if( $_description ):
                    ?>
                        <p>
                            <?php echo $_description; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->