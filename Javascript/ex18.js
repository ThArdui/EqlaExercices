let zoulous = document.querySelectorAll(".zoulou");
for (let i=0 ; i<zoulous.length;i++)
{
    zoulous[i].style.fontWeight="bold";
}
let ShowElements=document.querySelectorAll("[hidden]")
for (let j=0;j<ShowElements.length;j++)
{
    ShowElements[j].removeAttribute("hidden")
}

let HideElements=document.querySelectorAll(".timide");
for (let h=0; h<HideElements.length;h++)
{
    HideElements[h].setAttribute("hidden","");
}