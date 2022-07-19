<?php
/*
Template Name: Inspiration Two Template
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
                        Kitchen Inspiration
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
                    <h3>Design Inspiration: Modern Mixes</h3>
                </div><!--title-wrap-->
                <div class="video-wrap">
                    <video muted="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/Traditional-Kitchen-Moodboard-copy.png">
                        <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/04-Traditional-Kitchen-TAPS_KB-1920x1080-1.mp4" type="video/mp4">
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
                        Give your kitchen an array of finishes, textures and shapes to show your diverse style. Don’t be afraid to mix metals and materials! 
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
<?php */ ?>

<?php /* ?>
<section class="left-right-wrapper dark-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-right-content-wrap" style="background-color: #d7d2cd;">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                Dramatic
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Versatile
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Practical
                            </a>
                        </li>
                    </ul>
                </div><!--left-right-content-wrap-->
            </div>
            <div class="col-md-6">
                <div class="left-right-image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/kitchen-inspiration-image.png'?>">
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
                            <img src="<?php echo get_template_directory_uri(). '/images/peak-granite.jpg'?>">
                            <!--<div class="video-wrap">
                                <video muted="" autoplay="" loop="" controls="" poster="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/video-placeholder.png">
                                    <source src="https://lookbook.tapsbath.com/wp-content/uploads/2021/08/TAPS-Home_Page-1920x1080-v1.mp4" type="video/mp4">
                                </video>
                            </div>--><!--video-wrap-->
                            <div class="description">
                                <div class="left">
                                    <h2>Peak Workcenter </h2>
                                    <h3>Undermount Single Bowl Kitchen Sink in Matte Black</h3>
                                    <div class="link">
                                        View more Franke designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-franke-color.svg'?>" class="svg">
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
                        Your kitchen sink can be a versatile space–in design and in purpose. 
                    </p>
                    <p>
                        Mix your finishes and try pairing a matte black faucet with a metal wire rack insert and a wooden over-the-sink cutting board. You’ll create a sink with great flexibility for your cooking and washing needs. 
                    </p>
                </div><!--content-wrap-->
            </div>
        </div>
    </div>
</section><!--full-text-block-wrapper-->
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
                                <img src="<?php echo get_template_directory_uri(). '/images/odin-bar-faucet-with-arc-spout.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>BRIZO ARC</h2>
                                    <h3>Bar Faucet</h3>
                                    <div class="link">
                                        View more Brizo designs
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
                                <img src="<?php echo get_template_directory_uri(). '/images/helm.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>BLANCO PRECIS <span>U 3/4,</span></h2>
                                    <h3>COAL BLACK</h3>
                                    <div class="link">
                                        View more Blanco designs
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
                                <img src="<?php echo get_template_directory_uri(). '/images/brizo-arc.png'?>">
                            </div>
                            <div class="description">
                                <div class="left">
                                    <h2>Aquadesign Top D4 <span>Dual Spray</span> </h2>
                                    <h3>Matte Black Brushed Gold</h3>
                                    <div class="link">
                                        View more Aquadesign designs
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
<section class="full-block-description-wrapper white-text" style="background-color: #03363a;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-wrap">
                    <div class="graphic-image">
                        <img src="<?php echo get_template_directory_uri(). '/images/circle-white-graphic.png'?>">
                    </div><!--graphic-image-->
                    <img src="<?php echo get_template_directory_uri(). '/images/dornbirn-pot-filler.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-6">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-vogt.svg'?>" class="svg">
                </div><!--logo-->
                <div class="title-wrap">
                    <h2>Vogt Dornbirn</h2>
                    <h3>Pot Filler</h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Choosing matte black as the body colour of a faucet, sink or pot fillter gives your kitchen a grounding point. Add in a metallic accent in the handle or spout to take iit from grounding to astounding
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
                    <h3>Design Inspiration: SLEEK & CHIC</h3>
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
                        Create an atmosphere of familiarity with stainless steel and polished chrome finishes for a classic and sleek kitchen design. 
                    </p>
                    <div class="author">
                        Peter <br>TAPS Bath, Toronto
                    </div><!--author-->
                </div><!--content-wrap-->
            </div>
            <div class="col-md-5">
                <div class="author-image">
                    <img src="<?php echo get_template_directory_uri(). '/images/peter.png'?>">
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
<section class="left-right-wrapper dark-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-right-content-wrap" style="background-color: #f2f0f1;">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                Classic 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Elongated
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                Clean
                            </a>
                        </li>
                    </ul>
                </div><!--left-right-content-wrap-->
            </div>
            <div class="col-md-6">
                <div class="left-right-image-wrap">
                    <img src="<?php echo get_template_directory_uri(). '/images/bathroom-inspritaion-image.png'?>">
                </div><!--left-right-image-wrap-->
            </div>
        </div>
    </div>
</section><!--left-right-wrapper-->
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
                    <img src="<?php echo get_template_directory_uri(). '/images/etre.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-6">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-dxv.svg'?>" class="svg">
                </div><!--logo-->
                <div class="title-wrap">
                    <h2>Etra</h2>
                    <h3>Kitchen Faucet</h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Take your kitchen to new heights with a tall arch in your kitchen faucet neck. It helps create the feeling of a larger, more open space. 
                    </p>
                    <div class="link">
                        <a href="javascript:void(0);">
                            View more DXV designs
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
<section class="double-block-description-link-wrapper">
    <div class="container">
        <div class="row g-1">
            <div class="col-md-6 p-1">
                <div class="block-image-link">
                    <a href="javascript:void(0);">
                        <div class="image-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/images/bar-faucet.png'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Etre</h2>
                                    <h3>Bar Faucet</h3>
                                    <div class="link">
                                        View more DXV designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-dxv.svg'?>" class="svg">
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
                            <img src="<?php echo get_template_directory_uri(). '/images/Bar-Island-Faucet-Sink-Dornbirn-Mini-Matte-Black-Stainless-Steel.png'?>">
                            <div class="description">
                                <div class="left">
                                    <h2>Vienna</h2>
                                    <h3>Undermount Single Bowl Sink</h3>
                                    <div class="link">
                                        View more Vogt designs
                                        <img src="<?php echo get_template_directory_uri(). '/images/arrow-right.svg'?>" class="svg">
                                    </div><!--link-->
                                </div>
                                <div class="right">
                                    <img src="<?php echo get_template_directory_uri(). '/images/logo-vogt.svg'?>" class="svg">
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
            <div class="col-md-7">
                <div class="image-wrap">
                    <div class="graphic-image">
                        <img src="<?php echo get_template_directory_uri(). '/images/circle-graphic.png'?>">
                    </div><!--graphic-image-->
                    <img src="<?php echo get_template_directory_uri(). '/images/stainless-steel-sink.png'?>">
                </div><!--image-wrap-->
            </div>
            <div class="col-md-5">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/images/logo-blanco.svg'?>" class="svg">
                </div><!--logo-->
                <div class="title-wrap">
                    <h2>QUATRUS R15 U Super Single,</h2>
                    <h3>Stainless Steel Sink</h3>
                </div><!--title-wrap-->
                <div class="content-wrap">
                    <p>
                        Nothing says timeless quite like a stainless steel kitchen sink. Look for more upgraded features, such as curved edges for cleaning and easy-draining grooves to clear water faster. 
                    </p>
                    <div class="link">
                        <a href="javascript:void(0);">
                            View more Blanco designs
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
?>