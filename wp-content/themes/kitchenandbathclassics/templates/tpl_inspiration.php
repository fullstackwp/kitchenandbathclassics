<?php
/*
Template Name: Inspiration Template
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
<section class="banner-title-wrapper text-center" style="background-color:#03363a" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h1>
                        Bathroom Inspiration
                    </h1>
                </div><!--title-wrap-->
            </div>
        </div>
    </div>
</section><!--banner-title-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="video-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>Design Inspiration: Natural Influence</h3>
                </div><!--title-wrap-->
                <div class="video-wrap">
                    <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                        <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                    </video>
                </div><!--video-wrap-->
            </div>
        </div>
    </div>
</section><!--video-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="testimonial-wrapper dark-text mb-0" style="background-color:#ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <p>
                        Explore the natural world to add warmth and calm to your kitchen and bathroom. From wood finishes to the gentle touch of a rain showerhead, you can bring the outside in. 
                    </p>
                    <div class="author">
                        Carol-Lynn <br>TAPS Bath, Toronto
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/Carol-Lynn.png'?>">
                </div><!--author-image-->
            </div>
        </div>
    </div>
    <div class="right-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic-2.png'?>">
    </div><!--right-graphic-->
</section><!--testimonial-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="left-right-wrapper white-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-right-content-wrap" style="background-color: #03363a;">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                Earthy
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Architectural 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Relaxing
                            </a>
                        </li>
                    </ul>
                </div><!--left-right-content-wrap-->
            </div>
            <div class="col-md-6">
                <div class="left-right-image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/bathroom-inspiration-image.png'?>">
                </div><!--left-right-image-wrap-->
            </div>
        </div>
    </div>
</section><!--left-right-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="single-block-description-link-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/tight-water.jpg'?>">
                            <!--<div class="video-wrap">
                                <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                                    <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                                </video>
                            </div>--><!--video-wrap-->
                            <div class="description">
                                <div class="left">
                                    <h2>Frank Lloyd Wright® Bath Collection by Brizo®</h2>
                                    <h3>Single-Handle Lavatory Faucet</h3>
                                    <div class="link">
                                        View all Kohler designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-brizo.svg'?>" class="svg">
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--single-block-description-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-wrap">
                    <p>
                    Infuse the legacy of architect Frank Lloyd Wright into your home with this lavatory faucet. The cantilevered, teakwood spout gives water an avant garde exit, and highlights its organic architecture.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
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
                                    <h2>SONIA Evolve 48”</h2>
                                    <h3>Vanity</h3>
                                    <div class="link">
                                        View more Aquadesign designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-aquadesign.svg'?>" class="svg">
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
                                    <h2>Simas Vignoni </h2>
                                    <h3>One Piece Elongated Toilet</h3>
                                    <div class="link">
                                        View more AD Waters designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-ad-water.svg'?>" class="svg">
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

<?php /* ?>
<section class="full-block-description-wrapper white-text" style="background-color: #03363a;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-wrap">
                    <div class="graphic-image">
                        <img src="<?php echo get_template_directory_uri(). '/images/circle-graphic.png'?>">
                    </div><!--graphic-image-->
                    <img src="<?php echo get_template_directory_uri(). '/images/vogt-kapfenberg.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-6">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-vogt.svg'?>" class="svg">
                </div><!--logo-->
                <div class="title-wrap">
                    <h2>Kapfenberg</h2>
                    <h3>Shower Set</h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Immerse yourself ina rainhead shower experience, complete with a handheld showerhead and individual controls.
                    </p>
                    <div class="link">
                        <a href="javascript:void(0);">
                            View more Vogt designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </a>
                    </div><!--link-->
                </div>
            </div>
        </div>
    </div>
</section><!--full-block-description-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="video-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>Design Inspiration: Black & White</h3>
                </div><!--title-wrap-->
                <div class="video-wrap">
                    <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                        <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                    </video>
                </div><!--video-wrap-->
            </div>
        </div>
    </div>
</section><!--video-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="testimonial-wrapper dark-text mb-0" style="background-color:#ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <p>
                        Approach a black and white bathroom in a new way. Use small details like abstract sink handles or patterned tiles to stand out against single toned finishes. 
                    </p>
                    <div class="author">
                        Dominic <br>TAPS Bath, Toronto
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

<?php /* ?>
<section class="left-right-wrapper white-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-right-content-wrap" style="background-color: #292929;">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                Sophisticated 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Unexpected
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Organic
                            </a>
                        </li>
                    </ul>
                </div><!--left-right-content-wrap-->
            </div>
            <div class="col-md-6">
                <div class="left-right-image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/bathroom-inspiration-image-1.png'?>">
                </div><!--left-right-image-wrap-->
            </div>
        </div>
    </div>
</section><!--left-right-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="single-block-description-link-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/tight-water.jpg'?>">
                            <!--<div class="video-wrap">
                                <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                                    <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                                </video>
                            </div>--><!--video-wrap-->
                            <div class="description">
                                <div class="left">
                                    <h2>Libra Oval 6635</h2>
                                    <h3>Freestanding Bath</h3>
                                    <div class="link">
                                        View more Bain Ultra designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-bain-ultra.svg'?>" class="svg">
                                </div>
                            </div><!--description-->
                        </div><!--image-wrap-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--single-block-description-link-wrapper-->
<?php  */ ?>

<?php /* ?>
<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/shpwer-kit.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>AD WATERS Shower Kit </h2>
                                    <h3>Electro Black</h3>
                                    <div class="link">
                                        View more AD Waters designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
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
                                <img src="<?php echo get_template_directory_uri(). '/images/tub-filler.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>VOGT Wörgl </h2>
                                    <h3>Tub Filler</h3>
                                    <div class="link">
                                        View more Vogt designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
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
                                <img src="<?php echo get_template_directory_uri(). '/images/faucet.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>RUBINET Nouveau</h2>
                                    <h3>Widespread Lavatory Faucet</h3>
                                    <div class="link">
                                        View more Rubinet designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
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

<?php /* ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content-wrap">
                    <p>
                        Carry the bold look of matte black into a shower system. Pair together with a black and white tile or a high-gloss white tile for impact. 
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="full-block-description-wrapper white-text" style="background-color: #03363a;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-wrap">
                    <div class="graphic-image">
                        <img src="<?php echo get_template_directory_uri(). '/images/circle-graphic.png'?>">
                    </div><!--graphic-image-->
                    <img src="<?php echo get_template_directory_uri(). '/images/dual-flush-toilet.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-6">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-toto.svg'?>" class="svg">
                </div><!--logo-->
                <div class="title-wrap">
                    <h2>Neorest® NX2</h2>
                    <h3>Dual Flush Toilet</h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Create a softer feeling in a high-contrast bathroom by choosing fixtures and faucets with organic shapes and cured edges. 
                    </p>
                    <div class="link">
                        <a href="javascript:void(0);">
                            View more TOTO designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </a>
                    </div><!--link-->
                </div>
            </div>
        </div>
    </div>
</section><!--full-block-description-wrapper-->
<?php */ ?>

<?php /* ?>
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

<?php /* ?>
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

<?php /* ?>
<section class="testimonial-wrapper dark-text mb-0" style="background-color:#ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="content-wrap">
                    <p>
                        “Uplift your home with new comforts for your kitchen and bathroom. This year, discover world-class designs influenced by nature, organic shapes and architecture, with each selection enhancing overall wellbeing.” 
                    </p>
                    <div class="author">
                        Asha Menon <br>TAPS Bath, Mississauga
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/Asha-menon.png'?>">
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