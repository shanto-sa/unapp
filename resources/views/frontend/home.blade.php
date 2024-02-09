@extends('layouts.header')
  
@section('content')
 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main">
    <!-- Navbar -->
    <nav  style="background-color: #e7e9eb;"  class="js-nav-scroller navbar navbar-expand-lg navbar-sidebar navbar-vertical navbar-light border-end"
          data-hs-nav-scroller-options='{
            "type": "vertical",
            "target": ".navbar-nav .active",
            "offset": 80
           }'>
      <!-- Navbar Toggle -->
      <button type="button" class="navbar-toggler btn btn-white d-grid w-100" data-bs-toggle="collapse" data-bs-target="#navbarVerticalNavMenu" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarVerticalNavMenu">
        <span class="d-flex justify-content-between align-items-center">
          <span class="h6 mb-0">Nav menu</span>

          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>

          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </span>
      </button>
      <!-- End Navbar Toggle -->

      <!-- Navbar Collapse -->
      <div id="navbarVerticalNavMenu" class="collapse navbar-collapse">
        <div class="navbar-brand-wrapper border-end" style="height: auto;">
          <!-- Default Logo -->
          <div class="d-flex align-items-center mb-3">
            <a class="navbar-brand" href="index.html" aria-label="Space">
              <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.png')}} " alt="Logo">
            </a>
            <a class="navbar-brand-badge" href="index.html">
              <span class="badge bg-soft-primary text-primary ms-2">v0.0.1</span>
            </a>
          </div>
          <!-- End Default Logo -->
    
        </div>

        <div class="docs-navbar-sidebar-aside-body navbar-sidebar-aside-body">
          <ul id="navbarSettings" class="navbar-nav nav nav-vertical nav-tabs nav-tabs-borderless nav-sm">
            <li class="nav-item">
              <span class="nav-subtitle">Navigation</span>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="about.html">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="service.html">Services</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="faq.html">FAQ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="knowledge.html">Privacy & Policy</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="contact.html">Contact</a>
            </li>

          </ul>
        </div>
      </div>
      <!-- End Navbar Collapse -->
    </nav>
    <!-- End Navbar -->



        <!-- Content -->
        <div class="navbar-sidebar-aside-content content-space-1 content-space-md-2 px-lg-5 px-xl-10">
          <div class="row justify-content-md-between align-items-md-center mb-10">
            <div class="col-md-6 col-xl-5">
              <div class="mb-4">
                <h1 class="display-5 mb-3">Academic <span class="text-primary text-highlight-warning">Automation</span> & E-Libraries </h1> 
                <p class="lead">Streamlining Academic Excellence - An Integrated Platform for Research Management and Electronic Libraries in Educational Institutions</p>
              </div>


               <!-- Form -->
            <form class="mb-7">
              <!-- Input Group -->
              <div class="row gx-2">
                <div class="col-sm-6 col-md mb-2 mb-sm-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Enter your request" aria-label="Enter your email" aria-describedby="emailAddOn">
                </div>
                <div class="col-sm-auto">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="button" id="emailAddOn">Search</button>
                  </div>
                </div>
              </div>
              <!-- End Input Group -->
            </form>
            <!-- End Form -->
    
              <div class="d-flex flex-wrap gap-2">
                <!-- Card -->
                <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
                  <h2 class="h1 fw-normal mb-1">68</h2>
                  <span class="text-cap mb-0" style="font-size: 0.75rem;">Thesis</span>
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
                  <h2 class="h1 fw-normal mb-1">40</h2>
                  <span class="text-cap mb-0" style="font-size: 0.75rem;">Research Project Report </span>
                </div>
                <!-- End Card -->
    
                <!-- Card -->
                <div class="bg-soft-secondary text-center rounded p-3" style="min-width: 7rem;">
                  <h2 class="h1 fw-normal mb-1">750+</h2>
                  <span class="text-cap mb-0" style="font-size: 0.75rem;">Published Paper</span>
                </div>
                <!-- End Card -->
              </div>
            </div>
            <!-- End Col -->
    
            <div class="col-md-6 col-xl-6">
              <img class="img-fluid" src="{{ asset('assets/svg/illustrations/oc-building-apps.svg')}}" alt="Image Description">
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
    
          <span class="divider-center text-cap mb-8">THESIS </span>

          <div class="row mb-7">
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/1.jpg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Advanced Practice Nurse</a>
                  </h3>
    
                  <p class="card-text">Organic cold-pressed juices, smoothies and plant-based lattes delivered to your door.</p>
                </div>
                <!-- End Card Body -->
    
                <!-- Card Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                      <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                      <p class="card-text small">Thesis</p>
                    </div>
                  </div>
                </div>
                <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/9.jpeg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                 
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Advanced Practice Nurse</a>
                  </h3>
    
                  <p class="card-text">Organic cold-pressed juices, smoothies and plant-based lattes delivered to your door.</p>
                </div>
                <!-- End Card Body -->
    
                <!-- Card Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                      <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                      <p class="card-text small">Thesis</p>
                    </div>
                  </div>
                </div>
                <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/2.png')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Should You Buy An Apple Pencil?</a>
                  </h3>
    
                  <p class="card-text">The Apple Pencil is an expensive device that comes with some interesting features, but not everyone needs them.</p>
                </div>
                <!-- End Card Body -->
    
                  <!-- Card Footer -->
                  <div class="card-footer">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-group avatar-group-xs">
                        <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                          <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                        </a>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                        <p class="card-text small">Thesis</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/3.jpeg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">I don't want to switch from Android to iPhone because Apple's ecosystem is too good</a>
                  </h3>
    
                  <p class="card-text">Apple's ecosystem is second to none, and it comes with great functionality.</p>
                </div>
                <!-- End Card Body -->
    
                  <!-- Card Footer -->
                  <div class="card-footer">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-group avatar-group-xs">
                        <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                          <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                        </a>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                        <p class="card-text small">Thesis</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/4.jpeg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">This Watch gym partnerships give you perks for working out</a>
                  </h3>
    
                  <p class="card-text">For a lot of people these days, watch matters.</p>
                </div>
                <!-- End Card Body -->
    
                  <!-- Card Footer -->
                  <div class="card-footer">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-group avatar-group-xs">
                        <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                          <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                        </a>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                        <p class="card-text small">Thesis</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/images/5.jpeg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Announcing Front Strategies: Ready-to-use rules</a>
                  </h3>
    
                  <p class="card-text">Today we're launching a new product to make it easier to get started with Front.</p>
                </div>
                <!-- End Card Body -->
    
                <!-- Card Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                      <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                      <p class="card-text small">Thesis</p>
                    </div>
                  </div>
                </div>
                <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
           
          </div>
          <!-- End Row -->
    
          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-left small"></i>
                  </span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-right small"></i>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
          
  
    
          <span class="divider-center text-cap mb-8">PUBLISHED PAPER</span>


          <div class="row mb-7">
           
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/img/500x280/img7.jpg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Drone Company PrecisionHawk Names New CEO</a>
                  </h3>
    
                  <p class="card-text">Drone company PrecisionHawk has survived 10 years in the industry.</p>
                </div>
                <!-- End Card Body -->
    
                 <!-- Card Footer -->
                 <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                      <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                      <p class="card-text small">PUBLISHED PAPER</p>
                    </div>
                  </div>
                </div>
                <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/img/500x280/img8.jpg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">Should Product Owners think like entrepreneurs?</a>
                  </h3>
    
                  <p class="card-text">Front is a financial technology company. We build products. We do it fast and we do it well.</p>
                </div>
                <!-- End Card Body -->
    
                  <!-- Card Footer -->
                  <div class="card-footer">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0 avatar-group avatar-group-xs">
                        <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                          <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                        </a>
                      </div>
                      <div class="flex-grow-1 ms-3">
                        <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                        <p class="card-text small">PUBLISHED PAPER</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
    
            <div class="col-sm-6 col-lg-4 mb-4">
              <!-- Card -->
              <div class="card h-100">
                <div class="shape-container">
                  <img class="card-img-top" src="{{ asset('assets/img/500x280/img2.jpg')}}" alt="Image Description">
                  
                  <!-- Shape -->
                  <div class="shape shape-bottom zi-1" style="margin-bottom: -.25rem">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                      <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                  </div>
                  <!-- End Shape -->
                </div>
    
                <!-- Card Body -->
                <div class="card-body">
                  <h3 class="card-title">
                    <a class="text-dark" href="details.html">What is KYC and why do we need it</a>
                  </h3>
    
                  <p class="card-text">You've read about our app, it came up on your news feed and your mate sent you an invite to sign up.</p>
                </div>
                <!-- End Card Body -->
    
                <!-- Card Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 avatar-group avatar-group-xs">
                      <a class="avatar avatar-xs avatar-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aaron Larsson">
                        <img class="avatar-img" src="{{ asset('assets/img/160x160/img3.jpg')}}" alt="Image Description">
                      </a>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <a class="card-link link-dark" href="./blog-author-profile.html">Aaron Larsson</a>
                      <p class="card-text small">PUBLISHED PAPER</p>
                    </div>
                  </div>
                </div>
                <!-- End Card Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
    
          <!-- Pagination -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-left small"></i>
                  </span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">
                    <i class="bi-chevron-double-right small"></i>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination -->
        </div>
        <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  @endsection
  @extends('layouts.footer')
