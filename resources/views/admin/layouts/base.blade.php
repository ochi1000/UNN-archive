<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/admin.css" />
    <!-- Font Awesome JS -->
    <script src="https://use.fontawesome.com/963cbc0c8e.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body data-page-id="@yield('data-page-id')">
<!-- Your page content lives here -->
<div class="wrapper">
    @include('includes.sidebar_nav')

    @yield('content')


<script async src="/js/app.js"></script>

</body>
</html>