<!doctype html>
<html lang="en">
  @include('layouts.product.head')

  <body>
    @include('layouts.product.body')

    <div class="container">
        @yield('contents')
    </div>

    @include('layouts.product.foot')
  </body>
</html>
