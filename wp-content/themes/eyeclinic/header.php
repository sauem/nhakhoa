<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="<?= ASSET ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/animate.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/meanmenu.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/boxicons.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/magnific-popup.min.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/style.css">

    <link rel="stylesheet" href="<?= ASSET ?>css/responsive.css">
    <link rel="stylesheet" href="<?= ASSET ?>css/custome.css?v=<?= time()?>">

    <link rel="icon" type="image/png" href="<?= ASSET ?>img/favicon.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('template-parts/menu/header') ?>
<?php get_template_part('template-parts/menu/menu','desktop') ?>