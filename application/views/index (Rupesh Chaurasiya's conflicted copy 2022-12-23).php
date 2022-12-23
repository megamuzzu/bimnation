<?php include('include/header.php')  ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <?php include('include/slider.php') ?>

    <!-- Section: home-boxes -->
    <!-- <section class="bg-silver-light">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-user text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">24 Hours Service</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker2">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-comments-o text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Help</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-cc-paypal text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Payment</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker4">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-mobile text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Call +91 882 636 7018</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    
    <!-- Section: About -->
    <section id="about">
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 col-sm-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2 class="text-uppercase mt-0">Welcome To <span class="text-theme-color-2">  BIM NATION </span></h2>
              <p class="lead">BIM NATION is a multi-disciplinary firm focused on BIM Consultancy & BIM Training</p>
              <div class="row mt-40">
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1s">
                  <div class="mb-sm-30">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/services/bim-services.png" alt="">
                    <h4 class="letter-space-1 mt-10">BIM <span class="text-theme-color-2"> SERVICES</span></h4>
                    <p>The concept of Building Information Modeling is built on the foundation of enabling seamless and enhanced collaboration between...</p>
                    <a href="services.php" class="btn btn-sm btn-theme-colored">Read more</a>
                  </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1.2s">
                  <div class="mb-sm-30">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/services/bim-training.jpg" alt="">
                   
                    <h4 class=" letter-space-1 mt-10">BIM<span class="text-theme-color-2"> TRAINING</span></h4>
                    <p>BIM NATION offers professional training in BIM-Revit. We focus on covering all the essential aspects required to handle complex challenges...</p>
                    <a href="bim-training.php" class="btn btn-sm btn-theme-colored">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
             <div class="p-30 bg-theme-colored mt-10">
                <h3 class="text-white mt-0 mb-10">Get A Free Registration!</h3>
              <!-- Appilication Form Start-->
                <form  enctype="multipart/form-data"  action="<?=base_url()?>index_page/save_contact"  method="post" role="form" id="reservation_form" name="reservation_form" class="reservation-form mt-20">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <textarea placeholder="Enter Message" rows="3" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-0 mt-10">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block">Submit Request</button>
                    </div>
                  </div>
                </div>
              </form>
              <!-- Application Form End-->

              <!-- Application Form Validation Start-->
              <script type="text/javascript">
                $("#reservation_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
              <!-- Application Form Validation Start -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-60 pb-40 pl-90 pr-160 p-md-30">
              <h2 class="title text-white text-uppercase line-bottom mt-0 mb-30">How we support your team</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none"> 
                  <i class="fa fa-life-ring text-theme-color-2 font-20"></i>
                </a>
                <div class="ml-30 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">BIM Modeling and Revit</h4>
                  
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-book text-theme-color-2 font-20"></i> 
                </a>
                <div class="ml-30 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">BIM Content Libraries</h4>
                  
                </div>
              </div>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <a href="#" class="icon icon-circled bg-white icon-lg pull-left flip sm-pull-none">
                  <i class="fa fa-file-text-o text-theme-color-2 font-20"></i> 
                </a>
                <div class="ml-30 ml-sm-0">
                  <h4 class="icon-box-title text-white mt-5 mb-10 letter-space-1">BIM Execution Plan &  Implementation</h4>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="<?php echo base_url()?>assets/images/photos/ab1.jpg" data-wow-duration="1s" data-wow-delay="0.3s">
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">BIM <span class="text-theme-color-2"> SERVICES</span></h2>
              <p>The concept of Building Information Modeling is built on the foundation of enabling seamless and enhanced collaboration between the AEC professionals by coordinating their efforts on one digital BIM model.</p>
            </div>
          </div>
        </div>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-3col owl-nav-top" data-dots="true">
              

              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url()?>assets/images/services/BIM-Management.jpg">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="services.php"><span>View</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="services.php">BIM MANAGEMENT </a></h4>
                    <p>A BIM Manager within a Design team could be responsible for: defining BIM Standards, developing BIM content, setting up and deploying BIM templates</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url()?>assets/images/services/bim-model-creation.jpg">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="services.php"><span>View</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="services.php">BIM MODEL CREATION</a></h4>
                    <p>Building Information Modeling (BIM) is the foundation of digital transformation in the architecture, engineering, and construction (AEC) industry. </p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="<?php echo base_url()?>assets/images/services/bim-visualization.jpg">
                    <div class="hover-link">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="services.php"><span>View</span> </a>
                    </div>
                  </div>
                  <div class="project-details p-15 pt-10 pb-10">
                    <h4 class="font-weight-700 text-uppercase mt-0"><a href="services.php">BIM VISUALISATION </a></h4>
                    <p>Building Information Modeling (BIM) has transformed the way architects design buildings. Combined with the power of immersive visualization.</p>
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay" data-bg-img="<?php echo base_url()?>assets/images/bg/bg1.jpg" data-parallax-ratio="0.7">
      <div class="container pt-70 pb-60">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-users mt-5 text-white"></i>
              <h2 data-animation-duration="235" data-value="235" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Clients</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-book mt-5 text-white"></i>
              <h2 data-animation-duration="3780" data-value="3780" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Projects</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-home mt-5 text-white"></i>
              <h2 data-animation-duration="1000" data-value="1000 +" class="animate-number text-white mt-0 font-38 font-weight-500">0+</h2>
              <h4 class="text-white text-uppercase">BIM Training</h4>
            </div>
          </div>
          <!-- <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="fa  fa-graduation-cap mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="2324" class="animate-number text-white mt-0 font-38 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase">Students</h4>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    
    <!-- Gallery Grid 3 -->
    <section id="gallery">
      <div class="container pt-70 pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase">Our <span class="text-theme-color-2"> Gllery</span></h2>
              
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Filter -->
             <!--  <div class="portfolio-filter font-alt align-center text-center mb-6 0">
                <a href="#" class="active" data-filter="*">All</a>
                <a href="#photos" class="" data-filter=".photos">Photos</a>
                <a href="#campus" class="" data-filter=".campus">Campus</a>
                <a href="#students" class="mt-10" data-filter=".students">Students</a>
              </div> -->
              <!-- End Portfolio Filter -->

              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item campus">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item photos students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops2.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item campus">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item photos">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item campus students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/BIM-Workshops6.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/BIM-Workshops6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g1.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g3.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g5.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g6.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="gallery-item students">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url()?>assets/images/gallery/g7.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">BIM Workshops</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?php echo base_url()?>assets/images/gallery/g7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Client Say -->
    <section class="divider parallax layer-overlay overlay-dark-4" data-background-ratio="0.5" data-bg-img="<?php echo base_url()?>assets/images/bg/testimonial-bg.jpg" style="background-position: center;background-attachment: fixed;background-position: center;">
      <div class="container pt-60 pb-60">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 pb-0  text-center text-white">Our Students say</h2>
            <div class="owl-carousel-1col" data-dots="true">
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">BIM Nation has been great to work with. They value their client concerns and worked with us. We love it and were continually impressed by the professionalism, attention to detail, care and the support they provided us during the project.</p>
                    <h4 class="author text-white mb-0">BIM Consultancy </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">BIM Nation have been most professional and helpful in all stages, we would recommend   to others seeking a BIM Consultancy.</p>
                    <h4 class="author text-white mb-0">BIM Consultancy </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">It was an absolute pleasure working with BIIM NATION. They were very professional and great to work with! They exceeded my expectations and will definitely be working with them again in the future. Highly recommend!!</p>
                    <h4 class="author text-white mb-0">BIM Consultancy </h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">I enjoyed the Revit Architecture seminar's pace, which was relatively fast so that it is not boring and at the right rate, so the student can follow it. It is a comprehensive course and provides just the right content to get started with Revit. The course pace allows the student to gradually enter into the world of BIM. I had a really great learning experience with the course structure.</p>
                    <h4 class="author text-white mb-0">Shilpa</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">The Revit Essentials course was conducted in a very friendly environment, with daily exercises and clear instructions for each topic. I liked the exercises, and the topic notes helped me practice each command in my own time.</p>
                    <h4 class="author text-white mb-0">Rahul</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">The BIM Foundations course provides really useful information in an easy to understand format. It is Excellent that you have Module tests at the end of each Session to reinforce learning. Best Course to bridge the Gap between Market requirement and Architects Skill.</p>
                    <h4 class="author text-white mb-0">Megha</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">This Course along with my BIM Skills, has increased my productivity and accuracy, and is also highly time efficient. I am really happy with the outcome of my Training Sessions with Bim Nation</p>
                    <h4 class="author text-white mb-0">Sana</h4>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper text-center">
                  <div class="thumb"><img class="" alt="" src="<?php echo base_url()?>assets/images/testimonials/img1.png"></div>
                  <div class="content pt-10">
                    <p class="lead text-white">Highly trained BIM Team which helped me in learning every aspect of BIM very clearly. The best thing I liked about BIM Nation was that they allowed me to gain hands on experience by letting me work on live projects towards the end of my training period. Highly recommended to anyone looking for quality training. This practical approach gave me the confidence that I am ready to jump into the AEC industry. </p>
                    <h4 class="author text-white mb-0">Aman</h4>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
  <?php include('include/footer.php')  ?>