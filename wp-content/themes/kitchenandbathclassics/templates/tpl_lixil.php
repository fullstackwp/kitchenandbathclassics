<?php
/*
Template Name: Lixil Template
*/
get_header();
    while( have_posts() ): the_post();
        if ( have_rows( 'page_builder' ) ) :
            while ( have_rows( 'page_builder' ) ) : the_row();
                $layout = get_row_layout();
                get_template_part( 'template-parts/acf/page-builder/pb', $layout );
            endwhile;
        endif; 
    endwhile;

?>
<?php /* ?>
<section class="banner-logo-wrapper text-center" style="background-color:#03363a" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-dxv.svg'?>" class="svg">
                </div><!--title-wrap-->
            </div>
        </div>
    </div>
</section><!--banner-title-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="inner-main-banner-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-banner-wrap" style="background-color: #e6e6e6;">
                    <div class="graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--graphic-->
                    <div class="image-block">
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-dxv.svg'?>" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--inner-main-banner-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        DXV - Tap Into Style
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        With its meticulous attention to detail, the iconic kitchen and bathroom brand creates elegantly designed and constructed collections to elevate your kitchen and bathroom.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/dxv-etre.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>
                        NEW! 
                    </h2>
                    <h2>
                        Etre Kitchen Faucet in Matte Black  
                    </h2>
                    <div class="content">
                        <p>
                            You’ll fall in love with the Etre pull-down kitchen faucet. Its sleek, architectural lines draw on the essence of early 20th century Machine Age Modernism for a functional and stunning aesthetic. 
                        </p>
                        <p>
                            For enhanced function, all faucet touchpoints feature a unique texture to enhance grip and visual interest.
                        </p>
                    </div><!--content-->
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->

<section class="image-block-wrapper bb-1">
    <div class="container">
        <div class="row justify-content-center g-1">
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-polished-chrome.jpg'?>">
                        </div><!--image-wrap-->
                        <div class="product">
                            Polished Chrome
                        </div><!--product-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-ultra-steel.jpg'?>">
                        </div><!--image-wrap-->
                        <div class="product">
                            Ultra Steel
                        </div><!--product-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-satinbrass.jpg'?>">
                        </div><!--image-wrap-->
                        <div class="product">
                            Satin Brass
                        </div><!--product-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-matte-black.jpg'?>">
                        </div><!--image-wrap-->
                        <div class="product">
                            Matte Black / Satin Brass
                        </div><!--product-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
        </div>
    </div>
</section><!--image-block-wrapper-->

<section class="image-block-wrapper bb-1">
    <div class="container">
        <div class="row justify-content-center g-1">
            <div class="col-md-15 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-image-1.jpg'?>">
                        </div><!--image-wrap-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-15 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-image-2.jpg'?>">
                        </div><!--image-wrap-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-15 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-image-3.jpg'?>">
                        </div><!--image-wrap-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-15 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-image-4.jpg'?>">
                        </div><!--image-wrap-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-15 p-1">
                <div class="image-link-block">
                    <div class="block-image-link">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-image-5.jpg'?>">
                        </div><!--image-wrap-->
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-12 p-1">
                <div class="note">
                    <h3>
                        Etre Bar Faucet <span>Available in multiple finishes. </span>
                    </h3>
                </div><!--note-->
            </div>
        </div>
    </div>
</section><!--image-block-wrapper-->

<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        Belshire Collection
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Belshire is made for those that love sparkle and shine. This timeless and exquisite collection captures the Golden Era of the 1920s.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->

<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>
                        Belshire Widespread High-Spout Bathroom Faucet 
                    </h2>
                    <div class="image-wrap">
                        <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire-high-spout-bathroom-faucet-1.png'?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->

<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire-30.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Belshire 30”</h2>
                                    <h3>Two Drawer Vanity with Hidden Drawer</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire-2.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Belshire</h2>
                                    <h3>Undermount Sink</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire-console.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Belshire 30” </h2>
                                    <h3>Console Frame with Glass Shelf</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-description-link-wrapper-->

<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-elongated-toilet.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Belshire</h2>
                                    <h3>One Piece Elongated Toilet with Seat</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-belshire-high-spout-bathroom-faucet.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>AT200 SpaLet</h2>
                                    <h3>Integrated Electronic Bidet Toilet</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-description-link-wrapper-->

<section class="full-block-description-wrapper white-text" style="background-color: #03363a;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/dxv-elongated-toilet-1.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-6">
                <div class="title-wrap">
                    <h2>Equility One Piece Elongated Toilet</h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        The Equility toilet is a contemporary design that’s sure to become a classic. Its elegance shines through its smooth and seamless contours, and stays clean with every flush through an EverClean™ microbial surface. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--full-block-description-wrapper-->

<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>
                        Design Your Kitchen or Bathroom with DXV
                    </h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Explore more products and collections from DXV at your local TAPS Showoom. Our showroom consultants are here to help you with your next project or renovation. 
                    </p>
                    <div class="button">
                        <a href="javascript:void(0);" class="btn btn-red">Book a Free Consultation</a>
                    </div><!--button-->
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->

<section class="image-block-link-wrapper bt-1 bb-1">
    <div class="container">
        <div class="row align-items-center justify-content-center g-1">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>Find Design Inspiration</h2>
                </div>
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-title">
                        <h3>Black and White</h3>
                    </div><!--block-title-->
                    <div class="block-image-link">
                        <a href="javascript:void(0);">
                            <div class="image-wrap">
                                <img src="<?php echo get_template_directory_uri(). '/images/black-white.jpg'?>">
                            </div><!--image-wrap-->
                            <div class="link">
                                View Black & White moodboard 
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </div><!--link-->
                        </a>
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-title">
                        <h3>Natural Influence</h3>
                    </div><!--block-title-->
                    <div class="block-image-link">
                        <a href="javascript:void(0);">
                            <div class="image-wrap">
                                <img src="<?php echo get_template_directory_uri(). '/images/taps-bathroom.jpg'?>">
                            </div><!--image-wrap-->
                            <div class="link">
                                View Natural Influence moodboard
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </div>
                        </a>
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-title">
                        <h3>Sleek and Chic</h3>
                    </div><!--block-title-->
                    <div class="block-image-link">
                        <a href="javascript:void(0);">
                            <div class="image-wrap">
                                <img src="<?php echo get_template_directory_uri(). '/images/sleek-chic.jpg'?>">
                            </div><!--image-wrap-->
                            <div class="link">
                                View Sleek & Chic moodboard
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </div>
                        </a>
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
            <div class="col-md-3 p-1">
                <div class="image-link-block">
                    <div class="block-title">
                        <h3>Modern Mixes</h3>
                    </div><!--block-title-->
                    <div class="block-image-link">
                        <a href="javascript:void(0);">
                            <div class="image-wrap">
                                <img src="<?php echo get_template_directory_uri(). '/images/modern-mixes.jpg'?>">
                            </div><!--image-wrap-->
                            <div class="link">
                                View Modern Mixes moodboard
                                <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                            </div>
                        </a>
                    </div><!--block-image-link-->
                </div><!--image-link-block-->
            </div>
        </div>
    </div>
</section><!--image-block-link-wrapper-->

<section class="consultation-wrapper" id="book-a-consultation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- [if lte IE 8]>
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                <![endif]-->
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                <script>
                hbspt.forms.create({
                    region: "na1",
                    portalId: "4129352",
                css:'',
                    formId: "884d494e-1f7d-4843-8d49-e0600ad644f6"
                });
                </script>
            </div>
        </div>
    </div>
</section><!--consultation-wrapper-->

<section class="testimonial-wrapper dark-text mb-0" style="background-color:#ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <p>
                        “When choosing kitchen and bathroom designs, be mindful and choose materials and designs that match your lifestyle or enhance it. Comfort and practicality are extremely important in whatever you choose.” 
                    </p>
                    <div class="author">
                        Pertam <br>TAPS Bath, Toronto
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/Pertam.png'?>">
                </div><!--author-image-->
            </div>
        </div>
    </div>
    <div class="right-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic-2.png'?>">
    </div><!--right-graphic-->
</section><!--testimonial-wrapper-->
<?php
get_footer();
?>