{"filter":false,"title":"2022_08_14_125142_create_item_unite_table.php","tooltip":"/cms/database/migrations/2022_08_14_125142_create_item_unite_table.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":16,"column":11},"end":{"row":17,"column":33},"action":"remove","lines":[" $table->id();","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":11},"end":{"row":24,"column":0},"action":"insert","lines":["$table->bigIncrements('id');","            $table->unsignedBigInteger('unite_id');","            $table->unsignedBigInteger('item_id');","            $table->foreign('unite_id')->references('id')->on('units')->onDelete('cascade'); //外部キー参照","            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade'); //外部キー参照","            $table->unique(['unite_id', 'item_id'],'uq_roles'); //Laravelは複合主キーが扱いにくいのでユニークで代用","            $table->timestamps();","        });",""]}],[{"start":{"row":16,"column":9},"end":{"row":16,"column":10},"action":"insert","lines":[" "],"id":3}],[{"start":{"row":23,"column":3},"end":{"row":24,"column":0},"action":"remove","lines":["     });",""],"id":5}]]},"ace":{"folds":[],"scrolltop":150,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":37,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":8,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1660481585214,"hash":"c0db536ffe0681f1ca1d1bf1250440bcdb1c8b83"}