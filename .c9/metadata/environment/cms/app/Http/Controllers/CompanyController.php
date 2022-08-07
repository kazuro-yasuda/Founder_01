{"filter":false,"title":"CompanyController.php","tooltip":"/cms/app/Http/Controllers/CompanyController.php","undoManager":{"mark":35,"position":35,"stack":[[{"start":{"row":5,"column":28},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":9,"column":1},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":[" public function __construct()","    {","        $this->category = new Category();","    }"],"id":5}],[{"start":{"row":14,"column":5},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":4},"end":{"row":16,"column":0},"action":"insert","lines":["",""]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":15},"end":{"row":13,"column":23},"action":"remove","lines":["category"],"id":7},{"start":{"row":13,"column":15},"end":{"row":13,"column":16},"action":"insert","lines":["c"]},{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["o"]},{"start":{"row":13,"column":17},"end":{"row":13,"column":18},"action":"insert","lines":["m"]},{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["p"]},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["a"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["n"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["y"]}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":37},"action":"remove","lines":["Category"],"id":8},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["C"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["o"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":["m"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["p"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["a"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["n"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["y"]}],[{"start":{"row":32,"column":3},"end":{"row":35,"column":5},"action":"remove","lines":[" public function create()","    {","        //","    }"],"id":9},{"start":{"row":32,"column":3},"end":{"row":36,"column":5},"action":"insert","lines":[" public function create(Request $request)","    {","        $categories = $this->category->get();","        return view('book.create', compact('categories'));","    }"]}],[{"start":{"row":34,"column":18},"end":{"row":34,"column":19},"action":"remove","lines":["s"],"id":10},{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"remove","lines":["e"]},{"start":{"row":34,"column":16},"end":{"row":34,"column":17},"action":"remove","lines":["i"]},{"start":{"row":34,"column":15},"end":{"row":34,"column":16},"action":"remove","lines":["r"]},{"start":{"row":34,"column":14},"end":{"row":34,"column":15},"action":"remove","lines":["o"]},{"start":{"row":34,"column":13},"end":{"row":34,"column":14},"action":"remove","lines":["g"]},{"start":{"row":34,"column":12},"end":{"row":34,"column":13},"action":"remove","lines":["e"]},{"start":{"row":34,"column":11},"end":{"row":34,"column":12},"action":"remove","lines":["t"]},{"start":{"row":34,"column":10},"end":{"row":34,"column":11},"action":"remove","lines":["a"]},{"start":{"row":34,"column":9},"end":{"row":34,"column":10},"action":"remove","lines":["c"]}],[{"start":{"row":34,"column":9},"end":{"row":34,"column":10},"action":"insert","lines":["c"],"id":11},{"start":{"row":34,"column":10},"end":{"row":34,"column":11},"action":"insert","lines":["o"]},{"start":{"row":34,"column":11},"end":{"row":34,"column":12},"action":"insert","lines":["m"]},{"start":{"row":34,"column":12},"end":{"row":34,"column":13},"action":"insert","lines":["p"]},{"start":{"row":34,"column":13},"end":{"row":34,"column":14},"action":"insert","lines":["a"]},{"start":{"row":34,"column":14},"end":{"row":34,"column":15},"action":"insert","lines":["n"]},{"start":{"row":34,"column":15},"end":{"row":34,"column":16},"action":"insert","lines":["i"]},{"start":{"row":34,"column":16},"end":{"row":34,"column":17},"action":"insert","lines":["e"]},{"start":{"row":34,"column":17},"end":{"row":34,"column":18},"action":"insert","lines":["s"]}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":36},"action":"remove","lines":["category"],"id":12},{"start":{"row":34,"column":28},"end":{"row":34,"column":29},"action":"insert","lines":["c"]},{"start":{"row":34,"column":29},"end":{"row":34,"column":30},"action":"insert","lines":["o"]},{"start":{"row":34,"column":30},"end":{"row":34,"column":31},"action":"insert","lines":["m"]}],[{"start":{"row":34,"column":28},"end":{"row":34,"column":31},"action":"remove","lines":["com"],"id":13},{"start":{"row":34,"column":28},"end":{"row":34,"column":35},"action":"insert","lines":["company"]}],[{"start":{"row":35,"column":44},"end":{"row":35,"column":52},"action":"remove","lines":["categori"],"id":14},{"start":{"row":35,"column":44},"end":{"row":35,"column":45},"action":"insert","lines":["c"]},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"insert","lines":["o"]},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"insert","lines":["m"]},{"start":{"row":35,"column":47},"end":{"row":35,"column":48},"action":"insert","lines":["p"]},{"start":{"row":35,"column":48},"end":{"row":35,"column":49},"action":"insert","lines":["a"]},{"start":{"row":35,"column":49},"end":{"row":35,"column":50},"action":"insert","lines":["n"]},{"start":{"row":35,"column":50},"end":{"row":35,"column":51},"action":"insert","lines":["i"]},{"start":{"row":35,"column":51},"end":{"row":35,"column":52},"action":"insert","lines":["e"]},{"start":{"row":35,"column":52},"end":{"row":35,"column":53},"action":"insert","lines":["s"]}],[{"start":{"row":35,"column":53},"end":{"row":35,"column":54},"action":"remove","lines":["e"],"id":15}],[{"start":{"row":35,"column":52},"end":{"row":35,"column":53},"action":"remove","lines":["s"],"id":16}],[{"start":{"row":35,"column":21},"end":{"row":35,"column":32},"action":"remove","lines":["book.create"],"id":17},{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":["i"]},{"start":{"row":35,"column":22},"end":{"row":35,"column":23},"action":"insert","lines":["t"]},{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":["e"]},{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"insert","lines":["m"]},{"start":{"row":35,"column":25},"end":{"row":35,"column":26},"action":"insert","lines":["s"]}],[{"start":{"row":34,"column":7},"end":{"row":36,"column":5},"action":"remove","lines":[" $companies = $this->company->get();","        return view('items', compact('companies'));","    }"],"id":20}],[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":["/"],"id":21},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":24,"column":8},"end":{"row":26,"column":5},"action":"insert","lines":[" $companies = $this->company->get();","        return view('items', compact('companies'));","    }"],"id":22}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"remove","lines":["}"],"id":23}],[{"start":{"row":37,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":["}"],"id":24}],[{"start":{"row":37,"column":0},"end":{"row":37,"column":1},"action":"insert","lines":[" "],"id":25},{"start":{"row":37,"column":1},"end":{"row":37,"column":2},"action":"insert","lines":[" "]},{"start":{"row":37,"column":2},"end":{"row":37,"column":3},"action":"insert","lines":[" "]}],[{"start":{"row":34,"column":35},"end":{"row":34,"column":43},"action":"remove","lines":["$request"],"id":26}],[{"start":{"row":34,"column":27},"end":{"row":34,"column":35},"action":"remove","lines":["Request "],"id":27}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":34},"action":"insert","lines":["Game::all();"],"id":28}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":26},"action":"remove","lines":["Game"],"id":29},{"start":{"row":24,"column":22},"end":{"row":24,"column":23},"action":"insert","lines":["C"]},{"start":{"row":24,"column":23},"end":{"row":24,"column":24},"action":"insert","lines":["o"]},{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["m"]},{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"insert","lines":["p"]},{"start":{"row":24,"column":26},"end":{"row":24,"column":27},"action":"insert","lines":["a"]},{"start":{"row":24,"column":27},"end":{"row":24,"column":28},"action":"insert","lines":["n"]},{"start":{"row":24,"column":28},"end":{"row":24,"column":29},"action":"insert","lines":["y"]}],[{"start":{"row":24,"column":22},"end":{"row":24,"column":29},"action":"remove","lines":["Company"],"id":30},{"start":{"row":24,"column":22},"end":{"row":24,"column":29},"action":"insert","lines":["Company"]}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["$"],"id":31},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["t"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["h"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["i"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["s"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["-"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":[">"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["c"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["o"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["m"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["p"]}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["a"],"id":32},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["n"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["y"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["-"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":[">"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["g"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["e"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":["t"]},{"start":{"row":24,"column":37},"end":{"row":24,"column":39},"action":"remove","lines":["()"]}],[{"start":{"row":24,"column":37},"end":{"row":24,"column":38},"action":"remove","lines":[";"],"id":33}],[{"start":{"row":25,"column":7},"end":{"row":25,"column":8},"action":"insert","lines":[" "],"id":34}],[{"start":{"row":25,"column":27},"end":{"row":25,"column":28},"action":"insert","lines":["_"],"id":35},{"start":{"row":25,"column":28},"end":{"row":25,"column":29},"action":"insert","lines":["a"]},{"start":{"row":25,"column":29},"end":{"row":25,"column":30},"action":"insert","lines":["d"]},{"start":{"row":25,"column":30},"end":{"row":25,"column":31},"action":"insert","lines":["m"]},{"start":{"row":25,"column":31},"end":{"row":25,"column":32},"action":"insert","lines":["i"]},{"start":{"row":25,"column":32},"end":{"row":25,"column":33},"action":"insert","lines":["n"]}],[{"start":{"row":22,"column":26},"end":{"row":22,"column":42},"action":"insert","lines":["Request $request"],"id":36}],[{"start":{"row":11,"column":3},"end":{"row":15,"column":4},"action":"remove","lines":["  public function __construct()","    {","        $this->company = new Company();","    }","    "],"id":37}],[{"start":{"row":19,"column":5},"end":{"row":22,"column":4},"action":"remove","lines":["","         $companies = Company::all();","         return view('items_admin', compact('companies'));","    "],"id":38}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":42},"action":"remove","lines":["Request $request"],"id":39}],[{"start":{"row":20,"column":5},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":42,"scrollleft":0,"selection":{"start":{"row":8,"column":42},"end":{"row":8,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1659858794585,"hash":"a85fa4da0f02ebdd7d5fe961a2d1fa097c1faca1"}