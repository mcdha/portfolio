@extends('main_layout.app')

@section('content')

      <div class="art-content">
        <div class="art-curtain"></div>

        <div class="art-top-bg" style="background-image: url({{asset('assets/img/bg.jpg')}})">
          <!-- overlay -->
          <div class="art-top-bg-overlay"></div>
          <!-- overlay end -->
        </div>

        <div class="transition-fade" id="swup">
          <div id="scrollbar" class="art-scroll-frame">

            @include('pages.header')

            @include('pages.services')

            @include('pages.price_plans')

            @include('pages.testimonials')

            @include('pages.projects')

            @include('pages.education_work')

            @include('pages.newsletters')

            @include('pages.contacts')

            @include('pages.getintouch')



            <div class="container-fluid">
              <div class="row">
                <div class="col-6 col-lg-3">
                  <img class="art-brand" src="{{asset('assets/img/brands/1.png')}}" alt="brand">
                </div>
                <div class="col-6 col-lg-3">
                  <img class="art-brand" src="{{asset('assets/img/brands/2.png')}}" alt="brand">
                </div>
                <div class="col-6 col-lg-3">
                  <img class="art-brand" src="{{asset('assets/img/brands/3.png')}}" alt="brand">
                </div>
                <div class="col-6 col-lg-3">
                  <img class="art-brand" src="{{asset('assets/img/brands/1.png')}}" alt="brand">
                </div>
              </div>
            </div>

             @include('footer.footer')

          </div>
        </div>
      </div>

@endsection