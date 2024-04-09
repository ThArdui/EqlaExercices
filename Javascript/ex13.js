

function Hideshowbutton() {
    let myHeading=document.getElementById("titre");
    let myButton=document.getElementById("monbutton");

    if (myHeading.style.display==="none")
    {
        myHeading.style.display="block";
        myButton.innerText="Cacher le titre!";
    }
    else
    {
        myHeading.style.display="none";
        myButton.innerText="Montrer le titre!";
    }

}

/*function Hideshowbutton()
{
let myHeadding=document.getElementById("titre");
myHeadding.style.display="none";
}*/