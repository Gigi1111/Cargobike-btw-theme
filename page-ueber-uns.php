<?php
/**
 * Template Name: Home Page
 */
$prelaunch_price    = get_post_meta(11, 'prelaunch_price', true);
$launch_price       = get_post_meta(11, 'launch_price', true);
$final_price        = get_post_meta(11, 'final_price', true);
$course_url         = get_post_meta(11, 'course_url', true);
$button_text        = get_post_meta(11, 'button_text', true);
$optin_text         = get_post_meta(11, 'optin_text', true);
$optin_button_text    = get_post_meta(11, 'optin_button_text', true);
//post, key, true means single false set

$greetings_content  = get_field('greetings_content');
$news_content  = get_field('news_content');

// advanced Custom Fields
$premium_service_feature_image   = get_field('premium_service_feature_image');
$premium_service_section_title   = get_field('premium_service_section_title');
$premium_service_section_desc    = get_field('premium_service_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');
$reason_3_title         = get_field('reason_3_title');
$reason_3_desc          = get_field('reason_3_description');


$who_feature_image      = get_field('who_feature_image');
$who_section_title      = get_field('who_section_title');
$who_section_body      = get_field('who_section_body');


$features_section_image      = get_field('features_section_image');
$features_section_title      = get_field('features_section_title');
$features_section_body      = get_field('features_section_body');

$twitter    = get_post_meta(11, 'twitter', true);
$facebook       = get_post_meta(11, 'facebook', true);
$instagram        = get_post_meta(11, 'instagram', true);

$brand_logo    			= get_field('header_logo');
$brand_name       = get_field('header_brand_name');

get_header();
?>


    <!-- HERO
    ================================================== -->
    <section id="hero" style="height: 50vw; overflow: hidden;">
            <div class="container clearfix">
                <!-- The video -->
                <video autoplay muted loop id="videoPlayer" style="width:100vw;position: absolute; left: 0; top: -40px;" poster="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/image-relax.jpg">
                    <source src="<?php bloginfo('stylesheet_directory');?>/assets/img/brand-image/cargobike_hero_reel.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="overlay" style="width: 100vw; position: absolute; left: 0; top: 0; content: ' '; height: 50vw; background: rgba(0,0,0,0.2);">
                     <?php
                        get_template_part( 'template-parts/hero', 'content' );
                        ?>
                </div>

                
            </div>
            <!-- container -->
    </section>

      <!-- quote
    ================================================== -->
    <section id="instructor" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 left">
                    <blockquote class="wp-block-quote is-style-large">
                    <span class="" style="font:bold 84px / 5px 'Noe Display'">“</span>
                        <p> <?php echo $news_content; ?></p>
                        <cite class=""><a href="https://www.tagesspiegel.de/" onclick="javascript:window.open('https://www.tagesspiegel.de/'); return false;">Tagesspiegel</a></cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
   


     <!-- INSTRUCTOR
	================================================== -->
    <section id="instructor" >
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-6 left">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php echo $greetings_content; ?>
                        <div class="">
                        <?php if(!empty($twitter)): ?>
                            <a href="<?php echo $twitter; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($facebook)): ?>
                            <a href="<?php echo $facebook; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                        <?php endif; ?>
                        <?php if(!empty($instagram)): ?>
                            <a href="<?php echo $instagram; ?>" class="badge social instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                        </div>
                        
                    </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- end col -->
                <div class="col-sm-8 col-md-6 right"  style="background: white url(/wp-content/themes/btw_underscore/assets/img/image-relax.jpg) 50% 99% no-repeat;
                    height: 485px;
                    width: 485px;
                    border-radius: 250px;
                    background-size: cover;
                    border: white 15px solid;
                    margin-left: 100px;">
                </div>
                <!-- end col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- instructor -->
  

     <!-- COURSE FEATURES
	================================================== -->
    <section id="course-features">
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <!-- <?php if(!empty($features_section_image)): ?>
                    <img src="<?php  echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
                <?php endif; ?> -->
                
                <h2><?php echo $features_section_title; ?></h2>
                <?php if(!empty($features_section_body)): ?>
                        <p class="lead"><?php echo $features_section_body;?></p>
                <?php endif; ?>
            </div>
            <!-- section-header -->

            <div class="row">
                <?php $loop = new WP_Query(array('post_type'=>'course_feature','orderby'=>'post_id','order'=>'ASC'));?>
                <?php while($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-2">
                        <!-- <i class="<?php the_field('course_feature_icon');?>"></i> -->
                        <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/<?php the_field('course_feature_icon_url');?>" alt="Design" style="width:50px; height:50px" >
                        <h4><?php the_title(); ?></h4>
                    </div>
                    <!-- end col -->
                <?php endwhile; ?>
            </div>
            <!-- row -->
            
        </div>
        <!-- container -->
    </section>
    <!-- course-features -->



     <!-- PROJECT FEATURES
	================================================== -->
    <section id="project-features">
        <div class="container">

            <h2>Was macht Cargobike Adventures so besonders?</h2>
            <p class="lead">Gemeinsam entlasten wir Städte, Straßen und den Himmel. Wir bieten euch ein nie dagewesenes Konzept von Aktivurlaub.</p>

            <div class="row">
                <div class="col-sm-4">
                    <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-design.png" alt="Design"> -->
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/specialty-berlin2.png" alt="Design" style=" padding: 15px;">
                    <!-- <h3>Sexy &amp; Modern Design</h3> -->
                    <p>Zentraler Pick-Up und Drop-Off im MotionLab Berlin-Treptow</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-code.png" alt="Code"> -->
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/specialty-chair.png" alt="Code"> 
                    <!-- <h3>Quality HTML5 &amp; CSS3</h3> -->
                    <p>Ausführliche Einführung in Bike und Equipment bei Anmietung</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="CMS"> -->
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/specialty-wheel.png" alt="CMS">
                    <!-- <h3>Easy-to-use CMS</h3> -->
                    <p>Neueste Modelle an Bikes und Zubehör, garantiert frisch gewartet und desinfiziert</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="CMS"> -->
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/specialty-leaf.png" alt="CMS" style="padding: 8px;">
                    <!-- <h3>Easy-to-use CMS</h3> -->
                    <p>CO2 neutrales und somit emissionsfreies Reisen - so schont ihr die Umwelt</p>
                </div>
                <!-- col -->
                <div class="col-sm-4">
                    <!-- <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/icon-cms.png" alt="CMS"> -->
                    <img src="<?php bloginfo('stylesheet_directory');?>/assets/img/specialty-cycle2.png" alt="CMS">
                    <!-- <h3>Easy-to-use CMS</h3> -->
                    <p>Alle unsere Partner verschreiben sich in höchstem Maße Nachhaltigkeit und Transparenz im Wirtschaftskreislauf</p>
                </div>
                <!-- col -->

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- project-features -->

    
    <!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
        <div class="container">
            <div class="row">

                <div class="col-sm-8">
                    <p class="lead"><?php echo $optin_text; ?></p>
                </div>
                <!-- end col -->

                <div class="col-sm-4">
                    <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button_text; ?>
					</button>
                </div>
                <!-- end col -->

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- optin -->


    <!-- BOOST YOUR INCOME
	================================================== -->
    <section id="boost-income">
        <div class="container">

            <div class="section-header">
                <!--if user uploaded an image -->
                <?php if(!empty($premium_service_feature_image)): ?>
                    <img src="<?php  echo $premium_service_feature_image['url']; ?>" alt="<?php echo $premium_service_feature_image['alt']; ?>">
                <?php endif; ?>
                
                <h2><?php echo $premium_service_section_title; ?></h2>
            </div>
            <!-- section-header -->

            <p class="lead"><?php echo $premium_service_section_desc; ?></p>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php echo $reason_1_title; ?></h3>
                    <p><?php echo $reason_1_desc; ?></p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>
                    <p><?php echo $reason_2_desc; ?></p>
                </div>
                <!-- end col -->

                <div class="col-sm-6">
                <h3><?php echo $reason_3_title; ?></h3>
                    <p><?php echo $reason_3_desc; ?></p>
                </div>
                <!-- end col -->
            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>
    <!-- boost-income -->


  



<?php
get_footer();
?>
