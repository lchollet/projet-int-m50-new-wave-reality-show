<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div class="container">
   <header class="row">
       @include('includes.header')
   </header>
   <div id="main" class="row">
           @yield('content')
   </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>

<style>
/* Reset de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styles de base pour le corps */
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    background-color: #ffffff;
    color: #333333;
}

/* Styles pour les liens */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>