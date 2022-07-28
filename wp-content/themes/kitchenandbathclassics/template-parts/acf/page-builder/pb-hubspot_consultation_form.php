<?php 
$row_index        = get_row_index();
$hubspot_script   = get_sub_field( '_hubspot_script' );
$section_id       = ( get_sub_field( '_hubspot_section_id' ) ) ? get_sub_field( '_hubspot_section_id' ) : 'book-a-consultation';
$form_title       = get_sub_field( '_form_title' );
$form_description = get_sub_field( '_form_description' );
if( $hubspot_script ):
?>
    <section class="consultation-wrapper" id="<?php echo $section_id; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    if( $form_title || $form_description ):
                    ?>
                        <div class="title-wrap">
                            <h3><?php echo $form_title; ?></h3>
                        </div><!--title-wrap-->
                        <div class="content-wrap">
                            <p><?php echo $form_description; ?></p>
                        </div>
                    <?php 
                    endif;
                    ?>
                    <?php echo $hubspot_script; ?>
                </div>
            </div>
        </div>
    </section><!--consultation-wrapper-->
<?php endif; ?>