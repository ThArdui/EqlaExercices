let kindButon=document.getElementById("btn_kind");
kindButon.addEventListener("mouseover",function (){
    kindButon.style.opacity="0" });
let kindButonB=document.getElementById("btn_kind");
kindButonB.addEventListener("mouseout",function (){
    kindButonB.style.opacity="1" });
let meanButton=document.getElementById("btn_mean");
meanButton.addEventListener("click",function (){ let infoDiv=document.getElementById("info"); infoDiv.removeAttribute("hidden") });


