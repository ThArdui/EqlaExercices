modifierTitresAvance()
function modifierTitresAvance()
{
    let headingsPageTwo=document.getElementsByTagName("h2");
    for (let i=0; i<headingsPageTwo.length;i++)
    {
        headingsPageTwo[i].innerHTML=" Titre 2 modifié!";
    }
    let headingsPageThree=document.getElementsByTagName("h3")
    for (let j=0;j<headingsPageThree.length;j++)
    {
        headingsPageThree[j].style.color="red";
    }

}