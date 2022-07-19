<?php
/*
Template Name: Brizo and Franke Template
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
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-brizo.svg'?>" class="svg">
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
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-brizo.svg'?>" class="svg">
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
                        Brizo - Break with Tradition
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        The Frank Lloyd Wright Bath Collection by Brizo embraces and honours the architect’s visionary spirit by challenging conventional design.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/brizo-frank-tight-water.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>Frank Lloyd Wright® Bath Collection by Brizo® Single-Handle Lavatory Faucet</h2>
                    <p>
                        Invite the legacy of Frank Lloyd Wright into your bathroom with this stunningly imaginative faucet design. With a nod to organic architecture, it features a cantilevered, teakwood spout that gives water an avante garde exit.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="triple-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-4 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/images/brizo-odin.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Brizo® Odin®</h2>
                                    <h3>Kitchen Collection SmartTouch® Semi-Professional Kitchen Faucet</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/brizo-litze.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Brizo® Litze®</h2>
                                    <h3>Kitchen Collection Pull-Down Faucet with Angled Spout and Knurled Handle</h3>
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
                                <img src="<?php echo get_template_directory_uri(). '/images/brizo-hansgrohe.jpg'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Hansgrohe Talis N</h2>
                                    <h3>HighArc Kitchen Faucet in Matte Black</h3>
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
<section class="banner-logo-wrapper text-center" style="background-color:#03363a" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-franke-black.svg'?>" class="svg">
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
                        <img src="<?php echo get_template_directory_uri(). '/images/logo-franke-black.svg'?>" class="svg">
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
                        Franke - Calling all Chefs
                    </h2>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Take your culinary experience to the next level with kitchen workstations that are cleverly designed to make practical, a pretty extraordinary experience.
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="image-description-wrapper">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-8 p-0">
                <div class="image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/franke-maris_wkc.jpg'?>">
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="description-wrap" style="background-color: #03363a;">
                    <h2>Maris Workcenter Undermount Single Bowl Kitchen Sink</h2>
                    <p>
                        You’ll love having a sink that has it all in your kitchen. Designed to accommodate an ever-adapting kitchen, this well-equipped and multi-functional workspace will upgrade your culinary experience to wash, chop, prep, clean and more.
                    </p>
                    <p>
                        Available in 6 finishes
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--image-description-wrapper-->
<?php */ ?>

<?php /* ?>
<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/franke-peak-granite.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Peak <span>Workcenter Undermount</span></h2>
                                    <h3>Single Bowl Kitchen Sink. Available in 7 finishes</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/franke-pro2.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Professional <span>2.0 Workcenter Stainless Steel</span></h2>
                                    <h3>Undermount Single Bowl Kitchen Sink</h3>
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
<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/franke-pescara.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Pescara <span>Stainless Steel</span></h2>
                                    <h3>Undermount Single Bowl Kitchen Sink</h3>
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
                            <img src="<?php echo get_template_directory_uri(). '/images/franke-steel-series.jpg'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Steel Series <span>Single Handle Pull-Down</span></h2>
                                    <h3> Kitchen Faucet, Champagne Gold</h3>
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