<h1> Je suis traitement.php</h1>

<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $name=$_GET['nom'];
    echo "Votre prénom est ".$name."</br> ";
    $email=$_GET['email'];
    echo "Votre e-mail est ".$email;
}
elseif ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['nom'];
    echo "Votre prénom est ".$name." (post)"."</br> ";
    $email=$_POST['email'];
    echo "Votre e-mail est ".$email."(post)";
}
?>