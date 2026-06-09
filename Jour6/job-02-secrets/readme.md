# Bug 1 

Le comportement "invisible" de la commande echo, c'est qu'elle ajoute automatiquement un saut de ligne (\n) à la fin de la chaîne de caractères que je lui demande d'afficher.

🔍 Pourquoi ça casse ma connexion MySQL ?

À l'œil nu, quand j'ouvre mon fichier, je vois mypassword.
Mais en réalité, mon fichier contient mypassword\n (le mot de passe + le caractère invisible de saut de ligne).

Lorsque mon application Node.js (ou Docker) lit ce fichier pour se connecter à MySQL, elle prend la chaîne complète. MySQL reçoit donc "mypassword\n" au lieu de "mypassword". Comme le mot de passe ne correspond pas exactement, MySQL me renvoie immédiatement un Access denied.

# Bug 2

Ici, le code PHP fait aveuglément confiance au contenu du fichier de secret, ce qui amplifie directement le "Bug 1" (le saut de ligne invisible généré par echo).

La faille réside dans la fonction readSecret(). Lorsque PHP utilise file_get_contents($secretFile), il récupère l'intégralité du fichier, y compris les espaces, les tabulations et surtout le fameux saut de ligne (\n) à la fin du fichier.

Au lieu de nettoyer cette chaîne pour ne garder que le mot de passe brut, le code renvoie la valeur polluée. Pour neutraliser le bug 1, il faudrait chaîner le résultat avec une fonction de nettoyage de chaîne.

🛠️ La fonction manquante : trim()
En PHP, la fonction trim() est spécialement conçue pour retirer les espaces blancs et les sauts de ligne (\n, \r, etc.) situés au tout début et à la toute fin d'une chaîne de caractères.

# Bug 3

Même si on utilise la directive classique depends_on: - mysql dans le fichier docker-compose.yml, Docker considère que le conteneur MySQL est "prêt" dès que son processus principal démarre. Sauf que MySQL met souvent plusieurs secondes à initialiser ses fichiers, créer les bases de données et ouvrir son port aux connexions. Pendant ce temps, ton API (qui démarre en un éclair) tente de s'y connecter, échoue lamentablement et crash ou renvoie une erreur.

La directive Docker Compose qui résout proprement ce problème est la version avancée de depends_on combinée avec une condition de condition: service_healthy.

Pour résoudre le problème, on va remplacer ton depends_on simple (qui regarde juste si le conteneur est démarré) par la version avancée, et on va ajouter un healthcheck sur le service mysql pour que Docker sache quand la base de données est réellement prête à recevoir des requêtes.

