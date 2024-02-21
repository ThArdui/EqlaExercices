<?php

declare(strict_types = 1);

//géo
$t1q1="Quels  sont les deux pays les plus peuplé au monde ?\n Tapez 1 pour Chine & Inde \n 2 pour Russie a&  Brésil \n 3 pour Canada & USA\n 4 pour Australie & Mexique" ;
$t1r1=1;

$t1q2="Sur quoi se bases-t-on pour exprimer la gravité d’un tremblement de terre ?\n Tapez 1 pour Echelle de Bristol \n 2 pour échelle de Katz\n 3 pour échelle de Richter \n 4 pur échelle de Mendeleiev ";
$t1r2=3;

$t1q3="Quel est le sommet le plus élevé au monde ?\n Tapez 1 pour Aconcagua \n 2 pour Everest \n 3 pour Denali \n 4 pour Kilimandjaro";
$t1r3=2;

//histoire
$t2q1="Quelle était la capitale de l'Empire romain à son apogée?\n Tapez 1 pour Carthage \n 2 pour Athènes\n 3 pour Rome\n 4 pour  Alexandrie";
$t2r1=3;

$t2q2="Quel événement a marqué la fin de la Seconde Guerre mondiale en Europe en 1945?\n Tapez 1 pour 1 le bombardement de Pearl Harbor \n 2 pour la bataille de Stalingrad \n 3 pour  le Débarquement de Normandie \n 4 pour la capitulation de l'Allemagne  ";
$t2r2=4;

$t2q3="Quel événement a marqué le début de la Révolution française en 1789??\n Tapez 1 pour prise de la Bastille  \n 2 pour la guillotine \n 3 pour La Déclaration des droits de l'homme et du citoyen   \n 4 pour l 'exécution de Louis XVI  ";
$t2r3=1;
//bière
$t3q1=" Quelle est la principale céréale utilisée dans la fabrication de la bière?\n Tapez 1 pour l'avoine \n 2  pour  l'orge \n 3 pour le riz\n 4 pour le blé";
$t3r1=2;
$t3q2= "Quelle est la signification de l'IPA, un style populaire de bière artisanale?\n Tapez 1 pour International Pale Ale \n 2  pour Irish Pale Ale  \n 3 pour Indian Pale Ale \n 4 pour Italian Pale Ale";
$t3r2=3;

$t3q3="Quel pays est réputé pour sa tradition brassicole, en particulier pour ses bières trappistes?\n Tapez 1 pour la Belgique \n 2  pour l' Allemagne  \n 3 pour les Etats-Unis \n 4 pour le Mexique";
$t3r3=1;

$choice = 0;
$score = 125;

function AskQuestion (string $_question,int $_good):bool
{
    global $score;
    $_choice = intval(fgets(STDIN));

    if ($_choice==$_good)
    {
        $score = $score*2;
        echo "Bonne réponse, vos gains sont de " . $score . " euros. \n";
        return false;
    }
    elseif ($_choice==1 || $_choice==2 || $_choice==3 || $_choice==4)
    {
        $score = $score*0;
        echo "Mauvaise réponse, vous avez perdu. Vous avez " . $score . " euros. \n" ;
        return true;
    }
    else 
    {
        echo "Erreur, veuillez répondre soit 1, soit 2, soit 3, soit 4. \n";
        return AskQuestion($_question,$_good);
    }
}


do {
    if (AskQuestion($q1,$r1))
    {
        break;
    }
    //readline("Tapez 1 si")
    echo "tapez 1 si";
    $stop =trim(fgets(STDIN));
    if (AskQuestion($q2,$r2))
    {
        break;
    }
    if (AskQuestion($q3,$r3))
    {
        break;
    }

    break;
} while(true);

?>