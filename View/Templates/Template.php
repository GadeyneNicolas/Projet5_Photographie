<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <link rel="stylesheet" href="Contents/style.css" />
        
        <title><?= $title ?></title>
    </head>
 
    <body>
        <div id="global">

            <header>
                    <div id="header_title"> 
                        <a href="Home"><h1>NG - Photographie</h1></a>
                    </div>

                    <nav>
                        <input class="hidden" type="checkbox" id="menuToggle">
                        <label class="menu-btn" for="menuToggle">
                            <span class="menu"></span>
                            <span class="menu"></span>
                            <span class="menu"></span>
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