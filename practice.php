<?php include('header.php')?>
<style>


    body {
                    line-height: 1.6;
                    font-family: 'times New Roman';
                    background: #ffffff;
                    font-size: 16px;
                    line-height: 30px;
                    font-weight: 300;
                    color: #050709;
                  }
  /* Tooltip container */
  .tooltip {
    position: relative;
    display: inline-block;
  }

  /* Tooltip text */
  .tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color: #000;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.3s, visibility 0.3s;
  }
  


.gt3_practice_list__image-holder img {
    margin-left:30px;;
  width: 130px;
  height: auto; /* Maintain aspect ratio */
}



  /* Show the tooltip on hover */
  .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
  }
  
  .container{
      margin-top: -90px;
  }
  
 .gt3_practice_list__image-holder{
     display: grid;
      place-items: center;
 }
</style>
          </div>
        </div>
      </div>
      <div class="sticky_header header_sticky_shadow header-cus-01" data-sticky-type="classic">
        <div class="bottom_header_wrapper">
          <div class="fullwidth-wrapper">
            <div class="bottom_header empty_center_side height-86">
              <div class="Leftalignside header_side">
                <div class="header_side_container">
                  <div class="logo_container sticky_logo_enable">
                    <a href="index.php" class="logo-link">
                      <img class="default_logo img-size-03" src="img/logo2.png" alt="logo" />
                      <h1
                        class="logo-text-in-sticky"
                        style="display: inline; font-size: 25px; margin-left: 10px; color: #223a5b"
                      >
                        R &amp; Partners Law Firm
                      </h1>
                    </a>
                  </div>
                </div>
              </div>
              <div class="Centeralignside header_side"></div>
              <div class="Rightalignside header_side">
                <div class="header_side_container">
                 <?php include('nav.php');?>
                  <div class="mobile-navigation-toggle">
                    <div class="toggle-box">
                      <div class="toggle-inner"></div>
                    </div>
                  </div>
                <div class="bottom_header_right header_bar" style="display: none;">
                    <div class="wrapper">
                      <div>
                        <div class="header_search space-15">
                          <div class="header_search__container">
                            <div class="header_search__icon">
                              <i></i>
                            </div>
                            <div class="header_search__inner">
                              <form name="search_form" method="get" action="#" class="search_form">
                                <input
                                  class="search_text"
                                  type="text"
                                  name="s"
                                  placeholder="Search..."
                                  value=""
                                />
                                <input class="search_submit" type="submit" value="Search" />
                              </form>
                            </div>
                          </div>
                        </div>
                        <span class="number-info" style="display: none;"> +250 788 304 558 </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mobile_menu_container">
            <div class="fullwidth-wrapper">
             <?php include('nav.php');?>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <div
      class="gt3-page-title gt3-page-title_horiz_align_left gt3-page-title_vert_align_middle custom-57"
    >
      <div class="gt3-page-title__inner">
        <div class="container">
          <div class="gt3-page-title__content">
              <div class="gt3_breadcrumb">
              <div class="breadcrumbs">
               <span class="current" style="padding-left: 35px;font-size:20px">Practice Areas</span>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div
      class="gt3-page-title gt3-page-title_horiz_align_center gt3-page-title_vert_align_middle custom-13"
    >
      <div class="gt3-page-title__inner">
        <div class="container">
          <div class="gt3-page-title__content">

          </div>
        </div>
      </div>
    </div>
    <div class="site_wrapper fadeOnLoad">
      <div class="main_wrapper">
        <div class="container" style="font-family: 'Times New Roman'">
          <div class="row sidebar_none">
            <div class="content-container span12">
              <div id="main_content">
                <div class="in_custom_1485161978651">
                  <div class="container">
                    <div class="in_row wpb_row in_row-fluid">
                      <div class="wpb_column in_column_container in_col-sm-12">
                        <div class="in_column-inner">
                          <div class="wpb_wrapper">
                            <div class="gt3_practice_list">

                              <div class="gt3_practice_list__posts-container row isotope">
                                <article class="gt3_practice_list__item span4 corporate-commercial">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                  <img src="img/practice-areas-icons/p01.png" width="130" alt="">
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">
                                      Corporate and Commercial Law
                                    </h4>
                                    <div class="gt3_practice_list__text">
                                    Our Team has extensive experience in dealing with various legal aspects of the corporate and
commercial legal fields such as business formation, corporate governance...
                                    </div>
                                    <div class="tooltip">
                                    <a href="corporate-commercial.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                  <span class="tooltiptext">CLick to learn more about this</span>
                                </div>
                                  </div>
                                </article>
                                <article class="gt3_practice_list__item span4 bank-finance">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;"">
                                    <img src="img/practice-areas-icons/p02.png" width="130" alt=""/>
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">Banking and Finance</h4>
                                    <div class="gt3_practice_list__text">
                                    We handle all matters related to financial institutions operations. we have extensive
experience in regulatory compliance, loan agreements and financing....
                                    </div>
                                  <div class="tooltip">
                                    <a href="banking-finance.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                  <span class="tooltiptext">CLick to learn more about this</span>
                                </div>
                                  </div>
                                </article>
                                <article class="gt3_practice_list__item span4 employment-labour-law">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                    <img src="img/practice-areas-icons/p03.png" width="130" alt="" />
                                  </div>
                                  <div class="gt3_practice_list__content" style="margin-top:7px">
                                    <h4 class="gt3_practice_list__title">
                                    Mining, Energy &amp; Infrastructure Law
                                    </h4>
                                    <div class="gt3_practice_list__text">
                                    Mining, Energy, and Infrastructure are ever evolving sectors subject to rapid changes and
evolving regulations. Our firm has extensive knowledge in the domestic and ....
                                    </div>
                                    <div class="tooltip">
                                    <!-- employment-labour.php -->
                                      <a href="mining-energy-infrastructure.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                    <span class="tooltiptext">CLick to learn more about this</span>
                                  </div>
                                  </div>
                                </article>
                                <article class="gt3_practice_list__item span4 mining-energy-infrastructure">
                                <!-- mining-energy-infrastructure -->
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                    <img src="img/practice-areas-icons/p04.png" width="130" alt="" />
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">
                                    Employment and Labour Law
                                    </h4>
                                    <div class="gt3_practice_list__text">
                                   The firm offers tailored legal assistance relevant to the unique experience of our clients while
ensuring compliance with domestic and international labour regulations.
                                    </div>
                                    <div class="tooltip">
                                     <a href="employment-labour.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                    <span class="tooltiptext">CLick to learn more about this</span>
                                  </div>
                                  </div>
                                </article>
                                <article class="gt3_practice_list__item span4 intellectual-property">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                    <img src="img/practice-areas-icons/p05.png" width="130" alt="" />
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">Intellectual Property</h4>
                                    <div class="gt3_practice_list__text">
                                    In our increasingly knowledge-based and digital world, our Team understands the paramount
importance of Intellectual Property Laws ...
                                    </div>
                                    <div class="tooltip">
                                      <a href="intellectual-property.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                    <span class="tooltiptext">Click to learn more about this</span>
                                  </div>
                                  </div>
                                </article>
                                <article class="gt3_practice_list__item span4 real-estate-propery-law">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                    <img src="img/practice-areas-icons/p06.png" width="130" alt="" />
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">
                                      Real Estate and Property Law
                                    </h4>
                                    <div class="gt3_practice_list__text">
                                    Our Team has extensive knowledge in both Property law principles and the specific
regulations and practices governing the acquisition, management, ....
                                    </div>
                                    <div class="tooltip">
                                      <a href="realestate-law.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                    <span class="tooltiptext">Click to learn more about this</span>
                                  </div>
                                  </div>
                                </article>
                              </div>
                              <article class="gt3_practice_list__item span4 litigation-albitration-law">
                                  <div class="gt3_practice_list__image-holder">
                                    <!-- <img src="img/practice-areas-icons/p07.png" width="130" alt="" /> -->
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <!-- <h4 class="gt3_practice_list__title">
                                      Litigation & Arbitration
                                    </h4> -->
                                    <div class="gt3_practice_list__text">
                                      <!-- Effective resolution of legal disputes through litigation, arbitration, and alternative dispute resolution methods. -->
                                    </div>
                                    <div class="tooltip">
                                      <!-- <a href="litigation-albitration-law.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a> -->
                                    <!-- <span class="tooltiptext">Click to learn more about this</span> -->
                                  </div>
                                  </div>
                                </article>
                              <article class="gt3_practice_list__item span4 litigation-albitration-law">
                                  <div class="gt3_practice_list__image-holder" style="margin-left: -40px;">
                                    <img src="img/practice-areas-icons/p07.png" width="130" alt="" />
                                  </div>
                                  <div class="gt3_practice_list__content">
                                    <h4 class="gt3_practice_list__title">
                                      Litigation and Arbitration
                                    </h4>
                                    <div class="gt3_practice_list__text">
                                    Litigation and Arbitration as the main Dispute Resolution Methods, are essential elements of
all legal frameworks. Our Team of experienced ..
                                    </div>
                                    <div class="tooltip">
                                      <a href="litigation-arbitration-law.php" class="gt3_practice_list__link learn_more tooltip">Learn More<span></span></a>
                                    <span class="tooltiptext">Click to learn more about this</span>
                                  </div>
                                  </div>
                                </article> <article class="gt3_practice_list__item span4 litigation-albitration-law">
                                
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="in_row-full-width in_clearfix"></div>
                <div class="clear"></div>
                <div id="comments"></div>
              </div>
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
                <input
                  type="text"
                  name="Strategy"
                  value=""
                  size="40"
                  aria-invalid="false"
                  placeholder="Inquiries"
                />
              </span>
              <span class="form-control-wrap-in First">
                <input
                  type="text"
                  name="First"
                  value=""
                  size="40"
                  aria-invalid="false"
                  placeholder="Full Names"
                />
              </span>

              <span class="form-control-wrap-in First">
                <input
                  type="email"
                  name="Email"
                  value=""
                  size="100"
                  aria-invalid="false"
                  placeholder="Email Address"
                />
              </span>
              <span class="form-control-wrap-in tel-280">
                <input
                  type="tel"
                  name="tel-280"
                  value=""
                  size="40"
                  aria-invalid="false"
                  placeholder="Phone Number"
                />
              </span>
              <input type="submit" value="send request" />
            </p>
          </form>
        </div>
      </div>
    </div>
    <?php include('footer.php')?>
