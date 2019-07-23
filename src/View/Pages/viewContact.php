<?php $this->title = "NG Photographie - Contact !"; ?> <!-- Titre de la page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="src/Engine/Js/Form.js"></script>

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-contact.jpg" alt="image de mise en page contact">
    </div>
</section>

<div id="contact">
    <section id="contact_infos">
        <h2>Contact infos</h2>
        <p><strong>Ville :</strong> Bordeaux</p>
        <p><strong>CP :</strong> 33000</p>
        <p><strong>Adresse :</strong> 33 allée des cerises</p>
        <p><strong>Mail :</strong> Ngadeyne@gmail.com</p>
        <p><strong>Téléphone :</strong> 06 06 06 06 06</p>
    </section>

    <section id="contact_form">
        <h2>Contactez-moi!</h2> 
            <form method="post" id="mainForm" action="index.php?action=Mail" enctype="multipart/form-data">
                <label for="pseudo">Pseudo :</label>
                <input type="text" data-error="Veuillez entrer votre pseudo" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                <div class="help-block with-errors"></div>

                <label for="email">Votre adresse E-mail :</label>
                <input type="email" data-error="Veuilez-renseigner l'adresse mail" id="email" name="email" placeholder="Email" required>
                <div class="help-block with-errors"></div>

                <label for="content">Votre message :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre message" required ></textarea>

                <input class="button" type="submit" id="bouton_contact" value="Ajouter">     
            </form>
    </section>
</div> <!-- Div contact -->


<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script src="test.js"></script>