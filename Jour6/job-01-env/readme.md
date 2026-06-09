# Bug 1

J'ai corrigé avec : 

app.listen(PORT, "0.0.0.0", () => {
  console.log(`Server running on port ${PORT} (accessible outside container)`);
});

# Bug 2 

J'ai rajouté le .env dans le gitignore

# Bug 3 
Quand je lance un projet avec Docker Compose, il y a une hiérarchie très stricte pour savoir quelle valeur l'emporte sur une autre.
Dans mon cas, il y a un conflit entre deux endroits :

Le fichier .env de ma machine hôte (qui contient NODE_ENV=development).

Le bloc environment: défini directement à l'intérieur de mon fichier docker-compose.yml

Dans la documentation de Docker, les valeurs écrites "en dur" dans le fichier docker-compose.yml sont TOUJOURS prioritaires sur les valeurs lues automatiquement dans le fichier .env.

# Bug 4 

La commande docker compose exec api env te montre exactement ce que le conteneur a dans le ventre au moment où il tourne, et non pas ce qui est écrit dans ton fichier .env local.

