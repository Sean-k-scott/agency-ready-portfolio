<div class="slideout">
  <img class="toggle-menu close-menu" src="/assets/img/times-white.svg" />
  <div class="flex-container slideout-container flex-column">
    <h2>Sean Scott</h2>
    <div class="nav-list">
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
        <li><a title="More about me" href="/about/">About</a></li>
        <li><a title="Information on contacting me" href="/contact/">Contact</a></li>
      </ul>
    </div>
  </div>
</div>
