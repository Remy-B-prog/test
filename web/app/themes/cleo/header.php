<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link href="" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">

    <?php wp_head(); ?>
</head>
<?php $pageid = is_404() ? "page-not-found" : $post->post_name; ?>

<body id="<?php echo $pageid; ?>" <?php body_class(''); ?>>

    <header id="homeBlock" class="fx al-center header">
        <nav class="fx just-between al-center container">
            <div class="fx al-center header-menu header-menu-break-md">

                
        </div>
    </header>