<?php
    /*Template Name: Homepage */
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


<section class="hello">
  <div class="bg">
    <img src="<?php the_field('banner_background')?>" alt="" srcset="">
  </div>
  <div class="text-hello">
    <h1><?php the_field('name_title') ?></h1>
    <h2><?php the_field('job_subtitle')?></h2>
  </div>
  <a href="#" class="scroll-down"><i class="fas fa-angle-down"></i></a>
</section>

<section class="nav-sec">
  <nav class="navbar navbar-default" id="navbar-example" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#profile">Profile</a></li>
        <li><a href="#experiences">Experiences</a></li>
        <li><a href="#abilities">Abilities</a></li>
                  <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</section>

<div class="container">
  <section class="about-me-sec">
    <div class="row">
      <div class="col-md-6">
        <div class="about-me">
          <h2>About Me</h2>
          <?php 
            $id=5; 
            $post = get_post($id); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
            ?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-pic">
          <img src="asset/img/427156.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
</div>
<section class="experience-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="experience-detail">
          <h2>Experiences</h2>
          
        </div>
      </div>
    </div>
  </div>
</section>

<div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(/wp-content/themes/my_theme/assets/img/kesato.jpg);" data-year="2020">
          <div class="swiper-slide-content"><span class="timeline-year">2020</span>
            <h3 class="timeline-title">Kesato & Co</h3>
            <h4 class="timeline-subtitle">Web Developer Intern</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image: url(https://picsum.photos/1920/500?random=2);" data-year="2019">
          <div class="swiper-slide-content"><span class="timeline-year">2019</span>
            <h3 class="timeline-title">PT Baliyoni Saguna</h3>
            <h4 class="timeline-subtitle">Software Developer Intern</h4>
            <p class="timeline-text">Lorem ipsum dolor site amet, consectetur adipscing elit, sed do eisumod tempor incididut ut labore et dolore magna aliqua. Ut enim ad mimim venjam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<section class="skillset-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="skillset-title">Skillset</h2>
      </div>
    </div>
  </div>

</section>

<?php endwhile; endif; ?>
<?php
    
    get_footer();
?>