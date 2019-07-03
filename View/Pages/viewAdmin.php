<?php 
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

<h2>Portrait</h2>
<table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Image</th>
            <th>Supprimer</th>

        </tr>
        <?php foreach ($picturesPortrait as $picturesPortraitAffichage): ?>
        
        <tr>
                <td><?= $picturesPortraitAffichage['id'] ?></td>
                <td>GADEYNE Nicolas</td>
                <td><?= $picturesPortraitAffichage['title'] ?></td>
                <td><?= $picturesPortraitAffichage['content'] ?></td>
                <td><?= $picturesPortraitAffichage['link'] ?></td>
                <?php echo "<td><a href='index.php?action=DeletePicsPortrait&id=".$picturesPortraitAffichage['id']."'>Supprimer</a></td>"; ?>
        </tr>
    
    <?php endforeach; ?>
</table>

<h2>Animalier</h2>
<table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Image</th>
            <th>Supprimer</th>

        </tr>
        <?php foreach ($picturesAnimal as $picturesAnimalAffichage): ?>
        
        <tr>
                <td><?= $picturesAnimalAffichage['id'] ?></td>
                <td>GADEYNE Nicolas</td>
                <td><?= $picturesAnimalAffichage['title'] ?></td>
                <td><?= $picturesAnimalAffichage['content'] ?></td>
                <td><?= $picturesAnimalAffichage['link'] ?></td>
                <?php echo "<td><a href='index.php?action=DeletePicsAnimal&id=".$picturesAnimalAffichage['id']."'>Supprimer</a></td>"; ?>
        </tr>
    
    <?php endforeach; ?>
</table>

<h2>Paysage</h2>
<table>
        <tr>
            <th>Id</th>
            <th>Auteur</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Image</th>
            <th>Supprimer</th>

        </tr>
        <?php foreach ($picturesLandscape as $picturesLandscapeAffichage): ?>
        
        <tr>
                <td><?= $picturesLandscapeAffichage['id'] ?></td>
                <td>GADEYNE Nicolas</td>
                <td><?= $picturesLandscapeAffichage['title'] ?></td>
                <td><?= $picturesLandscapeAffichage['content'] ?></td>
                <td><?= $picturesLandscapeAffichage['link'] ?></td>
                <?php echo "<td><a href='index.php?action=DeletePicsLandscape&id=".$picturesLandscapeAffichage['id']."'>Supprimer</a></td>"; ?>
        </tr>
    
    <?php endforeach; ?>
</table>
</section>

<?php
} else {
    header('Location: LoginError');
}
?>



