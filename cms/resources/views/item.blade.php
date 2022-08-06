@extends('layouts.app')

@section('content')

 <div class="container">
  <div class="row">
    <div class="col">
      <iframe width="100%" height="271" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       <p class="bg-primary text-white text-center fs-4" style="width: 12rem;">吸水性実験</p>
    </div>
    <div class="col">
      <iframe width="100%" height="271" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/pampers/pampers1.jpg')}}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
              <img src="{{asset('img/pampers/pampers2.jpg')}}" class="d-block w-100" alt="">
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
              <p class="card-text fs-5">メーカー：パンパース</p>
              <p class="card-text fs-5">商品名：はじめての肌へのいちばん</p><br>
              <p class="card-text">【商品詳細】<br>
              ●厳選された羽毛のような素材による、パンパース史上最高のやわらかさ。<br>
              ●3D穴あきメッシュシートでゆるゆるうんちを吸収<br>
              ●いつでも360度フレッシュエア通気<br>
              ●2倍のびる のびのびストレッチ<br>
              ●「3つのマジック吸収体」で分散して即吸収<br>
              ●小さめの赤ちゃんにも安心 重ねてつけられるテープ！
              </p>
    　  </div> 
      </div>
      
      <div class="col-3 bg-info">
       <p>公式HPのURL</p>
       <p>amazonアフィリエイトリンク</p>
       <p>楽天アフィリエイトリンクト</p>
       <p>ヤフーアフィリエイトリンク</p>
      </div>
      
    </div>
  </div>
  
  
@endsection
