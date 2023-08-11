<?php
try{
$db = new PDO('mysql:host=localhost;dbname=annuaire', 'root', '');
 
}
catch(Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
     
}
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
          
             
          
        $query = $db->prepare( 'INSERT INTO apprenants (nom,prenom,adresse,age,email,telephone) VALUES (?,?,?,?,?,?)');

        $query->execute(array($nom,$prenom,$adresse,$age,$email,$telephone));

        header('location:apprenant.php')
         
?>