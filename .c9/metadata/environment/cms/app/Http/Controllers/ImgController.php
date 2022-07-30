{"filter":false,"title":"ImgController.php","tooltip":"/cms/app/Http/Controllers/ImgController.php","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":5,"column":0},"end":{"row":7,"column":27},"action":"insert","lines":["use Validator;","use Auth;","use Illuminate\\Support\\Str;"],"id":3}],[{"start":{"row":12,"column":1},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":["/"],"id":6},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"remove","lines":["/"]}],[{"start":{"row":11,"column":4},"end":{"row":16,"column":1},"action":"insert","lines":["//画像アップローダー表示","public function index(){","","    return view('img_upload');","","}"],"id":7}],[{"start":{"row":16,"column":1},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":9},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":3},"end":{"row":12,"column":4},"action":"insert","lines":[" "],"id":10},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":[" "]},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":[" "]}],[{"start":{"row":16,"column":3},"end":{"row":16,"column":4},"action":"insert","lines":[" "],"id":11},{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":[" "]},{"start":{"row":16,"column":5},"end":{"row":16,"column":6},"action":"insert","lines":[" "]}],[{"start":{"row":16,"column":8},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":17,"column":0},"end":{"row":17,"column":7},"action":"insert","lines":["       "]},{"start":{"row":17,"column":7},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":18,"column":7},"end":{"row":57,"column":1},"action":"insert","lines":["// 画像アップロード処理","public function upload(Request $request){","","   // バリデーション ","    $validator = $request->validate( [","        'img' => 'required|file|image|max:2048', ","    ]);","","    // 画像ファイル取得","    $file = $request->img;","","    // ログインユーザー取得","    $user = Auth::user();","","    if ( !empty($file) ) {","","        // ファイルの拡張子取得","        $ext = $file->guessExtension();","","        //ファイル名を生成","        $fileName = Str::random(32).'.'.$ext;","","        // 画像のファイル名を任意のDBに保存","        $user->img_url = $fileName;","        $user->save();","","        //public/uploadフォルダを作成","        $target_path = public_path('/uploads/');","","        //ファイルをpublic/uploadフォルダに移動","        $file->move($target_path,$fileName);","","    }else{","","        return redirect('/home');","    }","","    return redirect('/img');","","}"],"id":13}],[{"start":{"row":64,"column":0},"end":{"row":68,"column":1},"action":"remove","lines":["//ログインユーザーのみ使える機能にする　これを追加する！順番重要です！最初にログイン確認です。","public function __construct()","{","    $this->middleware('auth');","}"],"id":20}],[{"start":{"row":64,"column":0},"end":{"row":78,"column":1},"action":"insert","lines":["//ログインユーザーのみ使える機能にする　これを追加する！順番重要です！最初にログイン確認です。","public function __construct()","{","    $this->middleware('auth');","}","","//画像アップローダー表示","public function index(){","省略","}","","//画像アップロード処理","public function upload(Request $request){","省略","}"],"id":19}],[{"start":{"row":62,"column":1},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":18},{"start":{"row":63,"column":0},"end":{"row":64,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":21,"column":7},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":22,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":16},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":15},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":7},"end":{"row":16,"column":8},"action":"remove","lines":[" //画像アップローダー表示","       public function index(){","    ","        return view('img_upload');","    ","       }"],"id":14},{"start":{"row":11,"column":7},"end":{"row":20,"column":1},"action":"insert","lines":["//画像アップローダー表示","public function index(){","","     $user = Auth::user();","","    return view('img_upload',[","        'user'=>$user","        ]);","","}"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":33},"end":{"row":14,"column":33},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":30,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1659014383203,"hash":"8b2b2fde03ccb911add8bb85234b770915d6d187"}