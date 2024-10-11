<div class="container-fluid mt-5">
  <div class="row">
      <div class="col-lg-12">
          <div class="art-section-title">
              <div class="art-title-frame">
                  <h4>Testimonials</h4>
              </div>
          </div>
      </div>
      <div class="col-lg-12">
          <div class="swiper-container art-testimonial-slider" style="overflow: visible">
              <div class="swiper-wrapper">
                  @foreach ($testimonials as $testimonial)
                      <div class="swiper-slide">
                          <div class="art-a art-testimonial">
                              <div class="testimonial-body">
                                  <img class="art-testimonial-face" src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->image }}">
                                  <h6>{{ $testimonial->name }}</h6>
                                  <div class="art-el-suptitle mb-15">{{ $testimonial->occupation }}</div>
                                  <div class="mb-15" style="word-wrap: break-word; overflow-wrap: break-word;">{{ $testimonial->message }}</div>
                              </div>
                              <div class="art-testimonial-footer">
                                  <div class="art-left-side">
                                      <ul class="art-star-rate">
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                          <li><i class="fas fa-star"></i></li>
                                      </ul>
                                  </div>
                                  <div class="art-right-side">
                                      {{-- <a href="#" class="chat-trigger" data-testimonial-id="{{ $testimonial->id }}">
                                          <i class="fas fa-comment"></i> Live Chat
                                      </a> --}}
                                  </div>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
      <div class="col-lg-12">
          <div class="art-slider-navigation">
              <div class="art-sn-left">
                  <div class="swiper-pagination"></div>
              </div>
              <div class="art-sn-right">
                  <div class="art-slider-nav-frame">
                      <div class="art-slider-nav art-testi-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                      <div class="art-slider-nav art-testi-swiper-next"><i class="fas fa-chevron-right"></i></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
