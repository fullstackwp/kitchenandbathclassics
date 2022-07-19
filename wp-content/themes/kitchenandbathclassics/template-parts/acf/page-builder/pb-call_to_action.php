<?php 
$background_color = get_sub_field('_cta_block_background_color');
$lgraphic_img     = get_sub_field('_cta_left_img');
$rgraphic_img     = get_sub_field('_cta_right_img');
$heading          = get_sub_field('_cta_heading');
$description      = get_sub_field('_cta_description');
$btn1             = get_sub_field('_cta_button1');
$btn2             = get_sub_field('_cta_button2');
?>

<section class="cta-wrapper text-center white-text" style="background-color:<?php echo ( $background_color ) ? $background_color : '#03363a'; ?>;">

    <?php if( $lgraphic_img ): ?>
        <div class="left-graphic">
            <?php echo wp_get_attachment_image( $lgraphic_img, 'full', false, '' ); ?>
        </div><!--left-graphic-->
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if( $heading ): ?>
                    <div class="title-wrap">
                        <h2>
                            <?php echo $heading; ?>
                        </h2>
                    </div><!--title-wrap-->
                <?php endif; ?>
            
                <div class="content-wrap">
                    <?php 
                    if( $description ): 
                        echo $description;
                    endif;
                    ?>
                        
                    <div class="button">
                        <?php 
                        if( is_array( $btn1 ) && !empty( $btn1 ) ) {
                            echo tapsbath_get_link_html( $btn1, 'btn btn-dark' );
                        }

                        if( is_array( $btn2 ) && !empty( $btn2 ) ) {
                            echo tapsbath_get_link_html( $btn2, 'btn btn-dark' );
                        }
                        ?>

                    </div><!--button-->

                </div><!--content-wrap-->
            </div>
        </div>
    </div>
    <div class="right-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
    </div><!--right-graphic-->
</section><!--cta-wrapper-->