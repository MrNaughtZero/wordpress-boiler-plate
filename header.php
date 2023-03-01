<!DOCTYPE html>
<html lang="en" class="scroll-smooth text-brand-black">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class('') ?>>
    <?php get_template_part('template-parts/header/header') ?>