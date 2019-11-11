<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, contact him for more information about his previous or upcoming work or with any questions you may have" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, contact, get, in, touch" ?>
<?php $title = "Sean Scott - Get In Touch - Lancashire Based Front End Web Developer" ?>
<!-- End Flexible Meta and Title Content variables -->
  <?php include 'template-parts/global/head.php' ?>
  <?php include 'template-parts/global/header.php' ?>
<main id="top">
  <section class="contact-get_in_touch standard-section_padding">
    <div class="flex-container flex-column">
      <div class="content-container">
        <h2><strong>Get In Touch</strong></h2>
        <p>If you'd like to get in touch with me, please drop me an email or fill in the form below and I'll get back to you as quickly as possible.</p>
        <h3>
          <i class="fas fa-fw fa-envelope" title="email"></i>
          <a href="mailto:scottseank64@gmail.com">scottseank64@gmail.com</a>
        </h3>
      </div>
      <div class="form-container">
        <form action="https://formspree.io/myyywnav" method="POST">
          <div class="form-group">
            <label class="form-label" for="first-name">First name</label>
            <input class="form-control" id="first-name" name="first-name" type="text">
          </div>
          <div class="form-group">
            <label class="form-label" for="last-name">Last name</label>
            <input class="form-control" id="last-name" name="last-name" type="text">
          </div>
          <div class="form-group">
            <label class="form-label" for="email-address">Email Address</label>
            <input class="form-control" id="email-address" name="email-address" type="text">
          </div>
          <div class="form-group">
            <label class="form-label" for="textarea">
              What would you like to say?
            </label>
            <textarea class="form-control form-control-3-4" name="comment" id="textarea" rows="5"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" value="Send" class="c2a-button">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
  <?php include 'template-parts/global/footer.php' ?>
  <?php include 'template-parts/global/slideout.php' ?>
</body>
</html>
