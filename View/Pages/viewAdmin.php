<?php 
    if (isset($_SESSION['pseudo']))
    {
?> <!-- Variable de session -->

<?php $this->title = "NG Photographie - Admin !"; ?> <!-- Titre de la page -->

<section id="admin">
    <h1>Bienvenue sur l'espace administration.</h1>
        <p>Vous souhaitez :</p>
        <a href="Disconnection">Se déconnecter</a>
        <p>Ou alors :</p>
        <a href="AddPictures">Ajouter une photo</a>
        <p>Vous pouvez également controller les différentes photos ou les commentaires.</p>

    <h2>Portrait</h2>
        <table>
                <tr>
                    <th>Id</th>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>Image</th>
                    <th>Supprimer</th>
                </tr>
            <?php foreach ($picturesPortrait as $picturesPortraitAffichage): ?>  <!-- Affichage des données portraits -->
                <tr>
                        <td><?= $picturesPortraitAffichage['id'] ?></td>
                        <td>GADEYNE Nicolas</td>
                        <td><?= $picturesPortraitAffichage['title'] ?></td>
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
                <th>Image</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($picturesAnimal as $picturesAnimalAffichage): ?> <!-- Affichage des données animaux -->
                <tr>
                    <td><?= $picturesAnimalAffichage['id'] ?></td>
                    <td>GADEYNE Nicolas</td>
                    <td><?= $picturesAnimalAffichage['title'] ?></td>
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
                <th>Image</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($picturesLandscape as $picturesLandscapeAffichage): ?>  <!-- Affichage des données paysages -->
                <tr>
                    <td><?= $picturesLandscapeAffichage['id'] ?></td>
                    <td>GADEYNE Nicolas</td>
                    <td><?= $picturesLandscapeAffichage['title'] ?></td>
                    <td><?= $picturesLandscapeAffichage['link'] ?></td>
                    <?php echo "<td><a href='index.php?action=DeletePicsLandscape&id=".$picturesLandscapeAffichage['id']."'>Supprimer</a></td>"; ?>
                </tr>
            <?php endforeach; ?>
        </table>

    <h2>Comentaires</h2>
        <table>
            <tr>
                <th>Id</th>
                <th>Auteur</th>
                <th>Email</th>
                <th>Contenu</th>
                <th>Signalement</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($comments as $commentsAffichage): ?>  <!-- Affichage des données comments -->
                <tr>
                    <td><?= $commentsAffichage['id'] ?></td>
                    <td><?= $commentsAffichage['pseudo']  ?></td>
                    <td><?= $commentsAffichage['email'] ?></td>
                    <td><?= $commentsAffichage['content'] ?></td>
                    <td> Signalement </td>
                    <?php echo "<td><a href='index.php?action=DeleteComments&id=".$commentsAffichage['id']."'>Supprimer</a></td>"; ?>
                </tr>
            <?php endforeach; ?>
        </table>
</section>

<?php
    } else {
        header('Location: LoginError');
    }
?> <!-- Redirection de la page session si celle-ci n'est pas ouverte -->



