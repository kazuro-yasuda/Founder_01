
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
    
          @if (Route::has('login'))
                <div class="col-md-3 text-end">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                       <a type="button" href="{{ route('login') }}" class="btn btn-outline-primary me-2">ログイン</a>
                    
                    @if (Route::has('register'))
                       <a type="button" href="{{ route('register') }}" class="btn btn-primary">新規登録</a>
                       
                        @endif
                    @endauth
                </div>
            @endif
        </header>
    </div>
    
  
    <main>
      
      <!--メインビジュアル-->
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            
            <h2 class="fw-bold">気になる商品を動画で比較！</h2>
            <h2 class="fw-bold">1分で“コレが欲しかった！”が見つかる</h2>
            <br></br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/J3GNnYMf8PE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>
  



　　<!--フッター-->
   <footer class="container">
      <!--<p class="float-end"><a href="#">Back to top</a></p>-->
      <p>2022 Founder All Rights Reserved.</p>
      <p class="float-end">
        <a href="#">会社概要</a>
        &middot; 
        <a href="#">利用規約</a>
        &middot;
        <a href="#">お問合せ</a>
      </p>
   </footer>
 
    <!--end footer-->

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
