<?php 
$_link          = get_sub_field( '_fullwidth_img_vid_desc_section_link' );
$_link_url      = ( isset( $_link['url'] ) && $_link['url'] ) ? $_link['url'] : "javscript:void(0);";
$_link_title    = ( isset( $_link['title'] ) && $_link['title'] ) ? $_link['title'] : false;
$_link_target   = ( isset( $_link['target'] ) ) ? $_link['target'] : '_self';

$media_type     = get_sub_field( '_fullwidth_desc_imageorvideo_choice' );

$section_id     = ( get_sub_field( '_fullwidth_desc_imgvid_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_fullwidth_desc_imgvid_sectionid' ) ) : '';
?>

<section <?php echo $section_id; ?> class="single-block-description-link-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-image-link">
                    <a href="<?php echo $_link_url; ?>">
                        <div class="image-wrap">
                             <?php 
                            if( 'vid' === $media_type ): 
                                if( have_rows( '_fullwidth_desc_video_fields' ) ):
                                    while( have_rows( '_fullwidth_desc_video_fields' ) ): the_row();
                                        $_banner_video_link = esc_url( get_sub_field( '_video_link' ) );
                                        $_banner_poster     = get_sub_field( '_video_poster' );
                                        $_video_mute        = get_sub_field( '_mute_option' );
                                        $_video_autoplay    = get_sub_field( '_autoplay_option' );
                                        $_video_loop        = get_sub_field( '_loop_option' );
                                        $_video_controls    = get_sub_field( '_controls_option' );
                                    ?>
                                        <div class="video-wrap">
                                            <video muted="<?php echo $_video_mute; ?>" autoplay="false" loop="<?php echo $_video_loop; ?>" controls="<?php echo $_video_controls; ?>" poster="<?php echo wp_get_attachment_image_url( $_banner_poster, 'full', false ); ?>">
                                                <source src="<?php echo $_banner_video_link; ?>" type="video/mp4">
                                            </video>
                                        </div><!--video-wrap-->
                            <?php 
                                    endwhile;
                                endif; 
                            elseif( 'img' === $media_type ): 
                                if ( have_rows( '_fullwidth_desc_image_fields' ) ) :
                                    while ( have_rows( '_fullwidth_desc_image_fields' ) ) : the_row();
                                        if( $_img = get_sub_field( '_image' ) ) :
                                            echo '<div class="image">';
                                            echo wp_get_attachment_image( $_img, 'full', false, '' );
                                            echo '</div>';
                                        endif;
                                    endwhile;
                                endif;
                            endif;
                            ?>
                            <!-- <img src="<?php //echo get_template_directory_uri(). '/images/tight-water.jpg'?>"> -->
                            <div class="description">
                                <div class="left">
                                    <?php 
                                    if( $_block_desc = get_sub_field( '_fullwidth_desc_block_description' ) ):
                                        echo $_block_desc;
                                    endif;
                                    ?>
                                    <div class="link">
                                        <?php echo $_link_title; ?>
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <?php 
                                    if( $_logo = get_sub_field( '_fullwidth_desc_logo' ) ) : 
                                        echo wp_get_attachment_image( $_logo, 'full', false, array( 'class' => 'svg' ) );
                                    endif;
                                    ?>
                                        
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--single-block-description-link-wrapper-->