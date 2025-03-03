<?php
require_once('db.php');
session_start();
////check logout
if(isset($_GET['logout'])) {unset($_SESSION['sess_user_congdoanevnhcmc_id']);} 
//check login
if(isset($_SESSION['sess_user_congdoanevnhcmc_id']) && $_SESSION['sess_user_congdoanevnhcmc_id'] != "") {
} else {
  exit(header('location:login.php'));
}
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Công đoàn EVNHCMC</title>   
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>	 
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
	<!--    Bootstrap Icons-->
	<link href="vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">	
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
	<!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
	<script src="assets/js/jquery-3.6.0.js"></script>
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
	<script src="assets/js/flatpickr.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/progressbar/progressbar.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
	<!--   Datatables -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>	
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
	<!--   SweetAlert -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.22/sweetalert2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.22/sweetalert2.min.css">
	<!--   Dropzone -->
	<link rel="stylesheet" type="text/css" href="vendors/dropzone/dropzone.min.css"/>
	<script src="vendors/dropzone/dropzone.min.js"></script>
	<!--   Glightbox -->
	<link rel="stylesheet" type="text/css" href="vendors/glightbox/glightbox.min.css"/>
	<script src="vendors/glightbox/glightbox.min.js"></script>
	<!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->   
	<style>
	a:link { text-decoration: none; }
	a:visited { text-decoration: none; }
	a:hover { text-decoration: none; }
	a:active { text-decoration: none; }
	</style>
	<style>
		
	</style>
	
  </head>
  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
			<button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index.php">
            <div class="d-flex align-items-center"><img class="me-2" src="assets/img/logo-cong-doan.png" alt="" width="40" /><span class="font-sans-serif">Công đoàn EVNHCMC</span>
            </div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.php">Default</a><a class="dropdown-item link-600 fw-medium" href="user.php">User</a><a class="dropdown-item link-600 fw-medium" href="dashboard/analytics.html">Analytics</a><a class="dropdown-item link-600 fw-medium" href="dashboard/e-commerce.html">E commerce</a><a class="dropdown-item link-600 fw-medium" href="dashboard/project-management.html">Management</a><a class="dropdown-item link-600 fw-medium" href="dashboard/saas.html">SaaS</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-5">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="../app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="../app/kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="app/email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/email/compose.html">Compose</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="app/events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="../app/events/event-list.html">Event list</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="app/social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/activity-log.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="../app/social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="app/social/followers.html">Followers</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/product/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/product/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="app/e-commerce/orders/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/orders/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/checkout.html">Checkout</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="../app/e-commerce/invoice.html">Invoice</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pagess">Pages</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pagess">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/simple/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/reset-password.html">Reset password</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Other Auth</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../#authentication-modal" data-bs-toggle="modal">Modal</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Miscellaneous</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/miscellaneous/privacy-policy.html">Privacy policy</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">User</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/user/settings.html">Settings</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Pricing</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/pricing/pricing-alt.html">Pricing alt</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Errors</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/errors/500.html">500</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../pages/starter.html">Starter</a><a class="nav-link py-1 link-600 fw-medium" href="../pages/landing.html">Landing</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="moduless">Modules</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="moduless">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Components</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/animated-icons.html">Animated icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/breadcrumbs.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/buttons.html">Buttons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cards.html">Cards</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-md-4 pt-md-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/bootstrap.html">Bootstrap carousel</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/carousel/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navs.html">Navs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/navbar.html">Navbar</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/vertical-navbar.html">Vertical navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/top-navbar.html">Top navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/combo-navbar.html">Combo navbar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/navs-and-tabs/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/images.html">Images</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/figures.html">Figures</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pictures/lightbox.html">Lightbox</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar/basic.html">Basic progress bar</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/progress-bar/advance.html">Advance progress bar</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/popovers.html">Popovers</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/search.html">Search</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/tooltips.html">Tooltips</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/components/videos/plyr.html">Plyr</a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/basic/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/advance-select.html">Advance select</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/editor.html">Editor</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/file-uploader.html">File uploader</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/advance/rating.html">Rating</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/floating-labels.html">Floating labels</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/basic-tables.html">Basic tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/advance-tables.html">Advance tables</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/tables/bulk-select.html">Bulk select</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/charts/echarts.html">ECharts</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/font-awesome.html">Font awesome</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/bootstrap-icons.html">Bootstrap icons</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/feather.html">Feather</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/icons/material-icons.html">Material icons</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/maps/leaflet-map.html">Leaflet map</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/colored-links.html">Colored links</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/grid.html">Grid</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/overlayscrollbars.html">Overlayscrollbars</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/spacing.html">Spacing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/stretched-link.html">Stretched link</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column mt-xxl-4 pt-xxl-1"><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="../modules/utilities/visibility.html">Visibility</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="../widgets.html">Widgets</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="documentations">Documentation</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="documentations">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="../documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="../documentation/customization/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="../documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="../documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="../changelog.html">Changelog</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>			
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cloud-download-alt" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  
                  <div class="scrollbar-overlay" style="max-height:19rem">
                    <div class="card-header">
						<div class="row justify-content-between align-items-center">
						  <div class="col-auto">
							<h6 class="card-header-title mb-0">File hồ sơ mẫu</h6>
						  </div>
						</div>
					  </div>
					<div class="list-group list-group-flush fw-normal fs--1">                      
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/Mau 1 -  Cong van de nghi xet duyet ho so.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img src="assets/img/icons/docs.png" alt="" />
                            </div>
                          </div>						
                          <div class="notification-body">
                            <p class="mb-1"><strong>Mẫu 1: Công văn đề nghị</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/Mau 2 -  Bien ban khao sat.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img src="assets/img/icons/docs.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Mẫu 2: Biên bản khảo sát</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>
					  <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/Mau 3 -  Don xin ho tro xay dung sua chua nha.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img src="assets/img/icons/docs.png" alt="" />
                            </div>
                          </div>						
                          <div class="notification-body">
                            <p class="mb-1"><strong>Mẫu 3: Đơn xin hỗ trợ</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/Mau 4 -  Bien ban nghiem thu.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img src="assets/img/icons/docs.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Mẫu 4: Biên bản nghiệm thu</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>
					  <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/Mau 5 -  Bien ban quyet toan.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img src="assets/img/icons/docs.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Mẫu 5: Biên bản quyết toán</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>                      
					  <div class="card-header">
						<div class="row justify-content-between align-items-center">
						  <div class="col-auto">
							<h6 class="card-header-title mb-0">Hướng dẫn sử dụng</h6>
						  </div>
						</div>
					  </div>					  
					  <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="upload/HDSD ung dung quan ly ho xay dung sua chua nha chong ngap dot.pdf" download>
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <i class="fas fa-info-circle text-primary fs-5"></i>							 
                            </div>
                          </div>
                          <div class="notification-body">                            
                            <p class="mb-1"><strong>HDSD</strong></p>
                            <span class="notification-time"><span class="fas fa-cloud-download-alt"></span> Tải về</span>
                          </div>
                        </a>
                      </div>                                            
                    </div>
					<div class="card-footer text-center"></div>
                  </div>
                  
                </div>
              </div>
            </li>
			
            <li class="nav-item dropdown">
				<a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="btn btn-outline-primary"><i class="bi bi-person-circle"></i> <?php echo $_SESSION['sess_hoten_id'] ?> <span class="bi bi-chevron-down"></span></div>
                </a>              
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
					<div class="bg-white dark__bg-1000 rounded-2 py-2">
						<a class="dropdown-item" href="#!"><span class="fas fa-id-card me-1"></span><?php echo $_SESSION['sess_user_congdoanevnhcmc_id'] ?></a>
						<a class="dropdown-item" href="#!"><span class="fas fas fa-building me-1"></span><?php echo $_SESSION['sess_donvi_id'].' - '.$_SESSION['sess_xetduyet_id'] ?></a>
						<div class="dropdown-divider"></div>						
						<a class="dropdown-item" href="?logout"><span class="fas fa-power-off me-1"></span> Đăng xuất</a>                  
					</div>
				</div>
            </li>
          </ul>
        </nav>
        <div class="content">
        
          <div class="row g-0">
			<!-- title -->
			<div class="d-flex mb-4 mt-1"><span class="fa-stack me-2 ms-n1"><svg class="svg-inline--fa fa-circle fa-w-16 fa-stack-2x text-300" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg><!-- <i class="fas fa-circle fa-stack-2x text-300"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-list fa-w-16 fa-inverse fa-stack-1x text-primary" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.5em 0.5em;"><g transform="translate(256 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" transform="translate(-256 -256)"></path></g></g></svg><!-- <i class="fa-inverse fa-stack-1x text-primary fas fa-list" data-fa-transform="shrink-2"></i> Font Awesome fontawesome.com --></span>
				<div class="col">
				  <h5 class="mb-0 text-primary position-relative"><span class="bg-200 dark__bg-1100 pe-3">Quản lý hồ sơ quỹ tương trợ</span><span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span></h5>
				  <p class="mb-0">Về xây dựng nhà tình thương - sửa chữa nhà chống ngập, dột cho CNVC-LĐ của Tổng công ty.</p>
				</div>
			</div>
			<?php
			if($_SESSION['sess_xetduyet_id'] == 0){
				include ('modal_donvi.php');
			}
			else {
				include ('modal_tct.php');				
			}
			?>	
			
			<!-- script -->
			<script type="text/javascript" language="javascript" >
			$(document).ready(function(){
				$('#add_button').click(function(){
					$('#hoso_form')[0].reset();
					$('.tieude').text("Thêm mới hồ sơ");
					$('#action').val("Add");
					$('#operation').val("Add");
					$('#user_uploaded_image').html('');
					$('#user_uploaded_image2').html('');
					$('#user_uploaded_image3').html('');
					$('#user_uploaded_pdf').html('');
					$('#user_uploaded_pdf2').html('');
					$('#user_uploaded_pdf3').html('');
				});
			 
				var dataTable = $('#hoso_data').DataTable({
					
					processing:true,
					serverSide:true,
					responsive:true,
					paging: false,
					searching: false,
					info: false,
					//pagingType: "numbers",
					//pageLength: 10,
					//"dom": '<"d-flex" <"col-sm-12 col-md-2"f> <"col-sm-12 col-md-10"p> > <"d-flex table-responsive" <"col-sm-12 "tr> > <"d-flex" <"col-sm-12 col-md-5"i>  <"col-sm-12 col-md-7"p> >',
					
					//order: [[0, 'desc']],
					"ordering": false,				
					"ajax":{
										
						url:"fetch.php",
						type:"POST",
						data : {							
							donvi_id : $('#donvi_id').val()
						},
					},
					"columnDefs":[
						{
							//"targets":[0,3,4,5,6,7,8,9,10],
							//"orderable":false
						},
						{
							"targets":[0,4,5,6],
							 "className": "text-center"
						},
						{
							"targets":'_all',
							 "className": "text-red",
							 "className": "align-middle"
						},
					],					

				});

				var dataTable2 = $('#hoso_data2').DataTable({
					
					processing:true,
					serverSide:true,
					responsive:true,
					paging: false,
					searching: false,
					info: false,
					//pagingType: "numbers",
					//pageLength: 10,
					//"dom": '<"d-flex" <"col-sm-12 col-md-2"f> <"col-sm-12 col-md-10"p> > <"d-flex table-responsive" <"col-sm-12 "tr> > <"d-flex" <"col-sm-12 col-md-5"i>  <"col-sm-12 col-md-7"p> >',
					//order: [[0, 'desc']],
					"ordering": false,				
					"ajax":{
										
						url:"fetch2.php",
						type:"POST",
						data : {
							xetduyet_id : $('#xetduyet_id').val()							
						},
						
					},
					"columnDefs":[
						{
							//"targets":[0,3,4,5,6,7,8,9,10],
							//"orderable":false
						},
						{
							"targets":[0,5],
							 "className": "text-center"
						},
						{
							"targets":'_all',
							 "className": "text-red",
							 "className": "align-middle"
						},
					],					

				});		
				
				$(document).on('submit', '#hoso_form', function(event){
					event.preventDefault();
					var firstName = $('#tenhoso').val();
					var lastName = $('#loaihoso').val();					
					
					var extension = $('#user_image').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'File đính kèm Không phải file ảnh',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#user_image').val('');
							return false;
						   }
						}
						
					var extension = $('#user_image2').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'File đính kèm Không phải file ảnh',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#user_image2').val('');
							return false;
						   }
						}
						
					var extension = $('#user_image3').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'File đính kèm Không phải file ảnh',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#user_image3').val('');
							return false;
						   }
						}
						
					var extension = $('#pdf_image').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['pdf']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'Đơn xin XD, sửa chữa nhà Không phải file PDF',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#pdf_image').val('');
							return false;
						   }
						}
					var extension = $('#pdf_image2').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['pdf']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'Biên bản khảo sát Không phải file PDF',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#pdf_image2').val('');
							return false;
						   }
						}
					var extension = $('#pdf_image3').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['pdf']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: 'Công văn đề nghị xét duyệt Không phải file PDF',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#pdf_image3').val('');
							return false;
						   }
						}
					
				
					if(firstName != '' && lastName != '')
						{
						   $.ajax({
							url:"insert.php",
							method:'POST',
							data:new FormData(this),
							contentType:false,
							processData:false,
							success:function(data)
							{							 
								Swal.fire({
								  position: 'top',
								  icon: 'success',
								  title: (data),
								  showConfirmButton: false,
								  timer: 1500
								});
								$('#hoso_form')[0].reset();
								$('#hosoModal').modal('hide');
								dataTable.ajax.reload();
							}
						   });
						}
					else
						{
					   		Swal.fire({
							  position: 'top',
							  icon: 'warning',
							  title: 'Bạn chưa nhập đủ dữ liệu',
							  showConfirmButton: false,
							  timer: 1500
							});
						}
				});
				
				/// xet duyet submit
				
				$(document).on('submit', '#hoso_form2', function(event){
					event.preventDefault();
					var firstName = $('#tenhoso').val();
					var lastName = $('#loaihoso').val();					
					
					var extension = $('#pdf_qd').val().split('.').pop().toLowerCase();
					if(extension != '')
						{
						   if(jQuery.inArray(extension, ['pdf']) == -1)
						   {							
								Swal.fire({
								  position: 'top',
								  icon: 'warning',
								  title: ' Quyết định Không phải file PDF',
								  showConfirmButton: false,
								  timer: 1500
								});
							$('#pdf_qd').val('');
							return false;
						   }
						}
					
				
					if(firstName != '' && lastName != '')
						{
						   $.ajax({
							url:"insert.php",
							method:'POST',
							data:new FormData(this),
							contentType:false,
							processData:false,
							success:function(data)
							{							 
								Swal.fire({
								  position: 'top',
								  icon: 'success',
								  title: (data),
								  showConfirmButton: false,
								  timer: 1500
								});
								$('#hoso_form2')[0].reset();
								$('#hosoModal2').modal('hide');
								dataTable2.ajax.reload();
							}
						   });
						}
					else
						{
					   		Swal.fire({
							  position: 'top',
							  icon: 'warning',
							  title: 'Bạn chưa nhập đủ dữ liệu',
							  showConfirmButton: false,
							  timer: 1500
							});
						}
				});
				
				
			
			 $(document).on('click', '.update', function(){
			  var hoso_id = $(this).attr("id");
			  $.ajax({
			   url:"fetch_single.php",
			   method:"POST",
			   data:{hoso_id:hoso_id},
			   dataType:"json",
			   success:function(data)
			   {
				$('#hosoModal').modal('show');
				$('#tenhoso').val(data.tenhoso);				
				$('#loaihoso').val(data.loaihoso);				
				$('.tieude').text("Hiệu chỉnh hồ sơ");
				$('#hoso_id').val(hoso_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#user_uploaded_image2').html(data.user_image2);
				$('#user_uploaded_image3').html(data.user_image3);
				$('#user_uploaded_pdf').html(data.pdf_image);
				$('#user_uploaded_pdf2').html(data.pdf_image2);
				$('#user_uploaded_pdf3').html(data.pdf_image3);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			   }
			  })
			 });
			 
			 $(document).on('click', '.delete', function(){
				var hoso_id = $(this).attr("id");
				var tenhoso = $(this).attr("id2");
				Swal.fire({
				  title: 'Bạn có chắc muốn xóa?',
				  text: 'Hồ sơ: ' + tenhoso + 'iD = ' + hoso_id,
				  icon: 'warning',
				  position: 'top',
				  showCancelButton: true,  
				  confirmButtonText: `OK xóa`,
				  focusConfirm: false,
				  focusCancel: true					  
				}).then((result) => {
					if (result.isConfirmed) {														
						$.ajax({
						url:"delete.php",
						method:"POST",
						data:{hoso_id:hoso_id},
						success:function(data)
							{
								Swal.fire({
								  position: 'top',
								  icon: 'success',
								  title: 'Đã xóa',
								  showConfirmButton: false,
								  timer: 1500
								});
								dataTable.ajax.reload()
							}
						})							
					} 
					else
						{
							dataTable.ajax.reload()
						}
				});					
			 });
			 
			 
			 $(document).on('click', '.trinhduyet', function(){
				var hoso_id = $(this).attr("id");
				var tenhoso = $(this).attr("id2");
				Swal.fire({
				  title: 'Bạn có chắc muốn Gửi?',
				  text: 'Hồ sơ: ' + tenhoso,
				  icon: 'warning',
				  position: 'top',
				  showCancelButton: true,  
				  confirmButtonText: `OK Gửi TCT`,
				  focusConfirm: false,
				  focusCancel: true					  
				}).then((result) => {
					if (result.isConfirmed) {														
						$.ajax({
						url:"trinhduyet.php",
						method:"POST",
						data:{hoso_id:hoso_id},
						success:function(data)
							{
								Swal.fire({
								  position: 'top',
								  icon: 'success',
								  title: 'Đã trình TCT',
								  showConfirmButton: false,
								  timer: 1500
								});
								dataTable.ajax.reload()
							}
						})							
					} 
					else
						{
							dataTable.ajax.reload()
						}
				});					
			 });
			 
			 
			 
			$(document).on('click', '.update2', function(){
			  var hoso_id = $(this).attr("id");
			  $.ajax({
			   url:"fetch_single2.php",
			   method:"POST",
			   data:{hoso_id:hoso_id},
			   dataType:"json",
			   success:function(data)
			   {
				$('#hosoModal2').modal('show');
				$("#hoso_form2")[0].reset();
				$('#tenhoso').val(data.tenhoso);				
				$('#loaihoso').val(data.loaihoso);				
				$('.tieude').text("Duyệt hồ sơ");
				$('#hoso_id').val(hoso_id);				
				$('#user_uploaded_pdf_qd').html(data.pdf_qd);
				$('#action').val("Xetduyet");
				$('#operation').val("Xetduyet");				
			   }
			  })			  
			 });				
			});
			
			
			
			//$("#hosoModal").on("hidden.bs.modal", function(){
			//	$("#hoso_form")[0].reset();
			//	return;				
			//});
			
			</script>
          
          </div>          
           
        </div>         
         
        </div>        
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="modal modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
          <div class="modal-header modal-header-settings bg-shape">
            <div class="z-index-1 py-1 light">
              <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Cài đặt giao diện</h5>
              <p class="mb-0 fs--1 text-white opacity-75"> Đặt phong cách tùy chỉnh của riêng bạn</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-card" id="themeController">
            <h5 class="fs-0">Bảng màu</h5>
            <p class="fs--1">Chọn chế độ màu hoàn hảo cho ứng dụng của bạn. </p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Sáng</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Tối</span></label>
                </div>
              </div>
            </div>
            <hr />
           
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Bố cục linh hoạt</h5>
                  <p class="fs--1 mb-0">Chuyển đổi cách bố trí vùng chứa </p>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <!--
			<div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Vị trí điều hướng </h5>
                <p class="fs--1 mb-2">Chọn kiểu điều hướng phù hợp </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Theo chiều dọc</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Đứng đầu</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Kết hợp</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Kiểu điều hướng dọc</h5>
            <p class="fs--1 mb-0">Chuyển đổi giữa các kiểu cho thanh điều hướng dọc của bạn </p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Trong suốt</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Đảo ngược</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Thẻ</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Sôi nỗi</span></label>
                </div>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
    </div>
	<a class="card setting-toggle" href="#settings-modal" data-bs-toggle="modal">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                  </svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">Tùy chỉnh</small>
      </div>
    </a>

	<script>	
	$(function () {
	  $('[data-toggle="popover"]').popover(
	  {trigger: "hover"}
	  //, placement: "bottom"}
	  )
	})
	</script>	
	<script>
		$(document).ready(function(){
			$('[data-toggle=tooltip]').tooltip();					
		});
		
	</script>
	
   
  </body>
</html>