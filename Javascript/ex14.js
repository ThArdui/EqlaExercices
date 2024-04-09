modifierTitres();
function modifierTitres()
{
    let headingsPage=document.getElementsByTagName("h2");
    for (let i=0; i<headingsPage.length;i++)
    {
        headingsPage[i].innerHTML=" Titre 2 modifié!";
    }
}