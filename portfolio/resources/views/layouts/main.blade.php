<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Raldybn | PORTFOLIO</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Freeman&family=Jersey+10&family=Jersey+15&family=Poetsen+One&display=swap"
      rel="stylesheet"
    />
     <!-- Favicons -->
     <link href="img/rb.png"  style="max-height: 100%" rel="icon" />
    <!-- Template Main CSS File  -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
  <header>
    <nav class="navbar">
      <a href="/" class="navbar-logo">RALDYBN</a>
      <div class="navbar-nav" id="navbar-nav">
        <a href="/">HOME</a>
        <a href="/about">ABOUT ME</a>
        <a href="/myweb">MY WEB</a>
        <a href="/contact">CONTACT</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="instagram"><i data-feather="instagram"></i></a>
        <a href="#" id="smartphone"><i data-feather="smartphone"></i></a>
        <a href="#" id="mail"><i data-feather="mail"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
  </header>
    @yield('content')
    <script>
      feather.replace();
    </script>

    <!-- my javascript -->
    <footer>
      <div class="footer-cr">
        <div class="container">
          <h1>© Copyright RaldyBN 2024, All Rights Reserved.</h1>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
