{"filter":false,"title":"2022_07_27_122850_create_images_table.php","tooltip":"/cms/database/migrations/2022_07_27_122850_create_images_table.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":16,"column":11},"end":{"row":17,"column":33},"action":"remove","lines":[" $table->id();","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":11},"end":{"row":19,"column":33},"action":"insert","lines":[" $table->bigIncrements('id');","            $table->integer('item_id');","            $table->string('name');","            $table->timestamps();"]}],[{"start":{"row":18,"column":35},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":50},"action":"insert","lines":["$table->string('img_url')->nullable();"],"id":4}],[{"start":{"row":18,"column":10},"end":{"row":18,"column":35},"action":"remove","lines":["  $table->string('name');"],"id":5},{"start":{"row":18,"column":10},"end":{"row":19,"column":0},"action":"remove","lines":["",""]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "],"id":6},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]},{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":20},"end":{"row":18,"column":26},"action":"remove","lines":["string"],"id":7},{"start":{"row":18,"column":20},"end":{"row":18,"column":27},"action":"insert","lines":["integer"]}],[{"start":{"row":17,"column":20},"end":{"row":17,"column":27},"action":"remove","lines":["integer"],"id":8},{"start":{"row":17,"column":20},"end":{"row":17,"column":26},"action":"insert","lines":["string"]}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":35},"action":"remove","lines":["item_id"],"id":9},{"start":{"row":17,"column":28},"end":{"row":17,"column":29},"action":"insert","lines":["n"]},{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"insert","lines":["a"]},{"start":{"row":17,"column":30},"end":{"row":17,"column":31},"action":"insert","lines":["m"]},{"start":{"row":17,"column":31},"end":{"row":17,"column":32},"action":"insert","lines":["e"]}],[{"start":{"row":17,"column":28},"end":{"row":17,"column":32},"action":"remove","lines":["name"],"id":10},{"start":{"row":17,"column":28},"end":{"row":17,"column":32},"action":"insert","lines":["name"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":7},"end":{"row":8,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1659146776734,"hash":"ec1c3427fdbe2c827b461bfc36ee23e29f1b1fd6"}