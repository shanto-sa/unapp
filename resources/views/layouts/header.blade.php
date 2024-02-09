<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>University Resource Management System</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('assets/css/theme.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/snippets.css')}}">
</head>

<body class="navbar-sidebar-aside-lg">
  <!-- ========== HEADER ========== -->
  <header id="header" style="background-color: cornsilk;" class="navbar navbar-expand navbar-fixed navbar-end navbar-light navbar-sticky-lg-top">
    <div class="container-fluid">
      <nav class="navbar-nav-wrap">
        <div class="row flex-grow-1">
          <!-- Default Logo -->
          <div class="docs-navbar-sidebar-container d-flex align-items-center mb-2 mb-lg-0">
            <a class="navbar-brand" href="#" aria-label="Space">
              <img class="navbar-brand-logo" src="{{ asset('assets/svg/logos/logo.png')}}" alt="Logo">
            </a>
            <a href="../documentation/changelog.html">
              <span class="badge bg-soft-primary text-primary">v0.0.1</span>
            </a>
          </div>
          <!-- End Default Logo -->

          <div class="col-md px-lg-0">
            <div class="d-flex justify-content-between align-items-center px-lg-5 px-xl-10">
              <div class="d-none d-md-block">
                <!-- Search Form -->
                <form id="snippetsSearch" class="position-relative"
                      data-hs-list-options='{
                       "searchMenu": true,
                       "keyboard": true,
                       "item": "searchTemplate",
                       "valueNames": ["component", "category", {"name": "link", "attr": "href"}],
                       "empty": "#searchNoResults"
                     }'>
                  <!-- Input Group -->
                  <div class="input-group input-group-merge navbar-input-group">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <!-- <input type="search" class="search form-control form-control-sm" placeholder="Search" aria-label="Search"> -->

                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i id="clearSearchResultsIcon" class="bi-x" style="display: none;"></i>
                    </a>
                  </div>
                  <!-- End Input Group -->

                  <!-- List -->
                  <div class="list dropdown-menu w-100 overflow-auto" style="max-height: 16rem;"></div>
                  <!-- End List -->

                  <!-- Empty -->
                  <div id="searchNoResults" style="display: none;">
                    <div class="text-center p-4">
                      <img class="mb-3" src="{{ asset('assets/svg/illustrations/oc-error.svg')}}" alt="Image Description" style="width: 10rem;">
                      <p class="mb-0">No Results</p>
                    </div>
                  </div>
                  <!-- End Empty -->
                </form>
                <!-- End Search Form -->

                <!-- List Item Template -->
                <div class="d-none">
                  <div id="searchTemplate" class="dropdown-item">
                    <a class="d-block link" href="#">
                      <span class="category d-block fw-normal text-muted mb-1"></span>
                      <span class="component text-dark"></span>
                    </a>
                  </div>
                </div>
                <!-- End List Item Template -->
              </div>

              <!-- Navbar -->
              <ul class="navbar-nav p-0">
                <li class="nav-item">
                  <a class="btn btn-ghost-secondary btn-sm" href="#!" target="_blank">
                    English <i class="bi-box-arrow-up-right ms-1"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-success btn-sm" href="subscribe.html">
                    <i class="bi-eye me-1"></i> Subscribe Now
                  </a>
                </li>

                <li class="nav-item">
                  <a class="btn btn-primary btn-sm" href="login.html">
                    <i class="bi-eye me-1"></i> Login
                  </a>
                </li>
              </ul>
              <!-- End Navbar -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->