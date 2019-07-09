<?php $this->title = "Mon Blog - Application !"; ?>

<section class="banner_page">

    <div class="banner_page_img">
    <img src="Contents/Illustration/banner-application.jpg">
    </div>
</section>


<div id="application">

    <div id="chatbot">
    <h2>Chatbot</h2>
    <p>Description</p>
    </div>

    <section>  
        <iframe
            allow="microphone;"
            width="650"
            height="830"
            src="https://console.dialogflow.com/api-client/demo/embedded/2a0512b4-552d-4476-9f8b-1b7735e76040">
        </iframe>        
    </section>

    <section id="commentsGlobal">

    <?php foreach ($comments as $commentsAffichage): ?>
    
    <div class="comments">

        <p><?= $commentsAffichage['id'] ?></p>
        <p><?= $commentsAffichage['pseudo'] ?></p>
        <p><?= $commentsAffichage['email'] ?></p>
        <p><?= $commentsAffichage['content'] ?></p>

    </div>

    <?php endforeach; ?>

    </section>

    <form method="post" action="index.php?action=AddNewComments" enctype="multipart/form-data">
        <div>
            <label for="pseudo">Titre :</label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
        </div>

        <div>
            <label for="email">Titre :</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
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