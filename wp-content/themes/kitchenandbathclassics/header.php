<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tapsbath
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tapsbath' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3 col">
					<div class="site-branding">
						<?php
						the_custom_logo();

						

						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$tapsbath_description = get_bloginfo( 'description', 'display' );
						if ( $tapsbath_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $tapsbath_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-3 col">
					<div class="site-branding">
						<?php 
						if( $secondary_logo = get_field( '_tapsbath_header_logo2', 'option' ) ):
							echo sprintf( '<a href="%s">%s</a>', esc_url( site_url( '/' ) ), wp_get_attachment_image( $secondary_logo, 'full', false, array( 'class' => 'svg' ) ) );
						endif;
						?>
					</div>
				</div>
				<div class="col-md-6 col">
					<div class="main-menu-wrap">
						<?php 
						if( have_rows( '_tapsbath_book_consultation_header_button', 'option' ) ): 
							while( have_rows( '_tapsbath_book_consultation_header_button', 'option' ) ): the_row();
								$button_enabled   = get_sub_field( '_tapsbath_enable_book_consultation_button' );
								$consultation_btn = get_sub_field( '_tapsbath_button_link' );
								if( $button_enabled && is_array( $consultation_btn ) && !empty( $consultation_btn ) ):
						?>
									<div class="header-button">
										<?php echo tapsbath_get_link_html( $consultation_btn, 'btn btn-red' ); ?>	
									</div>
						<?php 
								endif; //get_sub_field( '_tapsbath_enable_book_consultation_button' )
							endwhile;
						endif;
						?>
							
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<div class="navigation-wrap">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</div><!--navigation-wrap-->
						</nav><!-- #site-navigation -->
					</div><!--main-menu-wrap-->
				</div>
			</div>
		</div><!--container-->
	</header><!-- #masthead -->
