<body class="no-js">
<header>
  <div class="flex-container header-container">
    <div class="left-container">
      <?php $homepage = "/";
            $currentpage = $_SERVER['REQUEST_URI'];
            if($homepage==$currentpage) { ?>
        <h1>Sean Scott</h1>
      <?php } else { ?>
        <a href="/index.php" title="Go to Homepage">
          <h1>Sean Scott</h1>
        </a>
      <?php } ?>
        <i class="fas fa-bars toggle-menu" title="Mobile Menu"> <!-- title on fontawesome is for accessibility acts like an alt tag -->
        </i>
      </div>
      <nav>
        <ul>
          <?php
          $homepage = "/";
              $currentpage = $_SERVER['REQUEST_URI'];
              if($homepage!==$currentpage) {
          ?>
          <li><a title="Return to Homepage" href="/">Home</a></li>
          <?php } ?>
          <li><a title="See my Portfolio" href="/portfolio.php">Portfolio</a></li>
          <li><a title="Read my Blog" href="/blog.php">Blog</a></li>
          <li><a title="Curriculum Vitae" href="/cv.php">CV</a></li>
          <li><a title="About Sean" href="/about.php">About</a></li>
          <li><a title="Contact Information" href="/contact.php">Contact</a></li>
        </ul>
      </nav>
  </div>
</header>
