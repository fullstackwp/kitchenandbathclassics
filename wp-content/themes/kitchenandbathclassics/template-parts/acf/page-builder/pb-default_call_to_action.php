<?php 
$background_color = get_sub_field('_default_cta_block_background_color');
$title            = get_sub_field('_default_cta_title');
$button           = get_sub_field('_default_cta_button');
$section_id       = ( get_sub_field( '_default_cta_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_default_cta_sectionid' ) ) : '';
?>
<section class="default-cta-wrapper" <?php echo $section_id; ?> style="background-color:<?php echo ( $background_color ) ? $background_color : '#03363a'; ?>;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <?php if( $title ): ?>
                    <div class="title">
                        <h2><?php echo $title; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if( $button ): ?>
                    <div class="button">
                        <a href="<?php echo $button['url']; ?>" class="btn btn-evergreen" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    </div>
                <?php endif; ?>
			</div>
		</div>
	</div>
</section>