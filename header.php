
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width" />
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <!--siteHeader -->
    <header class="site-header">
    <!--head-search-->
    <div class="head-search">
      <?php get_search_form(); ?>
    </div>
    <!--/head-search-->

      <h1><a href="<?php echo home_url(); ?>"><?php  bloginfo('name'); ?></a></h1>
      <h5><?php bloginfo('description') ?>
        <?php if (is_page('portfolio')) { ?>
          - Thank you for viewing my work!
      <?php  } ?>
      </h5>




      <nav class="site-nav">
        <?php
        $args = array(
          'theme_location' => 'primary'
        );

         ?>



        <?php wp_nav_menu( $args ); ?> <!-- footer navigation -->
      </nav>
    </header>



   <!--//siteHeader -->
