<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
    <head>
        @include('layouts.admin.head')
    </head>
    <body class="d-flex flex-column">
        <script src="{{asset('js/demo-theme.min.js?1684106062')}}"></script>
        <div class="page page-center">
          <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
              <div class="col-lg">
                <div class="container-tight">

                    @if ($errors->has('failed'))
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                          <div>
                            <h4 class="alert-title">Sorry, can't login!</h4>
                            <div class="text-secondary">{{ $errors->first('failed') }}</div>
                          </div>
                        </div>
                    </div>
                    @endif

                  <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{asset('static/logo.svg')}}" height="36" alt=""></a>
                  </div>
                  <div class="card card-md">
                    <div class="card-body">
                      <h2 class="h2 text-center mb-4">Login to your account</h2>
                      <form action="{{ route('admin.login.post') }}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Username</label>
                          <input type="username" class="form-control" placeholder="Your_username" name="username" value="{{ old('username') }}">
                        </div>
                        <div class="mb-2">
                          <label class="form-label">
                            Password
                            <span class="form-label-description">
                              <a href="./forgot-password.html">I forgot password</a>
                            </span>
                          </label>
                          <div class="input-group input-group-flat">
                            <input type="password" class="form-control"  placeholder="Your password" name="password"  autocomplete="off">
                            <span class="input-group-text">
                              <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                              </a>
                            </span>
                          </div>
                        </div>
                        <div class="form-footer">
                          <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="text-center text-muted mt-3">
                    Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
                  </div>
                </div>
              </div>
              <div class="col-lg d-none d-lg-block">
                <img src="{{asset('static/illustrations/undraw_secure_login_pdn4.svg')}}" height="300" class="d-block mx-auto" alt="">
              </div>
            </div>
          </div>
        </div>
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="{{asset('js/tabler.min.js?1684106062')}}" defer></script>
        <script src="{{asset('js/demo.min.js?1684106062')}}" defer></script>
    </body>
</html>


