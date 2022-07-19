<?php
/**
 * 
 *
 * The front page template file
 *
 * This template is used to render the site’s front page, and will
 * override the setting for showing the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tapsbath
 */

get_header();
    while( have_posts() ): the_post();
        if ( have_rows( 'page_builder' ) ) :
            while ( have_rows( 'page_builder' ) ) : the_row();
                $layout = get_row_layout();
                get_template_part( 'template-parts/acf/page-builder/pb', $layout );
            endwhile;
        endif; 
    
?>

<?php /* ?>
<section class="banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-content">
                    <div class="image-wrap">
                        <img src="<?php echo get_template_directory_uri(). '/images/main-banner-image.jpg'?>">
                    </div><!--image-wrap-->
                    <div class="banner-text">
                        <div class="title-wrap">
                            <h1>Elevated <br>Living</h1>
                        </div><!--title-wrap-->
                        <div class="content">
                            <p>2022 Fall/Winter Lookbook</p>  
                        </div><!--content-->
                    </div><!--banner-text-->
                    <div class="banner-graphic">
                        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
                    </div><!--banner-graphic-->
                </div><!--banner-content-->
                <div class="video-wrap">
                    <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                        <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                    </video>
                </div><!--video-wrap-->
            </div>
        </div>
    </div>
</section><!--banner-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        Take Your Home to the Next Level 
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        There’s no time like the present to take your home to the next level. From adding flair to a classic to the latest style innovations, discover new and notable kitchen and bathroom designs that will raise the bar in any room.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="image-block-link-wrapper bb-1">
    <div class="container">
        <div class="row align-items-center justify-content-center g-1">
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
<section class="single-block-link-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/Bathroom-Matte-Black-Stainless-Steel-Zehn-Vogt.jpg'?>">
                            
                            <div class="description">
                                <h2>Now Available at TAPS!</h2>
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-the-bold-look-of-kohler.svg'?>" class="svg">
                            </div><!--description-->
                        </div><!--image-wrap-->
                        <!--<div class="video-wrap">
                            <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                                <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                            </video>
                        </div>--><!--video-wrap-->
                        <div class="link">
                            View all Kohler designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--single-block-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="double-block-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/toto.jpg'?>" alt="toto">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-toto.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all TOTO designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/watert-ad.jpg'?>" alt="watert-ad">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-ad-water.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all AD Waters designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="double-block-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/dxv-design.jpg'?>" alt="dxv-design">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-dxv.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all DXV designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/bathroom-Vogt.jpg'?>" alt="bathroom-Vogt">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-vogt.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Vogt designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="double-block-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/aquadesign.jpg'?>" alt="aquadesign">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-aquadesign.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Aquadesign designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/house-of-roll.jpg'?>" alt="house-of-roll">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-house-of-rohl.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all House of Roll designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--double-block-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="cta-wrapper text-center white-text" style="background-color:#03363a;">
    <div class="left-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
    </div><!--left-graphic-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h2>
                        Uplift the Interior
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Make any space feel clean and sophisticated with metal <br>finishes and lean shapes. Elongated design elements will uplift <br>the eye and your interior.
                    </p>
                    <div class="button">
                        <a href="javascript:void(0);" class="btn btn-dark">Kitchen Inspiration</a>
                        <a href="javascript:void(0);" class="btn btn-dark">Bathroom Inspiration</a>
                    </div><!--button-->
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
    <div class="right-graphic">
        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
    </div><!--right-graphic-->
</section><!--cta-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="full-text-block-wrapper text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap">
                    <h3>
                        A Simple Design Recipe
                    </h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Give your kitchen or bathroom a boost with a range of textures to reflect your unique style. Like the best meals, multiple ingredients will create the perfect recipe for design.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="triple-block-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/brizo.jpg'?>" alt="brizo">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-brizo.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Brizo designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/bain-ultra.jpg'?>" alt="bain-ultra">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-bain-ultra.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Bain Ultra designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/blanco.jpg'?>" alt="blanco">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-blanco.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Blanco designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="triple-block-title-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-12 p-1">
                <div class="title-wrap">
                    <h3>
                        Black and White Wonder
                    </h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Rethink your approach to black and white. Give these contrasting classics a lift by exploring the possibility of abstract touches, modern designs, and calming elements.
                    </p>
                </div><!--content-wrap-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/brizo.jpg'?>" alt="brizo">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-franke-black.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Franke designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/bain-ultra.jpg'?>" alt="bain-ultra">
                            <div class="logo bottom">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-rubinet.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Rubinet designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/blanco.jpg'?>" alt="blanco">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(). '/images/logo-baril.svg'?>" class="svg">
                            </div><!--logo-->
                        </div><!--image-wrap-->
                        <div class="link">
                            View all Baril designs
                            <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                        </div><!--link-->
                    </a>
                </div><!--block-image-link-->
            </div>
        </div>
    </div>
</section><!--triple-block-title-link-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="testimonial-wrapper white-text" style="background-color:#03363a;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="title-wrap">
                    <h2>
                        Find Design Inspiration
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        “Approaching a new kitchen or bathroom design can be intimidating. Our consultants will walk you through the process each step of the way, from picking your products, through to the after-care.”
                    </p>
                    <div class="author">
                        Alan Bloch, <br>Co-founder of TAPS Bath
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
        <img src="<?php echo get_template_directory_uri(). '/images/graphic.png'?>">
    </div><!--right-graphic-->
</section><!--testimonial-wrapper-->
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
    endwhile;
get_footer();
?>