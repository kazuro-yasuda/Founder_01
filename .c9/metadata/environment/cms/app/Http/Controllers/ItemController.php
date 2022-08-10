{"filter":false,"title":"ItemController.php","tooltip":"/cms/app/Http/Controllers/ItemController.php","undoManager":{"mark":46,"position":46,"stack":[[{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"remove","lines":["/"],"id":2},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":["/"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":28},"action":"insert","lines":["return view('item');"],"id":3}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":14},"action":"insert","lines":["use Validator;"],"id":5}],[{"start":{"row":4,"column":28},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":20},"action":"insert","lines":["use App\\Models\\Book;"],"id":8}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":19},"action":"remove","lines":["Book"],"id":9},{"start":{"row":5,"column":15},"end":{"row":5,"column":19},"action":"insert","lines":["Book"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":19},"action":"remove","lines":["Book"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["I"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["I"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":17},"action":"insert","lines":["It"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":17},"action":"remove","lines":["It"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":18},"action":"insert","lines":["Ite"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":18},"action":"remove","lines":["Ite"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":19},"action":"insert","lines":["Item"]}],[{"start":{"row":17,"column":28},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":46},"action":"insert","lines":["return view('books',compact('books'));"],"id":11}],[{"start":{"row":18,"column":21},"end":{"row":18,"column":26},"action":"remove","lines":["books"],"id":12},{"start":{"row":18,"column":21},"end":{"row":18,"column":25},"action":"insert","lines":["item"]}],[{"start":{"row":18,"column":25},"end":{"row":18,"column":26},"action":"insert","lines":["s"],"id":13}],[{"start":{"row":18,"column":37},"end":{"row":18,"column":42},"action":"remove","lines":["books"],"id":14},{"start":{"row":18,"column":37},"end":{"row":18,"column":41},"action":"insert","lines":["item"]}],[{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["s"],"id":15}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"insert","lines":["// "],"id":16}],[{"start":{"row":17,"column":31},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":65},"action":"insert","lines":["$books = Book::orderBy('created_at', 'asc')->paginate(3);"],"id":18}],[{"start":{"row":18,"column":9},"end":{"row":18,"column":14},"action":"remove","lines":["books"],"id":19},{"start":{"row":18,"column":9},"end":{"row":18,"column":14},"action":"insert","lines":["books"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":14},"action":"remove","lines":["books"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["い"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["い"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"insert","lines":["いt"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"remove","lines":["いt"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"insert","lines":["いて"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"remove","lines":["いて"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":12},"action":"insert","lines":["いてm"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":12},"action":"remove","lines":["いてm"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":13},"action":"insert","lines":["いてms"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":13},"action":"remove","lines":["いてms"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":12},"action":"insert","lines":["いてm"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":12},"action":"remove","lines":["いてm"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"insert","lines":["いて"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":11},"action":"remove","lines":["いて"]},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["い"]}],[{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":["い"],"id":20}],[{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"insert","lines":["i"],"id":21},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"insert","lines":["t"]},{"start":{"row":18,"column":11},"end":{"row":18,"column":12},"action":"insert","lines":["e"]},{"start":{"row":18,"column":12},"end":{"row":18,"column":13},"action":"insert","lines":["m"]},{"start":{"row":18,"column":13},"end":{"row":18,"column":14},"action":"insert","lines":["s"]}],[{"start":{"row":18,"column":17},"end":{"row":18,"column":21},"action":"remove","lines":["Book"],"id":22},{"start":{"row":18,"column":17},"end":{"row":18,"column":18},"action":"insert","lines":["I"]},{"start":{"row":18,"column":18},"end":{"row":18,"column":19},"action":"insert","lines":["t"]},{"start":{"row":18,"column":19},"end":{"row":18,"column":20},"action":"insert","lines":["e"]},{"start":{"row":18,"column":20},"end":{"row":18,"column":21},"action":"insert","lines":["m"]}],[{"start":{"row":18,"column":51},"end":{"row":18,"column":64},"action":"remove","lines":["->paginate(3)"],"id":23}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":50},"action":"remove","lines":[" 'asc'"],"id":24},{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"remove","lines":[","]}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["{"],"id":25}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"remove","lines":["{"],"id":26}],[{"start":{"row":19,"column":28},"end":{"row":19,"column":29},"action":"insert","lines":["["],"id":27}],[{"start":{"row":19,"column":29},"end":{"row":19,"column":30},"action":"insert","lines":["'"],"id":28},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["'"]}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["b"],"id":29},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["o"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["o"]}],[{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"remove","lines":["o"],"id":30},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"remove","lines":["o"]},{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"remove","lines":["b"]}],[{"start":{"row":19,"column":30},"end":{"row":19,"column":31},"action":"insert","lines":["i"],"id":31},{"start":{"row":19,"column":31},"end":{"row":19,"column":32},"action":"insert","lines":["t"]},{"start":{"row":19,"column":32},"end":{"row":19,"column":33},"action":"insert","lines":["e"]},{"start":{"row":19,"column":33},"end":{"row":19,"column":34},"action":"insert","lines":["m"]},{"start":{"row":19,"column":34},"end":{"row":19,"column":35},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":36},"end":{"row":19,"column":37},"action":"insert","lines":["="],"id":32},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":["."]}],[{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"remove","lines":["."],"id":33}],[{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":[">"],"id":34}],[{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":[" "],"id":35},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["&"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["i"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["t"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["e"]}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["m"],"id":36},{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["s"]}],[{"start":{"row":19,"column":45},"end":{"row":19,"column":46},"action":"insert","lines":["]"],"id":37}],[{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["c"],"id":38},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["o"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["m"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["p"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["a"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["c"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["t"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["("]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["'"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["i"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["t"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["e"]}],[{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["m"],"id":39},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["s"]},{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":["'"]}],[{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"remove","lines":[")"],"id":40}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["&"],"id":41}],[{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["$"],"id":42}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":[","],"id":43}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":46},"action":"insert","lines":["''"],"id":44}],[{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"insert","lines":["a"],"id":45},{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"insert","lines":["s"]},{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["c"]}],[{"start":{"row":5,"column":0},"end":{"row":5,"column":20},"action":"remove","lines":["use App\\Models\\Item;"],"id":47}],[{"start":{"row":18,"column":2},"end":{"row":19,"column":48},"action":"remove","lines":["      $items = Item::orderBy('created_at','asc');","        return view('items',['items'=> $items]);"],"id":48}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"remove","lines":["// "],"id":49}],[{"start":{"row":18,"column":2},"end":{"row":19,"column":0},"action":"remove","lines":["",""],"id":51}]]},"ace":{"folds":[],"scrolltop":519,"scrollleft":0,"selection":{"start":{"row":11,"column":41},"end":{"row":11,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":31,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1660032481449,"hash":"a8a68a5f803e2be466c51b4458a1ecf5cf65fb01"}