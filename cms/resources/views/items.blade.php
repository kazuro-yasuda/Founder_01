@extends('layouts.app')

@section('content')

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
    <a href="compare">
      <div class="btn btn-dark position-relative fs-3">
        気になる商品をチェック & 動画比較スタート！
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
      </div>
    </a>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
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
                <div>
                  <a href="item"><button type="button" class="btn btn-primary">詳細</button></a>
                </div> 
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">気になる</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        
      </div>
      </div>  
    </div>   


@endsection
