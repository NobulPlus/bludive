<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Insights';
    $page_description = 'Stay updated. Learn more about our business news, events and promotions';
    $page_seo_img = '/assets/img/product6.jpg';
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
      <div class="cs_height_219 cs_height_lg_120"></div>

      <!-- Start Bolg Section Title -->
      <section>
        <div>
          <div class="container">
            <div class="cs_section_heading cs_style_1 cs_type_1">
              <div class="cs_section_heading_text">
                <h2 class="cs_section_title anim_heading_title">
                  Community <br />Updates
                </h2>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ENd Bolg Section Title -->
      <div class="cs_height_100 cs_height_lg_60"></div>

      <!-- Start Image card show -->
      <section>
        <div class="container">
          <div class="row">
          <?php
              // Database connection
              // $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");

              // Check connection
              // if (!$conn) {
              //   die("Connection failed: " . mysqli_connect_error());
              // }

              // Fetch blog entries
              // $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'leadership'";
              // $result = mysqli_query($conn, $query);

              // if (mysqli_num_rows($result) > 0) {
              //   $count = 0;
              //   // Output data of each row
              //   while ($row = mysqli_fetch_assoc($result)) {
              //     $id = $row['id'];
              //     $title = $row['title'];
              //     $content = substr($row['content'], 0, 30) . '...';
              //     $featured_image = $row['featured_image'];
              //     $class_addition = ($count % 2 == 1) ? " mt-0" : "";
              //     echo "
              //       <div class=\"col-md-4$class_addition\">
              //         <div class=\"anim_div_ShowDowns\">
              //           <a href=\"leadership-details.php?id=$id\" class=\"cs_blog cs_style_1\">
              //             <div>
              //               <img src=\"admin/$featured_image\" alt=\"post_$id\" />
              //             </div>
              //             <div class=\"cs_blog_info\">
              //               <h6 class=\"cs_blog_title\">$title</h6>
              //               <p class=\"cs_blog_subtitle\">$content</p>
              //             </div>
              //           </a>
              //         </div>
              //       </div>
              //     ";
              //     $count++;
              //   }
              // } else {
              //   echo "No blog posts found.";
              // }

              // Close connection
              // mysqli_close($conn);
            ?>
            <h6>No posts found</h6>
          </div>
          <div class="cs_height_100 cs_height_lg_60"></div>
         
        </div>
      </section>
      <!-- End Image card show -->

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
    </div>