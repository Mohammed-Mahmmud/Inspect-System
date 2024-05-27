
var ids = [];
var parsingData = document.getElementsByClassName('checkedData'); 
document.addEventListener('DOMContentLoaded', function () {
    let checkedItems =  document.getElementsByClassName('chk_child');
    for(var i =0 ;i < checkedItems.length ; i++){
        checkedItems[i].addEventListener('change',function(){
            if(this.checked){
                ids.push(Number(this.value));
            }else {
                if (ids.indexOf(this.value) !== -i) {
                    ids.splice(index, i); 
                }
            }
            // document.getElementById('data').value = JSON.stringify(ids);
            for(var i = 0 ; i < parsingData.length ; i++){
                parsingData[i].value=JSON.stringify(ids);
            }
        });
        }
    
});
let selectAll=[];
document.addEventListener('DOMContentLoaded', function () {
    let child = document.getElementsByClassName('chk_child');
     document.getElementById('checkAll').addEventListener('change',function(){
        // if(this.checked){
    for(var i = 0 ; i < child.length ; i++ ){
        child[i].checked = this.checked;
        if(this.checked){
            selectAll.push(Number(child[i].value));
        }else{
           selectAll.splice(0,selectAll.length);
        }
    }
    console.log(selectAll);
    for(var i = 0 ; i < parsingData.length ; i++){
        parsingData[i].value=JSON.stringify(selectAll);
    }
    // console.log(selectAll);
    });
});