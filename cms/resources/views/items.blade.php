
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

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">紙オムツ</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/dH988mw_kTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>
          <a href="#" class="btn btn-primary my-2">吸水性ランキング</a>
          <a href="#" class="btn btn-success my-2">通気性ランキング</a>
          <a href="#" class="btn btn-danger my-2">低価格ランキング</a>
        </p>
      </div>
    </div>
  </section>
  
  <div class="container">
    <button type="button" class="btn btn-dark position-relative fs-3">
      気になる商品をチェック & 動画比較スタート！
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
    </button>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
         <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
         <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
         <div class="col">
          <div class="card shadow-sm">
           <iframe width="100%" height="225" src="https://www.youtube.com/embed/EuwpR46wSh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">メーカー：パンパース</p>
              <p class="card-text">商品名：はじめての肌へのいちばん</p>
              <img src="{{asset('img/pampers/pampers-main.jpg')}}" class="w-50">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">詳細</button>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      気になる
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
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
