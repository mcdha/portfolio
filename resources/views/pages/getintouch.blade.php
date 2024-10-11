<div class="col-lg-12">
  <div class="art-section-title">
    <div class="art-title-frame">
      <h4>Get in touch</h4>
    </div>
  </div>
  <div class="art-a art-card">
    <form id="getintouch_form" class="art-contact-form" enctype="multipart/form-data">
      @csrf
      <div class="art-form-field">
        <input id="name" name="name" class="art-input" type="text" placeholder="Name" required>
        <label for="name"><i class="fas fa-user"></i></label>
      </div>
      <div class="art-form-field">
        <input id="occupation" name="occupation" class="art-input" type="text" placeholder="Occupation" required>
        <label for="occupation"><i class="fas fa-briefcase"></i></label>
      </div>
      <div class="art-form-field">
        <input id="email" name="email" class="art-input" type="email" placeholder="Email" required>
        <label for="email"><i class="fas fa-at"></i></label>
      </div>
      <div class="art-form-field">
        <textarea id="message" name="message" class="art-input" placeholder="Message" required></textarea>
        <label for="message"><i class="far fa-envelope"></i></label>
      </div>

      <div class="d-flex">
        <h4 style="margin-right: 2rem">Is this a Question or Testimonial?</h4>
        <span style="margin-right: 10px">
          <input style="margin-right: 5px" type="radio" id="question" name="is_testimonial" value="question" required>
          <span for="question">Question</span>
        </span>

        <span>
          <input style="margin-right: 5px" type="radio" id="testimonial" name="is_testimonial" value="testimonial" required>
          <span for="testimonial">Testimonial</span>
        </span>
      </div>

      <hr class="mt-4">
      <div class="mt-4 mb-5">
        <p>Upload image (not required)</p>
        <input id="image" name="image" class="art-input" type="file" placeholder="Upload Image (not required)" style="cursor: pointer;">
      </div>
      <div class="art-submit-frame">
        <button class="art-btn art-btn-md" type="submit"><span>Send message</span></button>
        <div class="art-success">Success <i class="fas fa-check"></i></div>
      </div>
    </form>
  </div>
</div>

