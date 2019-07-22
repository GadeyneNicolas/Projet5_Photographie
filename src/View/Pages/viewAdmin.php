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
            <?php foreach ($picturesPortrait as $picturePortrait): ?>  <!-- Affichage des données portraits -->
                <tr>
                        <td><?= $picturePortrait->getId();?></td>
                        <td>GADEYNE Nicolas</td>
                        <td><?= $picturePortrait->getTitle(); ?></td>
                        <td><?= $picturePortrait->getLink(); ?></td>
                        <?php echo "<td><a href='index.php?action=DeletePicsPortrait&id=".$picturePortrait->getId()."'>Supprimer</a></td>"; ?>
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
            <?php foreach ($picturesAnimal as $pictureAnimal): ?>  <!-- Affichage des données Animal -->
                <tr>
                        <td><?= $pictureAnimal->getId();?></td>
                        <td>GADEYNE Nicolas</td>
                        <td><?= $pictureAnimal->getTitle(); ?></td>
                        <td><?= $pictureAnimal->getLink(); ?></td>
                        <?php echo "<td><a href='index.php?action=DeletePicsAnimal&id=".$pictureAnimal->getId()."'>Supprimer</a></td>"; ?>
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
            <?php foreach ($picturesLandscape as $pictureLandscape): ?>  <!-- Affichage des données Lanscape -->
                <tr>
                        <td><?= $pictureLandscape->getId();?></td>
                        <td>GADEYNE Nicolas</td>
                        <td><?= $pictureLandscape->getTitle(); ?></td>
                        <td><?= $pictureLandscape->getLink(); ?></td>
                        <?php echo "<td><a href='index.php?action=DeletePicsLandscape&id=".$pictureLandscape->getId()."'>Supprimer</a></td>"; ?>
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
                <th>Supprimer</th>
            </tr>
            <?php foreach ($comments as $comment): ?>  <!-- Affichage des données comments -->
                <tr>
                    <td><?= $comment->getId(); ?></td>
                    <td><?= $comment->getPseudo();  ?></td>
                    <td><?= $comment->getMail(); ?></td>
                    <td><?= $comment->getContent(); ?></td>
                    <?php echo "<td><a href='index.php?action=DeleteComments&id=".$comment->getId()."'>Supprimer</a></td>"; ?>
                </tr>
            <?php endforeach; ?>
        </table>
</section>

<?php
    } else {
        header('Location: LoginError');
    }
?> <!-- Redirection de la page session si celle-ci n'est pas ouverte -->



