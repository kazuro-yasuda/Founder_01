{"changed":true,"filter":false,"title":"app.blade.php","tooltip":"/cms/resources/views/layouts/app.blade.php","value":"<!doctype html>\n<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">\n<head>\n    <meta charset=\"utf-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n\n    <!-- CSRF Token -->\n    <meta name=\"csrf-token\" content=\"{{ csrf_token() }}\">\n\n    <title>{{ config('app.name', 'Laravel') }}</title>\n\n    <!-- Scripts -->\n    <script src=\"{{ asset('js/app.js') }}\" defer></script>\n\n    <!-- Fonts -->\n    <link rel=\"dns-prefetch\" href=\"//fonts.gstatic.com\">\n    <link href=\"https://fonts.googleapis.com/css?family=Nunito\" rel=\"stylesheet\">\n\n    <!-- Styles -->\n    <link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">\n    <link href=\"{{ asset('css/items_ranking.css') }}\" rel=\"stylesheet\">\n    \n</head>\n<body>\n    <div id=\"app\">\n        <nav class=\"navbar navbar-expand-md navbar-light bg-white shadow-sm\">\n            <div class=\"container\">\n                \n                <a class=\"navbar-brand\" href=\"{{ url('/categories') }}\">\n                    {{ config('app.name', 'Founder') }}\n                </a>\n                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"{{ __('Toggle navigation') }}\">\n                    <span class=\"navbar-toggler-icon\"></span>\n                </button>\n\n                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">\n                    <!-- Left Side Of Navbar -->\n                    <ul class=\"navbar-nav me-auto\">\n\n                    </ul>\n\n                    <!-- Right Side Of Navbar -->\n                    <ul class=\"navbar-nav ms-auto\">\n                        <!-- Authentication Links -->\n                        @guest\n                            @if (Route::has('login'))\n                                <li class=\"nav-item\">\n                                    <a class=\"nav-link\" href=\"{{ route('login') }}\">{{ __('ログイン') }}</a>\n                                </li>\n                            @endif\n\n                            @if (Route::has('register'))\n                                <li class=\"nav-item\">\n                                    <a class=\"nav-link\" href=\"{{ route('register') }}\">{{ __('新規登録') }}</a>\n                                </li>\n                            @endif\n                        @else\n                            <li class=\"nav-item dropdown\">\n                                <a id=\"navbarDropdown\" class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" v-pre>\n                                    {{ Auth::user()->name }}\n                                </a>\n\n                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">\n                                    <a class=\"dropdown-item\" href=\"{{ route('logout') }}\"\n                                       onclick=\"event.preventDefault();\n                                                     document.getElementById('logout-form').submit();\">\n                                        {{ __('Logout') }}\n                                    </a>\n\n                                    <form id=\"logout-form\" action=\"{{ route('logout') }}\" method=\"POST\" class=\"d-none\">\n                                        @csrf\n                                    </form>\n                                </div>\n                            </li>\n                        @endguest\n                    </ul>\n                </div>\n            </div>\n        </nav>\n\n        <main class=\"py-4\">\n            @yield('content')\n        </main>\n    </div>\n    \n    \n    \n    <!--フッター-->\n  <nav class=\"navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark\">\n  <div class=\"container-fluid\">\n    <a class=\"navbar-brand\" href=\"/\">Founder</a>\n    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n      <span class=\"navbar-toggler-icon\"></span>\n    </button>\n    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">\n      <ul class=\"navbar-nav\">\n      \n        <li class=\"nav-item\">\n          <a class=\"nav-link\" href=\"#\">会社概要</a>\n        </li>\n            <li class=\"nav-item\">\n          <a class=\"nav-link\" href=\"#\">利用規約</a>\n        </li>\n            <li class=\"nav-item\">\n          <a class=\"nav-link\" href=\"#\">お問合せ</a>\n        </li>\n            \n      </ul>\n      <a class=\"navbar-brand ms-auto bd-highlight\">2022 Founder All Rights Reserved.</a>\n    \n    </div>\n  </div>\n</nav>\n\n\n    <!--bootstrap-->\n    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>\n    \n</body>\n</html>\n","undoManager":{"mark":46,"position":46,"stack":[[{"start":{"row":44,"column":91},"end":{"row":44,"column":96},"action":"remove","lines":["Login"],"id":22},{"start":{"row":44,"column":91},"end":{"row":44,"column":96},"action":"insert","lines":["Login"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":96},"action":"remove","lines":["Login"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":92},"action":"insert","lines":["r"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":92},"action":"remove","lines":["r"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":92},"action":"insert","lines":["ろ"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":92},"action":"remove","lines":["ろ"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":93},"action":"insert","lines":["ろg"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":93},"action":"remove","lines":["ろg"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":93},"action":"insert","lines":["ろぐ"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":93},"action":"remove","lines":["ろぐ"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":94},"action":"insert","lines":["ろぐい"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":94},"action":"remove","lines":["ろぐい"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"insert","lines":["ろぐいn"]}],[{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"remove","lines":["ろぐいn"],"id":23},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"insert","lines":["ログイン"]}],[{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"remove","lines":["ログイン"],"id":24},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"insert","lines":["ログイン"]}],[{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"remove","lines":["ログイン"],"id":25},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"insert","lines":["ログイン"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"remove","lines":["ログイン"]},{"start":{"row":44,"column":91},"end":{"row":44,"column":95},"action":"insert","lines":["ログイン"]}],[{"start":{"row":50,"column":94},"end":{"row":50,"column":102},"action":"remove","lines":["Register"],"id":26},{"start":{"row":50,"column":94},"end":{"row":50,"column":102},"action":"insert","lines":["Register"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":102},"action":"remove","lines":["Register"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":95},"action":"insert","lines":["s"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":95},"action":"remove","lines":["s"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":96},"action":"insert","lines":["sh"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":96},"action":"remove","lines":["sh"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":95},"action":"insert","lines":["し"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":95},"action":"remove","lines":["し"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":96},"action":"insert","lines":["しn"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":96},"action":"remove","lines":["しn"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":97},"action":"insert","lines":["しんk"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":97},"action":"remove","lines":["しんk"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":97},"action":"insert","lines":["しんき"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":97},"action":"remove","lines":["しんき"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"insert","lines":["しんきt"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"remove","lines":["しんきt"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"insert","lines":["しんきと"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"remove","lines":["しんきと"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":99},"action":"insert","lines":["しんきとう"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":99},"action":"remove","lines":["しんきとう"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":100},"action":"insert","lines":["しんきとうr"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":100},"action":"remove","lines":["しんきとうr"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":100},"action":"insert","lines":["しんきとうろ"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":100},"action":"remove","lines":["しんきとうろ"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":101},"action":"insert","lines":["しんきとうろk"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":101},"action":"remove","lines":["しんきとうろk"]},{"start":{"row":50,"column":94},"end":{"row":50,"column":101},"action":"insert","lines":["しんきとうろく"]}],[{"start":{"row":50,"column":94},"end":{"row":50,"column":101},"action":"remove","lines":["しんきとうろく"],"id":27},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"insert","lines":["新規登録"]}],[{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"remove","lines":["新規登録"],"id":28},{"start":{"row":50,"column":94},"end":{"row":50,"column":98},"action":"insert","lines":["新規登録"]}],[{"start":{"row":80,"column":10},"end":{"row":81,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":81,"column":4},"end":{"row":123,"column":4},"action":"insert","lines":["<!--フッター-->","   <footer class=\"container\">","      <p class=\"float-end\"><a href=\"#\">Back to top</a></p>","      <p>2022 Founder All Rights Reserved.</p>","      <p>","        <a href=\"#\">会社概要</a>","        &middot; ","        <a href=\"#\">利用規約</a>","        &middot;","        <a href=\"#\">お問合せ</a>","      </p>","   </footer>","   ","  <nav class=\"navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark\">","  <div class=\"container-fluid\">","    <a class=\"navbar-brand\" href=\"#\">Founder</a>","    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">","      <span class=\"navbar-toggler-icon\"></span>","    </button>","    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">","      <ul class=\"navbar-nav\">","      ","        <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"#\">会社概要</a>","        </li>","            <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"#\">利用規約</a>","        </li>","            <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"#\">お問合せ</a>","        </li>","            ","      </ul>","      <a class=\"navbar-brand ms-auto bd-highlight\">2022 Founder All Rights Reserved.</a>","    ","    </div>","  </div>","</nav>","","","    <!--bootstrap-->","    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>","    "],"id":47}],[{"start":{"row":80,"column":10},"end":{"row":81,"column":0},"action":"insert","lines":["",""],"id":48},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":83,"column":3},"end":{"row":93,"column":12},"action":"remove","lines":["<footer class=\"container\">","      <p class=\"float-end\"><a href=\"#\">Back to top</a></p>","      <p>2022 Founder All Rights Reserved.</p>","      <p>","        <a href=\"#\">会社概要</a>","        &middot; ","        <a href=\"#\">利用規約</a>","        &middot;","        <a href=\"#\">お問合せ</a>","      </p>","   </footer>"],"id":49},{"start":{"row":83,"column":3},"end":{"row":84,"column":3},"action":"remove","lines":["","   "]}],[{"start":{"row":83,"column":2},"end":{"row":83,"column":3},"action":"remove","lines":[" "],"id":50}],[{"start":{"row":83,"column":2},"end":{"row":84,"column":0},"action":"remove","lines":["",""],"id":51}],[{"start":{"row":83,"column":1},"end":{"row":83,"column":2},"action":"remove","lines":[" "],"id":52},{"start":{"row":83,"column":0},"end":{"row":83,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":85,"column":34},"end":{"row":85,"column":35},"action":"remove","lines":["#"],"id":53}],[{"start":{"row":85,"column":34},"end":{"row":85,"column":35},"action":"insert","lines":["."],"id":59},{"start":{"row":85,"column":35},"end":{"row":85,"column":36},"action":"insert","lines":["."]},{"start":{"row":85,"column":36},"end":{"row":85,"column":37},"action":"insert","lines":["/"]},{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"insert","lines":["c"]}],[{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"insert","lines":["T"],"id":60},{"start":{"row":85,"column":39},"end":{"row":85,"column":40},"action":"insert","lines":["G"]}],[{"start":{"row":85,"column":39},"end":{"row":85,"column":40},"action":"remove","lines":["G"],"id":61},{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"remove","lines":["T"]}],[{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"insert","lines":["E"],"id":62}],[{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"remove","lines":["E"],"id":63}],[{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"insert","lines":["A"],"id":64}],[{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"remove","lines":["A"],"id":65},{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"remove","lines":["c"]}],[{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"insert","lines":["a"],"id":66}],[{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"remove","lines":["a"],"id":67}],[{"start":{"row":85,"column":37},"end":{"row":85,"column":38},"action":"insert","lines":["c"],"id":68},{"start":{"row":85,"column":38},"end":{"row":85,"column":39},"action":"insert","lines":["a"]}],[{"start":{"row":85,"column":37},"end":{"row":85,"column":39},"action":"remove","lines":["ca"],"id":69},{"start":{"row":85,"column":37},"end":{"row":85,"column":47},"action":"insert","lines":["categories"]}],[{"start":{"row":85,"column":34},"end":{"row":85,"column":35},"action":"remove","lines":["."],"id":70}],[{"start":{"row":85,"column":34},"end":{"row":85,"column":35},"action":"remove","lines":["."],"id":71}],[{"start":{"row":85,"column":35},"end":{"row":85,"column":45},"action":"remove","lines":["categories"],"id":106}],[{"start":{"row":25,"column":55},"end":{"row":25,"column":56},"action":"insert","lines":["c"],"id":107},{"start":{"row":25,"column":56},"end":{"row":25,"column":57},"action":"insert","lines":["a"]},{"start":{"row":25,"column":57},"end":{"row":25,"column":58},"action":"insert","lines":["t"]},{"start":{"row":25,"column":58},"end":{"row":25,"column":59},"action":"insert","lines":["e"]}],[{"start":{"row":25,"column":59},"end":{"row":25,"column":60},"action":"insert","lines":["g"],"id":108},{"start":{"row":25,"column":60},"end":{"row":25,"column":61},"action":"insert","lines":["o"]},{"start":{"row":25,"column":61},"end":{"row":25,"column":62},"action":"insert","lines":["r"]},{"start":{"row":25,"column":62},"end":{"row":25,"column":63},"action":"insert","lines":["i"]},{"start":{"row":25,"column":63},"end":{"row":25,"column":64},"action":"insert","lines":["e"]},{"start":{"row":25,"column":64},"end":{"row":25,"column":65},"action":"insert","lines":["s"]}],[{"start":{"row":24,"column":35},"end":{"row":25,"column":16},"action":"insert","lines":["","                "],"id":109}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"insert","lines":["i"],"id":110},{"start":{"row":25,"column":17},"end":{"row":25,"column":18},"action":"insert","lines":["m"]},{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["g"]}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["g"],"id":111},{"start":{"row":25,"column":17},"end":{"row":25,"column":18},"action":"remove","lines":["m"]},{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"remove","lines":["i"]}],[{"start":{"row":27,"column":43},"end":{"row":27,"column":50},"action":"remove","lines":["Laravel"],"id":143},{"start":{"row":27,"column":43},"end":{"row":27,"column":44},"action":"insert","lines":["F"]},{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["O"]},{"start":{"row":27,"column":45},"end":{"row":27,"column":46},"action":"insert","lines":["u"]},{"start":{"row":27,"column":46},"end":{"row":27,"column":47},"action":"insert","lines":["n"]},{"start":{"row":27,"column":47},"end":{"row":27,"column":48},"action":"insert","lines":["d"]},{"start":{"row":27,"column":48},"end":{"row":27,"column":49},"action":"insert","lines":["e"]},{"start":{"row":27,"column":49},"end":{"row":27,"column":50},"action":"insert","lines":["r"]}],[{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"remove","lines":["O"],"id":234}],[{"start":{"row":27,"column":44},"end":{"row":27,"column":45},"action":"insert","lines":["o"],"id":235}],[{"start":{"row":27,"column":43},"end":{"row":27,"column":50},"action":"remove","lines":["Founder"],"id":236},{"start":{"row":27,"column":43},"end":{"row":27,"column":50},"action":"insert","lines":["Founder"]}],[{"start":{"row":19,"column":61},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":237},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":61},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":238},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":61},"action":"insert","lines":["<link href=\"{{ asset('css/app.css') }}\" rel=\"stylesheet\">"],"id":239}],[{"start":{"row":20,"column":30},"end":{"row":20,"column":33},"action":"remove","lines":["app"],"id":240},{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"insert","lines":["i"]},{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["t"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["e"]},{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["m"]},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["s"]},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["?"]},{"start":{"row":20,"column":36},"end":{"row":20,"column":37},"action":"insert","lines":["r"]},{"start":{"row":20,"column":37},"end":{"row":20,"column":38},"action":"insert","lines":["a"]}],[{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["n"],"id":241},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["k"]},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":["i"]},{"start":{"row":20,"column":41},"end":{"row":20,"column":42},"action":"insert","lines":["n"]},{"start":{"row":20,"column":42},"end":{"row":20,"column":43},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"remove","lines":["?"],"id":242}],[{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["_"],"id":243}],[{"start":{"row":20,"column":30},"end":{"row":20,"column":43},"action":"remove","lines":["items_ranking"],"id":244},{"start":{"row":20,"column":30},"end":{"row":20,"column":43},"action":"insert","lines":["items_ranking"]}],[{"start":{"row":83,"column":10},"end":{"row":84,"column":0},"action":"insert","lines":["",""],"id":245},{"start":{"row":84,"column":0},"end":{"row":84,"column":4},"action":"insert","lines":["    "]},{"start":{"row":84,"column":4},"end":{"row":85,"column":0},"action":"insert","lines":["",""]},{"start":{"row":85,"column":0},"end":{"row":85,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":263},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":18,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["<!--bootstrap-->","    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>","    "],"id":263}],[{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":264}],[{"start":{"row":115,"column":4},"end":{"row":117,"column":4},"action":"remove","lines":["<!--bootstrap-->","    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>","    "],"id":265}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":65},"end":{"row":20,"column":65},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1660367035076}