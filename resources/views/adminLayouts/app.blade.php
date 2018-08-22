<!DOCTYPE html>
<html lang=" {{ app()->getLocale() }} ">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title','myshop') - 周保文</title>


  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin2.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin3.css') }}" rel="stylesheet">

  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.bootcss.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body class="blur-theme">
<div class="body-bg"></div>
<main>
  <ba-sidebar>
    <aside class="al-sidebar">
        @include('adminLayouts._sidebar')
    </aside>
  </ba-sidebar>
  <page-top>@include('adminLayouts._header')</page-top>

  <div class="al-main">
    <div class="al-content">
        @include('layouts._message')
      <content-top>
          @yield('content')
      </content-top>
      <div ui-view autoscroll="true" autoscroll-body-top></div>
    </div>
  </div>
  @include('adminLayouts._footer')
  <back-top></back-top>
</main>

<!-- <div id="preloader" ng-show="!$pageFinishedLoading">
  <div></div> -->
</div>
    <!-- <script src="{{ asset('js/admin_js_4.js') }}"></script>

    <script src="{{ asset('js/admin_js_1.js') }}"></script>
    <script src="{{ asset('js/admin_js_2.js') }}"></script>
    <script src="{{ asset('js/admin_js_3.js') }}"></script> -->


    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<!-- <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
</body>
</html>