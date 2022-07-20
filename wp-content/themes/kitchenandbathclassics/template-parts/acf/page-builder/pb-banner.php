<?php
$media_type = get_sub_field( '_banner_imageorvideo' );
$section_id = ( get_sub_field( '_banner_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_banner_sectionid' ) ) : '';
?>
<section <?php echo $section_id; ?> class="banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                if( 'img' === $media_type ): 
                    if( have_rows( '_banner_image_fields' ) ):
                        while( have_rows( '_banner_image_fields' ) ): the_row();
                ?>
                            <div class="banner-content">
                                <?php if( $banner_img = get_sub_field( '_banner_image' ) ): ?>
                                    <div class="image-wrap">
                                        <?php echo wp_get_attachment_image( $banner_img, 'full', false, '' ); ?>
                                    </div><!--image-wrap-->
                                <?php endif; ?>

                                <div class="banner-text">
                                    <?php if( $banner_heading = get_sub_field( '_banner_heading' ) ): ?>
                                        <div class="title-wrap">
                                            <h1><?php echo $banner_heading; ?></h1>
                                        </div><!--title-wrap-->
                                    <?php endif; ?>
                                    <?php if( $banner_desc = get_sub_field( '_banner_description' ) ): ?>
                                        <div class="content">
                                            <p><?php echo $banner_desc; ?></p>  
                                        </div><!--content-->
                                    <?php endif; ?>
                                </div><!--banner-text-->

                                <?php if( $banner_graphic_img = get_sub_field( '_banner_graphic_image' ) ): ?>
                                    <div class="banner-graphic">
                                        <?php echo wp_get_attachment_image( $banner_graphic_img, 'full', false, '' ); ?>
                                    </div><!--banner-graphic-->
                                <?php endif; ?>
                            </div><!--banner-content-->
                <?php 
                        endwhile; //have_rows
                    endif; //have_rows

                elseif( 'vid' === $media_type ): 
                    if ( have_rows( '_banner_video_fields' ) ) :
	                    while ( have_rows( '_banner_video_fields' ) ) : the_row(); 
                            $attr               = array(); 
                            $_banner_video_link = esc_url( get_sub_field( '_banner_video_link' ) );
                            $_banner_poster     = get_sub_field( '_banner_video_poster' );


                            // for mute
                            if( $_mute = get_sub_field( '_banner_mute_option' ) ) :
                                $attr[] = 'muted';
                            endif;

                            // for autoplay
                            if( $_autoplay = get_sub_field( '_banner_autoplay_option' ) ) :
                                $attr[] = 'autoplay';
                            endif;

                            //loop
                            if( $_loop = get_sub_field( '_banner_loop_option' ) ) :
                                $attr[] = 'loop';
                            endif;

                            // for autoplay
                            if( $_control = get_sub_field( '_banner_controls_option' ) ) :
                                $attr[] = 'controls';
                            endif;

                ?>
                            <div class="video-wrap">
                                <video <?php echo implode( ' ', $attr ); ?> poster="<?php echo wp_get_attachment_image_url( $_banner_poster, 'full', false ); ?>">
                                    <source src="<?php echo $_banner_video_link; ?>" type="video/mp4">
                                </video>
                            </div><!--video-wrap-->
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section><!--banner-wrapper-->