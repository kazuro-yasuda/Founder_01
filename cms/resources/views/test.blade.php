
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
      
 
    <div class="card-body">
        <div class="card-title">
            登録フォーム
        </div>
        
     
        <h1>aaaa
        </h1>
        
        <form action="{{ url('items') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- 登録商品名 -->
            <div class="form-group">
                投稿のタイトル
                <div class="col-sm-6">
                    <input type="string" name="name" class="form-control">
                </div>
            </div>
            <!-- 登録商品の説明文 -->
            <div class="form-group">
                登録商品の説明文
                <div class="col-sm-6">
                    <input type="text" name="text" class="form-control">
                </div>
            </div>
            <!--　登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>


    
    
    
    
    
    

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
  </body>
</html>
