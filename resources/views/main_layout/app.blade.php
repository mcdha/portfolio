<!doctype html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#2B2B35">

  <link rel="shortcut icon" href="{{asset('assets/img/thumbnail.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/plugins/fancybox.min.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <title>Mc. Dharnel</title>
</head>

<body>

<div class="art-app art-app-onepage">
    <div class="art-mobile-top-bar"></div>
    <div class="art-app-wrapper">
      <div class="art-app-container">

       @include('pages.sidebar.sidebar')

            @yield('content')

    </div>
  </div>

  @include('preloading.preloading')

</div>

<div id="swupMenu"></div>

<script src="{{asset('assets/js/plugins/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/anime.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swiper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/progressbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/overscroll.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/typing.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/isotope.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/fancybox.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/swup.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>

{{-- FOR THE PROJECTS IMAGES__________________________________________________ --}}
<script>
  $(document).ready(function() {
    $('[data-fancybox-trigger]').click(function(e) {
      e.preventDefault();

      var galleryID = $(this).data('fancybox-trigger');

      var galleryItems = $('[data-gallery="' + galleryID + '"]').map(function() {
        return {
          src: $(this).data('src'),
          opts: {
            caption: $(this).data('caption')
          }
        };
      }).get();

      $.fancybox.open(galleryItems, {
        buttons: [
          "slideShow",
          "thumbs",
          "zoom",
          "fullScreen",
          "share",
          "close"
        ],
        thumbs: {
          autoStart: true
        }
      });
    });
  });
</script>


</body>
</html>
