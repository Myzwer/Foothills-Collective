<?php
/**
 * The template for displaying the contact page
 *
 * Template Name: Contact
 *
 *
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
            <h1 class="text-center font-bold text-xl md:text-xl pt-5 md:pb-3 md:pt-10 "><?php the_field('title1'); ?></h1>
            <h2 class=" text-center leading-6 pt-3 pb-10 md:pb-7"><?php the_field('subtitle1'); ?></h2>

            <hr class="opacity-20">

            <h1 class="text-center font-bold text-xl md:text-xl pt-5 md:pt-7 md:pb-3"><?php the_field('title2'); ?></h1>
            <h2 class="  text-center leading-6 pt-3 pb-10 "><?php the_field('subtitle2'); ?></h2>

        </div>
    </div>





        <?php if (have_posts()) : while (have_posts()) : the_post();
            the_content();
        endwhile;
        else: ?>
            <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>




<?php get_footer();
