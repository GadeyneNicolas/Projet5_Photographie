<?php $this->title = "Mon Blog - Portfolio - Paysage !"; ?>

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-portfolio.jpg">
    </div>
</section>

<section id="portfolio_page">
    <input  class="button" type="button" value="Lien page portfolio" onclick="javascript:location.href='Portfolio'">

    <div id="portfolio_page_global">
        <?php foreach ($picturesLandscape as $picturesLandscapeAffichage): ?>
            <div class="portfolio_page_img">
                <?php echo "<img src='".$picturesLandscapeAffichage['link']."' alt='image de larticle'>" ?>
                    <div class="portfolio_page_text">
                        <h2><?= $picturesLandscapeAffichage['title'] ?></h2>
                    </div>
            </div>       
        <?php endforeach; ?>
    </div>
</section>