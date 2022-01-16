<?php
/**
 * Template Name: Release
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Wordpack Theme
 * @since 1.0.0
 */

get_header(); ?>
    <!--Header image-->
    <div class="content">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url('http://foothills-collective.local/wp-content/uploads/2021/08/Collective-Black-And-White.jpg');
     background-position: center center;
     height: 100%;">
            <div class="pt-20">
                <div class="grid grid-cols-12">
                    <div class=" lg:mx-40 xl:mx-64 bg-white p-5 col-span-12 rounded-lg mx-5">
                        <img class="h-32 w-32 rounded-full mx-auto -mt-20"
                             src="http://foothills-collective.local/wp-content/uploads/2021/08/Collective-Profile-Photo.jpg">
                        <h2 class="text-center pt-5 text-3xl font-bold"><?php the_field('title'); ?></h2>
                        <h2 class="text-center pt-2"><span
                                    class="pr-1"><?php the_field('location_icon'); ?></span><?php the_field('subtitle'); ?>
                        </h2>
                        <h2 class="text-center xl:mx-64 md:mx-40 lg:mx-32 pt-3"><?php the_field('info'); ?></h2>


                        <!--                <div class="text-center">-->
                        <!--                    <a class="bg-black md:p-5 p-3 rounded-full text-white" href="#">-->
                        <!--                    </a>-->
                        <div class="text-center pt-5">
                            <!--  start repeater-->
<?php
//start the repeater loop
if (have_rows('media_icons')):
    //Card start
    //Begin looping data
    while (have_rows('media_icons')) : the_row();
        ?>
                            <a href=" <?php the_sub_field("icon_link"); ?>">
                                <i class="
                                <?php the_sub_field("icon_name"); ?>
                                bg-black md:p-5 p-3 rounded-full text-white"></i></a>

<!--                            END REPEATER-->
    <?php


    endwhile;
else:
    //no rows found
endif;

?>



<!--                            <a href="#"><i-->
<!--                                        class="fab fa-facebook-f bg-black md:px-6 md:py-5 px-4 py-3 rounded-full text-white"></i></a>-->
<!--                            <a href="#"><i class="fab fa-youtube bg-black md:p-5 p-3 rounded-full text-white"></i></a>-->
<!--                            <a href="#"><i class="fab fa-spotify bg-black md:p-5 p-3 rounded-full text-white"></i></a>-->
<!--                            <a href="#"><i class="fas fa-music bg-black md:p-5 p-3 rounded-full text-white"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>


            <div class="md:pt-32 pt-16 pb-20">
                <div class="grid grid-cols-12 md:gap-5 md:gap-y-16 xl:gap-10 xl:gap-y-20 gap-y-6 pb-5 md:mx-5 lg:mx-40 xl:mx-64 mx-5">
                    <?php
                    //start the repeater loop
                    if (have_rows('links')):
                        //Card start
                        //Begin looping data
                        while (have_rows('links')) : the_row();
                            ?>
                            <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3  md:p-0">
                                <a href="#">
                                    <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">
                                        <div class="col-span-3 md:col-span-12 md:-mt-6">
                                            <img src="<?php the_sub_field('social_media_logo'); ?>"
                                                 class="text-6xl inline md:block md:mx-auto ytred w-14">
                                        </div>

                                        <div class="col-span-9 md:col-span-12 social-cards">
                                            <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2 md:pb-5 align-text-bottom"><?php the_sub_field('social_title'); ?></h2>
                                            <h2 class="md:text-center pt-1 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3"><?php the_sub_field('song'); ?></h2>
                                            <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3"><?php the_sub_field('decoration'); ?></h2>
                                            <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-16"><?php the_sub_field('social_info'); ?></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php


                        endwhile;
                    else:
                        //no rows found
                    endif;

                    ?>

                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                            <div class="col-span-3 md:col-span-12 md:-mt-8">-->
                    <!--                                <img src="http://foothills-collective.local/wp-content/uploads/2021/08/Spotify.png" class="text-6xl inline md:block spotgreen w-14 md:mx-auto">-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="col-span-9 md:col-span-12">-->
                    <!--                                <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">Spotify</h2>-->
                    <!--                                <h2 class="md:text-center pt-3 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3 md:pt-5">Even If He Doesn't</h2>-->
                    <!--                                <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3">-</h2>-->
                    <!--                                <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0 ">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                            <div class="col-span-3 md:col-span-12 md:-mt-8 ">-->
                    <!--                                <img src="http://foothills-collective.local/wp-content/uploads/2021/08/Apple_Music.png" class="text-6xl inline md:block md:text-center appred w-14 md:mx-auto">-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="col-span-9 md:col-span-12">-->
                    <!--                                <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">Apple Music</h2>-->
                    <!--                                <h2 class="md:text-center pt-3 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3 md:pt-5">Even If He Doesn't</h2>-->
                    <!--                                <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3">-</h2>-->
                    <!--                                <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0 ">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                            <div class="col-span-3 md:col-span-12 md:-mt-8">-->
                    <!--                                <i class="inline md:block md:text-center fab fa-amazon amazonlogo"></i>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <div class="col-span-9 md:col-span-12">-->
                    <!--                                <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-3">Amazon</h2>-->
                    <!--                                <h2 class="md:text-center pt-3 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3 md:pt-5">Even If He Doesn't</h2>-->
                    <!--                                <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3">-</h2>-->
                    <!--                                <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                                <div class="col-span-3 md:col-span-12 md:-mt-8 ">-->
                    <!--                                    <img src="http://foothills-collective.local/wp-content/uploads/2021/08/Apple_Music.png" class="text-6xl inline md:block md:text-center appred w-14 md:mx-auto">-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-span-9 md:col-span-12">-->
                    <!--                                    <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">iTunes</h2>-->
                    <!--                                    <h2 class="md:text-center pt-3 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3 md:pt-5">Even If He Doesn't</h2>-->
                    <!--                                    <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3">-</h2>-->
                    <!--                                    <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-4 pt-3 pb-3 md:p-0">-->
                    <!--                        <a href="#"><div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                                <div class="col-span-3 md:col-span-12 md:-mt-6 pt-2">-->
                    <!--                                    <img src="http://foothills-collective.local/wp-content/uploads/2021/08/yt_icon_rgb.png" class="text-6xl inline md:block md:mx-auto ytred w-14">-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-span-9 md:col-span-12">-->
                    <!--                                    <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">YouTube</h2>-->
                    <!--                                    <h2 class="md:text-center pt-0 uppercase mx-1 text-sm font-bold col-span-8 md:pb-2 md:pt-2">Subscribe to our YouTube Channel</h2>-->
                    <!--                                    <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-2">-</h2>-->
                    <!--                                    <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                                <div class="col-span-3 md:col-span-12 md:-mt-8">-->
                    <!--                                    <img src="http://foothills-collective.local/wp-content/uploads/2021/08/GRADIENT_3.png" class="text-6xl inline md:block spotgreen w-14 md:mx-auto">-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-span-9 md:col-span-12">-->
                    <!--                                    <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">Collective</h2>-->
                    <!--                                    <h2 class="md:text-center pt-0 uppercase mx-1 text-sm font-bold col-span-8 md:pb-2 md:pt-2">Continue to Foothills Church</h2>-->
                    <!--                                    <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-2">-</h2>-->
                    <!--                                    <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="bg-white col-span-12 md:col-span-3 lg:col-span-3 rounded-lg p-3 md:p-0 ">-->
                    <!--                        <a href="#"> <div class="grid grid-cols-12 transition duration-300 ease-in-out hover-text">-->
                    <!--                                <div class="col-span-3 md:col-span-12 md:-mt-8">-->
                    <!--                                    <img src="http://foothills-collective.local/wp-content/uploads/2021/08/GRADIENT_3.png" class="text-6xl inline md:block spotgreen w-14 md:mx-auto">-->
                    <!--                                </div>-->
                    <!---->
                    <!--                                <div class="col-span-9 md:col-span-12">-->
                    <!--                                    <h2 class="md:text-center text-sm text-gray hidden md:block md:pt-2">Merch</h2>-->
                    <!--                                    <h2 class="md:text-center pt-3 uppercase mx-1 text-sm font-bold col-span-8 md:pb-3 md:pt-5 md:mx-2">View our Merch</h2>-->
                    <!--                                    <h2 class="md:text-center uppercase mx-1 text-sm font-bold hidden md:block md:pb-3">-</h2>-->
                    <!--                                    <h2 class="md:text-center md:mx-4 mx-1 text-xs col-span-8 md:pb-8">Song Story Available Now</h2>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!--                </div>-->

                </div>
            </div>

        </div>

    </div>
    </div>
    </div>


<?php get_footer();
