<?php //ffffff ?>

<?php 
$classes              = array();
$background_color   = ( get_sub_field( '_testimonial_block_background_color' ) ) ? get_sub_field( '_testimonial_block_background_color' ) : "#ffffff";
$heading            = ( get_sub_field( '_testimonial_heading' ) ) ? get_sub_field( '_testimonial_heading' ) : false;
$testimonial        = ( get_sub_field( '_testimonial_description' ) ) ? get_sub_field( '_testimonial_description' ) : false;
$author_desc        = ( get_sub_field( '_testimonial_author_description' ) ) ? get_sub_field( '_testimonial_author_description' ) : false;
$author_img         = ( get_sub_field( '_testimonial_author_image' ) ) ? get_sub_field( '_testimonial_author_image' ) : false;
$graphic_img        = ( get_sub_field( '_testimonial_graphic_image' ) ) ? get_sub_field( '_testimonial_graphic_image' ) : false;

//text color
$classes[]            = ( get_sub_field( '_testimonial_text_color' ) ) ? get_sub_field( '_testimonial_text_color' ) : "white-text";
if( $block_class = get_sub_field( '_testimonial_block_class' ) ) { //custom class added through backend
    $classes[] = $block_class;
}

$section_id         = ( get_sub_field( '_testimonial_block_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_testimonial_block_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="testimonial-wrapper <?php echo implode( " ", $classes ); ?>" style="background-color:<?php echo $background_color; ?>;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php if( $heading ): ?>
                    <div class="title-wrap">
                        <h2>
                            <?php echo $heading; ?>
                        </h2>
                    </div><!--title-wrap-->
                <?php endif; ?>

                <div class="content-wrap">
                    <?php 
                    if( $testimonial ): 
                        echo $testimonial; 
                    endif; 
                    
                    if( $author_desc ):
                    ?>
                        <div class="author">
                            <?php echo $author_desc; ?>
                        </div><!--author-->
                    <?php endif; ?>
                </div><!--content-wrap-->
            </div>

            <?php if( $author_img ): ?>
                <div class="col-md-5">
                    <div class="author-image">
                        <?php echo wp_get_attachment_image( $author_img, 'full', false, '' ); ?>
                    </div><!--author-image-->
                </div>
            <?php endif; ?>
        </div>
    </div>

    <?php if( $graphic_img ): ?>
        <div class="right-graphic">
            <img src="<?php echo wp_get_attachment_image_url( $graphic_img, 'full', false); ?>" alt="">
        </div><!--right-graphic-->
    <?php endif; ?>
</section><!--testimonial-wrapper-->