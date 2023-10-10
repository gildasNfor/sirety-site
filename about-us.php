<?php 
/**
 * The About Us template file
 *
 * @package ADMSoft
 * @version 1.0
*/
include('header.php');
?>
<main class="page">

    <!-- About Banner Section -->
    <?php include('partials/sections/section--about-banner.php'); ?>

    <!-- Text and Media Section -->
    <?php include('partials/sections/section--text-and-media-about.php'); ?>

    <!-- Text and Media With Section -->
    <?php include('partials/sections/section--text-media-background.php'); ?>

    <!-- Team Slider Section -->
    <?php include('partials/sections/section--team-slider.php'); ?>
    
    <!-- Call To Action Section -->
    <?php //include('partials/sections/section--call-to-action.php'); ?>

</main>
<?php 
  include('footer.php');
?>