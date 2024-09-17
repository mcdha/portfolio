<style>
  .gallery-container {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-template-rows: auto auto;
      gap: 10px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
  }
  .gallery-item {
      position: relative;
      overflow: hidden;
  }
  .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }
  .gallery-item:first-child {
      grid-column: 1 / -1;
  }
  .art-item-hover {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0,0,0,0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      transition: opacity 0.3s;
  }
  .gallery-item:hover .art-item-hover {
      opacity: 1;
  }
</style>

<div class="container-fluid">
  <div class="row p-30-0">
    <div class="col-lg-12">
      <div class="art-section-title">
        <div class="art-title-frame">
          <h4>Projects</h4>
        </div>
        <div class="art-right-frame">
          <div class="art-filter">
            <a href="#" data-filter="*" class="art-link art-current">All Categories</a>
            <a href="#" data-filter=".webTemplates" class="art-link">Web Templates</a>
            <a href="#" data-filter=".logos" class="art-link">Logos</a>
            <a href="#" data-filter=".drawings" class="art-link">Drawings</a>
            <a href="#" data-filter=".ui" class="art-link">UI Elements</a>
          </div>
        </div>
      </div>
    </div>

    <div class="art-grid art-grid-3-col art-gallery">
      @foreach($projects as $project)
        <div class="art-grid-item webTemplates">
          <div class="gallery-container">
            @foreach(json_decode($project->images) as $index => $image)
              <div class="gallery-item" 
                   data-gallery="gallery-{{ $project->id }}" 
                   data-src="{{ asset($image->src) }}" 
                   data-caption="{{ $project->description }}">
                <img src="{{ asset($image->src) }}" alt="{{ $project->title }}">
              </div>
            @endforeach
          </div>

          <div class="art-item-description">
            <h5 class="mb-15">{{ $project->title }}</h5>
            <a href="#." 
               class="art-link art-color-link art-w-chevron" 
               data-fancybox-trigger="gallery-{{ $project->id }}">Read more</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
