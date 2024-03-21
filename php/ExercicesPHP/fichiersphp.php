
<?php
$filePath="C:\Users\\thoma\Desktop\\traitementfichier.txt";
$openMode="r";
$handle=fopen($filePath,$openMode);

if ($handle)
{
    echo "Fichier ouvert avec succès <br>";
}

else
{
    echo "Impossible d'ouvrir le fichier";
}
//lecture ligne par ligne
while ($line=fgets($handle))
{
    echo $line."<br>";
}

//utilisation de file_get_content
$content=file_get_contents($filePath);
echo "<br> "."Ici j'utilise file_get_contents".$content;

// écriture dans un fichier
$openModeW="w";

$handlew=fopen($filePath,$openModeW);

if ($handlew)
{
    $text="Nouveau contenu";
    fwrite($handlew,$text);
    echo "Ecriture fichier réussie!";
}
else
{
    echo "Ecriture dans le fichier impossible!";
}
?>