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
body {
  font-family: "Inter", Helvetica;
  font-weight: 400;
  font-size: 16px;
  letter-spacing: 0px;
  line-height: normal;
  font-style: normal;
  color: var(--black);
  background-color: var(--white);
  margin: 0
}


:root {
  --pink-1: rgba(255, 24, 163, 1);
  --pink-2: rgba(248, 77, 174, 1);
  --pink-3: rgba(254, 94, 158, 1);
  --orange-1: rgba(255, 104, 35, 1);
  --orange-2: rgba(255, 131, 72, 1);
  --orange-3: rgba(253, 173, 102, 1);
  --black: rgba(30, 30, 30, 1);
  --dark-grey: rgba(79, 79, 79, 1);
  --grey: rgba(183, 183, 183, 1);
  --light-grey: rgba(227, 227, 227, 1);
  --white: rgba(253, 253, 253, 1);
  --h1-font-family: "Inter", Helvetica;
  --h1-font-weight: 700;
  --h1-font-size: 24px;
  --h1-letter-spacing: 0px;
  --h1-line-height: normal;
  --h1-font-style: normal;
  --h2-font-family: "Inter", Helvetica;
  --h2-font-weight: 700;
  --h2-font-size: 22px;
  --h2-letter-spacing: 0px;
  --h2-line-height: normal;
  --h2-font-style: normal;
  --h3-font-family: "Inter", Helvetica;
  --h3-font-weight: 700;
  --h3-font-size: 20px;
  --h3-letter-spacing: 0px;
  --h3-line-height: normal;
  --h3-font-style: normal;
  --paragraphe-font-family: "Inter", Helvetica;
  --paragraphe-font-weight: 400;
  --paragraphe-font-size: 20px;
  --paragraphe-letter-spacing: 0px;
  --paragraphe-line-height: normal;
  --paragraphe-font-style: normal;
}

</style>