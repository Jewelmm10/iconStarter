<?php

/**
 * The template for displaying the header
 *
 * Contains the closing of the #content div and all content after.
 * 
 * @package Mugdho
 */

?>
<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Katen - Minimal Blog &amp; Magazine HTML Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/header/site-nav'); ?>