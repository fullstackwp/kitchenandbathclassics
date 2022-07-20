
<?php
$_link          = get_sub_field( '_fullwidth_img_vid_section_link' );
$_link_url      = ( isset( $_link['url'] ) && $_link['url'] ) ? $_link['url'] : "javscript:void(0);";
$_link_title    = ( isset( $_link['title'] ) && $_link['title'] ) ? $_link['title'] : false;
$_link_target   = ( isset( $_link['target'] ) ) ? $_link['target'] : '_self';

$media_type     = get_sub_field( '_fullwidth_imageorvideo_choice' );

$section_id     = ( get_sub_field( 'fullwidth_imagevideo_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( 'fullwidth_imagevideo_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="single-block-link-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-image-link">
                    <a href="<?php echo $_link_url ; ?>" target="<?php echo $_link_target; ?>">
                        <?php 
                        if( 'img' === $media_type ): 
                            if( have_rows( '_fullwidth_image_fields' ) ):
                                while( have_rows( '_fullwidth_image_fields' ) ): the_row();
                        ?>
                                    <div class="image-wrap">
                                        <?php 
                                        if( $_img = get_sub_field( '_image' ) ) :
                                            echo wp_get_attachment_image( $_img, 'full', false, '' );
                                        endif;

                                        if( $_img_desc = get_sub_field( '_img_description' ) ):
                                        ?>
                                            <div class="description">
                                                <?php echo $_img_desc; ?>
                                            </div><!--description-->
                                        <?php endif; ?>
                                    </div><!--image-wrap-->
                        <?php 
                                endwhile;
                            endif;
                        elseif( 'vid' === $media_type ): 
                            if ( have_rows( '_fullwidth_video_fields' ) ) :
                                while ( have_rows( '_fullwidth_video_fields' ) ) : the_row(); 
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
                        endif; 
                        ?>
                        
                        <?php if( $_link_title ): ?>
                            <div class="link">
                                <?php echo $_link_title; ?>
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </div><!--link-->
                        <?php endif; ?>
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--single-block-link-wrapper-->