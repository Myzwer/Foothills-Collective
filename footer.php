<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Collective
 */
?>
<footer class="footer">
    <div class="bg-black grid grid-cols-12 uppercase pt-5 md:pl-60 footer-contain">
        <div class="col-span-8 md:col-span-2 mx-4 footer-col">
        <ul class="pb-5">
            <?php
            wp_nav_menu(array ('theme_location' => 'footer-column-1'));
            ?>
        </ul>
        </div>
        <div class="col-span-8 md:col-span-2 mx-4 footer-col">
            <ul class="pb-5">
                <?php
                wp_nav_menu(array ('theme_location' => 'footer-column-2'));
                ?>
            </ul>
        </div>
        <div class="col-span-8 md:col-span-2 mx-4 footer-col>
            <ul class="">
                <?php
                wp_nav_menu(array ('theme_location' => 'footer-column-3'));
                ?>
            </ul>
        </div>
    </div>
</footer>




<?php wp_footer(); ?>


