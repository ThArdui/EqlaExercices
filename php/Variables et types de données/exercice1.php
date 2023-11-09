<?php
echo "Veuillez entrer votre prénom";
$name=fgets(STDIN);
$name=trim($name);
echo  "Bonjour,".$name. "!";
?>