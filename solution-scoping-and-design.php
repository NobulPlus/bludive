<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Solution Design and Scoping Services';
    $page_parent = 'Services';
    $page_description = 'Scoping your solution with BluDive Technologies offers quality assurance, enhanced project planning, flexibility, risk mitigation, and resource optimization. ';
    $page_seo_img = '/assets/img/solu.jpg';
    include ( 'inc/head.php' );
?>

    <body class="dark services">
        <?php 
           if ( $cursor_animation !== FALSE ) {
                include ( 'inc/cursor-animation.php' ); 
            }
        
           if ( $preloader !== FALSE ) {
                include ( 'inc/preloader.php' ); 
            }
            
            include ( 'inc/header.php' ); 
        ?>
    
    
   
    <div id="scrollsmoother-container">
      <!-- Strat marketing agency hero-->
      <div class="cs_height_150 cs_height_lg_120"></div>

      <section>
        <div class="container">
          <div class="cs_section_heading_right cs_btn_anim">
            <a href="services.php" class="cs_btn cs_style_1">
              <span>Back to Services</span>
              <svg
                width="19"
                height="13"
                viewBox="0 0 19 13"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                  fill="currentColor"
                />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <div class="cs_height_100 cs_height_lg_60"></div>
      <!--Start portfolio-details title -->
      <section>
        <div class="container">
          <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text">
              <h2 class="cs_section_title anim_text_writting">
                Solution Design and Scoping
              </h2>
            </div>
          </div>
        </div>
      </section>
      <!--End portfolio-details title -->
      <div class="cs_height_100 cs_height_lg_60"></div>

      <!-- Start show service  client  date -->

      <!-- Start portfolio-details img show -->
      <section>
        <div class="container">
          <div class="cs_portfolio_details service">
            <div class="reveal">
              <img src="assets/img/solu.jpg" class="rounded" />
            </div>
            <div class="cs_height_100 cs_height_lg_60"></div>
            <div class="anim_div_ShowDowns">
              <div class="cs_img_show_text cs_text_style_1">
                <h4 class="cs_heading_text anim_heading_title">
                  Improve your business processes
                </h4>
                <p class="cs_white_color">
                  Scoping your solution with BluDive Technologies offers quality assurance, enhanced project planning, flexibility, risk mitigation, and resource optimization. 
                  We develop tailored IT solutions to meet your unique needs, ensuring every project is meticulously planned and executed with an OEM-agnostic approach.
                </p>
                
                <p class="cs_white_color">
                  Our thorough analysis helps us understand your business objectives and challenges, allowing us to deliver effective solutions. 
                  Detailed scoping documents outline each project phase, from concept to implementation, ensuring transparency throughout.
                </p>
                
                <p class="cs_white_color">
                  By leveraging cutting-edge technologies and industry best practices, we create innovative, future-proof designs while collaborating closely with your team at every stage to ensure the final solution aligns with your business objectives.
                </p>

                <p class="cs_white_color">
                  Partner with BluDive Technologies to design IT solutions that drive your business forward. Let’s chart your path to success—crafted specifically for your goals.
                </p>

                
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- start cta -->
      <section>
        <div class="container">
          <div class="cs_learning_project">
            <div class="cs_section_heading cs_style_1">
              <div class="cs_section_heading_text">
                <h3 class="cs_section_title_3 anim_heading_title">
                  We'd be interested in learning more about your project.
                </h3>
              </div>
              <div class="cs_section_heading_right cs_btn_anim">
                <a href="contact.php" class="cs_btn cs_style_1">
                  <span>Contact Us</span>
                  <svg
                    width="19"
                    height="13"
                    viewBox="0 0 19 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                      fill="currentColor"
                    />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end cta -->
      <!-- Start Footer -->
      <?php include ( 'inc/page_footer.php' ); ?>
      <!-- End Footer -->
    </div>
