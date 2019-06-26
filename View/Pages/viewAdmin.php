<?php 
session_start ();

if (isset($_SESSION['pseudo']))
{

?>

<?php $this->title = "Mon Blog - Admin !"; ?>

<section class="admin">
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<p>Veuillez entrer le mot de passe pour accéder au panneau admin :</p>
<a href="Disconnection">Déconnexion</a>


<?php
} else {
?>
<p>Mauvais mdp</p><p>Mauvais mdp</p><p>Mauvais mdp</p><p>Mauvais mdp</p>
<p>Mauvais mdp</p>
<a href="Login">Connectez-vous!</a>

<?php
}
?>
