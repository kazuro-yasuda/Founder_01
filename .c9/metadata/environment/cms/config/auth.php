{"filter":false,"title":"auth.php","tooltip":"/cms/config/auth.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":3,"column":0},"end":{"row":3,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"9662be43ca01e46adecd46368794c6945d7981f9","mime":"application/octet-stream","undoManager":{"mark":-1,"position":-1,"stack":[[{"start":{"row":81,"column":33},"end":{"row":81,"column":34},"action":"remove","lines":["\\"],"id":20}],[{"start":{"row":81,"column":26},"end":{"row":81,"column":34},"action":"insert","lines":["\\Models\\"],"id":20}],[{"start":{"row":105,"column":4},"end":{"row":113,"column":0},"action":"remove","lines":["'passwords' => [","        'users' => [","            'provider' => 'users',","            'table' => 'password_resets',","            'expire' => 60,","            'throttle' => 60,","        ],","    ],",""],"id":21},{"start":{"row":105,"column":4},"end":{"row":116,"column":6},"action":"insert","lines":["'passwords' => [","        'users' => [","            'provider' => 'users',","            'table' => 'password_resets',","            'expire' => 60,","        ],","        'admins' => [ //追加","            'provider' => 'admins', //追加","            'table' => 'password_resets', //追加","            'expire' => 60, //追加","        ],","    ],"]}],[{"start":{"row":37,"column":4},"end":{"row":55,"column":6},"action":"remove","lines":["'guards' => [","        'web' => [","            'driver' => 'session',","            'provider' => 'users',","        ],","    ","        'api' => [","            'driver' => 'token',","            'provider' => 'users',","        ],","        'user' => [","            'driver' => 'session',","            'provider' => 'users',","        ],","        'admin' => [ //追加","            'driver' => 'session', //追加","            'provider' => 'admins', //追加","        ],","    ],"],"id":22},{"start":{"row":37,"column":4},"end":{"row":55,"column":6},"action":"insert","lines":[" 'guards' => [","        'web' => [","            'driver' => 'session',","            'provider' => 'users',","        ],"," ","        'api' => [","            'driver' => 'token',","            'provider' => 'users',","        ],","        'user' => [","            'driver' => 'session',","            'provider' => 'users',","        ],","        'admin' => [ //追加","            'driver' => 'session', //追加","            'provider' => 'admins', //追加","        ],","    ],"]}],[{"start":{"row":42,"column":4},"end":{"row":42,"column":6},"action":"remove","lines":["],"],"id":23},{"start":{"row":42,"column":4},"end":{"row":55,"column":6},"action":"insert","lines":["","        'api' => [","            'driver' => 'token',","            'provider' => 'users',","        ],","        'user' => [","            'driver' => 'session',","            'provider' => 'users',","        ],","        'admin' => [ //追加","            'driver' => 'session', //追加","            'provider' => 'admins', //追加","        ],","    ],"]}],[{"start":{"row":66,"column":8},"end":{"row":66,"column":9},"action":"insert","lines":[" "],"id":24},{"start":{"row":66,"column":9},"end":{"row":66,"column":10},"action":"insert","lines":[" "]},{"start":{"row":66,"column":10},"end":{"row":66,"column":11},"action":"insert","lines":[" "]},{"start":{"row":66,"column":11},"end":{"row":66,"column":12},"action":"insert","lines":[" "]}],[{"start":{"row":65,"column":8},"end":{"row":68,"column":45},"action":"remove","lines":["],","            'admins' => [ //追加","            'driver' => 'eloquent', //追加","            'model' => App\\Admin::class, //追加"],"id":25},{"start":{"row":65,"column":8},"end":{"row":69,"column":10},"action":"insert","lines":["],","        'admins' => [ //追加","            'driver' => 'eloquent', //追加","            'model' => App\\Admin::class, //追加","        ],"]}],[{"start":{"row":66,"column":8},"end":{"row":68,"column":45},"action":"insert","lines":["    'admins' => [ //追加","            'driver' => 'eloquent', //追加","            'model' => App\\Admin::class, //追加"],"id":26}],[{"start":{"row":65,"column":10},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":66,"column":0},"end":{"row":66,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["user"],"id":28},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"insert","lines":["user"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["user"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"insert","lines":["user"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["user"],"id":29},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"insert","lines":["user"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["user"],"id":30},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"insert","lines":["user"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"remove","lines":["users"],"id":6},{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"insert","lines":["users"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"remove","lines":["users"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"insert","lines":["user"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"remove","lines":["users"],"id":5},{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"insert","lines":["users"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"remove","lines":["users"],"id":4},{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"insert","lines":["users"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":23},"action":"remove","lines":["うせr"],"id":3},{"start":{"row":16,"column":20},"end":{"row":16,"column":25},"action":"insert","lines":["users"]}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":23},"action":"remove","lines":["web"],"id":2},{"start":{"row":16,"column":20},"end":{"row":16,"column":23},"action":"insert","lines":["web"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":23},"action":"remove","lines":["web"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"insert","lines":["う"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":21},"action":"remove","lines":["う"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":22},"action":"insert","lines":["うs"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":22},"action":"remove","lines":["うs"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":22},"action":"insert","lines":["うせ"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":22},"action":"remove","lines":["うせ"]},{"start":{"row":16,"column":20},"end":{"row":16,"column":23},"action":"insert","lines":["うせr"]}]]},"timestamp":1658969309024}