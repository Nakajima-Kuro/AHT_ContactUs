<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title>
    <?php bloginfo('name'); ?> &raquo;
    <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
  </title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/094e7fb21c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="d-flex justify-content-between my-2">
        <div class="d-inline-flex justify-content-start">
          <div class="icon-circle border my-auto">
            <i class="fa-solid fa-phone"></i>
          </div>
          <p class="my-auto">(123)-456-7890</p>
          <div class="icon-circle border my-auto">
            <i class="fa-regular fa-envelope"></i>
          </div>
          <p class="my-auto">info@companyname.com</p>
          <div class="icon-circle border my-auto">
            <i class="fa-brands fa-skype"></i>
          </div>
          <p class="my-auto">skype.name</p>
        </div>
        <div>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-facebook"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-twitter"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-google-plus-g"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-pinterest-p"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-dribbble"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-solid fa-robot"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-youtube"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-vimeo-v"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-instagram"></i>
          </button>
          <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-sm mx-1">
            <i class="fa-brands fa-linkedin"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="border-top"></div>
    <div class="container">
      <div class="d-flex justify-content-between my-3">
        <a class="navbar-brand my-auto text-logo" href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
        <nav class="navbar navbar-expand-lg">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <!-- <?php
              $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
              $menuID = $menuLocations['primary']; // Get the *primary* menu ID
              $primaryNav = wp_get_nav_menu_items($menuID); // Get the array of wp objects, the nav items for our queried location.
              foreach ($primaryNav as $navItem): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php $navItem->title ?>
              </a>
            </li>
          <?php endforeach; ?> -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Home
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Portfolio
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Blog
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Features
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Shortcodes
                </a>
              </li>
              <li>
                <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                  <i class="fa-solid fa-magnifying-glass"></i>
                </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>