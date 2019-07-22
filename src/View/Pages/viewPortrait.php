<?php $this->title = "NG Photographie - Portfolio - Portrait !"; ?> <!-- Titre de la page -->

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-portfolio.jpg" alt="image de mise en page portfolio portrait">
    </div>
</section>

<section id="portfolio_page">
    <a class="button" href="Portfolio">Portfolio</a>

    <div id="portfolio_page_global">
        <?php foreach ($picturesPortrait as $picturePortrait): ?>
            <div class="portfolio_page_img">
                <?php echo "<img src='".$picturePortrait->getLink()."' alt='image de larticle'>"; ?>
                    <div class="portfolio_page_text">
                        <h2><?= $picturePortrait->getTitle(); ?></h2>
                    </div>
            </div>   
        <?php endforeach; ?>
    </div>
</section>