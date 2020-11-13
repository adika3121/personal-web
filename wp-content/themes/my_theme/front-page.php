<?php
    /*Template Name: Homepage */
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

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
        <div class="profile-pic" data-aos="fade-up" data-aos-duration="1500">
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
  <div class="timeline">
    <div class="swiper-container">
      <div class="swiper-wrapper">
      <?php if( have_rows('list') ): 
        while( have_rows('list') ): the_row(); 
          $start_date = get_sub_field('start_date');
          $end_date = get_sub_field('end_date');
          $datetime = DateTime::createFromFormat("F Y", $start_date);
          if ( is_object($datetime) ) {
            $month = $datetime->format('F');
            $year = $datetime->format('Y');
          }
          $job_place_name = get_sub_field('job_place_name');
          $job_title_name = get_sub_field('job_title_name');
          $job_desc = get_sub_field('job_description');
          $img_background = get_sub_field('image_background');
        ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $img_background; ?>);" data-year="<?= $year ?>">
          <div class="swiper-slide-content"><span class="timeline-year"><?php echo $start_date; ?> - <?php echo $end_date; ?></span>
            <h3 class="timeline-title"><?php echo $job_place_name; ?></h3>
            <h4 class="timeline-subtitle"><?php echo $job_title_name; ?></h4>
            <p class="timeline-text"><?php echo $job_desc; ?></p>
          </div>
        </div>
        <?php endwhile; 
              endif; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

  

<section class="skillset-sec" id="sectionSkill">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="skillset-title">Resume</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" data-aos="flip-left" data-aos-duration="2000">
        <div class="skill-bars">
          <h3>Programming</h3>
          <?php if( have_rows('list_parent_programming') ): 
            while( have_rows('list_parent_programming') ): the_row(); 
              $parent_skill = get_sub_field('parent_skill');
            ?>
          <h4><?= $parent_skill ?></h4>
          <div class="tags">
            <?php if( have_rows('list_skill_child')):
                  while( have_rows('list_skill_child')): the_row();
                    $skill = get_sub_field('skill_name');
                    $url = get_sub_field('url_skill');
            ?>
            <a href="<?= $url ?>" target="_blank"><?= $skill ?></a>
            <?php endwhile; 
              endif; ?>
          </div>
          <?php endwhile; 
              endif; ?>
        </div>
      </div>
      <div class="col-md-6" data-aos="flip-right" data-aos-duration="3000">
        <div class="skill-bars">
          <h3>Education</h3>

          <?php if( have_rows('list_education') ): 
            while( have_rows('list_education') ): the_row(); 
              $start_date_edu = get_sub_field('start_date');
              $end_date_edu = get_sub_field('end_date');
              $school = get_sub_field('school_name');
            ?>
          <div class="education-timeline-wrapper">
            <div class="education-timeline-item clearfix">
              <div class="left-part">
                <h5 class="item-period">
                  <?= $start_date_edu ?> - <?= $end_date_edu ?>
                </h5>
              </div>
              <div class="divider">

              </div>
              <div class="right-part">
                <h4 class="item-title"><?= $school ?></h4>
                <?php if(get_sub_field('info_about_school')!=null):
                        $info_school = get_sub_field('info_about_school');  
                        echo '<span class="item-detail">'.$info_school.'</span>';  
                      endif;
                      if(get_sub_field('gpa')!=null):
                        $gpa = get_sub_field('gpa');
                        echo '<span class="item-score">'.$gpa.'</span>'; 
                      endif;
                ?>
              </div>
            </div>
          </div>
          <?php endwhile; 
              endif; ?>
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
        <div class="contact-info-bg overlay h-100">
          <img src="https://picsum.photos/1000/1000" alt="" srcset="">
        </div>
        <div class="contact-info-desc">
          <h3>Find Me on Social Media</h3>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/putu-adhika-dharmesta-493103138/" class="tes" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/adika3121" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a>
            <a href="https://www.instagram.com/dikadarmesta/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram-square"></i></a>
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
  
  <div class="btn-float" data-aos="fade-down" data-aos-duration="2000"><?= do_shortcode('[ht-ctc-chat]') ?></div>
  
</section>

<?php endwhile; endif; ?>
<?php
    
    get_footer();
?>