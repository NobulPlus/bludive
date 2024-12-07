<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Home';
    $page_description = 'We are an enterprise IT solutions provider that helps businesses optimise their operations. 
    At our core, we provide various Systems Integration and Cybersecurity solutions to help organizations through their digital transformation journey.';
    $page_seo_img = '/assets/img/background.jpg';
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
      <section class="cs_shape_wrap_3 hero">
        <div class="cs_height_150 cs_height_lg_120"></div>

        <div class="cs_hero cs_style5">
          <div class="container">
            <div class="cs_marketing_agency_section cs_style_1">
              <div class="cs_text_img">
                <h1
                  class="cs_banner_text hero_text_1 cs_mp0 anim_banner_text_left"
                >
               Trust
                </h1>
              </div>
              <div class="cs_height_lg_20 mob"></div>

              <div class="cs_text_btn anim_div_ShowDowns">
                <div class="cs_hero_btn_wrap">
                  <div class="cs_round_btn_wrap"></div>
                </div>
                <h1
                  class="cs_banner_text  cs_text_size cs_m0 anim_banner_text_left"
                >
        
                </h1>
              </div>
              <div class="cs_img_landing">
                <!-- <img src="assets/img/cp_tride.png" /> -->
              </div>
              <div class="cs_height_80 mob cs_height_lg_10" style="align-text:center;"></div>
              <p class="cs_subtext anim_subtext hero_text_2" style="text-align:center;">
                In the ever-evolving technology landscape, we are dedicated to
                providing critical insights and guides to stay ahead of the
                curve.
              </p>
            </div>
          </div>

         
        <div class="cs_height_150 cs_height_lg_60" style="text-align:center;"></div>
      </section>
      <!-- End marketing agency hero-->

      
  

        <!-- Start Feature  -->
        <section class="cs_gray_bg_20">
        <div class="cs_height_90 cs_height_lg_60"></div>
        <div class="container">
          <div class="row flex-column flex-lg-row align-items-center">
            <div class="col-lg-8 col-12">
              <div class="cs_section_heading cs_style_1">
                <div class="cs_section_heading_text">
                  <a href="about.php" class="cs_section_subtitle anim_div_ShowZoom">
                  About Us
</a>
                  <h2 class="cs_section_title anim_heading_title">
                    Empowering businesses with innovative IT solutions
                  </h2>
                </div>
              </div>
              <div class="cs_height_70 cs_height_lg_20"></div>
              <div class="cs_startup_agency_frist cs_text_section">
                <div>
                  <p class="cs_white_color" style="text-align:left;">
                    We are an enterprise IT solutions provider that helps businesses optimise their operations. 
                    At our core, we provide various Systems Integration and Cybersecurity solutions to help organizations through their digital transformation journey.
                    Leveraging our deep expertise, we enable seamless collaboration across the entire IT stack.
                  </p>
                  <div class="cs_service_back_btn">
                    <a href="about.php" class="cs_style_1 cs_color_1">
                      <span class="cs_font_18">Learn More</span>
                      <svg
                        width="19"
                        height="13"
                        viewBox="0 0 19 13"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038
                    11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                          fill="currentColor"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
                <div
                  class="cs_startup_agency cs_card cs_mr_left cs_card cs_colorful_card_2"
                >
                  <h6>Mission</h6>
                  <div class="d-flex align-items-center">
                    <div class="cs_hr cs_hr_white"></div>
                    <p class="cs_font_16 cs_normal cs_mp0 text-nowrap">
                      Provide custom IT
                    </p>
                  </div>
                  <p class="cs_white_color">
                      that will enable businesses to maximize
                    productivity and minimize cost
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="cs_startup_agency">
                <div class="cs_startup_agency cs_card cs_colorful_card">
                  <h6>Our Vision</h6>
                  <div class="d-flex align-items-center">
                    <div class="cs_hr cs_hr_white"></div>
                    <p class="cs_font_16 cs_normal cs_mp0 text-nowrap">
                      To become the
                    </p>
                  </div>
                  <p class="cs_white_color">
                   leading IT managed services solutions provider in Africa by
                    2030
                  </p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="cs_height_60"></div>
      </section>
      <!-- Start Blog -->
      <div class="cs_height_150 cs_height_lg_60"></div>
      <section>
        <div class="container">
          <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text">
              <a href="services.php" class="cs_section_subtitle anim_div_ShowZoom">Our Services</a>
              <h2 class="cs_section_title anim_heading_title">
                Transforming Businesses with Cutting-Edge IT Solutions and Expert Services
              </h2>
            </div>
          </div>
          <div class="cs_height_100 cs_height_lg_60"></div>
          <div class="cs_slider  cs_slider_3 cs_row_slider anim_blog">
            <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="managed-and-outsourced.php"
                        >Managed Services</a
                      >
                    </h6>
                    <p class="cs_m0 cs_color_1">
                      Our managed services transform businesses by delivering customized solutions that boost efficiency, productivity, and agility. 
                      We minimize downtime, enhance security, ensure cost-efficiency, and reduce compliance risks, positioning your organization for long-term success.
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="managed-and-outsourced.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="technical-support.php">Technical Support</a>
                    </h6>
                   <p class="cs_white_color">
                      Smooth IT operations are crucial for corporate success, 
                      and our technical support services are designed to meet this need. 
                      We provide 24/7 assistance with a dedicated team to keep your systems functional.
                      
                      <br>
                      
                      Our proactive monitoring employs advanced tools to detect and resolve issues before they impact your business. With a team of certified professionals, we ensure prompt and effective solutions across various IT domains.
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="technical-support.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                                                            12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="solution-scoping-and-design.php"
                        >Solution Scoping and Design</a
                      >
                    </h6>
                    <p class="cs_m0 cs_color_1">
                      Scoping your solution with BluDive Technologies offers quality assurance, enhanced project planning, flexibility, risk mitigation, and resource optimization. 
                      We develop tailored IT solutions to meet your unique needs, ensuring every project is meticulously planned and executed with an OEM-agnostic approach.
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="solution-scoping-and-design.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="sales-channel.php">Sales Channel</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                      BluDive Technologies offers a flexible approach to sales channels, ensuring our solutions fit your budget and seamlessly scale with your evolving business needs. 
                      Our tailored process empowers your organization to achieve greater efficiency, innovation, and growth.
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="sales-channel.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog -->
      <div class="cs_height_150 cs_height_lg_60"></div>

      <section>
        <div class="container">
          <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text">
              <a href="products.php" class="cs_section_subtitle anim_div_ShowZoom">Our Products</a>
              <h2 class="cs_section_title anim_heading_title">
                Future-Ready IT Products: Reliable, Scalable, and Built for Innovation
              </h2>
            </div>
          </div>
          <div class="cs_height_100 cs_height_lg_60"></div>
          <div class="cs_slider cs_slider_3 cs_row_slider anim_blog">
            <div class="swiper-wrapper">
 
<!-- DevOps start here -->

            <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="devops-and-automation.php"
                        >DevOps and Automation Services</a
                      >
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    On offer is the empowerment of businesses to thrive in the fast-evolving digital landscape with cutting-edge DevOps and automation solutions. 
                    Our team works alongside you to eliminate delays between development and operations through automation and seamless collaboration, 
                    enabling faster, more reliable releases.
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="devops-and-automation.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
                
<!-- CyberSecurity start here -->    
              
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="cybersecurity.php"
                        >Cybersecurity</a
                      >
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    Cybersecurity is essential for any business aiming to thrive in today’s digital landscape. 
                    We do not just defend against cyber threats—we anticipate them. 
                    Our expert team stays ahead of emerging risks, offering cutting-edge solutions that include threat detection, 
                    incident response, and compliance. 
                    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="cybersecurity.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

<!-- Middleware start here -->               
              
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="middleware-and-integration.php">
                      Middleware and Integration</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    BluDive Technologies offer middleware and integration solutions to streamline business operations, 
                    ensure smooth communication between applications, systems, and services—whether connecting legacy systems 
                    to modern applications or integrating cloud-based platforms. </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="middleware-and-integration.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
<!-- Enterprise start here -->                 
                
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="enterprise-systems-infrastructure.php">Enterprise Systems & Virtualization Solutions</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    With over a two decades of expertise, we deliver advanced enterprise systems and virtualization solutions that enhance productivity, 
                    scalability, and security. </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="enterprise-systems-infrastructure.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                                                            12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

<!-- Cloud and SaaS start here -->              
              
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="cloud-and-saas.php">
                      Unlock the feature with BluDive's Cutting-Edge Cloud and SaaS Solutions</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    Staying competitive requires flexibility and adaptability. Cloud and SaaS services enable effortless scaling, 
                    cost reduction, and productivity enhancement. </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="cloud-and-saas.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
<!-- Backup and Data start here -->                  
              
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="backup-and-data-protection.php">
                      Backup and Data Protection</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    BluDive Technologies provides comprehensive backup and data protection services to safeguard your company's critical information. 
                    Our solutions ensure data is securely protected, easily recoverable, and readily accessible when needed.   </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="backup-and-data-protection.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
<!-- Database start here -->               
              
              <div class="swiper-slide">
                <div class="cs_post cs_style_2">
                  <div class="cs_post_info">
                    <h6 class="cs_post_title">
                      <a href="database.php">
                    Comprehensive Database Solutions</a>
                    </h6>
                    <p class="cs_m0 cs_color_1">
                    Efficient data storage and management are essential for any organization. 
                    BluDive Technologies leverages a variety of database technologies to create adaptable, 
                    customized systems, whether for large datasets, high availability, or performance optimization.    </p>
                    <div class="cs_section_heading_right">
                      <a
                        href="database.php"
                        class="cs_btn cs_style_1 cs_color_1"
                      >
                        <span>Learn More</span>
                        <svg
                          width="19"
                          height="13"
                          viewBox="0 0 19 13"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355
                    12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Blog -->
      <div class="cs_height_150 cs_height_lg_60"></div>

    
      <!-- End Feature -->
      <section class="cs_primary">
        <div class="cs_height_100 cs_height_lg_60"></div>
        <div class="container">
          <!-- start heading -->
          <div class="cs_section_heading cs_style_1 cs_color_1 cs_type_1">
            <div class="cs_section_heading_text">
              <div class="cs_section_subtitle anim_div_ShowZoom">
                Our Core Values
              </div>
              <h2 class="cs_section_title anim_heading_title">
                Values that define our brand are under the acronym TRIDE
              </h2>
            </div>
          </div>
          <!-- end heading -->
          <div class="cs_height_100 cs_height_lg_50"></div>
          <div class="row cs_cr_pr cs_row_gap_150">
            <div class="col-md-6">
              <div class="anim_div_ShowLeftSide">
                <div class="cs_creative_protfolio cs_card_style_change">
                  <div class="cs_card cs_style_1 cs_color_1">
                    <div class="cs_card_right">
                      <div class="cs_card_right_in">
                        <h2 class="cs_card_title">Trust</h2>
                      </div>
                    </div>
                  </div>
                  <div class="cs_hr_design cs_color_1"></div>
                </div>
                <div class="cs_creative_protfolio cs_card_style_change">
                  <div class="cs_card cs_style_1 cs_color_1">
                    <div class="cs_card_right">
                      <div class="cs_card_right_in">
                        <h2 class="cs_card_title">Respect</h2>
                      </div>
                    </div>
                  </div>
                  <div class="cs_hr_design cs_color_1"></div>
                </div>
                <div class="cs_creative_protfolio cs_card_style_change">
                  <div class="cs_card cs_style_1 cs_color_1">
                    <div class="cs_card_right">
                      <div class="cs_card_right_in">
                        <h2 class="cs_card_title">Innovation</h2>
                      </div>
                    </div>
                  </div>
                  <div class="cs_hr_design cs_color_1"></div>
                </div>
                <div class="cs_creative_protfolio cs_card_style_change">
                  <div class="cs_card cs_style_1 cs_color_1">
                    <div class="cs_card_right">
                      <div class="cs_card_right_in">
                        <h2 class="cs_card_title">Diversity</h2>
                      </div>
                    </div>
                  </div>
                  <div class="cs_hr_design cs_color_1"></div>
                </div>
                <div class="cs_creative_protfolio cs_card_style_change">
                  <div class="cs_card cs_style_1 cs_color_1">
                    <div class="cs_card_right">
                      <div class="cs_card_right_in">
                        <h2 class="cs_card_title">Efficiency</h2>
                      </div>
                    </div>
                  </div>
                  <div class="cs_hr_design cs_color_1"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="h-100 tride-container">
                <img
                  src="assets/img/home2.png"
                  class="w-100 tride-img anim_div_ShowRightSide"
                  alt="tride"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_100 cs_height_lg_60"></div>
      </section>

      <div class="cs_height_150 cs_height_lg_60"></div>

      <!-- start counting section -->
      <div class="container counter-wrap" style="text-align:center; padding: 20px 0;">
  <div class="row">
    <!-- Static Counter 1 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="cs_funfact cs_style1">
        <div class="cs_funfact_number cs_stroke_normal" style="margin-bottom: 10px;">
          <span>187</span>
        </div>
        <div class="cs_funfact_text cs_primary_font cs_color_1">
          <p style="margin: 0;">Projects Completed</p>
        </div>
      </div>
    </div>
    <!-- Static Counter 2 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="cs_funfact cs_style1">
        <div class="cs_funfact_number cs_stroke_normal" style="margin-bottom: 10px;">
          <span>26,946</span>
        </div>
        <div class="cs_funfact_text cs_primary_font cs_color_1">
          <p style="margin: 0;">Incident/Call Treated</p>
        </div>
      </div>
    </div>
    <!-- Static Counter 3 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="cs_funfact cs_style1">
        <div class="cs_funfact_number cs_stroke_normal" style="margin-bottom: 10px;">
          <span>8</span><span>+</span>
        </div>
        <div class="cs_funfact_text cs_primary_font cs_color_1">
          <p style="margin: 0;">Glorious Years</p>
        </div>
      </div>
    </div>
    <!-- Static Counter 4 -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="cs_funfact cs_style1">
        <div class="cs_funfact_number cs_stroke_normal" style="margin-bottom: 10px;">
          <span>2,724</span>
        </div>
        <div class="cs_funfact_text cs_primary_font cs_color_1">
          <p style="margin: 0;">Total Inventory</p>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- End counting section -->
      <div class="cs_height_150 cs_height_lg_60"></div>

      <div>
        <p class="text-center cs_font_18 cs_normal">Some of Our Clients</p>
        <div class="cs_height_100 cs_height_lg_60"></div>
     

         
        <div class="swiper-container-2">
     <div class="swiper-wrapper">
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/client_1.png" alt="">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/client_2.png" alt="">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/client_3.png" alt="">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/client_4.png" alt="">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/client_5.png" alt="">
         </div>
       </div>
      
     </div>
  
   </div>

        <!-- End Partner Logo -->
        <div class="cs_height_150 cs_height_lg_60"></div>
      </div>

      <!-- Start Testimonial -->
      <!--<section class="cs_primary_bg cs_shape_wrap_2">-->
      <!--  <div class="cs_shape_1">-->
      <!--    <svg-->
      <!--      width="1041"-->
      <!--      height="1005"-->
      <!--      viewBox="0 0 1041 1005"-->
      <!--      fill="none"-->
      <!--      xmlns="http://www.w3.org/2000/svg"-->
      <!--    >-->
      <!--      <circle-->
      <!--        opacity="0.3"-->
      <!--        cx="538.5"-->
      <!--        cy="502.5"-->
      <!--        r="501.5"-->
      <!--        stroke="#454545"-->
      <!--        stroke-width="2"-->
      <!--      />-->
      <!--      <circle-->
      <!--        opacity="0.3"-->
      <!--        cx="501.5"-->
      <!--        cy="526.5"-->
      <!--        r="458.5"-->
      <!--        stroke="#454545"-->
      <!--        stroke-width="2"-->
      <!--      />-->
      <!--      <circle-->
      <!--        opacity="0.3"-->
      <!--        cx="453"-->
      <!--        cy="570"-->
      <!--        r="424"-->
      <!--        stroke="#454545"-->
      <!--        stroke-width="2"-->
      <!--      />-->
      <!--      <circle-->
      <!--        opacity="0.3"-->
      <!--        cx="396"-->
      <!--        cy="591"-->
      <!--        r="377"-->
      <!--        stroke="#454545"-->
      <!--        stroke-width="2"-->
      <!--      />-->
      <!--      <circle-->
      <!--        opacity="0.3"-->
      <!--        cx="330"-->
      <!--        cy="630"-->
      <!--        r="329"-->
      <!--        stroke="#454545"-->
      <!--        stroke-width="2"-->
      <!--      />-->
      <!--    </svg>-->
      <!--  </div>-->
      <!--  <div class="cs_shape_2">-->
      <!--    <svg-->
      <!--      width="149"-->
      <!--      height="149"-->
      <!--      viewBox="0 0 149 149"-->
      <!--      fill="none"-->
      <!--      xmlns="http://www.w3.org/2000/svg"-->
      <!--    >-->
      <!--      <g opacity="0.23">-->
      <!--        <path-->
      <!--          d="M54.7532 1.16162C47.1932 42.2265 41.0646 48.3548 0 55.9147C41.065 63.4746 47.1932 69.6029 54.7532 110.668C62.3131 69.6029 68.4414 63.4746 109.506 55.9147C68.4414 48.3548 62.3128 42.2265 54.7532 1.16162Z"-->
      <!--          fill="#454545"-->
      <!--        />-->
      <!--        <path-->
      <!--          d="M114.179 78.1968C109.372 104.312 105.474 108.21 79.3584 113.018C105.474 117.825 109.372 121.723 114.179 147.838C118.987 121.723 122.885 117.825 149 113.018C122.884 108.21 118.987 104.312 114.179 78.1968Z"-->
      <!--          fill="#454545"-->
      <!--        />-->
      <!--      </g>-->
      <!--    </svg>-->
      <!--  </div>-->
      <!--  <div class="cs_height_150 cs_height_lg_60"></div>-->
      <!--  <div class="container">-->
      <!--    <div class="row align-items-center">-->
      <!--      <div class="col-lg-4">-->
      <!--        <div>-->
      <!--          <img-->
      <!--            src="assets/img/testimonial_thumb_1.png"-->
      <!--            class="w-100"-->
      <!--            alt="testimonial_thumb_1"-->
      <!--          />-->
      <!--        </div>-->
      <!--      </div>-->
      <!--      <div class="col-lg-7 offset-lg-1">-->
      <!--        <div class="cs_testimonial cs_style_1 cs_color_1">-->
      <!--          <h2 class="cs_testimonial_title">-->
      <!--            Testimonials-->
      <!--          </h2>-->
      <!--          <div class="cs_slider cs_slider_4">-->
      <!--            <div class="swiper-wrapper">-->
      <!--              <div class="swiper-slide">-->
      <!--                <div class="cs_testimonial_box">-->
      <!--                  <div class="cs_testimonial_quote_icon">-->
      <!--                    <svg-->
      <!--                      width="61"-->
      <!--                      height="44"-->
      <!--                      viewBox="0 0 61 44"-->
      <!--                      fill="none"-->
      <!--                      xmlns="http://www.w3.org/2000/svg"-->
      <!--                    >-->
      <!--                      <path-->
      <!--                        d="M0 26.2855H12.9844L4.32807 43.4283H17.3125L25.9689 26.2855V0.571289H0V26.2855Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                      <path-->
      <!--                        d="M34.625 0.571289V26.2855H47.6094L38.9531 43.4283H51.9375L60.5939 26.2855V0.571289H34.625Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                    </svg>-->
      <!--                  </div>-->
      <!--                  <blockquote class="cs_testimonial_text">-->
      <!--                    “Ut enim ad minima veniam, quis nostrum exercitationem-->
      <!--                    ullam corporis suscipit laboriosam, nisi ut aliquid ex-->
      <!--                    ea commodi consequatur? Quis autem vel eum iure-->
      <!--                    reprehenderit qui in ea voluptate velit esse quam-->
      <!--                    nihil molestiae consequatur, vel illum qui dolorem eum-->
      <!--                    fugiat quo voluptas nulla pariatur”-->
      <!--                  </blockquote>-->
      <!--                  <div class="cs_testimonial_meta">-->
      <!--                    <div class="cs_testimonial_avatar">-->
      <!--                      <img src="assets/img/avatar_1.png" alt="Avatar" />-->
      <!--                    </div>-->
      <!--                    <div class="cs_testimonial_meta_right">-->
      <!--                      <h3 class="cs_testimonial_avatar_name">-->
      <!--                        Delores Olivo-->
      <!--                      </h3>-->
      <!--                      <div class="cs_testimonial_avatar_designation">-->
      <!--                        From UK-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--              <div class="swiper-slide">-->
      <!--                <div class="cs_testimonial_box">-->
      <!--                  <div class="cs_testimonial_quote_icon">-->
      <!--                    <svg-->
      <!--                      width="61"-->
      <!--                      height="44"-->
      <!--                      viewBox="0 0 61 44"-->
      <!--                      fill="none"-->
      <!--                      xmlns="http://www.w3.org/2000/svg"-->
      <!--                    >-->
      <!--                      <path-->
      <!--                        d="M0 26.2855H12.9844L4.32807 43.4283H17.3125L25.9689 26.2855V0.571289H0V26.2855Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                      <path-->
      <!--                        d="M34.625 0.571289V26.2855H47.6094L38.9531 43.4283H51.9375L60.5939 26.2855V0.571289H34.625Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                    </svg>-->
      <!--                  </div>-->
      <!--                  <blockquote class="cs_testimonial_text">-->
      <!--                    “Ut enim ad minima veniam, quis nostrum exercitationem-->
      <!--                    ullam corporis suscipit laboriosam, nisi ut aliquid ex-->
      <!--                    ea commodi consequatur? Quis autem vel eum iure-->
      <!--                    reprehenderit qui in ea voluptate velit esse quam-->
      <!--                    nihil molestiae consequatur, vel illum qui dolorem eum-->
      <!--                    fugiat quo voluptas nulla pariatur”-->
      <!--                  </blockquote>-->
      <!--                  <div class="cs_testimonial_meta">-->
      <!--                    <div class="cs_testimonial_avatar">-->
      <!--                      <img src="assets/img/avatar_1.png" alt="Avatar" />-->
      <!--                    </div>-->
      <!--                    <div class="cs_testimonial_meta_right">-->
      <!--                      <h3 class="cs_testimonial_avatar_name">-->
      <!--                        Delores Olivo-->
      <!--                      </h3>-->
      <!--                      <div class="cs_testimonial_avatar_designation">-->
      <!--                        From UK-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--              <div class="swiper-slide">-->
      <!--                <div class="cs_testimonial_box">-->
      <!--                  <div class="cs_testimonial_quote_icon">-->
      <!--                    <svg-->
      <!--                      width="61"-->
      <!--                      height="44"-->
      <!--                      viewBox="0 0 61 44"-->
      <!--                      fill="none"-->
      <!--                      xmlns="http://www.w3.org/2000/svg"-->
      <!--                    >-->
      <!--                      <path-->
      <!--                        d="M0 26.2855H12.9844L4.32807 43.4283H17.3125L25.9689 26.2855V0.571289H0V26.2855Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                      <path-->
      <!--                        d="M34.625 0.571289V26.2855H47.6094L38.9531 43.4283H51.9375L60.5939 26.2855V0.571289H34.625Z"-->
      <!--                        fill="#3399cc"-->
      <!--                      />-->
      <!--                    </svg>-->
      <!--                  </div>-->
      <!--                  <blockquote class="cs_testimonial_text">-->
      <!--                    “Ut enim ad minima veniam, quis nostrum exercitationem-->
      <!--                    ullam corporis suscipit laboriosam, nisi ut aliquid ex-->
      <!--                    ea commodi consequatur? Quis autem vel eum iure-->
      <!--                    reprehenderit qui in ea voluptate velit esse quam-->
      <!--                    nihil molestiae consequatur, vel illum qui dolorem eum-->
      <!--                    fugiat quo voluptas nulla pariatur”-->
      <!--                  </blockquote>-->
      <!--                  <div class="cs_testimonial_meta">-->
      <!--                    <div class="cs_testimonial_avatar">-->
      <!--                      <img src="assets/img/avatar_1.png" alt="Avatar" />-->
      <!--                    </div>-->
      <!--                    <div class="cs_testimonial_meta_right">-->
      <!--                      <h3 class="cs_testimonial_avatar_name">-->
      <!--                        Delores Olivo-->
      <!--                      </h3>-->
      <!--                      <div class="cs_testimonial_avatar_designation">-->
      <!--                        From UK-->
      <!--                      </div>-->
      <!--                    </div>-->
      <!--                  </div>-->
      <!--                </div>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--            <div class="cs_pagination cs_style1"></div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--  <div class="cs_height_150 cs_height_lg_60"></div>-->
      <!--</section>-->
      <!-- End Testimonial -->
      <div class="cs_height_150 cs_height_lg_60"></div>

      <!-- Start Partner Logo -->
      <div>
        <p class="text-center cs_font_18 cs_normal">
          We Work With the Best Partners
        </p>
        <div class="cs_height_100 cs_height_lg_60"></div>

     
        <div class="swiper-container">
     <div class="swiper-wrapper">
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_1.png" alt="Partner 1">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_2.png" alt="Partner 2">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_3.png" alt="Partner 3">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_4.png" alt="Partner 4">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_5.png" alt="Partner 5">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_6.png" alt="Partner 6">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_7.png" alt="Partner 7">
         </div>
       </div>
       <div class="swiper-slide">
         <div class="cs_partner_logo">
           <img src="assets/img/partner_8.png" alt="Partner 8">
         </div>
       </div>
     </div>
  
   </div>

     

        <!-- End Partner Logo -->
        <div class="cs_height_150 cs_height_lg_60"></div>
      </div>

      <!-- Start Leadership -->
      <!--<section>-->
      <!--  <div class="container">-->
      <!--    <div class="cs_section_heading cs_style_1 cs_type_1">-->
      <!--      <div class="cs_section_heading_text">-->
      <!--        <div class="cs_section_subtitle anim_div_ShowZoom">-->
      <!--          Insights-->
      <!--        </div>-->
      <!--        <h2 class="cs_section_title anim_heading_title">-->
      <!--          Community <br />Updates-->
      <!--        </h2>-->
      <!--      </div>-->
      <!--      <div class="cs_section_heading_right cs_btn_anim">-->
      <!--        <a href="leadership.php" class="cs_btn cs_style_1">-->
      <!--          <span>View All Articles</span>-->
      <!--          <svg-->
      <!--            width="19"-->
      <!--            height="13"-->
      <!--            viewBox="0 0 19 13"-->
      <!--            fill="none"-->
      <!--            xmlns="http://www.w3.org/2000/svg"-->
      <!--          >-->
      <!--            <path-->
      <!--              d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038-->
      <!--                                          11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"-->
      <!--              fill="currentColor"-->
      <!--            ></path>-->
      <!--          </svg>-->
      <!--        </a>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="cs_height_100 cs_height_lg_60"></div>-->
      <!--    <div class="cs_slider cs_slider_3 anim_blog">-->
        
              <?php
              // Database connection
            //   $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
      
              // Check connection
            //   if (!$conn) {
                // die("Connection failed: " . mysqli_connect_error());
            //   }
      
              // Fetch blog entries
            //   $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'leadership'";
            //   $result = mysqli_query($conn, $query);
            //   if (mysqli_num_rows($result) > 0) {
                // Output data of each row

//                 if(mysqli_num_rows($result) > 2)
//                 {
//   echo "<div class=\"swiper-wrapper\">";
//                 }    else{
//                   echo "<div style=\"display: flex;  gap: 25px;\">";
//                 }
//                 while ($row = mysqli_fetch_assoc($result)) {
//                   $id = $row['id'];
//                   $title = $row['title'];
//                   $content = substr($row['content'], 0, 100) . '...';
//                   $featured_image = $row['featured_image'];
//                   echo "
//                     <div class=\"swiper-slide\">
//                       <div class=\"cs_post cs_style_1\">
//                         <a href=\"blog-details.php?id=$id\" class=\"cs_post_thumb\">
//                           <img src=\"admin/$featured_image\"  />
//                         </a>
//                         <div class=\"cs_post_info\">
//                           <h2 class=\"cs_post_title\">
//                             <a href=\"blog-details.php?id=$id\">$title</a>
//                           </h2>
//                           <p class=\"cs_m0\">$content</p>
//                         </div>
//                       </div>
//                     </div>
//                   ";
//                 }
              
//                   echo "</div>";
                
          
              
//               } else {
//                 echo "No leadership posts found.";
//               }
      
              // Close connection
            //   mysqli_close($conn);
            // ?>
          
         
      <!--    <div class="cs_height_150 cs_height_lg_60"></div>-->
      <!--  </div>-->
      <!--</section>-->
      <!-- End Blog -->

      <!-- Start Blog -->
      <!--<section>-->
      <!--  <div class="container">-->
      <!--    <div class="cs_section_heading cs_style_1 cs_type_1">-->
      <!--      <div class="cs_section_heading_text">-->
      <!--        <div class="cs_section_subtitle anim_div_ShowZoom">Our Blog</div>-->
      <!--        <h2 class="cs_section_title anim_heading_title">-->
      <!--          New Day <br />New Inspiration-->
      <!--        </h2>-->
      <!--      </div>-->
      <!--      <div class="cs_section_heading_right cs_btn_anim">-->
      <!--        <a href="blog.php" class="cs_btn cs_style_1">-->
      <!--          <span>View All Blogs</span>-->
      <!--          <svg-->
      <!--            width="19"-->
      <!--            height="13"-->
      <!--            viewBox="0 0 19 13"-->
      <!--            fill="none"-->
      <!--            xmlns="http://www.w3.org/2000/svg"-->
      <!--          >-->
      <!--            <path-->
      <!--              d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038-->
      <!--                                            11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"-->
      <!--              fill="currentColor"-->
      <!--            ></path>-->
      <!--          </svg>-->
      <!--        </a>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="cs_height_100 cs_height_lg_60"></div>-->
      <!--    <div class="cs_slider cs_slider_3 anim_blog">-->
         
              <?php
              // Database connection
            //   $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
      
              // Check connection
            //   if (!$conn) {
            //     die("Connection failed: " . mysqli_connect_error());
            //   }
      
              // Fetch blog entries
//               $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'blog'";
//               $result = mysqli_query($conn, $query);
//               if (mysqli_num_rows($result) > 0) {
//                 // Output data of each row
//                 if(mysqli_num_rows($result) > 2)
//                 {
//   echo "<div class=\"swiper-wrapper\">";
//                 }
//                 else{
//                   echo "<div style=\"display: flex; gap: 25px;\">";
                // }
                // while ($row = mysqli_fetch_assoc($result)) {
                //   $id = $row['id'];
                //   $title = $row['title'];
                //   $content = substr($row['content'], 0, 100) . '...';
                //   $featured_image = $row['featured_image'];
                //   echo "
                //     <div class=\"swiper-slide\">
                //       <div class=\"cs_post cs_style_1\">
                //         <a href=\"blog-details.php?id=$id\" class=\"cs_post_thumb\">
                //           <img src=\"admin/$featured_image\"  />
                //         </a>
                //         <div class=\"cs_post_info\">
                //           <h2 class=\"cs_post_title\">
                //             <a href=\"blog-details.php?id=$id\">$title</a>
                //           </h2>
                //           <p class=\"cs_m0\">$content</p>
            //             </div>
            //           </div>
            //         </div>
            //       ";
            //     }
               
            //       echo "</div>";
             
          
              
            //   } else {
            //     echo "No blog posts found.";
            //   }
      
            //   // Close connection
            //   mysqli_close($conn);
            // ?>
          
           
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->
      <!-- End Blog -->

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

    

    