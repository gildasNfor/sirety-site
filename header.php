<?php
/**
 * The header for our theme
 * This is the template that displays all header components
 *
 * @package ADMSoft
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.svg">
        
        <title>Digital Agency</title>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUPwz9jkl_t0-ILuUk64NeZ3rxOak9s2A"></script>
        <script type="text/javascript" src="assets/js/main.js" id="main-js"></script>
        <!-- <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
    </head>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <body class="<?= ($activePage == 'index') ? 'home':''; ?> eng-site">

    <!-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en', includedLanguages : 'en,de,fr', defaultLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script> -->

    <!-- Navbar -->
    <?php     
        include('partials/header/section--navbar.php');
    ?>