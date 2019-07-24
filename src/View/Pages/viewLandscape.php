<?php $this->title = "NG Photographie - Portfolio - Paysage !"; ?>
<!-- Titre de la page -->

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-portfolio.jpg" alt="image de mise en page portfolio paysage">
    </div>
</section>

<section id="portfolio_page">
    <a class="button" href="Portfolio">Portfolio</a>

    <div id="portfolio_page_global">
        <?php foreach ($picturesLandscape as $pictureLandscape): ?>
        <div class="portfolio_page_img">
            <?php echo "<img src='".$pictureLandscape->getLink()."' alt='image de larticle'>"; ?>
            <div class="portfolio_page_text">
                <h2><?= $pictureLandscape->getTitle(); ?></h2>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>