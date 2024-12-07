<?php
    include ( 'inc/connection.php' );
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = $title;
    $page_description = limit_text( $content, 20 );
    $page_seo_img = '/admin/'.$featured_image;
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

      <!-- Start Bolg Section Title -->
      <div class="container">
        <div class="cs_section_heading cs_style_1">
          <div class="cs_section_heading_text">
            <h2 class="cs_section_title anim_word_writting">
            <?php echo htmlspecialchars($title); ?>
            </h2>
          </div>
        </div>
      </div>
      <!-- ENd Bolg Section Title -->
      <div class="cs_height_65 cs_height_lg_60"></div>

      <!-- Start show service  client  date -->
      <section>
        <div class="container">
          <div class="anim_div_ShowZoom">
            <div class="cs_portfolio_details">
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="cs_text_style_1">
                      <p class="cs_headed_text">Published On</p>
                      <h6 class="cs_title_text"><?php echo htmlspecialchars($date); ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End show service  client  date -->
      <div class="cs_height_65 cs_height_lg_60"></div>

      <!-- Start portfolio-details img show -->
      <section>
        <div class="container">
          <div class="cs_portfolio_details blog_details">
            <div class="reveal">
            <?php echo " <img
                src='admin/$featured_image'
                class='rounded'
              />" ?>
             
            </div>
            <div class="cs_height_100 cs_height_lg_60"></div>
            <div class="cs_img_show_text cs_text_style_1 anim_div_ShowDowns">
           
              <p class="cs_text_style_body">
              <?php echo nl2br(htmlspecialchars($content)); ?>
              </p>
            </div>
          
            <div class="cs_height_25"></div>
          
          </div>
        </div>
      </section>
      <!-- End portfolio-details img show -->

      <div class="container">
   
        <div class="row">
          <div class="cs_share_post anim_div_ShowDowns">
           
            <div>
              <div class="cs_share_btn_g">
           
                <?php       if ($additional_file) {
    echo '<div class="col cs_share_btn cs_center"> <a target="_blank" href="admin/' . htmlspecialchars($additional_file) . '">DOWNLOAD FILE</a></div>';
}   
?>


<?php       if ($external_link) {
    echo '<div class="col cs_share_btn cs_center"> <a target="_blank" href="' . htmlspecialchars($external_link) . '">EXPLORE MORE</a></div>';
}     
?>
                
              
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_70 cs_height_lg_35"></div>
        <div class="cs_hr_design anim_div_ShowDowns"></div>
        <div class="cs_height_70 cs_height_lg_35"></div>
      </div>
      <!-- Start SHARE POST: -->

      <div class="container">
        <div class="row">
          <div class="cs_share_post anim_div_ShowDowns">
            <h6 class="m-0">SHARE POST</h6>
            <div>
              <div class="cs_share_btn_g">
                <div class="col cs_share_btn cs_center">
                  <a target="_blank" href="https://x.com/Bludivetech">Twitter</a>
                </div>
         
                <div class="col cs_share_btn cs_center">
                  <a target="_blank" href="https://www.linkedin.com/company/bludivetech/">Linkedin</a>
                </div>


          
                <div class="col cs_share_btn cs_center">
                  <a target="_blank" href="https://www.instagram.com/bludivetech_/">Instagram</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_70 cs_height_lg_35"></div>
        <div class="cs_hr_design anim_div_ShowDowns"></div>
      </div>

      <!--  -->
      <div class="cs_height_150 cs_height_lg_60"></div>
      <!-- Start Blog -->
      <section>
        <div class="container">
          <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_text">
              <h2 class="cs_section_title anim_heading_title">
                Related News <br />
                New Day New Inspiration
              </h2>
            </div>
          </div>
          <div class="cs_height_100 cs_height_lg_60"></div>
          <div class="cs_slider cs_slider_3 anim_blog">
           
              <?php
              // Database connection
              $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
      
              // Check connection
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }
      
              // Fetch blog entries
              $blog_id = $_GET['id'];
           
              $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'leadership' AND id != $blog_id";
              $result = mysqli_query($conn, $query);
      
              if (mysqli_num_rows($result) > 0) {
                // Output data of each row

                if(mysqli_num_rows($result) > 2)
                {
  echo "<div class=\"swiper-wrapper\">";
                }    else{
                  echo "<div style=\"display: flex;  gap: 25px;\">";
                }
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $title = $row['title'];
                  $content = substr($row['content'], 0, 100) . '...';
                  $featured_image = $row['featured_image'];
                  echo "
                    <div class=\"swiper-slide\">
                      <div class=\"cs_post cs_style_1\">
                        <a href=\"leadership-details.php?id=$id\" class=\"cs_post_thumb\">
                          <img src=\"admin/$featured_image\" />
                        </a>
                        <div class=\"cs_post_info\">
                          <h2 class=\"cs_post_title\">
                            <a href=\"leadership-details.php?id=$id\">$title</a>
                          </h2>
                          <p class=\"cs_m0\">$content</p>
                        </div>
                      </div>
                    </div>
                  ";
                }

                echo "</div>";
              } else {
                echo "No blog posts found.";
              }
      
              // Close connection
              mysqli_close($conn);
            ?>
          

        </div>
      </section>
      <!-- End Blog -->
      <!-- Start serction about your project. header-->
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
