<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "Sean Scott - Blog - Lancashire Based Front End Web Developer" ?>
<!-- End Flexible Meta and Title Content variables -->
  <?php include 'template-parts/global/head.php' ?>
  <?php include 'template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one first-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <h2><strong>Blog</strong></h2>
        <h3> Blog Post One - The Industry</h3>
        <p>Lorem Ipsum</p>
      </div>
    </div>
  </section>
  <section class="blog-post_one standard-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <h3> Blog Post Two - Building my Portfolio</h3>
        <h4>Research &amp; Design</h4>
        <p>When researching how I wanted to build my portfolio, I looked at a variety of existing sites from developers and agencies to look for inspiration and a theme to build my site around. A few of the sites that inspired me are:</p>
        <p>Sara Soueidan’s site (Soueidan, 2019) inspired me because of its simplistic layout, and focus on content. The menu and logo were simple, dark mode was an interesting feature. I like the idea of a dark mode but it often limits a design to strictly light items on dark backgrounds and vice versa, so I decided to implement something half way in my design. The imagery was infrequent but impactful, and clean logos to demonstrate technologies and companies were in frequent use, both things I decided I wanted to replicate on my portfolio.</p>
        <p>Andy Clarke (Clarke, 2019) inspired my use of colour, typography and layout. Clean clear typography for both header and body text, and print medium style layout especially for my portfolio page making good use of flexbox became a clear focus.</p>
        <p>For design, both Sara and Andy inspired my simple clean design, but I also wanted to showcase non-framework elements of small business websites that I have built before using frameworks, in order to showcase my ability to create these elements without relying on a framework, these include using a mobile “slideout” navigation with a hamburger menu, and a collapsible FAQ accordion section.</p>
        <p>As the page structure was predetermined, the only other design decision I had to make was whether to build a full-page ‘scrolling’ portfolio site or separate pages for each. The main two influences on my decision to use separate pages were wanting to include a mobile navigation menu, and knowing that the site would be quite text heavy and therefore not wanting the site to be too long to scroll down and to break up the large amounts of text with design and page changes.</p>
        <p>After deciding on the layout of my site, I created some paper prototypes to ensure that my design ‘worked’, and how to arrange the elements I wanted to create on mobile as part of a mobile-first design, before sketching out the desktop version.</p>
        <h4>Build</h4>
        <p>Before starting work on coding my portfolio, I created my page structure for my PHP and Sass files. I created an assets folder to hold my CSS, JS, and Images, and a folder called ‘template-parts’ to hold global elements I would pull into each page, like my head, header, footer and slide out menu.</p>
        <p>I decided to write my code in Sass rather than CSS, as I’m more accustomed to using Sass and the variables and mixins allow for more flexibility and code re-usability. I created some partials to hold some global styling, variables for colour and typography, and seperate partials for the global elements such as header, footer and slideout menu in order to keep my code as clean and as reusable as possible, using some of the techniques outlined by Buddy Reno and others (Reno, 2019).</p>
        <p>I also decided to use some Javascript, pulling in JQuery from a CDN in order to animate my slide out mobile menu and FAQ accordion. I created a fallback for the menu and accordion for when Javascript is disabled in order to keep my site as accessible as possible, using a simple JQuery version of Modernizr’s javascript feature detection tests, I added a class of ‘no-js’ to the body, allowing for styling elements when javascript is not running. At the start of my Javascript it removes the no-js code, so when JS is running the no-js styling does not apply. (Modernizr, 2019).</p>
        <p>Finally I used ‘Prepros’ as my development environment so I could compile my Sass, and easily test my site on mobile and tablet devices, and created a GitHub repository for my site and committed my files to begin the version control process, ensuring I committed every time I felt like I had made substantial changes to the site, the repository can be found at <a href="https://github.com/Sean-k-scott/agency-ready-portfolio.git" title="Agency Ready Portfolio Site Repository - GitHub">My Github</a>.</p>
        <h4>Launch</h4>
        <p>Before launching the site, I ensured that each pages metadata was present and correct and the alt tags and anchor titles were present and provided rich accessibility. I ensured that my HTML, PHP and CSS Validated using W3C’s Validator (W3C, 2019). Finally once my site was live I performed speed testing and SEO checks, tweaking elements to improve my sites speed and SEO readability.</p>
        <h5>References</h5>
        <ul>
          <li>Clarke, A. (2019) <i>World-class website designs - Stuff &amp; Nonsense.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://stuffandnonsense.co.uk/design" title="World-class website designs - Stuff &amp; Nonsense">https://stuffandnonsense.co.uk/design</a></li>
          <li>Modernizr (2019) <i>Modernizr: the feature detection library for HTML5/CSS3</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://modernizr.com" title="Modernizr Feature Detection Library">https://modernizr.com</a></li>
          <li>Reno, B. (2019) <i>Sass techniques from the trenches | CSS Tricks</i> CSS-Tricks. [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://css-tricks.com/sass-techniques-from-the-trenches/" title="CSS-Tricks Sass techniques from the trenches">https://css-tricks.com/sass-techniques-from-the-trenches/</a></li>
          <li>Soueidan, S. (2019) <i>Sara Soueidan - Freelance Front-End UI/UX Developer.</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://www.sarasoueidan.com/" title="Sara Soueidan - Freelance Front-End UI/UX Developer.">https://www.sarasoueidan.com/</a></li>
          <li>W3C (2019) <i>The W3C Markup Validation Service</i> [Online] [Accessed on 9<sup>th</sup> November 2019] <a href="https://validator.w3.org/" title="The W3C Markup Validation Service">https://validator.w3.org/</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="blog-post_one last-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <h3> Blog Post Three - Performance and Optimization</h3>
        <h4>Code</h4>
        <p>When coding my portfolio site using Sass, the aim was to make the code as clean and as reusable as possible. I started out with a CSS reset initially adding the border-box code from ‘CSS FTW’ Paul Irish(Irish, 2012), and the responsive images code:</p>
        <div class="code">img {<br/>
          max-width: 100%;<br/>
          height: auto;<br/>
        }
        </div>
        <p>Ensuring that all my images would be responsive. I also reset my lists, body and header padding. For the global styling I created a default flex container and grid container. I also used the pseudo-class of :nth-child to change the colour scheme of each alternate section:</p>
        <div class="code">
          section:nth-child(odd) {<br/>
            @include borders-tl-br($darkblue);<br/>
            background-color: $softwhite;<br/>
            color: $darkgrey;<br/>
          }
        </div>
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
      </div>
    </div>
  </section>
</main>
  <?php include 'template-parts/global/footer.php' ?>
  <?php include 'template-parts/global/slideout.php' ?>
</body>
</html>
