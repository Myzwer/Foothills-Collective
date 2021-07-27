<?php
/**
 * The template for displaying the about us page
 *
 * Template Name: about
 *
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpack-theme
 */

get_header();
?>
    <div class="content">
        <div class="bg-no-repeat bg-scroll bg-cover relative" style="background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url('https://images.unsplash.com/photo-1522158637959-30385a09e0da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2850&q=80');
     background-position: center center;
     height: 60vh;">

            <div class="content-middle text-white text-center">
                <h1 class="text-4xl mb-5">About</h1>
            </div>
        </div>
<div class="mx-5 md:mx-64">
        <h1 class="text-center text-2xl md:text-7xl pt-5 md:pb-8 md:pt-10 "><?php the_field('title'); ?></h1>
        <hr class="pb-8">
        <h2 class="text-lg md:text-3xl md:text-center leading-6 pt-3 pb-10 md:pb-20 "><?php the_field('subtitle'); ?></h2>

        <p class="font-bold pb-3 md:pb-1 "><?php the_field('bodyhead-1'); ?></p>
        <p class="pb-8 md:pb-16 "><?php the_field('body-1'); ?></p>

        <p class="font-bold pb-3 md:pb-1"><?php the_field('bodyhead-2'); ?></p>
        <p class="pb-8 md:pb-16"><?php the_field('body-2'); ?></p>

        <p class="font-bold pb-3 md:pb-1"><?php the_field('bodyhead-3'); ?></p>
        <p class="pb-8 md:pb-16"><?php the_field('body-3'); ?></p>
</div>
    </div>


<?php get_footer();

