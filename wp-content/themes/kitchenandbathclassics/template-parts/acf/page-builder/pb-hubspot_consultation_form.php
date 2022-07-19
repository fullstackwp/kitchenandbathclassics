<?php 
$row_index      = get_row_index();
$hubspot_script = get_sub_field( '_hubspot_script' );
$section_id     = ( get_sub_field( '_hubspot_section_id' ) ) ? get_sub_field( '_hubspot_section_id' ) : 'book-a-consultation';

if( $hubspot_script ):
?>
    <section class="consultation-wrapper" id="<?php echo $section_id; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $hubspot_script; ?>
                </div>
            </div>
        </div>
    </section><!--consultation-wrapper-->
<?php endif; ?>