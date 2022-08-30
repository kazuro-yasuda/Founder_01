function onchange(){
    
    var inputs = document.querySelectorAll('input[type=checkbox]');
    console.log(inputs);
   
     //　①チェックが入ったら気になるボタンのhiddenにitem_idが追加される
    
    // document.getElementById("hidden_item").value = "item_id";
    // console.log("test");

    // 　②上記で取得した値(item_id)を、比較ボタンのhidden(items[])に追加する
    //  document.getElementById("compare_item").value= "item_id";
     
   　  
}

//console.log("testtest");

var inputs = document.querySelectorAll('input[type=checkbox]');
document.getElementById('compare').onclick = function(){
    let array=[]
     for(var i=0; i<inputs.length; i++) {
         if(inputs[i].checked){
         // console.log(inputs[i].value) ; 
           array.push(inputs[i].value)
         }
         
     }
     console.log(array);
     console.log(array.join(","));
     
     document.getElementById('compare_item').value = array.join(",")
     
}

console.log(inputs);
//console.log("testtest2");
    
    
    
// function onchange() {
    
//     let element;
//     if(document.getElementById("checkbox").checked) {

//   　　　  // チェックが入っていたら、「比較画面」への送信ボタンのdisabledを外す
//         element = document.getElementById("compare");
//         element.disabled = false;
        
//     }else {
//         // チェックが外れていたら、「比較画面」への送信ボタンにdisabledを付ける
//         element = document.getElementById("compare");
//         element.disabled = true;
//     } 
  
// }


