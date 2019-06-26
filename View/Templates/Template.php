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
                    <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                </div>
                <nav>
                    <ol>
                        <li><a href="index.php"> Accueil</a></li>
                        <li><a href="index.php?action=About"> A propos </a></li>
                        <li><a href="index.php?action=Portfolio"> Portfolio </a></li>
                        <li><a href="index.php?action=Application"> Application </a></li>
                        <li><a href="index.php?action=Contact"> Contact </a></li>
                    </ol>
                </nav>
            </header>


            <div id="contenu">
                <?= $contents ?>
            </div> <!-- #contenu -->

            <footer id="piedBlog">
            <a href="index.php?action=Mentions">Mentions légales</a> <a href="index.php?action=Confidential">Politique de confidentialité</a>
            </footer>

        </div> <!-- #global -->
    </body>
</html>