<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('') }}dashboard_assets/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>MLM Register page</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('') }}dashboard_assets/assets/img/favicon/favicon.ico" /> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('') }}dashboard_assets/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="{{ asset('') }}dashboard_assets/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('') }}dashboard_assets/assets/js/jQuery.js"></script>
    <script src="{{ asset('') }}dashboard_assets/assets/js/myajax.js"></script>
 

    
        


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('') }}dashboard_assets/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ url('/') }}" class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                </a>
              </div>
              <!-- /Logo -->
              

              <form id="formAuthentication" class="mb-3" action="{{ route('user.reg') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" id="sponsor_id" name="sponsor_code" value="{{ old('sponsor_code') }}" placeholder="Enter Sponsor Code" autofocus />
                  <span id="sopn_msg"></span>
                  @error('sponsor_code')
    <span class="text-danger">{{ $message }}</span>
@enderror
                  
          
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="username" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" autofocus/>
                  @error('first_name')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3">
                  <input
                    type="text" class="form-control" id="username" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" autofocus />
                  @error('last_name')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}" placeholder="Create Your User Name" autofocus />
                  @error('username')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control"  name="phone" value="{{ old('phone') }}" placeholder="Phone Number" autofocus />
                  @error('phone')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
                  @error('email')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <input placeholder="Password" type="password" id="password" class="form-control" name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                   
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @error('password')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="input-group input-group-merge">
                    <input placeholder="Confirm Password" type="password" id="password" class="form-control" name="password_confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                   
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @error('confirmed_password')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
                      
                {{-- <div class="mb-3">
                  <div class="form-check" id="chk">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div> --}}
                <div class="showbtn">
                <button type="submit"  class="btn btn-primary d-grid w-100">Sign up</button></div>
            </form>
      <div class="logs">
      <p class="text-center" >
        <span>Already have an account?</span>
        <a href="{{ route('user.login') }}">
          <span>Sign in instead</span>
        </a>
      </p>
    </div>
    </div>
  </div>
  <!-- Register Card -->
</div>
</div>
</div>

<!-- / Content -->

<script>
    $(document).ready(function() {
        $('#sponsor_id').on('keyup', function() {
            $("#sopn_msg").text('Searching...');
            var sponsor_id = this.value;
            $.ajax({
                url: "{{ route('search.sponsorid') }}",
                type: "POST",
                data: {
                    sponsor_id: sponsor_id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(result) {
                    if (result == 0) {
                        $("#sopn_msg").text("Sponsor ID not found");
                        $("#sopn_msg").css('color', 'red');
                        $(".showbtn").hide();
                        $(".logs").hide();
                        $("#chk").hide();



                    } else {
                        $("#sopn_msg").text(result);
                        $("#sopn_msg").css('color', 'green');
                        $(".showbtn").show();
                        $(".logs").show();
                        $("#chk").show();


                    }
                }
            });
        });
    });
</script>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('') }}dashboard_assets/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('') }}dashboard_assets/assets/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('') }}dashboard_assets/assets/vendor/js/bootstrap.js"></script>
<script src="{{ asset('') }}dashboard_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('') }}dashboard_assets/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ asset('') }}dashboard_assets/assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
