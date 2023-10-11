<?php
/**
 * The main template file
 *
 * @package ADMSoft
 * @version 1.0
 */
include('header.php');
?>
<main class="page">

  <!-- Home Banner -->
  <?php include('partials/sections/section--banner-home.php'); ?>

  <!-- Column With Icon -->
  <?php include('partials/sections/section--column-with-icon.php'); ?>

  <!-- Column with Icon Text -->
  <?php include('partials/sections/section--column-icon-text.php'); ?>

  <!-- Attach Background Section -->
  <?php include('partials/sections/section--attach-background.php'); ?>

  <!-- Text And Media Section -->
  <?php include('partials/sections/section--text-and-media.php'); ?>

  <!-- Column Slider Section -->
  <?php /*?><?php include('partials/sections/section--column-slider.php'); ?><?php */?>

</main>
<?php
include('footer.php');
?>