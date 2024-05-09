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
<body>
    <script src="{{asset('/js/demo-theme.min.js?1684106062')}}"></script>
    <div class="page">
        <header>
            @include('layouts.admin.header')
        </header>

        @yield('content')
    </div>


    @include('layouts.admin.foot')
</body>
