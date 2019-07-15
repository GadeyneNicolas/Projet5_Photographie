<?php $this->title = "Mon Blog - Portfolio - Portrait !"; ?>

<section class="banner_page">
    <div class="banner_page_img">
        <img src="Contents/Illustration/banner-portfolio.jpg">
    </div>
</section>

<section id="portfolio_page">
    <input  class="button" type="button" value="Lien page portfolio" onclick="javascript:location.href='Portfolio'">
    
    <div id="portfolio_page_global">
        <?php foreach ($picturesPortrait as $picturesPortraitAffichage): ?>
            <div class="portfolio_page_img">
                <?php echo "<img src='".$picturesPortraitAffichage['link']."' alt='image de larticle'>" ?>
                    <div class="portfolio_page_text">
                        <h2><?= $picturesPortraitAffichage['title'] ?></h2>
                    </div>
            </div>   
        <?php endforeach; ?>
    </div>
</section>