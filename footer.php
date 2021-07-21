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
<footer class="bg-black text-white pt-12 pb-8 px-4">
    <div class="container overflow-hidden flex flex-col lg:flex-row justify-between mx-auto px-4 hoverfooter">
        <div class="w-3/4 block sm:flex text-sm mt-6 lg:mt-0">
            <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Product</li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Features</a></li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Integrations</a></li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Pricing</a></li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">FAQ</a></li>
            </ul>
            <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Company</li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Privacy</a>
                </li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Terms of Service</a></li>
            </ul>
            <ul class="text-gray-700 list-none p-0 font-thin flex flex-col text-left w-full">
                <li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Social Media</li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Facebook</a></li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">Instagram</a></li>
                <li><a href="#" class="inline-block py-2 pl-3 pr-5 text-gray-500 hover:text-charcoal no-underline">YouTube</a></li>
                </li>
            </ul>
            <div class="text-gray-700 flex flex-col w-full">
                <div class="flex pl-4 justify-start mt-2">
                    <a class="block flex items-center text-gray-300 hover:text-charcoal mr-6 no-underline" href="#">
                        <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
                    </a>
                    <a class="block flex items-center text-gray-300 hover:text-charcoal no-underline" href="#">
                        <svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 mt-4 pt-6 text-gray-600 border-t border-gray-800 flex flex-col md:flex-row justify-center items-center">
        <div>© 2021 Foothills Collective</div>
        <div>&nbsp;All rights reserved.</div>
    </div>
</footer>



<?php wp_footer(); ?>


