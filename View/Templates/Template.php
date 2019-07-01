<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Contents/style.css" />

        <title><?= $title ?></title>
    </head>
    
    <body>
        <div id="global">

            <header>
                <div id="header_title"> 
                    <a href="Home"><h1 id="titreBlog">Mon Blog</h1></a>
                </div>
                <nav>
                    <ol>
                        <li><a href="Home"> Accueil</a></li>
                        <li><a href="About"> A propos </a></li>
                        <li><a href="Portfolio"> Portfolio </a></li>
                        <li><a href="Application"> Application </a></li>
                        <li><a href="Contact"> Contact </a></li>
                    </ol>
                </nav>
            </header>


            <div class="content">
                <?= $contents ?>
            </div> <!-- #contenu -->

            <footer class="piedBlog">
            <a href="Mentions">Mentions légales</a> <a href="Confidential">Politique de confidentialité</a>
            </footer>

        </div> <!-- #global -->
    </body>
</html>