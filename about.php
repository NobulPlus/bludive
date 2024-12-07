<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'About Us';
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
          <div class="cs_height_219 cs_height_lg_120"></div>
          <section>
            <div class="container">
              <div class="cs_section_heading cs_style_1 cs_type_1">
                <div class="cs_section_heading_text">
                  <h2 class="cs_section_title anim_text_writting">
                    Where Technology Meets Possibility 
                  </h2>
                </div>
              </div>
            </div>
          </section>
          <!-- End marketing agency hero-->
    
          <!-- Start Video Block -->
          <!-- <div class="container">
            <div class="cs_parallax">
              <a
                href="https://www.youtube.com/watch?v=VcaAVWtP48A"
                class="cs_video_block cs_style1 cs_video_open cs_bg cs_parallax_bg"
                data-src="assets/img/Thumbnail.png"
              >
                <span class="cs_player_btn cs_accent_color">
                  <span></span>
                </span>
              </a>
            </div>
          </div> -->
          <!-- End Video Block -->
          <div class="cs_height_150 cs_height_lg_60"></div>
    
          <!-- Start Blog -->
          <section>
            <div class="container">
              <div>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="cs_section_heading cs_style_1 cs_color_1">
                      <div class="cs_section_heading_text">
                        <h3 class="cs_section_title_3 anim_div_ShowLeftSide">
                          We're Partners of Your Innovations
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="anim_div_ShowRightSide">
                      <p class="cs_white_color">
                        We are an enterprise IT solutions provider that helps businesses optimise their operations. 
                        At our core, we provide various Systems Integration and Cybersecurity solutions to help organizations through their digital transformation journey.
                        Leveraging our deep expertise, we enable seamless collaboration across the entire IT stack.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_height_90 cs_height_lg_60"></div>
              <!-- <div class="cs_height_385 cs_height_lg_120"></div> -->
            </div>
            <!-- <div class="container">
              <div class="cs_agency agency_about_images_posation">
                <div class="cs_img_section_1">
                  <img src="assets/img/about us page 1.jpg" alt="" class="w-100 rounded" />
                </div>
                <div class="cs_img_section_2">
                  <img src="assets/img/about us page.jpg" alt="" class="w-100 rounded" />
                </div>
                <div class="cs_img_section_3">
                  <div class="text-end">
                    <img src="assets/img/about us page 3.jpg" class="rounded" alt="" />
                    <img src="assets/img/about us page 4.jpg" class="w-100 rounded" alt="" />
                  </div>
                </div>
              </div>
              <div class="cs_height_150 cs_height_lg_60"></div>
            </div> -->
            <div class="container">
              <div>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="cs_section_heading cs_style_1 cs_color_1">
                      <div class="cs_section_heading_text">
           <!--         <h3 class="cs_section_title_3 anim_div_ShowLeftSide">
                          15 years of hands-on experience
                        </h3> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="anim_div_ShowRightSide">
                      <p class="cs_white_color">
                        Our customer-centric approach has been key to our success in empowering businesses to thrive and driving consistent growth in our clientele and revenue base.
                        <br /><br />
                        We see ourselves as business enablers committed to solutions to modernize and protect technology investments. 
                        As leading Systems Integrators and Cybersecurity solution providers, 
                        we specialise in delivering a comprehensive range of Managed Services, 
                        Professional Services and IT Advisory Services across a range of IT solutions.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_height_90 cs_height_lg_60"></div>
              <div>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <div class="cs_section_heading cs_style_1 cs_color_1">
                      <div class="cs_section_heading_text">
           <!--             <h3 class="cs_section_title_3 anim_div_ShowLeftSide">
                          The Best Tech solutions for our Clients
                        </h3> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="anim_div_ShowRightSide">
                      <p class="cs_white_color">
                        Our hands-on approach means we are committed to walking businesses of all sizes and industry 
                        verticals through the complexities of a fast-paced, technology-driven world, ensuring that they succeed the first time. 
                        Whether you're looking to streamline your operations, 
                        enhance your Cybersecurity, or leverage the latest IT technologies, 
                        we have the expertise and experience to deliver the right solution for your needs.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_height_90 cs_height_lg_60"></div>
              <div class="container">
                <div class="row flex-colun flex-lg-ow align-items-center">
                  <div
                    class="cs_startup_agency cs_card cs_card_about cs_card cs_colorful_card_2"
                  >
                    <h6>Mission</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      Provide custom IT solutions that will enable businesses to maximize productivity and minimize cost
                    </p>
                  </div>
                  <div
                    class="cs_startup_agency cs_card cs_mr_left cs_card_about cs_colorful_card"
                  >
                    <h6>Our Vision</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      To become the leading IT-managed services solutions provider in Africa by 2030
                    </p>
                  </div>
                </div>
              </div>
              <div class="cs_height_90 cs_height_lg_60"></div>
            </div>
          </section>
          <!-- Start Feature  -->
    
          <!-- End Feature -->
          <section>
            <div class="container">
              <div class="cs_work cs_work_text">
                <h4 class="anim_heading_title">
                  We are an innovative technology company with a clientele list from across various industries in Nigeria and beyond. 
                  With a trajectory spurred by our beliefs, we channel our culture through the following values:
                </h4>
                <p class="cs_mp0 anim_text">
                  Our values with acronym “TRIDE”, includes:
                </p>
              </div>
              <div class="cs_height_80 cs_height_lg_40"></div>
              <!-- start working slider -->
              <div class="container">
                <div class="row flex-colun flex-lg-ow align-items-center">
                  <div
                    class="cs_startup_agency cs_card cs_card_about cs_card_tride"
                  >
                    <h6 style="color:red;">T</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      Our teams take ownership, driving decision-making and accountability. 
                      This mindset fuels growth, learning, and continuous improvement, propelling our organization forward.
                    </p>
                  </div>
                  <div
                    class="cs_startup_agency cs_card cs_mr_left cs_card_tride"
                  >
                    <h6 style="color:red;">R</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      A sustainable, mutually beneficial connection enhances both business and personal interactions. 
                      We recognize this value and it is based on the understanding that there are inherent capacities each individual brings to the table.
                    </p>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row flex-colun flex-lg-ow align-items-center">
                  <div
                    class="cs_startup_agency cs_card cs_card_about cs_card_tride"
                  >
                    <h6 style="color:red;">I</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      Our team's success is fueled by fostering a culture of variation, creativity, and continuous learning. With ongoing training and access to the latest technologies, 
                      we ensure our team remains adaptable, forward-thinking, and equipped to tackle emerging challenges.
                    </p>
                  </div>
                  <div
                    class="cs_startup_agency cs_card cs_mr_left cs_card_tride"
                  >
                    <h6 style="color:red;">D</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      At BluDive Technologies, we celebrate heterogeneity as a fundamental strength that drives our collaborative culture. 
                      Open communication and cross-functional teamwork are ingrained in our DNA, serving as the foundation for our continued success.
    
                    </p>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row flex-colun flex-lg-ow align-items-center">
                  <div
                    class="cs_startup_agency cs_card cs_card_tride cs_card"
                  >
                    <h6 style="color:red;">E</h6>
                    <div class="d-flex align-items-center">
                      <p class="cs_font_16 cs_normal cs_mp0 text-nowrap"></p>
                    </div>
                    <p class="cs_font_16 cs_mp0">
                      Our dedication to streamlined procedures and proactive problem-solving distinguishes us. 
                      We continually refine our processes and leverage modern methodologies to produce exceptional results.                </p>
                  </div>
                 
                </div>
              </div>
           
              <!-- end working slider -->
            </div>
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
            <div
              class="cs_moving_section_wrap cs_bold cs_moving_section_hover_push"
            >
              <div class="cs_moving_section_in">
                <div class="cs_moving_section cs_animation_speed_40">
                  <div class="cs_partner_logo_wrap">
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_1.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_2.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_3.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_4.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_5.png" />
                    </div>
                  </div>
                </div>
                <div class="cs_moving_section cs_animation_speed_40">
                  <div class="cs_partner_logo_wrap">
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_1.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_2.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_3.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_4.png" />
                    </div>
                    <div class="cs_partner_logo cs_client">
                      <img src="assets/img/client_5.png" />
                    </div>
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
            <div
              class="cs_moving_section_wrap cs_bold cs_moving_section_hover_push"
            >
              <div class="cs_moving_section_in">
                <div class="cs_moving_section cs_animation_speed_40">
                  <div class="cs_partner_logo_wrap">
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_1.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_2.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_3.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_4.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_5.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_6.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_7.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_8.png" alt="Partner" />
                    </div>
                  </div>
                </div>
                <div class="cs_moving_section cs_animation_speed_40">
                  <div class="cs_partner_logo_wrap">
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_1.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_2.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_3.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_4.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_5.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_6.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_7.png" alt="Partner" />
                    </div>
                    <div class="cs_partner_logo">
                      <img src="assets/img/partner_8.png" alt="Partner" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- End Partner Logo -->
            <div class="cs_height_150 cs_height_lg_60"></div>
          </div>
    
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