<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Sales Channel Services';
    $page_parent = 'Services';
    $page_description = 'We are an enterprise IT solutions provider that helps businesses optimise their operations. 
    At our core, we provide various Systems Integration and Cybersecurity solutions to help organizations through their digital transformation journey.';
    $page_seo_img = '/assets/img/relo.jpg';
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
              <h2 class="cs_section_title anim_text_writting">Sales Channel</h2>
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
              <img src="assets/img/relo.jpg" class="rounded" />
            </div>
            <div class="cs_height_100 cs_height_lg_60"></div>
            <div class="anim_div_ShowDowns">
              <div class="cs_img_show_text cs_text_style_1">
                <p class="cs_white_color">
                  BluDive Technologies offers a flexible approach to sales channels, ensuring our solutions fit your budget and seamlessly scale with your evolving business needs. 
                  Our tailored process empowers your organization to achieve greater efficiency, innovation, and growth.
                </p>
                
                <p class="cs_white_color">
                  With expertise and certifications across various IT domains, we provide insightful recommendations that balance your needs, costs, and performance. 
                  Our strong relationships with OEMs enable us to access favorable pricing and procurement options that benefit your business.
                </p>

                <p class="cs_white_color">
                  As a premier channel for reliable, adaptable, and future-proof IT solutions, we partner with leading OEMs to deliver the best technologies while prioritizing quality and efficiency.
                </p>
                
                <p class="cs_white_color">
                  Choose BluDive Technologies as your gateway to top technology solutions. Contact us today to set your business on the path to lasting success.
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
