<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />
  <meta charset="UTF-8" />
  <meta name="viewport" content=
  "width=device-width, initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" type=
  "text/css" />
  <link rel="stylesheet" href="../css/reset.css" type="text/css" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" />
  <script src="../js/jquery-latest.min.js"></script>
  <script src="../js/jquery.validate.min.js"></script>

  <title>BrightIdeas</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <div class="item header_left">
        <h1 class="heading"><a href="index.html"> BrightIdeas </a></h1>
      </div>

      <div class="item header_right">
        <a href="signup.html"> Sign Up! </a> | <a href="faq.html"> FAQ </a> | <a href="#"> Support </a>
      </div>
    </div>

    <div class="content-left">

    <?php
      foreach($_REQUEST as $key => $value) {
        echo "<p>For " . $key . ", the value is '" . $value . "'.</p>";
      }
    ?>

    </div>

    <div class="footer">
      <div class="item footer_left">
        <ul>
          <li>
            <h4>Contact Us</h4>
          </li>

          <li>BrightIdeas</li>

          <li>66 Sixth Street</li>

          <li>Amherst, NY 12345</li>
        </ul>
      </div>

      <div class="item footer_right">
        <ul>
          <li>Sitemap</li>

          <li><a href="index.html">Home</a></li>

          <li><a href="#">About Us</a></li>

          <li><a href="#">Privacy</a></li>

          <li><a href="#">Support</a></li>

          <li><a href="faq.html">FAQ</a></li>

          <li><a href="#">Careers</a></li>
        </ul>
      </div>
    </div>
  </div>
  <script src="../js/form.js"></script>
</body>
</html>


        
