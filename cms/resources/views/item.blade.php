@extends('layouts.app')

@section('content')

 <div class="container">
  <div class="row">
    <div class="col">
     <iframe width="100%" height="225" 
       src={{ $item->video_url1 }}
       title="YouTube video player" 
       frameborder="0" 
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
       allowfullscreen>
     </iframe>
　　 <p class="bg-primary text-white text-center fs-4" style="width: 12rem;">吸水性実験</p>
    </div>
    <div class="col">
      <iframe width="100%" height="225" 
       src={{ $item->video_url2 }}
       title="YouTube video player" 
       frameborder="0" 
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
       allowfullscreen>
     </iframe>
       <p class="bg-success text-white text-center fs-4" style="width: 12rem;">通気性実験</p>    
    </div>
   </div>
</div>
  
  <div class="container">
    <div class="row">
      <div class="col-3">
        
        <!--カールセル-->
        <div id="carouselImgIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselImgIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselImgIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselImgIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('uploads/' . $item->img_url_main) }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('uploads/' . $item->img_url1) }}"  class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('uploads/' . $item->img_url2) }}"  class="d-block w-100" alt="">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselImgIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselImgIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      
      <div class="col-6">
       <div class="card-body">
              <p class="card-text fs-5">ブランド名：{{ $item->company->name}}</p>
              <p class="card-text fs-4 fw-bold">商品名：{{ $item->name }}</p>
              <p class="card-text fs-6">【商品詳細】<br>
              {{ $item->text }}
              </p>
    　  </div> 
      </div>
      
      <div class="col-3">
        <div class="d-flex flex-column">
          <button type="button" class="btn btn-primary">公式HP</button>
          <button type="button" class="btn btn-danger">楽天</button>
          <button type="button" class="btn btn-secondary">amazon</button>
          <button type="button" class="btn btn-success">ヤフーショッピング</button>
      </div>
      </div>
      
    </div>
  </div>

  
@endsection
