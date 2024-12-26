<?php
$contact_form_isEnable = get_field('toggle_contact_us_form');
?>

<?php if($contact_form_isEnable):?>
<section class="contact-us-form section-gap">
  <div class="container">
    <div class="contact-form-wrapper">
      <div class="section-title">
        <h2>Send Us an Investment Request</h2>
        <p>Fill out the form below, and we’ll get back to you soon.</p>
      </div>
      <div class="form-wrapper">
        <?php echo do_shortcode('[contact-form-7 id="1a30182" title="Contact form"]');?>
      </div>
    </div>
  </div>
</section>
<?php endif;?>