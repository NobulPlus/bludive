 <!-- Start Header Section -->
    <header class="cs_site_header cs_style1 cs_sticky_header cs_site_header_full_width">
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
                  <li class="menu-item <?php if ( $page_title == 'Home' ) { echo 'active'; } ?>">
                    <a href="index.php">Home</a>
                  </li>
                  <li class="menu-item <?php if ( $page_title == 'About Us' ) { echo 'active'; } ?>">
                    <a href="about.php">About</a>
                  </li>
                  <li class="menu-item <?php if ( ( $page_title == 'Services' ) || ( $page_parent == 'Services' ) ) { echo 'active'; } ?>">
                    <a href="services.php">Our Services</a>
                  </li>
                  <li class="menu-item <?php if ( ( $page_title == 'Products' ) || ( $page_parent == 'Products' ) ) { echo 'active'; } ?> ?>">
                    <a href="products.php">Our Products</a>
                  </li>
                  <li class="menu-item <?php if ( $page_title == 'Careers' ) { echo 'active'; } ?>">
                    <a href="careers.php">Careers</a>
                  </li>
                  <li class="menu-item <?php if ( $page_title == 'Leadership' ) { echo 'active'; } ?>">
                    <a href="leadership.php">Insights</a>
                  </li>
                  <li class="menu-item <?php if ( $page_title == 'Blog' ) { echo 'active'; } ?>">
                    <a href="blog.php">Blog</a>
                  </li>
                  <li class="menu-item <?php if ( $page_title == 'Contact Us' ) { echo 'active'; } ?>">
                    <a href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--end menu -->
    <!-- End Header Section -->