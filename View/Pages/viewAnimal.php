<?php $this->title = "Mon Blog - Portfolio - Animalier !"; ?>

<section class="banner_page">

    <div class="banner_page_img">
    <img src="Contents/Illustration/banner-portfolio.jpg">
    </div>
</section>

<section id="portfolio_page">


    <input  class="button" type="button" value="Lien page portfolio" onclick="javascript:location.href='Portfolio'">
    
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