@extends('layouts.app')

@section('content')


<style>
.my-bg-img{
    background: url({{asset('/img/1.jpg')}}) no-repeat;
    background-size: cover;
}
</style>

<div class="container">
        {{-- template1 --}}
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        {{-- <link href="{{asset('LandingPage_template/template1/css/styles.css')}}" rel="stylesheet" /> --}}

        {{-- template2 --}}
        <!-- Custom styles -->
        {{-- <link rel="stylesheet" href="{{asset('LandingPage_template/template2/css/styles.css')}}"> --}}

        {{-- !!!!!Content!!!!! --}}

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark my-bg-img" >
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
              <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
          </div>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent Works-->
        <div class="row section recentworks topspace">

            <h2 class="section-title"><span>Recent Works</span></h2>

            <div class="thumbnails recentworks row">

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Sample title - big data solutions</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Wordpress</a> | <a href="">Logotype</a></span>
                    <h4></h4>
                    <p></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Pure ipsum - development services for people</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
                    <h4></h4>
                    <p></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Lorem studios - interior and patio design</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
                    <h4></h4>
                    <p></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Pure ipsum - development services for people</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Wordpress</a></span>
                    <h4></h4>
                    <p></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Lorem studios - interior and patio design</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
                    <h4></h4>
                    <p></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <a class="thumbnail" href="sidebar-right.html">
                        <span class="img">
                            <img src="{{asset('LandingPage_template/template2/images/s1.jpg')}}" alt="">
                            <span class="cover"><span class="more">See details &rarr;</span></span>
                        </span>
                        <span class="title">Lorem studios - interior and patio design</span>
                    </a>
                    <span class="details"><a href="">Web design</a> | <a href="">Logotype</a></span>
                    <h4></h4>
                    <p></p>
                </div>
            </div>

        </div>
        <!-- /section -->
</div>
{{-- End div main container --}}

<footer class="bg-secondary text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="https://mdbootstrap.com/img/Photos/new-templates/animal-shelter/logo.png" height="70" alt=""
                 loading="lazy" />
          </div>

          <p class="text-center">Homless animal shelter The budgetary unit of the Capital City of Warsaw</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Animals</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>When your pet is missing</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Recently found</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>How to adopt?</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pets for adoption</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Material gifts</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Help with walks</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer activities</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Animals</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>General information</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>About the shelter</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Statistic data</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Job</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Tenders</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Contact</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  </footer>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('LandingPage_template/template1/js/scripts.js')}}"></script>
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

@endsection
