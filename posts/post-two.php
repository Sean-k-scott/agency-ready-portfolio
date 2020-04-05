<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "Building My Portfolio - Front End Web Developer - Sean Scott" ?>
<!-- End Flexible Meta and Title Content variables -->
<?php include '../template-parts/global/head.php' ?>
<?php include '../template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one standard-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <a href="/blog/" class="blog__return__start">Return to Blogs</a>
        <h2>Building My Portfolio</h2>
        <h3>October 2019</h3>
        <h4>by Sean Scott</h4>
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
        <p>‘Prepros’ was my development environment of choice to compile my Sass, and easily test my site on mobile and tablet devices. The positive of using technology like prepros is that development speed is much easier and quicker, the downside is that it caused minor errors and some warnings in W3 CSS Validation due to the additional webkits it creates.</p>
        <p>Finally I created a GitHub repository for my site and committed my files to begin the version control process, ensuring I committed every time I felt like I had made substantial changes to the site, the repository can be found at <a href="https://github.com/Sean-k-scott/agency-ready-portfolio.git" title="Agency Ready Portfolio Site Repository - GitHub">My Github</a>.</p>
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
        <a href="/blog/" class="blog__return__end">Return to Blogs</a>
      </div>
    </div>
  </section>
</main>
<?php include '../template-parts/global/footer.php' ?>
<?php include '../template-parts/global/slideout.php' ?>
</body>
</html>
