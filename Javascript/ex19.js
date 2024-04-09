let myButton=document.getElementById("monBouton");
myButton.addEventListener("click",buttonClicked);


function buttonClicked()
{
    if (myButton.innerText==="Pas cliqué")
    {
        myButton.innerText="Cliqué"
    }
    else
    {
        myButton.innerText="Pas cliqué"
    }
}