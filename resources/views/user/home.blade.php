<!doctype html>
<html lang="en">
  <head>

  @include('user/layout/head')
  </head>
  <body>

    <!-- MENU -->
    @include('user/layout/menu')

    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small>
                        <h1 class="animated animated-text">
                            <span class="mr-2">Hey folks, I'm</span>
                                <div class="animated-info">
                                    <span class="animated-item">Aditya</span>
                                    <span class="animated-item">ASP.Net C#</span>
                                    <span class="animated-item">Designer</span>
                                    
                                </div>
                        </h1>

                        <p>Building a successful product is a challenge. I am highly energetic in user experience design, interfaces and web development.</p>
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Download Resume</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Get a free quote</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{asset('user/images/undraw/undraw_online_page_cq94.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="project py-5" id="project">
        <div class="container">
                
                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Things I have designed for digital media agencies</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('user/images/project/dasa.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('user/images/project/bmt.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('user/images/project/igp.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>

                       
                        <div class="item">
                          <div class="project-info">
                            <img src="{{asset('user/images/project/polos.png')}}" class="img-fluid" alt="project image">
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4">Experiences</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2019</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>Programmer ASP.Net C#</span><small>PT Dasa Prima</small></h3>
                                  <p>Membangun serta mengembangkan sistem yang berjalan pada PT Dasaprima menggunakan tools visual studio dan juga SQL server serta menggunakan IIS sebagai Web Server</p>
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2017</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>IT Programmer PHP</span><small>BMT Digital Printing</small></h3>
                                <p>Membangun website perusahaan, serta mengurus digital marketing serta sosial media</p>
                            </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2016</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Program Magang Astra Supplier PT Inti Ganda Perdana</h3>
                                <p>Menganalisis serta membangun project pada divisi quality assurance khususnya seksi kalibrasi berupa Aplikasi Penjadwalan Kalibrasi</p>
                            </div>
                        </div>
                        
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2015</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Freelance Event Ismaya Group<small>Team Leader</small></h3>
                                <p>Saya Bertugas mimpin team di satu section untuk mengatur booth dan keperluan acara</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2">Educations</h2>

                    <div class="timeline">
                        <div class="timeline-wrapper">
                             <div class="timeline-yr">
                                  <span>2012</span>
                             </div>
                             <div class="timeline-info">
                                  <h3><span>SMAN 88 JAKARTA</span><small>Jurusan IPA</small></h3>
                                 
                             </div>
                        </div>

                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>2016</span>
                            </div>
                            <div class="timeline-info">
                                <h3><span>Politeknik Sekolah Tinggi Manajemen Industri</span><small>Sistem Informasi</small></h3>
                                
                            </div>
                        </div>
                        
                        

                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://goo.gl/maps/DXvbyHaEYRBkbSns7" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">0878-8836-2186</p>
                  <p><a href="adityahalim18@gmail.com">adityahalim18@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interested to work together? Let's talk</h2>

              <form action="" method="get">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Send Button">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->
     include('user/layout/footer')
     <script src="{{asset('user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('user/js/popper.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/Headroom.js')}}"></script>
    <script src="{{asset('user/js/jQuery.headroom.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/smoothscroll.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>
  </body>
</html>