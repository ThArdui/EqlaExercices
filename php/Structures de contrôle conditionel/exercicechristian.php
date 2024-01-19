<?php
// l utilisateur entre un nombre
echo "entrer un nombre entre 1 et 5 qui represente l etat du pneu . ";
$number=fgets(STDIN);
// si le nombre est de 5 alors il affichera le massage suivant
if ( $number == 5 ) {
    echo " Excellente pression ";
}
// si le nombre est entre 4 et  4.9 alors il affichera le massage suivant
elseif($number >= 4 && $number < 5 ) {
    echo " bonne pression ";
}
// si le nombre est entre 3 et 3.9 alors il affichera le massage suivant
elseif ($number >= 3 && $number < 4) {
    echo " moyenne pression ";
}
// si le nombre est entre 2 et 2.9 alors il affichera le massage suivant
elseif($number >= 2 && $number < 3) {
    echo " Mauvaise pression. Veuillez gonfler vos  pneus! ";
}
// si le nombre est entre 1 et 1.9 alors il affichera le massage suivant
elseif ($number >= 1 && $number < 2) {
    echo " Pression médiocre.  Veuillez gonfler vos  pneus! ";
}
// dans le cas ou il se trompe de caractere ou de chiffre il indiquera le message suivant
else {
    echo " l entree utilise n est pas valide, veuillez entre le bon nombre ";
}
// commentaires Thomas
//pas oublier de fermer le code php avec, peut-être t'as pas copier jusque là.
// résultat voulu
// j'aurai été moins précis
// j'ai utilisé  plutôt switch
// 9/10

?>