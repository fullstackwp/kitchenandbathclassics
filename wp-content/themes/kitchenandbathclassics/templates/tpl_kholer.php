<?php
/*
Template Name: Kholer Template
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

<?php /*  ?>
<section class="banner-logo-wrapper text-center" style="background-color:#03363a" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-the-bold-look-of-kohler.svg'?>" class="svg">
                </div><!--title-wrap-->
            </div>
        </div>
    </div>
</section><!--banner-title-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="inner-main-banner-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-banner-wrap" style="background-color: #e6e6e6;">
                    <div class="graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--graphic-->
                    <div class="image-block">
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-the-bold-look-of-kohler.svg'?>" class="svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--inner-main-banner-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        Kohler - Make a Statement 
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Designed with your well-being in mind, the Kohler Statement Collection will enable you to take your showering experience to new heights. Inspired by iconic domestic furnishing, forms and finishes, each shower piece features Katalyst™ Technology—air infused droplets that drench and cling to the body for a comfortable embrace.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/kohler-image.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>
                        Statement Showering Collection
                    </h2>
                    <div class="image-wrap">
                        <img src="<?php echo get_template_directory_uri(). '/images/kohler-small-image.png'?>">
                    </div>
                    <p>
                        Oval 14” two-function rainhead 
                        with Katalyst® air-induction technology
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-rainhead.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Statement™ <span>Round 10” rainhead with Katalyst® air-induction technology</span></h2>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-handshower.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Statement™ <span>Oval multifunction handshower with Katalyst® air-induction technology</span></h2>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-body-spray.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Statement™ <span>Oblong Vichy body spray</span></h2>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-description-link-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/kohler-image-1.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>
                        Statement™
                        Oval 14” two-function rainhead with Katalyst® 
                        air-induction technology
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>
                        Artifacts Kitchen Faucet Collection
                    </h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Enjoy the timeliness design of the Artifacts Kitchen Faucet collection. Whether you like to use your faucet traditionally, or choose to pair it with voice-activated technology, you’ll be treated to unmatched craftsmanship and delight with each use. 
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/sonia-evolve.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h3>Touchless pull-down kitchen sink faucet</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/Simas_lifestyle.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h3>Kitchen sink faucet with KOHLER® Konnect™ and voice-activated technology</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-description-link-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-compact.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>San Souci® Comfort Height® </h2>
                                    <h3>One-piece compact elongated chair height toilet</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-vanity.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Tresham</h2>
                                    <h3>30” vanity</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-vanity-top.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Ceramic/Impressions® </h2>
                                    <h3>31” rectangular vanity-top bathroom sink, single faucet hole</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-description-link-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-undermount.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Ironridge</h2>
                                    <h3>Undermount single-bowl farmhouse kitchen sink</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-faucet.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Hint</h2>
                                    <h3>Single-Handle bathroom sink faucet</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/kohler-faucet-pulldown.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Crue</h2>
                                    <h3>Pull down single-handle kitchen sink faucet</h3>
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-description-link-wrapper-->
<?php */ ?> 

<?php /*  ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>
                        Design Your Kitchen or Bathroom with KOHLER
                    </h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Explore more products and collections from KOHLER at your local TAPS Showoom. Our showroom consultants are here to help you with your next project or renovation. 
                    </p>
                    <div class="button">
                        <a href="javascript:void(0);" class="btn btn-red">Book a Free Consultation</a>
                    </div><!--button-->
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?> 

<?php /*  ?>
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
<?php */ ?> 

<?php /*  ?>
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
<?php */ ?> 

<?php /*  ?>
<section class="testimonial-wrapper dark-text mb-0" style="background-color:#ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <p>
                        “Whether you’re living in your home long-term or are planning on spending a few years only, it’s important to design your kitchen and bathrooms for your lifestyle needs. Think about your daily routines and how you can improve each day with upgrades around the home” 
                    </p>
                    <div class="author">
                        Dominic, TAPS Bath, Toronto
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/dominic.png'?>">
                </div><!--author-image-->
            </div>
        </div>
    </div>
    <div class="right-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic-2.png'?>">
    </div><!--right-graphic-->
</section><!--testimonial-wrapper-->
<?php */ ?> 

<?php
get_footer();
?>