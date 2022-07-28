
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Founder</title>
    <!--<link rel="stylesheet" href="{{ asset('css/welcome-founder.css') }}">-->
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
 

    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
 <!--ヘッダー-->
    
      <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
    
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">ログアウト</button>
            
          </div>
        </header>
    </div>

<main>
  
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
  
  
</main>

　　<!--フッター-->
   <footer class="container">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p>2022 Founder All Rights Reserved.</p>
      <p>
        <a href="#">会社概要</a>
        &middot; 
        <a href="#">利用規約</a>
        &middot;
        <a href="#">お問合せ</a>
      </p>
   </footer>


    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
