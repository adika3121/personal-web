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

<!-- <section class="nav-sec">
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
</section> -->

<div class="container">
  <section class="about-me-sec">
    <div class="row">
      <div class="col-md-6">
        <div class="about-me">
          <h2><?php the_field('about_me_title') ?></h2>
          <?php the_field('about_me_description')?>
        </div>
      </div>
      <div class="col-md-6">
        <div class="profile-pic">
          <img src="<?php the_field('about_me_image') ?>" alt="">
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
      <?php if( have_rows('list') ): 
        while( have_rows('list') ): the_row(); 
          $start_date = get_sub_field('start_date');
          $end_date = get_sub_field('end_date');
          $datetime = DateTime::createFromFormat("F Y", $end_date);
          if ( is_object($dateTime) ) {
            $month = $dateTime->format('F');
            $year = $dateTime->format('Y');
          }
          $job_place_name = get_sub_field('job_place_name');
          $job_title_name = get_sub_field('job_title_name');
          $job_desc = get_sub_field('job_description');
          $img_background = get_sub_field('image_background');
        ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $img_background; ?>);" data-year="2020s">
          <div class="swiper-slide-content"><span class="timeline-year"><?php echo $start_date; ?> - <?php echo $end_date; ?></span>
            <h3 class="timeline-title"><?php echo $job_place_name; ?></h3>
            <h4 class="timeline-subtitle"><?php echo $job_title_name; ?></h4>
            <p class="timeline-text"><?php echo $job_desc; ?></p>
          </div>
        </div>
        <?php endwhile; 
              endif; ?>
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

<section class="skillset-sec" id="sectionSkill">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="skillset-title">Resume</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="skill-bars">
          <h3>Programming</h3>
          <h4>PHP</h4>
          <div class="tags">
            <a href="#">Laravel | Intermediate</a>
            <a href="#"> Wordpress | Novice</a>
          </div>
          <h4>CSS</h4>
          <div class="tags">
            <a href="#">Bootstrap | Intermediate</a>
            <a href="#"> Materialize | Novice</a>
          </div>
          <h4>Database</h4>
          <div class="tags">
            <a href="#">MySQL | Novice</a>
          </div>
          <h4>Javascript</h4>
          <div class="tags">
            <a href="#">JQuery | Novice</a>
            <a href="#">Javascript | Beginner</a>
          </div>
          <h4>Other</h4>
            <div class="tags">
              <a href="#" target="_blank" rel="noopener noreferrer">HTML | Intermediate</a>
              <a href="#" target="_blank" rel="noopener noreferrer">Python | Novice</a>
              <a href="#" target="_blank" rel="noopener noreferrer">PyQT5 |Beginner</a>
              <a href="#" target="_blank" rel="noopener noreferrer">Linux Administrator | Beginner</a>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="skill-bars">
          <h3>Education</h3>
          <div class="education-timeline-wrapper">
            <div class="education-timeline-item clearfix">
              <div class="left-part">
                <h5 class="item-period">
                  August 2016 - August 2020
                </h5>
              </div>
              <div class="divider">

              </div>
              <div class="right-part">
                <h4 class="item-title">Udayana University</h4>
                <span class="item-detail">Information Technology GPA 3.71</span>
              </div>
            </div>
          </div>
          <div class="education-timeline-wrapper">
            <div class="education-timeline-item clearfix">
              <div class="left-part">
                <h5 class="item-period">
                  August 2016 - August 2020
                </h5>
              </div>
              <div class="divider">

              </div>
              <div class="right-part">
                <h4 class="item-title">Udayana University</h4>
                <span class="item-detail">Information Technology</span>
                <span class="item-score">GPA 3.71 / 4.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<section class="contact-me">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="contact-title">
        <!-- <h2>How Can I Help You ?</h2> -->
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="contact-info-wrapper">
        <div class="contact-info-bg overlay">
          <img src="https://picsum.photos/1000/1000" alt="" srcset="">
        </div>
        <div class="contact-info-desc">
          <h3>Find Me on Social Media</h3>
          <div class="social-icons">
            <a href="http://" class="tes" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
            <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="contact-me-title">
        <h3>Contact Me</h3>
        <p>Feel free to send me a message if you have quetions about me or if you have any special request. Thank you</p>
      </div>
      <div class="contact2-form-wrapper">
        <?php echo do_shortcode('[wpforms id="41"]');?>
      </div>
    </div>
  </div>
  </div>
  
</section>

<?php endwhile; endif; ?>
<?php
    
    get_footer();
?>