<?php $this->title = "NG Photographie - Application !"; ?> <!-- Titre de la page -->

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-application.jpg" alt="image de mise en page application">
    </div>
</section>

<div id="application">
    <div id="application_text">
        <h1>Chatbot</h1>
            <p>Je vous propose de découvrir un Chatbot intelligent sur le thème de la photographie. Celui-ci 
                peut comprendre vos questions et essayer d'y répondre le plus simplement possible grâce à
                des connaissances enregistrés dans sa base de donnée.
            </p>
        <h2>Un problème avec le chatbot?</h2>
            <p>Si vous n'arrivez pas à faire fonctionner l'application, n'hésitez pas à regarder la FAQ 
            de celle-ci.
            </p>
            <a class="button" href="Faq">FAQ</a>
    </div>

    <section id="chatbot">  
        <iframe
            allow="microphone;"
            src="https://console.dialogflow.com/api-client/demo/embedded/2a0512b4-552d-4476-9f8b-1b7735e76040">
        </iframe>        
    </section>

    <section id="comments_global">
        <h2>Espace commentaire.</h2>
        <p>N'hésitez pas à donner votre avis sur le Chatbot.</p>

        <?php foreach ($comments as $commentsAffichage): ?>
            <div class="comments">  
                <p><strong> Pseudo : </strong> <?= $commentsAffichage['pseudo'] ?> </p>
                <p><strong> Commentaire :</strong></p>
                <p><?= $commentsAffichage['content'] ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <section id="comments_form">
        <br>   
        <h2>Postez votre commentaire.</h2>
        <form method="post" action="index.php?action=AddNewComments" enctype="multipart/form-data">
            
                <label for="pseudo">Titre :</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
        
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
        
                <label for="content">Contenu :</label>
                <textarea type="text" id="content" name="content" placeholder="Votre contenu" ></textarea>
        
                <input class="button" type="submit" id="bouton_contact" value="Ajouter">
        </form>
    </section>
</div> <!-- Div application -->