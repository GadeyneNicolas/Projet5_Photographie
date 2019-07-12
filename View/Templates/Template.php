<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contents/style.css" />

        <title><?= $title ?></title>
    </head>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <script>
            jQuery(document).ready(function() {
            jQuery('.toggle-nav').click(function(e) {
            jQuery(this).toggleClass('active');
            jQuery('.menu ul').toggleClass('active');
            e.preventDefault();
            });
        });
    </script>

    <body>
        <div id="global">

            <header>
                    <div id="header_title"> 
                        <a href="Home"><h1>NG - Photographie</h1></a>
                    </div>

                    <nav>
                        <input class="hidden" type="checkbox" id="menuToggle">
                        <label class="menu-btn" for="menuToggle">
                            <div class="menu"></div>
                            <div class="menu"></div>
                            <div class="menu"></div>
                        </label>

                        <div class="nav-container">
                            <ol class="nav-tabs">
                                <li class="nav-tab"><a href="Home"> Accueil</a></li>
                                <li class="nav-tab"><a href="About"> A propos </a></li>
                                <li class="nav-tab"><a href="Portfolio"> Portfolio </a></li>
                                <li class="nav-tab"><a href="Application"> Application </a></li>
                                <li class="nav-tab"><a href="Contact"> Contact </a></li>
                            </ol>
                        </div>
                    </nav>
            </header>

            <div class="content">
                <?= $contents ?>
            </div> <!-- #contenu -->

            <footer>
            <a href="Mentions">Mentions légales</a> <a href="Confidential">Politique de confidentialité</a>
            </footer>

        </div> <!-- #global -->
    </body>
</html>