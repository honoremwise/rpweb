<?php include 'header.php'; ?>

<div class="mobile-navigation-toggle">
  <div class="toggle-box">
    <div class="toggle-inner"></div>
  </div>
</div>
<div class="bottom_header_right header_bar" style="display: none">
  <div class="wrapper">
    <div>
      <div class="header_search space-15">
        <div class="header_search__container">
          <div class="header_search__icon">
            <i></i>
          </div>
          <div class="header_search__inner">
            <form name="search_form" method="get" action="#" class="search_form">
              <input class="search_text" type="text" name="s" placeholder="Search..." value="" />
              <input class="search_submit" type="submit" value="Search" />
            </form>
          </div>
        </div>
      </div>
      <span class="number-info" style="display: none"> +250 788 304 558 </span>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="mobile_menu_container">
  <div class="fullwidth-wrapper">
    <?php include ('nav.php'); ?>
  </div>
</div>
</div>
</div>
</header>

<div class="gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle custom-57">
  <div class="gt3-page-title__inner">
    <div class="container">
      <div class="gt3-page-title__content">
        <div class="gt3_breadcrumb">
          <div class="breadcrumbs">
            <span class="current" style="padding-left: 35px;font-size:20px">Gallery</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  <style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .gallery {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    /* Responsive grid */
    gap: 16px;
    padding: 16px;
  }

  @media only screen and (min-width: 600px) {

    /* Two columns in each row for screens wider than 600px */
    .gallery {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .gallery img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    cursor: pointer;
  }

  .enlarged {
    transform: scale(1.1);
  }

  .resized-image {
    width: 219px;
    height: 3000px;
    object-fit: cover;
    /* Ensures the image covers the specified dimensions */
  }
</style>

<body>
  <div class="gallery">
    <?php
    $imagePaths = ["gallery/1.jpg", "gallery/2.jpg", "gallery/3.jpg", "gallery/4.jpg", "gallery/9.jpg", "gallery/10.jpg", "gallery/6.jpg", "gallery/7.jpg", "gallery/8.jpg"];

    foreach ($imagePaths as $path) {
      echo '<img src="' . htmlspecialchars($path) . '" alt="Image" onclick="toggleSize(this)" class="resized-image">';
    }
    ?>
    <script>
      function toggleSize(img) {
        img.classList.toggle('enlarged');
      }
    </script>
  </div>
</body>


<div class="in_row-full-width in_clearfix"></div>


<div class="in_row-full-width in_clearfix"></div>

<div class="in_row-full-width in_clearfix"></div>
<div class="clear"></div>
<div id="comments"></div>
</section>
</div>
</div>
</div>
</div>
<!-- .main_wrapper -->
</div>
<!-- .site_wrapper -->
<div class="gt3-contact-widget">
  <div class="gt3-contact-widget_label with-icon custom-02">
    Send a Quick Message
    <span class="gt3-contact-widget_icon">
      <img src="img/icon/call_back_icon.png" alt="" />
    </span>
  </div>
  <div class="gt3-contact-widget_body">
    <div role="form" class="form-in-wrapp" lang="en-US" dir="ltr">
      <div class="screen-reader-response"></div>
      <form action="#" method="post" novalidate="novalidate">
        <p>Send an Inquiry and our team will get in touch with you ASAP.</p>
        <br>
        <p>
          <span class="form-control-wrap-in Strategy">
            <input type="text" name="Strategy" value="" size="40" aria-invalid="false" placeholder="Inquiries" />
          </span>
          <span class="form-control-wrap-in First">
            <input type="text" name="First" value="" size="40" aria-invalid="false" placeholder="Full Names" />
          </span>

          <span class="form-control-wrap-in First">
            <input type="email" name="Email" value="" size="100" aria-invalid="false" placeholder="Email Address" />
          </span>
          <span class="form-control-wrap-in tel-280">
            <input type="tel" name="tel-280" value="" size="40" aria-invalid="false" placeholder="Phone Number" />
          </span>
          <input type="submit" value="send request" />
        </p>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>