<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Thememarch" />
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon.svg" />
    <!-- Site Title -->
    <title>Welcome to BluDive | BluDive Technologies Limited</title>
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <style>
     
.cs_blog.cs_style_1  img {
  width: 100%;
  height: 300px; 
  margin-top: 30px;
  object-position: center;
  object-fit: cover; 
}


body {
        background: url("assets/img/p-bg.jpg") no-repeat center center fixed;
        background-size: cover;
      }

      body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(
          0,
          0,
          0,
          0.5
        ); /* Adjust the opacity to control the darkness */
        pointer-events: none; /* Ensure the overlay does not interfere with interactions */
      }
      </style>
  </head>

  <body class="dark">
    <!-- Cursor Animation -->
    <div class="cs_cursor_1"></div>
    <div class="cs_cursor_2"></div>
    <!-- Preloader -->
    <div class="cs_preloader cs_center">
      <div class="cs_preloader_in">
        <div class="loaing loading05">
          <img src="assets/img/logo.png"/>
        </div>
      </div>
    </div>
    <!-- Start Header Section -->
    <header
      class="cs_site_header cs_style1 cs_sticky_header cs_site_header_full_width"
    >
      <div class="cs_main_header">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <a class="cs_site_branding logo-dark" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" />
              </a>
              <a class="cs_site_branding logo-white" href="index.php">
                <img src="assets/img/logo.png" alt="Logo" />
              </a>
            </div>

            <div class="cs_main_header_right">
              <div class="cs_nav cs_medium">
                <ul class="cs_nav_list">
                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li>
                    <a href="about.html">About</a>
                  </li>
                  <li>
                    <a href="services.html">Our Services</a>
                  </li>
                  <li>
                    <a href="products.html">Our Products</a>
                  </li>
                  <li class="active">
                    <a href="careers.php">Careers</a>
                  </li>
                  <li>
                    <a href="leadership.php">Insights</a>
                  </li>
                  <li>
                    <a href="blog.php">Blog</a>
                  </li>
                  <li>
                    <a href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--start menu -->

    <!--end menu -->
    <!-- End Header Section -->
    <div id="scrollsmoother-container">
      <div class="cs_height_219 cs_height_lg_120"></div>

      <!-- Start Bolg Section Title -->
      <section>
        <div>
          <div class="container">
            <div class="cs_section_heading cs_style_1 cs_type_1">
              <div class="cs_section_heading_text">
                <h2 class="cs_section_title anim_heading_title">
                 Career Articles
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
        $conn = mysqli_connect("localhost","demovall_bludive","123@xyz.net","demovall_bludive");

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch blog entries
        $query = "SELECT id, title, content, featured_image FROM posts WHERE type = 'career'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
          $count = 0;
          // Output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $content = substr($row['content'], 0, 30) . '...';
            $featured_image = $row['featured_image'];
            $class_addition = ($count % 2 == 1) ? " mt-0" : "";
            echo "
              <div class=\"col-md-4$class_addition\">
                <div class=\"anim_div_ShowDowns\">
                  <a href=\"career-details.php?id=$id\" class=\"cs_blog cs_style_1\">
                    <div>
                      <img src=\"admin/$featured_image\" alt=\"post_$id\" />
                    </div>
                    <div class=\"cs_blog_info\">
                      <h6 class=\"cs_blog_title\">$title</h6>
                      <p class=\"cs_blog_subtitle\">$content</p>
                    </div>
                  </a>
                </div>
              </div>
            ";
            $count++;
          }
        } else {
          echo "No blog posts found.";
        }

        // Close connection
        mysqli_close($conn);
      ?>
          </div>
          <div class="cs_height_100 cs_height_lg_60"></div>
          <div>
            
          </div>
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
      <!-- Start serction about your project. header-->

      <!-- Start Footer -->
      <footer class="cs_footer cs_primary_bg">
        <div class="cs_height_150 cs_height_lg_60"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="cs_footer_info">
                <img src="assets/img/logo.png" width="200px" alt="Logo" />
                <p>
                  Our business model is built on the values of diligence,
                  excellent service delivery and customer satisfaction.
                </p>
                <a
                  href="mailto:info@bludive.net"
                  class="cs_primary_font anim_text_upanddowns"
                  ><span>info@bludive.net</span></a
                >
              </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="cs_footer_social">
                <a
                  target="_blank"
                  href="https://www.linkedin.com/company/bludivetech/"
                  class="cs_center"
                  >Linkedin</a
                >
                <a
                  target="_blank"
                  href="https://www.instagram.com/bludivetech_/"
                  class="cs_center"
                  >Instagram</a
                >
                <a
                  target="_blank"
                  href="https://x.com/Bludivetech"
                  class="cs_center"
                  >Twitter</a
                >
              </div>
              <div class="cs_height_60 cs_height_lg_30"></div>
              <ul class="cs_footer_contact_list cs_mp0">
                <li>
                  <i>
                    <svg
                      width="14"
                      height="19"
                      viewBox="0 0 14 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M7 0.0195312C3.14027 0.0195312 0 3.01027 0 6.68621C0 7.78973 0.289693 8.88387 0.840408 9.85434L6.6172 17.8047C6.69411 17.9373 6.84065 18.0195 7 18.0195C7.15935 18.0195 7.30589 17.9373 7.3828 17.8047L13.1617 9.85105C13.7103 8.88387
                    14 7.78969 14 6.68617C14 3.01027 10.8597 0.0195312 7 0.0195312ZM7 10.0195C5.07014 10.0195 3.50002 8.52418 3.50002 6.68621C3.50002 4.84824 5.07014 3.35289 7 3.35289C8.92986 3.35289 10.5 4.84824 10.5 6.68621C10.5 8.52418 8.92986 10.0195
                    7 10.0195Z"
                        fill="white"
                      />
                    </svg>
                  </i>
                  26B Adebisi Ogunniyi Crescent, Lekki Phase 1, Lagos, Nigeria
                </li>
                <li>
                  <i>
                    <svg
                      width="18"
                      height="19"
                      viewBox="0 0 18 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M13.6837 11.9266C13.0957 11.3461 12.3616 11.3461 11.7773 11.9266C11.3316 12.3686 10.8859 12.8105 10.4477 13.26C10.3278 13.3836 10.2267 13.4098 10.0806 13.3274C9.79225 13.1701 9.48513 13.0427 9.20797 12.8704C7.91581 12.0577 6.8334
                    11.0127 5.87458 9.83668C5.39891 9.2524 4.97568 8.62692 4.6798 7.92279C4.61987 7.78046 4.63111 7.68683 4.74721 7.57072C5.19292 7.14 5.62738 6.69805 6.06559 6.25609C6.67609 5.64185 6.67609 4.92273 6.06185 4.30474C5.71353 3.95268 5.3652 3.6081
                    5.01688 3.25604C4.65733 2.89648 4.30151 2.53318 3.93821 2.17736C3.35018 1.60432 2.61609 1.60432 2.03181 2.18111C1.58236 2.62306 1.15164 3.07626 0.694705 3.51072C0.271476 3.91148 0.0579884 4.40212 0.0130438 4.97517C-0.0581186 5.90777 0.17035
                    6.78794 0.492454 7.64563C1.15164 9.42095 2.15541 10.9978 3.37266 12.4435C5.01688 14.3986 6.97947 15.9454 9.27539 17.0615C10.3091 17.5634 11.3803 17.9492 12.5451 18.0129C13.3466 18.0578 14.0433 17.8556 14.6013 17.2301C14.9834 16.8031 15.4141
                    16.4136 15.8186 16.0053C16.4178 15.3986 16.4216 14.6645 15.8261 14.0652C15.1145 13.3499 14.3991 12.6382 13.6837 11.9266Z"
                        fill="white"
                      />
                      <path
                        d="M12.9672 8.93825L14.3493 8.70229C14.132 7.4326 13.5328 6.28277 12.6227 5.36889C11.6601 4.40633 10.4428 3.79957 9.10199 3.6123L8.90723 5.00184C9.9447 5.14791 10.8885 5.61609 11.6339 6.36142C12.338 7.06555 12.7987 7.95696 12.9672
                    8.93825Z"
                        fill="white"
                      />
                      <path
                        d="M15.1294 2.93344C13.5338 1.33791 11.5151 0.330398 9.28656 0.0195312L9.0918 1.40907C11.0169 1.67874 12.7623 2.55141 14.1406 3.92597C15.4477 5.23311 16.3054 6.88483 16.6163 8.70134L17.9983 8.46538C17.635 6.36047 16.6425 4.45033
                    15.1294 2.93344Z"
                        fill="white"
                      />
                    </svg>
                  </i>
                  +234-802-181-001
                </li>
                <li>
                  <i>
                    <svg
                      width="18"
                      height="14"
                      viewBox="0 0 18 14"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M10.5043 8.78757C10.0565 9.08612 9.53631 9.24394 9 9.24394C8.46373 9.24394 7.94356 9.08612 7.49574 8.78757L0.119848 3.87016C0.0789258 3.84288 0.0390586 3.81444 0 3.78519V11.8429C0 12.7667 0.749707 13.4999 1.65702 13.4999H16.3429C17.2668
                    13.4999 18 12.7502 18 11.8429V3.78516C17.9608 3.81448 17.9209 3.84299 17.8799 3.87031L10.5043 8.78757Z"
                        fill="white"
                      />
                      <path
                        d="M0.704883 2.99347L8.08077 7.91091C8.35998 8.09707 8.67997 8.19012 8.99996 8.19012C9.31999 8.19012 9.64002 8.09703 9.91923 7.91091L17.2951 2.99347C17.7365 2.69939 18 2.2072 18 1.67599C18 0.762594 17.2569 0.0195312 16.3435 0.0195312H1.65646C0.743098
                    0.0195664 0 0.762629 0 1.67687C0 2.2072 0.263531 2.69939 0.704883 2.99347Z"
                        fill="white"
                      />
                    </svg>
                  </i>
                  info@bludive.net
                </li>
              </ul>
            </div>
          </div>
          <div class="cs_height_90 cs_height_lg_60"></div>
          <ul class="cs_footer_nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.html">OUR SERVICES</a></li>
            <li><a href="products.html">OUR PRODUCTS</a></li>
            <li><a href="careers.php">CAREER</a></li>
            <li><a href="leadership.php">Insights</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <div class="cs_copyright text-center">
          <div class="container">Copyright 2024, All Right reserved</div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
    <!-- <div class="cs_toggle">
      <div class="setting_mode">
        <button id="open">
          <img src="assets/img/brightnes.svg" alt="..." />
        </button>
        <button id="clecel">
          <img src="assets/img/close.svg" alt="..." />
        </button>
      </div>
      <div class="cs_mode_btn js-mode-type">
        <button data-mode="light">Light</button>
        <button class="active" data-mode="dark">Dark</button>
      </div>
    </div> -->
    <span class="cs_scrollup">
      <svg
        width="20"
        height="20"
        viewBox="0 0 20 20"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z"
          fill="currentColor"
        />
      </svg>
    </span>
    <!-- Script -->
    <script src="assets/js/plugins/jquery-3.7.0.min.js"></script>
    <script src="assets/js/plugins/isotope.pkg.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/lightgallery.min.js"></script>
    <script src="assets/js/plugins/SplitText.min.js"></script>
    <script src="assets/js/plugins/ScrollToPlugin.min.js"></script>
    <script src="assets/js/plugins/ScrollTrigger.min.js"></script>
    <script src="assets/js/plugins/ScrollSmoother.min.js"></script>
    <script src="assets/js/plugins/gsap.min.js"></script>
    <script src="assets/js/main.js"></script>





<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('a3ubahykc2ax');
</script>
<!-- End of Async Drift Code -->



  </body>
</html>
