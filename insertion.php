<?php

include "connexion.php";

if(isset($_GET["nom"]) &&  isset($_GET["prenom"]) && isset($_GET["telephone"]) && isset($_GET["email"]) )

{
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $telephone = $_GET["telephone"];
    $email = $_GET["email"];
    
    $req=mysqli_query($link, "insert into etudiant(nom,prenom,telephone,email) values ('$nom','$prenom','$telephone','$email')" );

    if ($req)
    {
        echo "ajout effectué";
        

    }
    else
    {
        echo "erreur d'ajout";
    }    


}


?>