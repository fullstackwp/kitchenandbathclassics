<?php 
$attr           = array();
$_video_source  = get_sub_field( '_video_link' );
$_video_poster  = ( get_sub_field( '_video_poster' ) ) ? get_sub_field( '_video_poster' ) : '';
$_section_ID    = get_sub_field( '_video_block_sectionid' );

// for mute
if( $_mute = get_sub_field( '_video_mute_option' ) ) :
    $attr[] = 'muted';
endif;

// for autoplay
if( $_autoplay = get_sub_field( '_video_autoplay_option' ) ) :
    $attr[] = 'autoplay';
endif;

//loop
if( $_loop = get_sub_field( '_video_loop_option' ) ) :
    $attr[] = 'loop';
endif;

// for autoplay
if( $_control = get_sub_field( '_video_controls_option' ) ) :
    $attr[] = 'controls';
endif;


if( $_video_source ) :
?>
    <section class="video-wrapper text-center" id="<?php echo ( $_section_ID ) ? $_section_ID : '';  ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if( $_heading = get_sub_field( '_video_heading' ) ) : ?>
                        <div class="title-wrap">
                            <h3><?php echo $_heading; ?></h3>
                        </div><!--title-wrap-->
                    <?php endif; ?>

                    <div class="video-wrap">
                        <video <?php echo implode( ' ', $attr ) ?> poster="<?php echo ( $_video_poster ) ? wp_get_attachment_image_url( $_video_poster, 'full', false ) : ''; ?>">
                            <source src="<?php echo $_video_source; ?>" type="video/mp4">
                        </video>
                    </div><!--video-wrap-->
                </div>
            </div>
        </div>
    </section><!--video-wrapper-->
<?php endif; ?>