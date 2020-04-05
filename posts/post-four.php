<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "Portfolio Feedback &amp; Changes - Front End Web Developer - Sean Scott" ?>
<!-- End Flexible Meta and Title Content variables -->
  <?php include '../template-parts/global/head.php' ?>
  <?php include '../template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one last-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <a href="/blog/" class="blog__return__start">Return to Blogs</a>
        <h2>Portfolio Feedback &amp; Changes</h2>
        <h3>February 2020</h3>
        <h4>by Sean Scott</h4>
        <a href="http://17083372.webdevmmu.uk/portfoliov1/" title="Original Portfolio" class="blog__link">Portfolio Version 1</a>
        <p>Between the feedback received on submission of version 1 of my portfolio, feedback from industry professionals the portfolio show; and on twitter, some changes were required to improve the accessibility, usability and general presentation of my portfolio site.</p>
        <h3>Usability / Presentation</h3>
        <p>Due to the “Corner Design” of the sections on my portfolio, the design looked a little squished on mobile and needed more breathing room. I have increased the padding on the sections in order to create more space and make the contents of the sections more easily readable on mobile (Figure 1: Before) (Figure 2: After).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/padding-before.png" alt="Padding Before Changes" />
            <span class="figure">Figure 1</span>
          </div>
          <div class="image-container">
            <img src="/assets/img/blog/padding-after.png" alt="Padding After Changes" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <p>Another change to make is to remove font awesome. Font awesome is an icon font set that originally provided a way to use scalable, graphical icons across your website, without using resource-heavy images.</p>
        <p>There are some downsides to using icon fonts however, using icon fonts mean you load all of the fonts regardless of whether you use them or not, taking up additional space and resources on a website. They also fire off an additional server request, and cause visible alt text before loading (Arsenault, 2018).</p>
        <p>The introduction of SVGs has provided a resource-light way of adding scalable, graphical icons to a site. Switching to these has improved usability of my portfolio.</p>
        <p>Displaying code snippets on a website, in blog posts for example, is difficult when sites are intended to read and execute code not display it. Previously my site displayed code as CSS formatted plain text. This is both inaccessible and has presentation issues.</p>
        <p>Switching to a recommended library, Prism.js, to highlight syntax and comply with modern web standards is a positive change for my portfolio (Prism.js, Unknown). The library uses 'code' tags, ensuring the snippets are semantically correct. (Figure 1: Before) (Figure 2: After).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/code-before.png" alt="Code Snipppets Before Changes" />
            <span class="figure">Figure 1</span>
          </div>
          <div class="image-container">
            <img src="/assets/img/blog/code-after.png" alt="Code Snippets After Changes" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <h3>Accessibility / SEO</h3>
        <p>A lot of the suggested changes for my portfolio were accessibility or SEO related, both extremely important areas of today’s development environment.</p>
        <p>Firstly, I altered some metadata and page titles to be function first. Titles need to be function first to provide a few-word overview of a page and are repetitive and hidden if the function of the page is at the end of a title, this can also affect SEO and rankings, as people want to know what is on a webpage in search results first.</p>
        <p>Some feedback from Dónal Fitzpatrick on twitter (Fitzpatrick, 2019), was to add ARIA to the FAQ Accordion on my ‘about’ page. Without correct ARIA labels, screen readers have issues with the hide/show functionality of accordion behaviour, and it is important that proper techniques and tools are used so that ‘people with disabilities can correctly interact with the web’ (Shaw, 2019).</p>
        <p>Final SEO changes include modifying the .htaccess to remove the file extension of provided pages using the fantastic complete guide by plesk (Plesk, 2020).<p>
        <p>The main reason to do this is security, but also cleanliness and better SEO search results factor in.</p>
        <p>Finally, for Usability, Presentation and SEO reasons, the blog has been separated into an initial blog page with listings for each blog which now have their own separate pages (Figure 1: Before) (Figure 2: After).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/blog-before.png" alt="Blog Page Before Changes" />
            <span class="figure">Figure 1</span>
          </div>
          <div class="image-container">
            <img src="/assets/img/blog/blog-after.png" alt="Blog Page After Changes" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <h2>References</h2>
        <ul>
          <li>Arsenault, C. (2019) <i>Icon Fonts vs SVGs – Which One Should You Use in 2018?.</i> KeyCDN [Online] [Accessed on 15<sup>th</sup> February 2020] <a href="https://www.keycdn.com/blog/icon-fonts-vs-svgs" title="KeyCDN Blog">https://www.keycdn.com/blog/icon-fonts-vs-svgs</a></li>
          <li>Fitzpatrick, D. (2019) <i>Suggestion to use ARIA on FAQ Section.</i> Twitter [Online] [Accessed on 15<sup>th</sup> February 2020] <a href="https://twitter.com/fitzpatrickd/status/1199716848750731266" title="Twitter">https://twitter.com/fitzpatrickd/status/1199716848750731266</a></li>
          <li>Plesky, E. (2020) <i>Your complete .htaccess guide: Including .htaccess, Basics and more.</i> Plesk [Online] [Accessed on 15<sup>th</sup> February 2020] <a href="https://www.plesk.com/blog/various/comprehensive-guide-to-htaccess/" title="Plesk - Complete guide to .htaccess">https://www.plesk.com/blog/various/comprehensive-guide-to-htaccess/</a></li>
          <li>Prism.js (Unknown) <i>Prism, a Lightweight, Extensible Syntax Highlighter.</i> Prism.js [Online] [Accessed on 15<sup>th</sup> February 2020] <a href="https://prismjs.com/" title="PrismJS">https://prismjs.com/</a></li>
          <li>Shaw, K. (2019) <i>What the heck is ARIA? A Beginner’s Guide to ARIA for Accessibility.</i> Lullabot [Online] [Accessed on 15<sup>th</sup> February 2020] <a href="https://www.lullabot.com/articles/what-heck-aria-beginners-guide-aria-accessibility" title="Lullabot - ARIA Accessibility">https://www.lullabot.com/articles/what-heck-aria-beginners-guide-aria-accessibility</a></li>
        </ul>
        <a href="/blog/" class="blog__return__end">Return to Blogs</a>
      </div>
    </div>
  </section>
</main>
  <?php include '../template-parts/global/footer.php' ?>
  <?php include '../template-parts/global/slideout.php' ?>
</body>
</html>
