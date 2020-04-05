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
        <img class="toggle-menu" src="/assets/img/bars.svg" />
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
          <li><a title="See my Portfolio" href="/portfolio/">Portfolio</a></li>
          <li><a title="Read my Blog" href="/blog/">Blog</a></li>
          <li><a title="Curriculum Vitae" href="/cv/">CV</a></li>
          <li><a title="About Sean" href="/about/">About</a></li>
          <li><a title="Contact Information" href="/contact/">Contact</a></li>
        </ul>
      </nav>
  </div>
</header>
