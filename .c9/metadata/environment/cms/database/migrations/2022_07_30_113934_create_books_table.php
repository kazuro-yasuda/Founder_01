{"filter":false,"title":"2022_07_30_113934_create_books_table.php","tooltip":"/cms/database/migrations/2022_07_30_113934_create_books_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->id();","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":12},"end":{"row":21,"column":34},"action":"insert","lines":["$table->bigIncrements('id');","             $table->string('item_name');","             $table->integer('item_number');","             $table->integer('item_amount');","             $table->datetime('published');","             $table->timestamps();"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":16,"column":32},"end":{"row":16,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1659181215686,"hash":"6b756130d0dd5f3a80adb2c746d95afc9d28216f"}