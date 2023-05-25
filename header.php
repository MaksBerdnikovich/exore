<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="<?= get_images_dir('favicon/favicon.ico'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_images_dir('favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_images_dir('favicon/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_images_dir('favicon/favicon-16x16.png'); ?>">
    <meta name="theme-color" content="#FFFFFF">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
/**
 * Include Header Section
 */

get_template_part('template-parts/header');

?>

<main class="main-wrapper">
    <div class="content">
