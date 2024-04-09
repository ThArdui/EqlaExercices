let monFormulaire=document.getElementById("myform")
let Mails=[];
monFormulaire.addEventListener('submit',

    function (e) {
e.preventDefault()
    let mail=document.getElementById('mail').value;

  let mailsUsers={mail};
  Mails.push(mailsUsers);console.log(Mails);
    }
    )
