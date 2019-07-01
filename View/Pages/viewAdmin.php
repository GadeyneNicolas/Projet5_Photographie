<?php 
session_start ();

if (isset($_SESSION['pseudo']))
{

?>

<?php $this->title = "Mon Blog - Admin !"; ?>

<section id="admin">
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<a href="AddPictures">Ajouter une photo</a>
<a href="Disconnection">Déconnexion</a>
</section>

<?php
} else {
    header('Location: LoginError');
}
?>



