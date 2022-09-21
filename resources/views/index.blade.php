@extends('app')
  <!-- Template Main CSS File -->
  <link href="{{asset('commons/css/style.css')}}" rel="stylesheet">
  @include('layouts.header')
  <title>@section('title') DIABAGATE Ibrahim @endsection</title>

@section('content')

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="{{Route('index')}}">Diabagate Ibrahim</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="{{asset('commons/img/logo.png')}}" alt="" class="img-fluid"></a> -->
      <h2> <span>Developpeur d'Applications</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Accueil</a></li>
          <li><a class="nav-link" href="#about">A propos</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <!--<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>-->
        <a href="https://github.com/Ibraddev" class="github"><i class="bi bi-github"></i></a>
        <a href="https://ci.linkedin.com/in/ibrahim-diabagate-3793a21bb" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>A propos</h2>
        <p>En savoir plus sur moi</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset('commons/img/me.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Developpeur Full-Stack</h3>
          <p class="fst-italic">
            <!--
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
            -->
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>20 Mai 2000</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+225 0575647261</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Abidjan, Côte d'Ivoire</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                <!--<li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>-->
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>ibrahdiabagate2000@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p>

          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <!--
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div>-->
    <!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Bootstrap <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">PHP <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">LARAVEL <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Base de données MySQL <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">SQL <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Langage Python <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Powershell Scripting <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Active Directory <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Analyse de données<i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Centres dInterrêts</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Cryptomonaies</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sports</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-0">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Datas et IA</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-0">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Lecture</h3>
          </div>
        </div>
      </div>

    </div><!-- End Interests -->

    <!-- ======= Testimonials ======= -->
    <!-- 
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('commons/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>

          

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('commons/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('commons/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('commons/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="{{asset('commons/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div> 
    End Testimonials  -->

  </section>
  
  <!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          
          <h3 class="resume-title">Resumé</h3>
          <div class="resume-item pb-0">
            <h4>Diabagate Ibrahim</h4>
            <p><em>Developpeur innovant et soucieux des délais avec plus de 3 ans d'expérience dans la conception et le développement d'applications web et sites web.</em></p>
            <p>
            <ul>
              <li>Abidjan, Côte d'Ivoire</li>
              <li>(2+55) 0575647261</li>
              <li>ibrahdiabagate2000@gmail.com</li>
            </ul>
            </p>
          </div>
       
          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Licence en informatique developpement d'applications</h4>
            <h5>2018 - 2021</h5>
            <p><em>Université Internationnal de Côte d'Ivoire (UICI), Abidjan</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Cybersécurity Essentials</h4>
            <h5>2018 - 2021</h5>
            <p><em>Cisco Networking Academy</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Formation pratique au CEH (Certified Ethical Hacker)</h4>
            <h5>2018 - 2021</h5>
            <p><em>NYS AFRICA, Abidjan</em></p>
            <p></p>
          </div>
          <div class="resume-item">
            <h4>Baccalaureat serie D </h4>
            <h5>2018</h5>
            <p><em>Ecole William Ponty, Abidjan</em></p>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Experience Proféssionnelle</h3>
          <div class="resume-item">
            <h4>STAGE D'EXPERIENCE PROFESSIONNELLE</h4>
            <h5>Mars 2022 - Present</h5>
            <p><em>Groupement des Services d'Eau et d'Electricité (GS2E), Abidjan </em></p>
            <p>
            <ul>
              <li>Tâches administratifs sur un domaine Active Directory</li>
              <li>Création de scripts Powershell </li>
              <li>Analyse de données relatifs aux audits internes</li>
              <li>Developpement d'applications web</li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>STAGE ECOLE</h4>
            <h5>Novembre 2022 - Janvier 2022</h5>
            <p><em>Groupement des Services d'Eau et d'Electricité (GS2E), Abidjan </em></p>
            <p>
            <ul>
              <li>Scripts d'automatisation des actions sur un domaine Active Directory</li>
              <li>Developpement de Car-Tracking (Application web de suivi des véhicules de services)</li>
              <li>Assistance au utilisateurs sur Microsoft Office 365, Azure AD et Exchange </li>
            </ul>
            </p>
          </div>
          <div class="resume-item">
            <h4>Developpeur web freelance</h4>
            <h5>2019 - Présent</h5>
            <p><em>Abidjan </em></p>
            </p>
          </div>
        </div>

        <h3 class="resume-title">Certifications</h3>
          <div class="resume-item pb-0">
            <h4>Microsoft Technology Associate</h4>
            <p><em>HTML&CSS, Langage Python et Javascipt</em></p>
          </div>
          <div class="resume-item pb-0">
            <h4>Cisco Networking Academy</h4>
            <p><em>Cybersécurity Essentials</em></p>
          </div>

        <h3 class="resume-title">Activités sociales et bénévoles  </h3>
          <div class="resume-item">
            <h4>Président du club informatique de UICI</h4>
            <h5>2020 – 2021</h5>
            <p><em>UICI (Université internationale de Côte d’Ivoire), Abidjan</em></p>
            <p>
              Gestion administrative du club, organisation de conférence et des séances de formations.
            </p>
          </div>
          <div class="resume-item">
            <h4>Formateur IT</h4>
            <h5>2018 - 2019</h5>
            <p><em>Abidjan </em></p>
            <p>
              Formateur en informatique au sein de l'association It-Coder
            </p>
          </div>

      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Mes Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4><a href="">Developpement</a></h4>
            <p>Conception et developpement de sites web et applications web</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <h4><a href="">Scripting</a></h4>
            <p>Créations de scripts d'automatisations ou de réalisation de tâches spécifiques </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-slideshow"></i></div>
            <h4><a href="">Formateur IT</a></h4>
            <p>Formations sur les logiciels de bureautique, les outils et langages de programation informatique, ... </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4><a href="">Infographie & UI Design</a></h4>
            <p>Réalisation d'affiches publicitaires, conception de logo, flyers, montages vidéos,  etc...</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-data"></i></div>
            <h4><a href="">Datas</a></h4>
            <p>Administration de base de données MySQL et Oracle, Analyse de données... </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <h4><a href="">Administration Systeme</a></h4>
            <p>Administration systeme windows server et Active Directory </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Quelques Réalisations</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tout</li>
            <li data-filter=".filter-app">Applications</li>
            <li data-filter=".filter-web">Sites web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/Car-Tracking/ct (1).png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Car-Tracking</h4>
              <p>Application Web</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/Car-Tracking/ct (1).png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Car-Tracking"><i class="bx bx-plus"></i></a>
                <a href="{{Route('getproject',1)}}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/uici.info/uici (2).png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>UICI</h4>
              <p>Site Web</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/uici.info/uici (2).png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UICI Infos"><i class="bx bx-plus"></i></a>
                <a href="{{Route('getproject',4)}}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/Cert-Alert/ca (6).png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Cert-Alert</h4>
              <p>Application Web</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/Cert-Alert/ca (6).png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Cert-Alert"><i class="bx bx-plus"></i></a>
                <a href="{{Route('getproject',2)}}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--
        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        -->
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/SmartSoft/ss (1).png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>SmartSoft</h4>
              <p>Site Web</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/SmartSoft/ss (1).png')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="SmartSoft"><i class="bx bx-plus"></i></a>
                <a href="{{Route('getproject',3)}}" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!--
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('commons/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{asset('commons/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        -->
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contactez Moi</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p>Abidjan, Côte d'Ivoire</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/Ibraddev" class="github"><i class="bi bi-github"></i></a>
              <a href="https://ci.linkedin.com/in/ibrahim-diabagate-3793a21bb" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>ibrahdiabagate200@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+225 0575647261</p>
          </div>
        </div>
      </div>

      <form action="{{Route('send_msg')}}" method="post" role="form" class="php-email-form mt-4">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
            @error('name')
               <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Prénom" required>
            @error('email')
               <p class="alert alert-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
          @error('subject')
            <p class="alert alert-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          @error('message')
            <p class="alert alert-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="my-3">
          <div class="loading">Chargement</div>
          <div class="sent-message"></div>
          <div class="sent-message"></div>
          @if(session('success'))
            <center><p class="alert alert-success">{{session('success')}}</p></center>
          @elseif(session('error'))
            <center><p class="alert alert-danger">{{session('error')}}</p></center>
          @endif
        </div>
        <div class="text-center"><button type="submit">Envoyer</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->
  @include('layouts.footer')
@endsection



