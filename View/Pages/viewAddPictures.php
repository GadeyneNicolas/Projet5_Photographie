<?php 

if (isset($_SESSION['pseudo']))
{

?>

<?php $this->title = "Mon Blog - Ajouter une photo !"; ?>


<input class="button" type="button" value="Portrait" onclick="javascript:showPortrait()">

<input class="button" type="button" value="Animalier" onclick="javascript:showAnimal()">

<input class="button" type="button" value="Paysage" onclick="javascript:showLandscape()">

<div id="showPortrait">

<section id="add_pictures">
<h2>Portrait</h2>
    <div id="add_pictures_text">
        <h2>Ajouter une image.</h2>
        <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
    </div>
    <div id="add_pictures_form">
        <form method="post" action="index.php?action=AddNewPicsPortrait" enctype="multipart/form-data">
            
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>
            
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>
           
                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu" ></textarea>
            
                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
          
        </form>
    </div>
</section>

</div>

<div id="showAnimal">

<section id="add_pictures">
<h2>Animalier</h2>
    <div id="add_pictures_text">
        <h2>Ajouter une image.</h2>
        <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
    </div>
    <div id="add_pictures_form">
        <form method="post" action="index.php?action=AddNewPicsAnimal" enctype="multipart/form-data">
            
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>
            
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>
           
                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu" ></textarea>
         
                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
            
        </form>
    </div>
</section>

</div>

<div id="showLandscape">

<section id="add_pictures">
<h2>Paysage</h2>
    <div id="add_pictures_text">
        <h2>Ajouter une image.</h2>
        <p>Retour vers la page <a href="Admin">d'Admin.</a></p>
    </div>
    <div id="add_pictures_form">
        <form method="post" action="index.php?action=AddNewPicsLandscape" enctype="multipart/form-data">
            
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" placeholder="Titre" required>
            
                <label for="image">Image :</label>
                <input type="file" id="image" name="image" placeholder="image" required>
           
                <label for="content">Description pour la BDD :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu" ></textarea>
            
                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
           
        </form>
    </div>
</section>

</div>

<?php
} else {
    header('Location: LoginError');
}
?>

<script>

function showPortrait()
{
    document.getElementById(`showPortrait`).style.display = `block`;
    document.getElementById(`showLandscape`).style.display = `none`;
    document.getElementById(`showAnimal`).style.display = `none`;
}

function showAnimal()
{
    document.getElementById(`showAnimal`).style.display = `block`;
    document.getElementById(`showLandscape`).style.display = `none`;
    document.getElementById(`showPortrait`).style.display = `none`;
}

function showLandscape()
{
    document.getElementById(`showLandscape`).style.display = `block`;
    document.getElementById(`showPortrait`).style.display = `none`;
    document.getElementById(`showAnimal`).style.display = `none`;
}
</script>