
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlaceHunt</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500|Gaegu:700" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
      var i = 0;
      var txt = 'Passion is the difference between having a job or a career...';
      var speed = 50;

      function typeWriter() {
        if (i < txt.length) {
          document.getElementById("head").innerHTML += txt.charAt(i);
          i++;
          setTimeout(typeWriter, speed);
        }
      }
    </script>
    <style type="text/css">
      .navbar.scrolled {
        background-color: #4f5696 !important;
        transition: background-color 200ms linear;
      }
    </style>
</head>
<body onload="typeWriter()" id="top">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="position: fixed;">
        <div class="container">
          <a class="navbar-brand" href="index.html">PlaceHunt</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-copywriting" style="color: white;"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#top" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="#work" class="nav-link">How we work</a></li>
              <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
              <li class="nav-item"><a href="#studentsignup" class="nav-link">Student</a></li>
              <li class="nav-item"><a href="#companysignup" class="nav-link">Company</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END nav -->

      <?php require_once('forms.php') ?>

      <div style="position: relative;">
            <div>
              <div class="block-30 item" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row align-items-center">
                      <h2 id="head" style="color: white; font-size: 8.7vh;"></h2>
                        <!-- <p style="z-index: 1;"><a href="https://ves.ac.in/vesit/" class="btn btn-primary btn-hover-white py-3 px-5" style="z-index: 1; position: absolute;top:60%; left: 30%;">Join Us ></a></p> -->
                  </div>
                  
                </div>
              </div>
            </div>
        </div>

        <div class="site-section" id="work">
                <div class="container">
                        <div class="row mb-5">
                                <div class="col-md-12 text-center">
                                  <h2>How Placehunt works?</h2>
                                </div>
                              </div>
                  <div class="row">
            
                    <div class="col-md-4">
                      <div class="media block-6">
                        <div class="icon"><span class="flaticon-first-aid-kit"></span></div>
                        <div class="media-body">
                          <h3 class="heading">Register</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          <p><a href="#">Learn More</a></p>
                        </div>
                      </div>     
                    </div>
            
                    <div class="col-md-4">
                      <div class="media block-6">
                        <div class="icon"><span class="flaticon-donate"></span></div>
                        <div class="media-body">
                          <h3 class="heading">Apply/Post</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          <p><a href="#">Learn More</a></p>
                        </div>
                      </div>  
                    </div>
            
                    <div class="col-md-4">
                      <div class="media block-6">
                        <div class="icon"><span class="flaticon-people"></span></div>
                        <div class="media-body">
                          <h3 class="heading">Prepare/Recruit</h3>
                          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                          <p><a href="#">Learn More</a></p>
                        </div>
                      </div> 
                    </div>
            
                  </div>
                </div>
              </div> <!-- .site-section -->


              <div class="featured-donate overlay-color" id="about" style="background-image: url('media/images/mslider2.jpg'); background-attachment: fixed;">
    
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 pr-lg-5">
                      <!-- <img src="media/images/bg_2.jpg" alt="Image placeholder" class="img-fluid"> -->
                      <div id="container">
                        <div id="inner">
                          <div class="demo-img">
                            <div class="demo-overlay">
                             
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2 mb-3 mb-lg-0">
                      <br>
                      <span class="featured-text mb-3 d-block">About Us</span>
                      <hr>
                      <h2>Training and Placement Cell</h2>
                      <p class="mb-3">Welcome to the Training and Placement Cell of V.E.S Institute of Technology. V.E.S. Institute of Technology was established in 1984.
    
                            V.E.S.I.T Training and Placement Cell caters for enhancing not only the employability skills but also the overall development of the student’s personality. The focus of the cell is to strike a match between recruiter expectations and student aspirations.</p>
                      <div class="progress custom-progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p style="padding-top: 10%"><a href="https://ves.ac.in/vesit/" class="btn btn-primary btn-hover-white py-3 px-5">Visit website</a></p>
                    </div>
                    
                  </div>
                </div>
            </div>

        <section style="padding-top: 5%; " class="site-section bg-light">
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="heading">
                                    <h2>Recruiting Companies</h2>
                                    <span>Some of the companies who've recruited excellent applicants over the years.</span>
                                    <br>
                                </div><!-- Heading -->
                                <div class="comp-sec">
                                    <div class="company-img">
                                        <a href="#" title=""><img src="media/images/cc1.jpg" alt="" style="float:left; padding: 1.5%"/></a>
                                    </div><!-- Client  -->
                                    <div class="company-img">
                                        <a href="#" title=""><img src="media/images/cc2.jpg" alt="" style="float:left;  padding: 1.5%"/></a>
                                    </div><!-- Client  -->
                                    <div class="company-img">
                                        <a href="#" title=""><img src="media/images/cc3.jpg" alt="" style="float:left;  padding: 1.5%"/></a>
                                    </div><!-- Client  -->
                                    <div class="company-img">
                                        <a href="#" title=""><img src="media/images/cc4.jpg" alt="" style="float:left;  padding: 1.5%"/></a>
                                    </div><!-- Client  -->
                                    <div class="company-img">
                                        <a href="#" title=""><img src="media/images/cc5.jpg" alt="" style="float:left;  padding: 1.5%"/></a>
                                    </div><!-- Client  -->

                                    <p style="padding-top: 15%"><a href="https://ves.ac.in/vesit/" class="btn btn-primary btn-hover-blue py-3 px-5">See All Companies</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

        <div class="site-section fund-raisers">
                <div class="container pb-5">
                  <div class="row mb-5">
                    <div class="col-md-12 text-center">
                      <h2>Popular Categories</h2>
                    </div>
                  </div>
            
                  <div class="row">
                    <div class="col-md-6 col-lg-3 mb-5">
                      <div class="person-donate text-center bg-light pt-4">
                        <img src="media/images/web.jpg" alt="Image placeholder" class="img-fluid">
                        <div class="donate-info">
                          <h2>Frontend Web Development</h2>
                          <span class="time d-block mb-3">HTML + CSS + JS</span>
            
                          <div class="donate-amount d-flex">
                            <div class="label">Companies</div>
                            <div class="amount">4</div>
                          </div>
                        </div>
                      </div>    
                    </div>
            
                    <div class="col-md-6 col-lg-3 mb-5">
                        <div class="person-donate text-center bg-light pt-4">
                            <img src="media/images/web.jpg" alt="Image placeholder" class="img-fluid">
                            <div class="donate-info">
                                <h2>Backend Web Development</h2>
                                <span class="time d-block mb-3">PHP + Python</span>
                
                                <div class="donate-amount d-flex">
                                <div class="label">Companies</div>
                                <div class="amount">3</div>
                                </div>
                            </div>
                        </div>    
                    </div>
            
                    <div class="col-md-6 col-lg-3 mb-5">
                            <div class="person-donate text-center bg-light pt-4">
                                <img src="media/images/web.jpg" alt="Image placeholder" class="img-fluid">
                                <div class="donate-info">
                                    <h2>Full Stack Web Development</h2>
                                    <span class="time d-block mb-3">HTML + CSS + JS + PHP</span>
                    
                                    <div class="donate-amount d-flex">
                                    <div class="label">Companies</div>
                                    <div class="amount">6</div>
                                    </div>
                                </div>
                            </div>    
                        </div>
            
                        <div class="col-md-6 col-lg-3 mb-5">
                                <div class="person-donate text-center bg-light pt-4">
                                    <img src="media/images/web.jpg" alt="Image placeholder" class="img-fluid">
                                    <div class="donate-info">
                                        <h2>App<br> Development</h2>
                                        <span class="time d-block mb-3">Ionic + React Native</span>
                        
                                        <div class="donate-amount d-flex">
                                        <div class="label">Companies</div>
                                        <div class="amount">7</div>
                                        </div>
                                    </div>
                                </div>    
                            </div>

                  </div>
                  <div class="row col-lg-12 align-items-center">
                  <p><a href="https://ves.ac.in/vesit/" class="btn btn-primary btn-hover-blue py-3 px-5" style="position: absolute;left: 20%;">See All Positions</a></p>
                </div>
                </div>
                
              </div> <!-- .section -->


              <div class="site-section bg-light">
                    <div class="container">
                      <div class="row mb-5">
                        <div class="col-md-12 text-center">
                          <h2>Testimonial</h2>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-5">
                          <div class="block-47 d-flex">
                            <div class="block-47-image">
                              <img src="media/images/person_3.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <blockquote class="block-47-quote">
                              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia.&rdquo;</p>
                              <cite class="block-47-quote-author">Carl Adams</cite>
                            </blockquote>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5">
                          <div class="block-47 d-flex">
                            <div class="block-47-image">
                              <img src="media/images/person_2.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <blockquote class="block-47-quote">
                              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia.&rdquo;</p>
                              <cite class="block-47-quote-author">&mdash; Nicole Watson</cite>
                            </blockquote>
                          </div>
                        </div>
                
                        <div class="col-md-6 mb-5">
                          <div class="block-47 d-flex">
                            <div class="block-47-image">
                              <img src="media/images/person_1.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <blockquote class="block-47-quote">
                              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia.&rdquo;</p>
                              <cite class="block-47-quote-author">Vanessa Horton</cite>
                            </blockquote>
                          </div>
                        </div>
                        <div class="col-md-6 mb-5">
                          <div class="block-47 d-flex">
                            <div class="block-47-image">
                              <img src="media/images/person_4.jpg" alt="Image placeholder" class="img-fluid">
                            </div>
                            <blockquote class="block-47-quote">
                              <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia.&rdquo;</p>
                              <cite class="block-47-quote-author">&mdash; Adam Spratt</cite>
                            </blockquote>
                          </div>
                        </div>
                
                      </div>
                    </div>
                  </div>
            
                  <footer class="footer" id="contact">
                        <div class="container">
                          <div class="row mb-5">
                            <div class="col-md-9 col-lg-6">
                              <h3 style="color: white; padding-bottom: 8%">About Us</h3>
                              <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                              <p><a href="#" class="btn btn-primary btn-hover-white px-4 py-3">Join Us</a></p>
                            </div>
                            
                            <div class="col-md-9 col-lg-6">
                              <div class="block-23">
                                <h3 style="color: white; padding-bottom: 8%">Contact Info</h3>
                                  <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                                    <li><span class="icon icon-clock-o"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                                  </ul>
                                </div>
                            </div>
                            
                            
                          </div>
                          <div class="row pt-5">
                            <div class="col-md-12 text-center">
                              <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by someone
                              </p>
                            </div>
                          </div>
                        </div>
                      </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/movement.js"></script>
    <script type="text/javascript">
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar");
          $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
      });
    </script>
</body>
</html>


