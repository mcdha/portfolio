<div class="container-fluid mt-5 mb-4">
  <div class="row">
      <div class="col-lg-12">
          <div class="art-section-title">
              <div class="art-title-frame">
                  <h4>Inspiration for Developers</h4>
              </div>
          </div>
      </div>

      <div class="col-lg-12">
          <div class="swiper-container art-blog-slider" style="overflow: visible">
              <div class="swiper-wrapper">
                  @foreach ($quotes as $quote)
                  <div class="swiper-slide">
                      <div class="art-a art-blog-card">
                          <a href="#." class="art-port-cover">
                              <img src="{{ asset($quote->image) }}" alt="Quote image">
                          </a>
                          <div class="art-post-description">
                              <a href="#.">
                                  <h5 class="mb-15">{{ $quote->title }}</h5>
                              </a>
                              <div class="mb-15">{{ $quote->quote }}</div>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
