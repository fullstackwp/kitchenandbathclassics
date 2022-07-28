<?php 
$_column_size   = ( get_sub_field( '_product_row_list_col_size' ) ) ? get_sub_field( '_product_row_list_col_size' ) : 3;
$_block_desc    = get_sub_field( '_product_row_list_block_description' );
$section_id     = ( get_sub_field( '_product_row_list_sectionid' ) ) ? sprintf( 'id="%s"', get_sub_field( '_product_row_list_sectionid' ) ) : '';
if( have_rows( '_product_row_content') ) :
?>
    <section class="image-block-wrapper bb-1">
        <div class="container">
            <div class="row justify-content-center g-1">
                <?php
                if( $_block_desc ):
                ?>
                    <div class="col-md-12 p-1">
                        <div class="note">
                            <?php echo $_block_desc; ?>
                        </div><!--note-->
                    </div>
                <?php endif; ?>
                <?php while( have_rows( '_product_row_content') ) : the_row(); 
                    $_image_label = get_sub_field( '_image_label' );
                ?>
                    <div class="col-md-<?php echo $_column_size; ?> p-1">
                        <div class="image-link-block">
                            <div class="block-image-link">
                                <?php if( $_img = get_sub_field( '_image' ) ) : ?>
                                    <div class="image-wrap">
                                        <?php echo wp_get_attachment_image( $_img, 'full', false, '' ); ?>
                                        <?php if( $_image_label ): ?>
                                                <span><?php echo $_image_label; ?></span>
                                        <?php endif; ?>
                                    </div><!--image-wrap-->
                                <?php endif; ?>
                                
                                <?php if( $_title = get_sub_field( '_title' ) ) : ?>
                                    <div class="product">
                                        <?php echo $_title; ?>
                                    </div><!--product-->
                                <?php endif; ?>
                            </div><!--block-image-link-->
                        </div><!--image-link-block-->
                    </div>
                <?php 
                endwhile; 
                ?>
            </div>
        </div>
    </section><!--image-block-wrapper-->
<?php endif; ?>