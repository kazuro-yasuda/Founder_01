@extends('layouts.app')

@if( Auth::check() )
@section('content')

@foreach ($items as $item)
   
          <div class="col">
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
                  <p class="card-text fs-4 fw-bold">商品名：{{ $item->name }}</p>
                  
                  <!--商品画像-->
                  <img src="{{ asset('uploads/' . $item->img_url_main) }}" class="w-50">
             
                  
                  <div class="d-flex justify-content-between align-items-center">
                    
            
                    <!--　詳細画面へ -->
                    <a href="/item/{{$item->id }}" class="btn btn-primary">詳細</a>
                    
                     
                    
                  </div>
                </div>
            </div>
       </div>
        @endforeach
 
      
@endsection
@endif
