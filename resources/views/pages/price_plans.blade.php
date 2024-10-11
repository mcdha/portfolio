<div class="container-fluid mt-5">
  <div class="row p-0-0">
      <div class="col-lg-12">
          <div class="art-section-title">
              <div class="art-title-frame">
                  <h4>Price Plans</h4>
              </div>
          </div>
      </div>

      @foreach ($price_plans as $price_plan)
          <div class="col-lg-4">
              <div class="art-a art-price">
                  <div class="art-price-body">
                      <h5 class="mb-30">{{ $price_plan->title }}</h5>
                      <div class="art-price-cost">
                          <div class="art-number">
                              @if ($price_plan->price_cost == 'FREE')
                                  FREE<sup>*</sup>
                              @else
                                  <span>$</span>{{ $price_plan->price_cost }}
                              @endif
                          </div>
                      </div>
                      <ul class="art-price-list">
                          @if ($price_plan->id == 1)
                              <li>Ui Design</li>
                              <li>Logo design</li>
                              <li class="art-empty-item">Web Development</li>
                              <li class="art-empty-item">Deployment for 1 month</li>
                              <li class="art-empty-item">Admin and User Dashboard</li>
                          @elseif ($price_plan->id == 2)
                              <li>Ui Design</li>
                              <li>Logo design</li>
                              <li>Web Development</li>
                              <li class="art-empty-item">Deployment for 1 month</li>
                              <li class="art-empty-item">Admin and User Dashboard</li>
                          @else
                              <li>Ui Design</li>
                              <li>Logo design</li>
                              <li>Web Development</li>
                              <li>Deployment for 1 month</li>
                              <li>Admin and User Dashboard</li>
                          @endif
                      </ul>

                      @if ($price_plan->id === 1)
                          {{-- <a href="#." class="art-link art-color-link art-w-chevron">Order now</a> --}}
                          <div class="art-asterisk"><sup>*</sup>Free only when ordering paid services</div>
                      @endif
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>
