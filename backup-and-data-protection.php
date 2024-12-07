<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Backup and Data Protection';
    $page_parent = 'Products';
    $page_description = 'BluDive Technologies provides comprehensive backup and data protection services to safeguard your company\'s critical information. Our solutions ensure data is securely protected, easily recoverable, and readily accessible when needed.';
    $page_seo_img = '/assets/img/product5.jpg';
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
            <a href="products.html" class="cs_btn cs_style_1">
              <span>Back to Products</span>
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
                Backup and Data Protection
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
          <div class="cs_portfolio_details product">
            <div class="reveal">
              <img src="assets/img/product5.jpg" class="rounded" />
            </div>
            <div class="cs_height_100 cs_height_lg_60"></div>
            <div class="anim_div_ShowDowns">
              <div class="cs_img_show_text cs_text_style_1">
                <p class="cs_text_style_body">
                  BluDive Technologies provides comprehensive backup and data protection services to safeguard your company's critical information. 
                  Our solutions ensure data is securely protected, easily recoverable, and readily accessible when needed. 
                  <br /><br />
                  Utilizing cutting-edge technology, we implement automated backup systems designed for rapid recovery in the event of data loss or disruption. 
                  With encryption, secure cloud storage, and regular data integrity checks, we maintain the highest standards of confidentiality and integrity.
                  <br /><br />
                  Our tailored solutions integrate seamlessly with your existing infrastructure, while our expert team continuously monitors your data protection environment, 
                  offering proactive support to ensure compliance with industry regulations.
                </p>
                
                <h4 class="cs_heading_text anim_heading_title">
                  Why Choose BluDive Technologies? 
                </h4>  
                <p class="cs_text_style_body">
                    By combining advanced technology with a customer-centric approach, we offer peace of mind, ensuring your most valuable assets are fully protected against any unforeseen challenges.
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