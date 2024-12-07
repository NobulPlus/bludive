<?php
    include ( 'inc/config.php' );
    include ( 'inc/constants.php' );
    $page_title = 'Careers';
    $page_description = 'Ready to Join the Coolest Crew in Tech? Dive with us if it\'s a fit. Embrace Diversity, Ignite Innovation.';
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
      <!-- Strat marketing agency hero-->
      <div class="cs_height_219 cs_height_lg_120"></div>
    

      <section>
        <div class="container">
          <div class="cs_portfolio_details careers">
      <!-- Display status message -->
        <?php 
          // if ($status): echo "<h6 style=\"margin-bottom: 50px\"".$status."</h6>"; 
          // endif; 
        ?> 


          
          <div class="row cs_cr_pr cs_row_gap_150">
            <div class="col-md-6">
              <div class="anim_div_ShowLeftSide">
              <div class="cs_contact_text">
               
               <h1 class="cs_contact_title anim_text_writting cp-reduce">
               Ready to Join the Coolest Crew in Tech?
               </h1>
     
             </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="h-100">
                <img
                 src="assets/img/careers_3.jpg"
                  class="w-100 h-100 anim_div_ShowRightSide rounded"
                  alt="cp_services"
                />
              </div>
            </div>
           
          </div>
          <div class="cs_height_100 cs_height_lg_50"></div>




    
          
          <div class="row cs_cr_pr cs_row_gap_150 cp-row-reverse">
          <div class="col-md-6 mb-4">
              <div class="h-100">
                <img
                 src="assets/img/job-openings.jpg"
                  class="w-100 h-100 anim_div_ShowLeftSide rounded"
                  alt="cp_services"
                />
              </div>
            </div>  
          
          
          <div class="col-md-6">
              <div class="anim_div_ShowRightSide">
              <div class="cs_contact_text">
               
               <h1 class="cs_contact_title anim_text_writting cp-reduce">
               Dive with us if it's a fit.
               </h1>
     
             </div>
              </div>
            </div>
            
           
          </div>
          <div class="cs_height_100 cs_height_lg_50"></div>


          
          
          <div class="row cs_cr_pr cs_row_gap_150">
            <div class="col-md-6">
              <div class="anim_div_ShowLeftSide">
              <div class="cs_contact_text">
               
               <h1 class="cs_contact_title anim_text_writting cp-reduce">
               Embrace Diversity, Ignite Innovation.
               </h1>
     
             </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="h-100">
                <img
                 src="assets/img/commitment-to-diversity.jpg"
                  class="w-100 h-100 anim_div_ShowRightSide rounded"
                  alt="cp_services"
                />
              </div>
            </div>
           
          </div>
          <div class="cs_height_100 cs_height_lg_50"></div>
          </div>


          
          
          <div class="row cs_cr_pr cs_row_gap_150 cp-row-reverse">
          <div class="col-md-6 mb-4">
              <div class="h-100">
                <img
                 src="assets/img/join-our-team.jpg"
                  class="w-100 h-100 anim_div_ShowLeftSide rounded"
                  alt="cp_services"
                />
              </div>
            </div>  
          
          
          <div class="col-md-6">
              <div class="anim_div_ShowRightSide">
              <div class="cs_contact_text">
               
                <h1 class="cs_contact_title anim_text_writting cp-reduce">
                Join the Do-Good Vibe.
                </h1>
      
              </div>
            
              </div>
            </div>
            
           
          </div>


          <div class="cs_height_219 cs_height_lg_120"></div>
          <div id="form" class="cs_contact_ms_career">
            <div class="cs_contact">
              <div class="cs_contact_text">
                <p class="cs_contact_subtitle anim_text_upanddowns">
                  Want to join our team?
                </p>
                <h1 class="cs_contact_title anim_text_writting">
                  Fill the form below
                </h1>
      
              </div>
              <div class="cs_height_80 cs_height_lg_20"></div>
              <div class="cs_from anim_div_ShowDowns">
              <form action="send_career_form.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="cs_field_group col">
            <input class="cs_input_field" type="text" id="name" placeholder="Name" name="name" required />
            <label for="name" class="cs_input_label">Name</label>
        </div>
        <div class="cs_field_group col">
            <input class="cs_input_field" type="email" id="email" placeholder="Email" name="email" required />
            <label for="email" class="cs_input_label">Email</label>
        </div>
    </div>
    <div class="cs_height_10 cs_height_lg_20"></div>
    <div class="row">
        <div class="cs_field_group col">
            <input class="cs_input_field" type="text" id="phone" placeholder="Phone" name="phone" required />
            <label for="phone" class="cs_input_label">Phone</label>
        </div>
        <div class="cs_field_group col">
            <input class="cs_input_field" type="file" id="resume" placeholder="CV/Resume" name="resume" required />
            <label for="resume" class="cs_input_label">CV/Resume</label>
        </div>
    </div>
    <div class="cs_field_group">
        <textarea class="cs_input_field" id="message" rows="10" placeholder="Message" name="message" required></textarea>
        <label for="message" class="cs_input_label">Cover Letter</label>
    </div>
    <div class="cs_height_60 cs_height_lg_60"></div>
    <button type="submit" class="cs_btn cs_style_1 cs_type_btn">
        <span>Send Now</span>
        <svg width="19" height="13" viewBox="0 0 19 13" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z" fill="currentColor"></path>
        </svg>
    </button>
</form>


              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="cs_primary">
        <div class="cs_height_100 cs_height_lg_60"></div>
        <div class="container">
          <!-- start heading -->
          <div class="cs_section_heading cs_style_1 cs_color_1 cs_type_1">
            <div class="cs_section_heading_text">
              <div class="cs_section_subtitle anim_div_ShowZoom">
            We're recruiting the following roles
              </div>
              <h2 class="cs_section_title anim_heading_title">
              Available Positions 
              </h2>
            </div>
          </div>
          <!-- end heading -->
          <div class="cs_height_100 cs_height_lg_50"></div>
          <div class="row cs_cr_pr cs_row_gap_150">
         
          
              <?php
              // Database connection
              // $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
            
      
              // Check connection
              // if (!$conn) {
                // die("Connection failed: " . mysqli_connect_error());
              // }
      
              // Fetch blog entries
              // $query = "SELECT id, title, content FROM jobs";
              // $result = mysqli_query($conn, $query);
      
              // if (mysqli_num_rows($result) > 0) {
                // Output data of each row
            //     while ($row = mysqli_fetch_assoc($result)) {
            //       $id = $row['id'];
            //       $title = $row['title'];
            //       $content = substr($row['content'], 0, 100) . '...';

            //       echo "
            //          <div class=\"col-md-12\">
            //   <div class=\"anim_div_ShowLeftSide\">
            //     <div class=\"cs_creative_protfolio cs_card_style_change\">
            //       <div class=\"cs_card cs_style_1 cs_color_1\">
            //         <div class=\"cs_card_right\">
            //           <div class=\"cs_card_right_in\">
            //             <h2 class=\"cs_card_title\">$title</h2>
            //             <p style=\"margin-top: 20px\" class=\"cs_card_subtitle\">$content</p>
            //           </div>
            //         </div>
            //       </div>
            //       <div class=\"cs_hr_design cs_color_1\"></div>
            //     </div>
            //   </div>
            // </div>
            //       ";
            //     }
            //   } else {
            //     echo "        <div class=\"col-md-12\">No available job listing at the moment.</div>";
            //   }
      
              // Close connection
              // mysqli_close($conn);
            ?>
          
          </div>
        </div>
        <div class="cs_height_100 cs_height_lg_60"></div>
      </section>




          <!-- Start Blog -->
          <section>
            <div class="container">
              <div class="cs_section_heading cs_style_1 cs_type_1">
                <div class="cs_section_heading_text">
                  <div class="cs_section_subtitle anim_div_ShowZoom">Career Articles</div>
                  <h2 class="cs_section_title anim_heading_title">
                  Work-life Balance
                  </h2>
                </div>
               
              </div>
              <div class="cs_height_100 cs_height_lg_60"></div>
              <div class="cs_slider cs_slider_3 anim_blog">
        
              <?php
              // Database connection
              // $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");
          
              // Check connection
              // if (!$conn) {
              //   die("Connection failed: " . mysqli_connect_error());
              // }
      
              // Fetch blog entries
              // $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'career'";
              // $result = mysqli_query($conn, $query);
              // if (mysqli_num_rows($result) > 0) {
                // Output data of each row

               
                  // echo "<div style=\"display: flex;  gap: 25px;\">";
            
                // $count = 1;
                // while ($row = mysqli_fetch_assoc($result)) {
                //   if($count > 3)
                //   {
                //     break;
                //   }
                //   $count = $count +1;
                //   $id = $row['id'];
                //   $title = $row['title'];
                //   $content = substr($row['content'], 0, 100) . '...';
                //   $featured_image = $row['featured_image'];
                //   echo "
                //     <div class=\"swiper-slide\">
                //       <div class=\"cs_post cs_style_1\">
                //         <a href=\"career-details.php?id=$id\" class=\"cs_post_thumb\">
                //           <img src=\"admin/$featured_image\"  />
                //         </a>
                //         <div class=\"cs_post_info\">
                //           <h2 class=\"cs_post_title\">
                //             <a href=\"career-details.php?id=$id\">$title</a>
                //           </h2>
                //           <p class=\"cs_m0\">$content</p>
                //         </div>
                //       </div>
                //     </div>
                //   ";
                // }
      
                //   echo "</div>";
                //   echo "</div>";
             
              
              // } else {
              //   echo "No career posts found.";
              //   echo "</div>";
             
              // }
              
              // if(mysqli_num_rows($result) > 3)
              // {
              //   echo '<a class="col cs_share_btn cs_center box-btn" href="career-articles.php">View More Articles</a>';

              // }   
              // Close connection
              // mysqli_close($conn);
            ?>
          
              
           
            </div>
          </section>
          <!-- End Blog -->

     
      <!-- end cta -->
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