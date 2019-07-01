<?php 
session_start ();

if (isset($_SESSION['pseudo']))
{

?>

<?php $this->title = "Mon Blog - Ajouter une photo !"; ?>

<section id="add_pictures">

    <div id="add_pictures_text">
        <h2>Ajouter une image.</h2>
        <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
    </div>
    <div id="add_pictures_form">
        <form method="post" action="index.php?action=AddNewPics" enctype="multipart/form-data">
            <div>
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>
            </div>

            <div>
                <label for="content">Contenu :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu" ></textarea>
            </div>
            <div>
                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            </div>
        </form>
    </div>
</section>

<?php
} else {
    header('Location: LoginError');
}
?>