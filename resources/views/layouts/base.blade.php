<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
    <script src="https://use.fontawesome.com/963cbc0c8e.js"></script>
    <script async src="/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="/js/Bootstrap-3-Typeahead-master/bootstrap3-typeahead.min.js"></script>
   

</head>

<body>
<!-- Your page content lives here -->

@yield('body')

</body>
</html>