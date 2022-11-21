setTimeout(spinner,3200);
function spinner(){
document.querySelector("#spinner").style.display="none";
}
setTimeout(mvalue,500,25);
setTimeout(mvalue,2000,50);
setTimeout(mvalue,3000,100);
function mvalue(value){
let a = document.querySelector(".meter");
    a.value=value;
}
