<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contest Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('/assets/admin/assets/css/demo/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('/assets/admin/assets/images/favicon.png')}}" />
  </head>
  <body>
    <script src="{{asset('/assets/admin/assets/js/preloader.js')}}"></script>
    <div class="body-wrapper">
      <div class="main-wrapper">
        <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
          <main class="auth-page">
            <div class="mdc-layout-grid">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                  <div class="mdc-card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <form method="POST" action=""{{ route('register') }}>
                    {{ csrf_field() }}
                    <div class="mdc-layout-grid">
                      <div class="mdc-layout-grid__inner">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" value="{{old('name',$request->name??'')}}"  id="text-field-hero-input" name="name" autocomplete="false">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="text-field-hero-input"  name="email" value="{{old('email',$request->email??'')}}" autocomplete="false">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Email</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" id="text-field-hero-input"  value="{{old('mobile',$request->mobile??'')}}" name="mobile" autocomplete="false">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label">Contact No</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-text-field w-100">
                            <input class="mdc-text-field__input" type="password"   name="password" id="text-field-hero-input">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input" class="mdc-floating-label" >Password</label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                          <div class="mdc-form-field">
                            <div class="mdc-checkbox">
                              <input type="checkbox"
                              class="mdc-checkbox__native-control"
                              id="checkbox-1" name="agreement" value="1" {{ old('agreement', $request->agreement??'') ? 'checked="checked"' : '' }}"/>
                              <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                  viewBox="0 0 24 24">
                                  <path class="mdc-checkbox__checkmark-path"
                                    fill="none"
                                    d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                              </div>
                            </div>
                            <label for="checkbox-1">I accept the <a href="#" target="_blank">Terms and Conditions</a></label>
                          </div>
                        </div>
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                          <input type="submit" class="mdc-button mdc-button--raised w-100" name="Register">
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
     <!-- plugins:js -->
     <script src="{{asset('/assets/admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
     <!-- endinject -->
     <!-- Plugin js for this page-->
     <!-- End plugin js for this page-->
     <!-- inject:js -->
     <script src="{{asset('/assets/admin/assets/js/material.js')}}"></script>
     <script src="{{asset('/assets/admin/assets/js/misc.js')}}"></script>
     <!-- endinject -->
     <!-- Custom js for this page-->
     <!-- End custom js for this page-->
   </body>
 </html>