<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tapsbath
 */

?>

	<?php 
		if( have_rows( '_tapsbath_book_consultation_sidebar_button', 'option' ) ): 
			while( have_rows( '_tapsbath_book_consultation_sidebar_button', 'option' ) ): the_row();
				$button_enabled   = get_sub_field( '_tapsbath_enable_book_consultation_button' );
				$consultation_btn = get_sub_field( '_tapsbath_button_link' );
				$btn_img 	      = get_sub_field( '_tapsbath_button_image' );
				
				if( $button_enabled && is_array( $consultation_btn ) && !empty( $consultation_btn ) ):
						$link_url = ( isset( $consultation_btn['url'] ) && $consultation_btn['url'] ) ? $consultation_btn['url'] : 'javascript:void(0);';
						$link_target = ( isset( $consultation_btn['target'] ) ) ? $consultation_btn['target'] : '_self';
		?>
					<div class="sticky-book-consultation-wrap">
						<a href="<?php echo $link_url ?>" target="<?php echo $link_target ?>">
							<?php echo wp_get_attachment_image( $btn_img, 'full', false, '' ); ?>
						</a>
					</div><!--sticky-book-consultation-wrap-->
		<?php 
				endif; //get_sub_field( '_tapsbath_enable_book_consultation_button' )
			endwhile;
		endif;
	?>
	
	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<?php 
				$footer_logo1 = get_field( '_tapsbath_footer_logo1', 'option' );
				$footer_logo2 = get_field( '_tapsbath_footer_logo2', 'option' );
				if( $footer_logo1 ): 
				?>
					<div class="col-xl-3 col-lg-3 col-md-2">
						<a href="<?php echo esc_url( site_url('/') ); ?>">
							<?php echo wp_get_attachment_image( $footer_logo1, 'full', false, array( 'class' => 'svg' ) ); ?>
						</a>
					</div>
				<?php 
				endif;

				if( $footer_logo2 ) :
				?>
					<div class="col-xl-3 col-lg-2 col-md-2">
						<a href="<?php echo esc_url( site_url('/') ); ?>">
							<?php echo wp_get_attachment_image( $footer_logo2, 'full', false, array( 'class' => 'svg' ) ); ?>
						</a>

					</div>
				<?php endif; ?>

				<div class="col-xl-2 col-lg-3 col-md-3">
					<div class="footer-menu">
						<?php 
						wp_nav_menu(
								array(
									'theme_location' => 'footer-menu-1',
									'menu_id'        => 'footer-menu-1',
								)
							);
						?>
					</div><!--footer-menu-->
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4">
					<div class="footer-menu">
						<?php 
						wp_nav_menu(
								array(
									'theme_location' => 'footer-menu-2',
									'menu_id'        => 'footer-menu-2',
								)
							);
						?>
					</div><!--footer-menu-->
				</div>
				<div class="col-md-1">
					<?php 
					$facebook_link  = get_field( '_tapsbath_facebook_link', 'option' );
					$instagram_link = get_field( '_tapsbath_instagram_link', 'option' );
					$twitter_link   = get_field( '_tapsbath_twitter_link', 'option' );
					?>
					<div class="social-wrap">
						<ul>
							<?php if( $facebook_link ): ?>
								<li>
									<a href="<?php echo $facebook_link; ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(). '/images/facebook-icon.svg'?>" class="svg">
									</a>
								</li>
							<?php endif; ?>

							<?php if( $instagram_link ): ?>
								<li>
									<a href="<?php echo $instagram_link; ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(). '/images/insta-icon.svg'?>" class="svg">
									</a>
								</li>
							<?php endif; ?>

							<?php if( $twitter_link ): ?>
								<li>
									<a href="<?php echo $twitter_link; ?>" target="_blank">
										<img src="<?php echo get_template_directory_uri(). '/images/twitter-icon.svg'?>" class="svg">
									</a>
								</li>
							<?php endif; ?>

						</ul>
					</div><!--social-wrap-->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
