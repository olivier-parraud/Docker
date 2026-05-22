# Welcome to Docker

“Les commandes ci-dessous ne sont pas forcément complète, à

vous de les compléter”

● Vérifier la version d'installation de docker avec la commande
 `docker --version`
<img src="/images/version.png">

● Tester les commandes de base dans le terminal :
 `docker info`
<img src="/images/info.png">

 `docker ps`
 <img src="/images/ps.png">

 `docker images`
 <img src="/images/img1.png">

 `docker run <nom_image>`
 <img src="/images/run.png">

 `docker stop <nom_conteneur>`
<img src="/images/run2.png">

● Récupérer l’image Docker
 `docker pull <nom_image>`
<img src="/images/malo.png">

 `docker images`
<img src="/images/malo2.png">

● Construisez le container Docker
 `docker run -it --rm -p 8080:80 tic-tac-toe`
<img src="/images/run3.png">

● Arrêter votre container
 `docker stop <nom_conteneur>`
<img src="/images/stop.png">

● Supprimer votre container
 `docker rm <nom_conteneur>`
<img src="/images/supp2.png">

● supprimer l’image Docker
 `docker rmi <nom_image>`
 <img src="/images/rmi.png">


● Donner un exemple de ligne de commande pour ces actions
pour supprimer :
○ Un conteneur spécifique 
`docker rm mon_conteneur`
○ Plusieurs conteneurs 
 `docker rm conteneur1 conteneur2`
○ Tous les conteneurs arrêtés 
 `docker container prune`
○ Forcer la suppression d'un conteneur actif 
 `docker rm -f mon_conteneur`
○ Une image spécifique 
 `docker rmi mon_image`
○ Plusieurs images 
 `docker rmi image1 image2`
○ Toutes les images inutilisées (dangling/anonymes) 
 `docker image prune`
○ Toutes les images non utilisées (aucune instance/conteneur) 
 `docker image prune -a`
○ Forcer la suppression d'une image 
 `docker rmi -f mon_image`

○ Quel erreur est présente dans les commandes données
ci-dessus, donner la correction : 

 Les commandes de la section "Tester les commandes de base" (comme `docker pull`, `docker run`, `docker stop`) ne sont pas complètes car elles nécessitent des arguments (comme le nom de l'image ou du conteneur).

