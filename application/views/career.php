
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="LearnPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Career</title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url()?>assets/images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url()?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo base_url()?>assets/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url()?>assets/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url()?>assets/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url()?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url()?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url()?>assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url()?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo base_url()?>assets/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url()?>assets/js/jquery-plugin-collection.js"></script>
<style type="text/css">
  input[type=checkbox], input[type=radio] {
    margin: 7px 0 0;
}
hr {
    margin-top: 10px;
    margin-bottom: 10px;
}
</style>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="<?php echo base_url()?>assets/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-30"><a href="<?php echo base_url()?>" class=""><img alt="" src="<?php echo base_url()?>assets/images/logo-wide-white.png"></a>
                </div>
                <div class="bg-lightest border-1px p-30 mb-0">
                  <h3 class="text-theme-colored mt-0 pt-5"> PLACEMENTS FOR STUDENTS AND PROFESSIONALS</h3>
                  <hr>
                  <p>Send your resume using the “Upload Your Resume Now” form. WE will maintain your details and contact you as and when a suitable opening comes up in the near future.</p>
                  <form  enctype="multipart/form-data"  action="<?=base_url()?>index_page/save_career"  method="post" role="form" class="reservation-form mt-20">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Name <small>*</small></label>
                          <input name="form_name" type="text" placeholder="Enter Name" required="" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Phone <small>*</small></label>
                          <input name="form_phone" class="form-control required email" type="text" placeholder="Enter Phone">
                        </div>
                      </div>
                    </div>
                    <div class="row">               
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Email <small>*</small></label>
                          <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Specialization <small>*</small></label>
                          <select name="form_post" class="form-control required">
                            <option value="Finance Manager">Finance Manager</option>
                            <option value="Area Manager">Area Manager</option>
                            <option value="Country Manager">Country Manager</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>C/V Upload</label>
                      <input name="form_attachment" class="file" type="file" multiple data-show-upload="false" data-show-caption="true">
                      <small>Maximum upload file size: 12 MB</small>
                      <div class="terms">
                        <ul class="terms-list">
                          <li>Kindly note that submission of your resume does not necessarily guarantee any interviews / job offers</li>
                          <li>In case you have already sent us your resume within the past 3 years, we will have it in our records and hence please avoid resending it.</li>
                          <li>You agree to allow Grey Edge to send you potential job openings via email / social media.</li>
                          <li>For further information - you can always drop an email to placement@grey-edge.com.</li>
                        </ul>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the terms & conditions above
                        </label>
                      </div>
                      
                    </div>
                    <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Submit Now</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-222">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="font-14 text-black-777 m-0">Copyright &copy;2023 BIM Nation. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

</body>
</html>