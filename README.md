# Projet5_Photographie

Projet 5 de la formation DWJ d'Openclassrooms.

----------------------------------------------
Contexte :
----------------------------------------------

Promouvoir mon portfolio :

    - Une page Portfolio avec 3 catégories. (Portrait, Animalier, Paysage) Explications et liens vers celles-ci.
    - Une page par catégorie. Promotion des meilleurs photos du photographe en rapport avec celles-ci.

Aider les autres :

    - FAQ sur le thème de la photo sous forme de chatbot.
    - Chatbot permettant de répondre aux questions des utilisateurs.
    - Possibilité de regarder les questions à poser au chatbot au cas où le chatbot rencontre des problèmes.
    - Possibilité pour l'utilisateur de poster un avis via un système de commentaire.

----------------------------------------------
Cahier des charges :
----------------------------------------------

Fonctionnalités Utilisateurs :

    - Possibilité pour l'utilisateur de regarder les photos du photographe.
    - Possibilité pour l'utilisateur de dialoguer avec un chatbot sur le thème de la photo.       
    - Possibilité pour l'utilisateur de donner son avis sur le chatbot.   

Fonctionnalités Auteur :

    - Possibilité pour l'auteur d'ajouter des photos dans la catégorie correspondante.
    - Possibilité pour l'auteur de supprimer une photo.
    - Possibilité pour l'auteur de supprimer/modérer un commentaire.

Conception :

    - Utilisation de l'architecture MVC.
    - Utilisation de la POO.
    - Interface Front-end (lecture des photos/Chatbot).
    - Interface Back-end (administration des photos/commentaires).   

Visuel :

    - Utilisation de Css complémentaire pour la mise en page.
    - Utilisation de Google-Fonts pour les polices.
    - Utilisation d'Undraw pour les illustrations. 

----------------------------------------------
Upload :
----------------------------------------------

BDD :
    - La connexion à la base de donnée se trouve dans le fichier modele.php placé dans le dossier Modele.
    - La connexion se fait actuellement sur un serveur local.
    - Afin de connecter la BDD à un BDD en ligne, il vous suffit de ces données ci : 'mysql:host=hostdelaBDD;dbname=nomdevotreBDD;charset=utf8','identifiant', 'mdp',.