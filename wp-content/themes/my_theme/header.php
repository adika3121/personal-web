<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
        wp_head();
    ?>

</head>
<body>
<section class="hello">
  <div class="bg overlay">
    <img src="<?php the_field('banner_background')?>" alt="" srcset="">
    <a href="#" class="scroll-down"><i class="fas fa-angle-down"></i></a>
  </div>
  <div class="text-hello">
    <h1><?php the_field('name_title') ?></h1>
    <h2>I am passionate <span id="typed"></span></h2>
    <div id="typed-strings"><h2><?php the_field('job_subtitle')?></h2></div>
  </div>
  
</section>

<section class="navigate-menu">
    
</section>