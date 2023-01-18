<?php 
/*
    Template name: header
*/
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo("name") ?> - <?php bloginfo("description") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <script type="text/javascript">
      AOS.init();
    </script>
  </head>
  <body>
    <?php wp_head() ?>

    <?php get_template_part( 'template-parts/header/site-nav' ); ?>

    