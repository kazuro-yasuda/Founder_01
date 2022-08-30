@extends('layouts.app')

@section('content')

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
         <!--※要実装：medium_category_name　を引っ張ってくる！-->
        <h1 class="fw-light fw-bold text-danger">紙オムツ</h1>
        <iframe width="560" height="315" 
         src=https://www.youtube.com/embed/dH988mw_kTg?autoplay=1&mute=1
         title="YouTube video player" 
         frameborder="0" 
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
         allowfullscreen>
        </iframe>
        <p>
          <a href="#" class="btn btn-primary my-2">吸水性ランキング</a>
          <a href="#" class="btn btn-success my-2">通気性ランキング</a>
          <a href="#" class="btn btn-danger my-2">低価格ランキング</a>
        </p>
      </div>
    </div>
  </section>
  
 
  <div class="container">
    

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
      
        @foreach ($items as $item)
   
          <div class="col">
              <div>
                  @if ($loop->iteration)
                  <p class="badge bg-danger fs-4 m-0">{{$item->current_ranking}}位</p>
                  @endif
              </div>
              
              <div class="card shadow-sm">
                
                <!--動画-->
                 <iframe width="100%" height="225" 
                 src={{ $item->video_url1 }}
                 title="YouTube video player" 
                 frameborder="0" 
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen>
                 </iframe>
                 
                <div class="card-body">
                  <!--ブランド名-->
                  <p class="card-text fs-5">ブランド名：{{ $item->company->name}}</p>
                  
                　<!--商品名-->
                  <p class="card-text text-danger fs-5 fw-bold">{{ $item->name }}</p>
                  
                  <!--商品画像-->
                  <img src="{{ asset('uploads/' . $item->img_url_main) }}" class="w-50 rounded mx-auto d-block">
             
                  
                  <div class="d-flex justify-content-between align-items-center">
                    
            
                    <!--　詳細画面へ -->
                    <a href="/item/{{$item->id }}" class="btn btn-primary">詳細</a>
                    
                    
                    <!--いいね！ボタン-->
                    <form action="{{ url('/items/'.$item->id) }}" method="POST">
                    	{{ csrf_field() }}
                    	<button type="submit" class="btn btn-danger">
                    	いいね！
                    	</button>
                    </form>
                    
                    <!--気になるボタン-->
                      <form id="intereste" >
                        <label>
                          {{--<input type="hidden" name="item" value="{{$item->id}} id=hidden_item">--}}
                          <input type="checkbox" name="item" value="{{$item->id}}" class="checkbox" onchange="onchange()">
                         　気になる
                        </label>
                      </form> 
               
                   </div>
                </div>
            </div>
       </div>
        @endforeach
       </div>
       
       
           　<!--比較画面へ遷移するボタン-->
           　<form action="{{url('/compare/create')}}" method="POST">
            	{{ csrf_field() }}
           　 	
             　 <div class="row">
                 <input type="hidden" name="compare_items" id="compare_item">
                 <input type="submit" name="" class="btn btn-outline-warning" value= "気になる商品をチェック & 動画比較スタート!" id="compare" >
               </div>
              
             </form>
      

      </div>  
    </div>   
    
@endsection
