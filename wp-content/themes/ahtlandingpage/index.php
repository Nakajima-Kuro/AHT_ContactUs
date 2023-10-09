<?php get_header(); ?>
<main class="wrap">
  <!-- Header Image -->
  <div class="card overflow-hidden border-0 rounded-0 text-center">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/contactus_header_cover.png'); ?>"
      class="card-img rounded-0" alt="...">
    <div class="card-img-overlay d-flex flex-column justify-content-center">
      <h1 class="text-light">Contact Us</h1>
      <div>
        <span class="text-light">Home</span>
        <i class="fa-solid fa-chevron-right text-light"></i>
        <span class="text-light">Pages</span>
        <i class="fa-solid fa-chevron-right text-light"></i>
        <span class="text-light">Contact Us</span>
      </div>
    </div>
  </div>
  <!-- Contact -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="text-center">
          <h3>Contact Information</h3>
          <p>Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. </p>
        </div>
        <div class="mt-5 mb-3">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet
            aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et
            urna. Aliquam erat volutpat.</p>
        </div>
        <!-- Contact Info Group -->
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex justify-content-start gap-3 my-2">
              <div class="icon-circle border">
                <i class="fa-solid fa-phone text-color-secondary"></i>
              </div>
              <p class="my-auto">(123)-456-7890</p>
            </div>
            <div class="d-flex justify-content-start gap-3 my-2">
              <div class="icon-circle border">
                <i class="fa-solid fa-envelope text-color-secondary"></i>
              </div>
              <p class="my-auto">info@companyname.com</p>
            </div>
            <div class="d-flex justify-content-start gap-3 my-2">
              <div class="icon-circle border">
                <i class="fa-brands fa-skype text-color-secondary"></i>
              </div>
              <p class="my-auto">skype.name</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-start gap-3 my-2">
              <div class="icon-circle border">
                <i class="fa-solid fa-location-pin text-color-secondary"></i>
              </div>
              <p class="my-auto">8901 Marmora Road,
                Glasgow, D04 89GR.</p>
            </div>
            <div class="d-flex justify-content-start gap-3 my-2">
              <div class="icon-circle border">
                <i class="fa-solid fa-life-ring text-color-secondary"></i>
              </div>
              <p class="my-auto">Support center</p>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <h4>Stay Connected</h4>
        </div>
        <!-- Contact Buttons Group -->
        <div class="row my-2">
          <div class="col-md-6 my-2">
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-facebook"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-twitter"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-google-plus-g"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-pinterest-p"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-dribbble"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 my-2">
            <div class="d-flex justify-content-between">
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-solid fa-robot"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-youtube"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-vimeo-v"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-instagram"></i>
              </button>
              <button type="button" class="btn btn-light btn-outline-secondary btn-circle btn-md">
                <i class="fa-brands fa-linkedin"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- /Contact Buttons Group -->
      </div>
      <div class="col-md-6">
        <div class="text-center">
          <h3>Contact Form</h3>
          <p>Etiam cursus leo vel metus. Nulla facilisi. </p>
        </div>
        <!-- Contact Form -->
        <form action="">
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <input id="inputName" class="form-control" type="text" placeholder="Name*"
                  aria-label="default input example">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <input id="inputEmail" class="form-control" type="text" placeholder="Email*"
                  aria-label="default input example">
              </div>
            </div>
          </div>
          <div class="mb-3">
            <input id="inputSubject" class="form-control" type="text" placeholder="Subject"
              aria-label="default input example">
          </div>
          <div class="mb-3">
            <textarea id="inputMessage" class="form-control" placeholder="Message" rows="3"></textarea>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-4 col-form-label">Anti-spam test: 4+4=</label>
            <div class="col-sm-4">
              <input id="inputAntispam" class="form-control">
            </div>
          </div>
          <button type="button" class="btn btn-outline-primary">Submit</button>
        </form>
        <!-- /Contact Form -->
      </div>
    </div>
    <!-- Maps -->
    <div class="embed-responsive embed-responsive-21by9 mt-5 mb-3">
      <iframe class="embed-responsive-item w-100" height="300" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0" id="gmap_canvas"
        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=%20Ho%20Chi%20Minh%20City+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <!-- /Maps -->
</main>
<?php get_footer(); ?>