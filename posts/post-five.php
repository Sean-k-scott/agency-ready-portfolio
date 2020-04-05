<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "Exploring Wordpress - Custom SEO Pages - Front End Web Developer - Sean Scott" ?>
<!-- End Flexible Meta and Title Content variables -->
<?php include '../template-parts/global/head.php' ?>
<?php include '../template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one last-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <a href="/blog/" class="blog__return__start">Return to Blogs</a>
        <h2>Exploring Wordpress - Custom SEO Pages</h2>
        <h3>March 2020</h3>
        <h4>by Sean Scott</h4>
        <a href="http://17083372.webdevmmu.uk/pinnaclewp/video-game-coaching-united-states/" class="blog__link" title="Pinnacle Wordpress SEO Page">Demonstrator One - Wordpress SEO Page</a>
        <a href="http://17083372.webdevmmu.uk/pinnaclewp/wp-login.php" class="blog__link" title="Pinnacle Wordpress Login">Demonstrator One - Wordpress Login</a>
        <p>WordPress is currently; and has been for several years - the most popular Content Management System (CMS) in the world.</p>
        <p>As of March 2020, WordPress owns over 60% of the global websites with identified CMS’ which is over 35% of all websites (W3Techs, 2020).</p>
        <p>WordPress is so popular due to its open-source nature and large amount (50,000+) of plugins available in order to fulfil any business’ needs and connect to a large amount of external applications such as mail providers like MailChimp or Mailjet (W3Techs, 2020).</p>
        <p>SEO Landing Pages are pages that are not connected to your main website’s navigation and are usually tailored towards a specific area of your business or geographical area.</p>
        <p>For example, if you owned a fireplace website based in London, UK; you may have one CMS landing page for ‘Fireplaces in London’, and another for ‘Electric Fireplaces London’.</p>
        <p>SEO Landing Pages are used to target common search terms in order to rank these pages high on search results, to help convert visitors to your website.</p>
        <p>They can be <strong>Conversion Focused</strong> – these pages focus on converting users to your main website and purchasing/viewing your product(s).</p>
        <p>Or they can be <strong>SEO-Optimised Focused</strong> – these pages focus on ranking as highly as possible on search engines in order to draw as many visitors as possible, hopefully also converting users to the main site/product(s) (Teitelman, 2019).</p>
        <p>These pages are not linked to from your main navigation; however, they contain ‘Call to Action’ buttons to take visitors that ‘land’ on these pages from search engines onto the static pages on their site, initially generating interest in a specific area of a business before drawing the visitor into the rest of the site (Vrountas, 2020).</p>
        <p>Working at a digital agency over the summer has allowed me to get some experience with wordpress and it’s multitude of plugins, so I decided to explore this further and build a custom theme with a custom SEO page template for either an agency or a client to use to build SEO pages quickly.</p>
        <p>The plugin I used to help translate the CMS custom content into the template, is Advanced Custom Fields (ACF, 2020).</p>
        <p>ACF has various field types that allow you to translate all sorts of custom content into your template in order to quickly and efficiently build custom content sections.</p>
        <p>The first step was to create a custom theme for the project site and convert the project files to wordpress formats such as page templates (Figure 1).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/wordpress-theme.png" alt="WordPress Theme File Structure" />
            <span class="figure">Figure 1</span>
          </div>
        </div>
        <p>Once the theme folder was set up and all the content was transferred, some adjustments could be made using WordPress templates, loops and hooks (Jankov, 2018).</p>
        <p>Our template-seo file opens with some php, including the necessary commented text to identify to WordPress that our file is a template file:</p>
        <pre><code class="language-php">&lt;?php
/* Template Name: SEO Topfold Image Template */

include(‘header.php’);
?&gt;</code></pre>
        <p>After this, we want to include our opening section. On our website, our topfold has a background image, and our H1 is included as text overlaying our image.</p>
        <p>In order for us to pull in our background-image as CSS from WordPress, we have to use inline styling:</p>
        <pre><code class="language-php">&lt;section class="seo topfold seo__image__topfold" style="background-image: url('&lt;?php the_field('topfold_image');?&gt;');"&gt;
  &lt;div class="container"&gt;
    &lt;h1 class="centered"&gt;&lt;?php the_field('page_heading'); ?&gt;&lt;/h1&gt;
  &lt;/div&gt;
&lt;/section&gt;</code></pre>
        <p>Instead of specifying an image location, we instead use ACF’s ‘the_field()’ hook to pull in our image from the custom field ‘topfold_image’.</p>
        <p>For our main template loop, a simple loop may look something like:</p>
        <pre><code class="language-php">if ( have_posts () ) {
  	while ( have_posts() ) {
  		the_post();
  	}  endwhile;
  }  endif;</pre></code>
        <p>In our loop however, we want to add some extra PHP to open and close our section, adding some extra custom classes and custom inline CSS.</p>
        <p>We also use WordPress’ hook ‘get_template_part()’ to pull in various the template parts as required, when they are added to our page in WordPress:</p>
        <pre><code class="language-php">&lt;?php if(have_rows('seo_flexible_content')): ?&gt;
          &lt;?php while (have_rows('seo_flexible_content')): the_row(); ?&gt;
            &lt;section
              class="seo seo__&lt;?php print get_row_layout(); ?&gt;&lt;?php if(get_sub_field('top_section')):?&gt; seo__top&lt;?php endif;?&gt;&lt;?php if(get_sub_field('middle_section')):?&gt; seo__middle&lt;?php endif;?&gt;&lt;?php if(get_sub_field('bottom_section')):?&gt; seo__bottom&lt;?php endif;?&gt;"

              style="&lt;?php if(get_sub_field('background_color')): ?&gt;background-color: &lt;?php the_sub_field('background_color'); ?&gt;;&lt;?php endif; ?&gt;&lt;?php if(get_sub_field('background_image')): ?&gt;background-image: url('&lt;?php the_sub_field('background_image')?&gt;');&lt;?php endif;?&gt;&lt;?php if(get_sub_field('custom_margin')):?&gt;margin:&lt;?php the_sub_field('custom_margin');?&gt;;&lt;?php endif;?&gt;&lt;?php if(get_sub_field('custom_padding')):?&gt;padding:&lt;?php the_sub_field('custom_padding');?&gt;;&lt;?php endif;?&gt;"&gt;

            &lt;?php get_template_part('/flexible/seo/seo-'. get_row_layout() .''); ?&gt;

            &lt;/section&gt;
          &lt;?php endwhile; ?&gt;
        &lt;?php endif; ?&gt;</pre></code>
        <p>From this loop we check for rows in our ‘seo_flexible_content’, and whilst we have rows, display the row as follows:</p>
        <ul style="padding-left: 25px; margin: 25px 0;">
          <li>- An opening section tag, with a custom class of seo and seo__get_row_layout(). This allows us to apply CSS to every single row, and individually to each type of SEO layout we want to use, without looping through each template.</li>
          <li>- Some inline styling to allow us some styling control from fields inside our CMS, including custom margin, padding, background-image, and background-color.</li>
          <li>- Our template part, again using the name of seo-get_row_layout() so we don’t have to individually loop through all of our custom sections. As long as our section names in ACF match our template part names, the section will be outputted.</li>
          <li>- Finally, a close section tag to finish off the section template.</li>
        </ul>
        <p>Now that our template file is done, all we need to do is code up our template parts and create our fields.</p>
        <p>For our template parts, we’ve already created the section tags so we just need to include the contents of our section. The example I’ll use is seo-image_right_text_left.php:</p>
        <pre><code class="language-php">&lt;div class="container"&gt;
          &lt;div class="grid"&gt;
            &lt;div class="image-right"&gt;
              &lt;?php $image = get_sub_field('image_right'); ?&gt;
                &lt;img src="&lt;?php echo $image['url'];?&gt;" alt="&lt;?php echo $image['alt'];?&gt;" /&gt;
            &lt;/div&gt;
            &lt;div class="content-left"&gt;
              &lt;h2&gt;&lt;?php the_sub_field('section_title'); ?&gt;&lt;/h2&gt;
              &lt;?php the_sub_field('section_content'); ?&gt;
              &lt;?php get_template_part('flexible/seo/buttons'); ?&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/div&gt;</pre></code>
        <p>We apply our layout as if our section was hard coded, and all we do differently is pull in our image, our title and our content using our ACF fields.</p>
        <p>For this template, I have selected for images to be an array instead of an image, in order to pull in extra custom data such as the alt text from WordPress.</p>
        <p>Now that our template and template parts are built, all we need to do is build our ACF fields and populate our template page.</p>
        <p>In our CMS, let’s build up our custom field set. In our loop above, we loop through ‘seo_flexible_content’, so let’s create that as our Flexible Content field.</p>
        <p>We can also add some WordPress rules for when our ACF content is shown, let’s show if our ‘Post Template’ is equal to our SEO Templates (Figure 1).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/acf-1.png" alt="ACF Content 1" />
            <span class="figure">Figure 1</span>
          </div>
        </div>
        <p>In our ACF Content, we create our Layout Blocks. We need to name our block the same as our template files in order for our loop to work, so our ‘seo-image_right_text_left‘ template’s block needs to be named ‘image_right_text_left’.</p>
        <p>Then we add all our individual fields and set them to the correct type. True/False fields allow us to toggle specific content with a tick box inside our WordPress Page (Figure 2).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/acf-2.png" alt="ACF Content 2" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <p>Finally, we create our Page, select our SEO Template, and add in the sections that we want in the order that we want (Figure 3), before filling out our content (Figure 4).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/acf-3.png" alt="ACF Content 3" />
            <span class="figure">Figure 3</span>
          </div>
          <div class="image-container">
            <img src="/assets/img/blog/acf-4.png" alt="ACF Content 4" />
            <span class="figure">Figure 4</span>
          </div>
        </div>
        <p>For some larger, regional or international businesses, it may be required to create upwards of 20+ SEO Landing Pages.</p>
        <p>Experimenting with the flexibility of WordPress Themes and Plugins has really shown how quickly and efficiently development can be sped up with custom content and repeating code, in comparison with directly hard coding each page.</p>
        <h2>References</h2>
        <ul>
          <li>ACF. (2020) <i>ACF | Adcanced Custom Fields Plugin for WordPress.</i> ACF [Online] [Accessed on 14<sup>th</sup> March 2020] <a href="https://www.advancedcustomfields.com/" title="Advanced Custom Fields">https://www.advancedcustomfields.com/</a></li>
          <li>Jankov, T. (2018) <i>How to Build a WordPress Theme from Scratch: First Steps</i> Sitepoint [Online] [Accessed on 14<sup>th</sup> March 2020] <a href="https://www.sitepoint.com/build-wordpress-theme-from-scratch-first-steps/" title="Sitepoint - WordPress Theme from Scratch">https://www.sitepoint.com/build-wordpress-theme-from-scratch-first-steps/</a></li>
          <li>Teitelman, P. (2019) <i>How to Rank (and Convert) with Landing Page SEO</i> Unbounce [Online] [Accessed on 14<sup>th</sup> March 2020] <a href="https://unbounce.com/landing-pages/landing-page-seo/" title="Unbounce - Ranking Landing Page SEO">https://unbounce.com/landing-pages/landing-page-seo/</a></li>
          <li>Vrountas, T. (2020) <i>3 Reasons Why You Should Publish Landing Pages to a CMS</i> Instapage [Online] [Accessed on 14<sup>th</sup> March 2020] <a href="https://instapage.com/blog/landing-page-cms" title="Instapage - Publish Landing Pages to CMS">https://instapage.com/blog/landing-page-cms</a></li>
          <li>W3Techs. (2020) <i>Usage Statistics and Market Share of WordPress, March 2020</i> W3Techs [Online] [Accessed on 14<sup>th</sup> March 2020] <a href="https://w3techs.com/technologies/details/cm-wordpress" title="W3Techs - WordPress Statistics">https://w3techs.com/technologies/details/cm-wordpress</a></li>
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
