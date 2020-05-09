<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lenskart Store Admin-Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/demo/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/admin/assets/images/favicon.png')}}" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"/>
  </head>
  <body>
    <script src="{{asset('assets/admin/assets/js/preloader.js')}}"></script>
    <div class="body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layout.admin.left_sidebar')
      <!-- partial -->
      <div class="main-wrapper mdc-drawer-app-content">
        <!-- partial:partials/_navbar.html -->
        <header class="mdc-top-app-bar">
          <div class="mdc-top-app-bar__row">
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
              <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            </div>
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
              <div class="menu-button-container menu-profile d-none d-md-block">
                <button class="mdc-button mdc-menu-button"></button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-account-edit-outline text-primary"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Edit profile</h6>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-settings-outline text-primary"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <a href="/admin/logout" class="item-subject font-weight-normal">Logout</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- partial -->
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
