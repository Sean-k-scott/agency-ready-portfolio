<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "Performance and Optimization - Front End Web Developer - Sean Scott" ?>
<!-- End Flexible Meta and Title Content variables -->
<?php include '../template-parts/global/head.php' ?>
<?php include '../template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one last-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <a href="/blog/" class="blog__return__start">Return to Blogs</a>
        <h2>Performance and Optimization</h2>
        <h3>November 2019</h3>
        <h4>by Sean Scott</h4>
        <p>When coding my portfolio site using Sass, the aim was to make the code as clean and as reusable as possible. I started out with a CSS reset initially adding the border-box code from ‘CSS FTW’ Paul Irish(Irish, 2012), and the responsive images code:</p>
        <pre><code class="language-css">img {
  max-width: 100%;
  height: auto;
}</code></pre>
        <p>Ensuring that all my images would be responsive. I also reset my lists, body and header padding. For the global styling I created a default flex container and grid container. I also used the pseudo-class of :nth-child to change the colour scheme of each alternate section:</p>
        <pre><code class="language-css">section:nth-child(odd) {
  @include borders-tl-br($darkblue);
  background-color: $softwhite;
  color: $darkgrey;
}</code></pre>
        <p>And did the same for even sections. The include is a Sass mixin for the ‘border art’ on each section, I created separate mixins for the art to be top-left &amp; bottom-right or top-right &amp; bottom-left.</p>
        <p>I also created default responsive grid settings for an image and text left and right setup, allowing for extra grid space for the images. Also included here are media queries to stack the content as the screen size reduces, his is showcased well on the portfolio page. Finally I set preset styling for links, buttons and section padding for use across the site to keep consistency.</p>
        <p>After the global styling, I created sass partials containing variables for fonts &amp; colours, typography and some mixins for use across the site, allowing for easy global changes to be made site-wide.</p>
        <h4>Optimization</h4>
        <p>Once I uploaded my portfolio to my webspace, I ran the site through Google’s PageSpeed Insights(Google, 2019) to see how it performed. My site managed an initial desktop speed of 100(Figure 1), and mobile speed of 93(Figure 2).</p>
        <div class="flex">
          <div class="image-container">
            <img src="/assets/img/blog/pagespeed-desktop.jpg" alt="Google PageSpeed Insights score of 100 for this site on desktop" />
            <span class="figure">Figure 1</span>
          </div>
          <div class="image-container">
            <img src="/assets/img/blog/mobile-pre-defer.jpg" alt="Google PageSpeed Insights score of 93 for this site on mobile before adding script defer" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <p>The two main changes I made to improve performance were a size reduction and optimisation of some of the sites imagery, and deferring non critical scripts. For the imagery I saved all my images at 80% quality, ensuring that they were saved as progressive JPGs and ‘saved for web’. I added ‘defer’ to JQuery and fontawesome scripts, and these measures increased my sites mobile score from 93 to 96(Figure 3).</p>
        <div class="flex">
          <div class="image-container">
            <img src="/assets/img/blog/mobile-post-defer.jpg" alt="Google PageSpeed Insights score of 96 for this site on mobile after adding script defer" />
            <span class="figure">Figure 3</span>
          </div>
        </div>
        <p>As a further Optimization test, I ran the site through GTMetrix(GTMetrix, 2019), which analyses performance through a PageSpeed score and a YSlow score. Initially, the site scored a low B on both scores(Figure 4).<p>
          <div class="flex">
            <div class="image-container">
              <img src="/assets/img/blog/gtmetrix-initial.jpg" alt="GT Metrix results of B &amp; B for this website" />
              <span class="figure">Figure 4</span>
            </div>
          </div>
          <p>The main suggestion here, was to leverage browser caching by adding an expiration to cacheable resources. I did this by editing and uploading the .htaccess file, adding in the suggested time lengths of 1 Year for all truly static content and 1 week for content changes. This resulted in an improved score of an A and a high B(Figure 5).</p>
          <div class="flex">
            <div class="image-container">
              <img src="/assets/img/blog/gtmetrix-new.jpg" alt="New GT Metrix results of A &amp; High B for this website" />
              <span class="figure">Figure 5</span>
            </div>
          </div>
          <h4>SEO Integration</h4>
          <p>For SEO Integration, I ensured that all the required meta tags and data were available on each page and tailored to each page, using PHP to pull the variable metadata such as the description, keywords and title. I ran through the site ensuring that anchor tags had titles where appropriate, and all alt text was present and relevant.</p>
          <p>I then ran the site through Google Lighthouse Audit built into DevTools scoring 93 for SEO, and ran an SEMRush(SEMRush, 2019) audit(Figure 6), which unfortunately scanned my entire webspace, but through which I identified and fixed small SEO issues on my portfolio site such as fixing a duplicate title and increasing title and description length.</p>
          <div class="flex">
            <div class="image-container">
              <img src="/assets/img/blog/semrush.jpg" alt="An SEMRush audit of my webspace, highlighting multiple SEO issues that I resolved" />
              <span class="figure">Figure 6</span>
            </div>
          </div>
          <h5>References</h5>
          <ul>
            <li>Google (2019) <i>PageSpeed Insights.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://developers.google.com/speed/pagespeed/insights/" title="Google PageSpeed Insights">https://developers.google.com/speed/pagespeed/insights/</a></li>
            <li>GTMetrix (2019) <i>GT Metrix | Website Speed and Performance Optimization.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://gtmetrix.com" title="GT Metrix">https://gtmetrix.com</a></li>
            <li>Irish, P. (2012) <i>* { Box-sizing: Border-box } FTW - Paul Irish.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://www.paulirish.com/2012/box-sizing-border-box-ftw/" title="Paul Irish">https://www.paulirish.com/2012/box-sizing-border-box-ftw/</a></li>
            <li>SEMRush (2019) <i>SEMRush - Online Visibility Management Platform.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://www.semrush.com/" title="SEMRush - Online Visiblity Management Platform">https://www.semrush.com/</a></li>
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
