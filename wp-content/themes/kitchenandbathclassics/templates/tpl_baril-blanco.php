<?php
/*
Template Name: Baril And Blanco Template
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
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-baril.svg'?>" class="svg">
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
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-baril.svg'?>" class="svg">
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
                        Baril - Fashion meets function
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Give your bathroom an artistic flair with the luxurious designs from the world-class partnership of Marie Saint Pierre and Marie-Eve Baril.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="image-description-wrapper graphic">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/baril-marie-two-handle.jpg'?>">
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <div class="graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--graphic-->
                    <h2>Marie <br>Two-Handle <br>Lavatory Faucet</h2>
                    <p>
                        Like a piece of fine art, you’ll pause to appreciate the high style of the MARIE Faucet Collection. At the intersection of haute couture and interior design, MARIE designs take inspiration from beauty found in nature and water, drawing on softness in its organic and simple form.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="image-description-wrapper graphic">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-6 p-0 order-md-2">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/baril-cul-9250-22l-kl.jpg'?>">
                </div>
            </div>
            <div class="col-md-6 p-0 order-md-1">
                <div class="description-wrap" style="background-color: #03363a;">
                    <div class="graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--graphic-->
                    <h2>VISION VI Single Hole Kitchen Faucet with 2-function Pull-down Spray</h2>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?>

<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        Petite Lavatory Faucet Collection
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Design your bathroom space with delicate and refined lines using the Petite collection. It’s timeless shapes and durable finishes are what make it akin to the classic Little Black Dress. 
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->

<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/baril-B04-1005-00L_KK.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>PETITE</h2>
                                    <h3>Single Hole Lavatory Faucet</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/baril-B04-8100-00L_LL.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>PETITE</h2>
                                    <h3>Single Lever Wall-Mounted Lavatory Faucet</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-description-link-wrapper-->

<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/baril-B04-1100-00_LL.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>PETITE</h2>
                                    <h3>Floor-mounted Tub Filler with Hand Shower</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/baril-PRO-4205-04-CC.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>PETITE</h2>
                                    <h3>Complete Thermostatic Shower Kit</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-description-link-wrapper-->

<section class="banner-logo-wrapper text-center" style="background-color:#03363a" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-blanco.svg'?>" class="svg">
                </div><!--title-wrap-->
            </div>
        </div>
    </div>
</section><!--banner-title-wrapper-->

<section class="inner-main-banner-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-banner-wrap" style="background-color: #e6e6e6;">
                    <div class="graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--graphic-->
                    <div class="image-block">
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-blanco.svg'?>" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--inner-main-banner-wrapper-->

<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        VINTERA 30 Super Single Apron, in White
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Combining modern and timeless elements, Blanco designs bring functional elegance into your home.
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
                    <img src="<?php echo get_template_directory_uri(). '/images/blanco-vintera-30-farmhouse_wh.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>VINTERA 30 Super Single Apron, in White</h2>
                    <p>
                        Inspiration from a classic farmhouse sink brings warmth and softness to complement your modern kitchen design. Made of SILGRANIT, this sink will add elegance to your kitchen with its timeless refreshing white finish. Complete your sink with a Floating Grid and Capflow Strainer Cover.
                    </p>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-vintera-33-50-50-farmhouse-wh.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>VINTERA 33</h2>
                                    <h3>Equal Double Apron, <br>White</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-urbena-chwh.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>URBENA</h2>
                                    <h3>Pull Down 1.5 GPM, <br>Chrome/White</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-liven-ci.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>LIVEN</h2>
                                    <h3>Laundry, <br>Cinder</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-description-link-wrapper-->

<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-performa-UBar-mg.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>PERFORMA U Bar</h2>
                                    <h3>Metallic Gray</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-precis-33-60-40-cb.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>PRECIS U</h2>
                                    <h3>1 3/4, Coal Black</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/blanco-linus-cb.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>LINUS</h2>
                                    <h3>Pull Out 1.5 GPM, <br>Coal Black</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/blanco-quatrusR15.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>QUATRUS R15</h2>
                                    <h3>U Super Single, Stainless Steel</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/blanco-precis_u.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>PRECIS U</h2>
                                    <h3>MAXI, Truffle</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-description-link-wrapper-->

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
                        “Approaching a new kitchen or bathroom design can be intimidating. Our consultants will walk you through the process each step of the way, from picking your products, through to the after-care.”
                    </p>
                    <div class="author">
                        Alan Bloch Co-founder of TAPS Bath
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/alan-bloch.png'?>">
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