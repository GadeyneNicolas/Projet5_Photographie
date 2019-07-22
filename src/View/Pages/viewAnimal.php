<?php $this->title = "NG Photographie - Portfolio - Animalier !"; ?> <!-- Titre de la page -->

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-portfolio.jpg" alt="image de mise en page portfolio animalier">
    </div>
</section>

<section id="portfolio_page">
    <a class="button" href="Portfolio">Portfolio</a>
    
    <div id="portfolio_page_global">
        <?php foreach ($picturesAnimal as $picturesAnimalAffichage): ?>
            <div class="portfolio_page_img">
                <?php echo "<img src='".$picturesAnimalAffichage['link']."' alt='image de larticle'>" ?>   
                    <div class="portfolio_page_text">
                            <h2><?= $picturesAnimalAffichage['title'] ?></h2>
                    </div>
            </div>       
        <?php endforeach; ?>
    </div>

</section>