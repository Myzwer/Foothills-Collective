<?php
/**
 * The template for displaying 404 pages (not found)
 * Page design by: https://codepen.io/johnfinkdesign/pen/XjkBPE?editors=1100
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpack-theme
 */

get_header();
?>

    <div class="error-page">
        <div>
            <h1 data-h1="404">404</h1>
            <p data-p="NOT FOUND">NOT FOUND</p>
            <p class="sorry">Sorry this page does not exist.</p>
        </div>
    </div>

<div class="container-404">
        <div class="button-404">
            <a class="back" href="#">GO BACK</a>
        </div>
</div>


<?php
get_footer();
