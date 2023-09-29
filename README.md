# Lancement du projet 

      $ composer install
	  $ yarn install
	  $ yarn build

	  cp .env.example .env
    
# Variables d'environnement

a remplir avec les infos jointes par email à l'envoi du test
 
    INSTAGRAM_CLIENT_ID=
    INSTAGRAM_CLIENT_SECRET=
    
    INSTAGRAM_USERNAME=""
    INSTAGRAM_PASSWORD=""


## Etapes pour afficher les photos de l'utilisateur

 1. `php artisan:migrate`
 2. `php artisan instagram-feed:profile wanerrivet`
 3. `php artisan wan-app:init-feed-command`

Pour le Test, le token a été validé sur le compte Instagram il faut donc dumper la bdd ci jointe 

## Quelques explications : 

 - Le Test utilise le depot "https://github.com/Dymantic/laravel-instagram-feed" qui permet de se connecter à l'API d'instagram de manière simple et performante.
 - j'ai créé 2 commandes artisan pour appeler manuellement les photos de l'utilisateur wanerrivet et le rafraichir si besoin 
	 - `php artisan wan-app:init-feed-command`
	 - `wan-app:refresh-feed-command`
 J'ai également ajouté 2 commandes dans la fonction schedule que le serveur pourra appeler dans un cron et qui permettra de rafraichir le feed toutes les 4 heures et rafraichir le token tous les 15 du mois.

Le jeton actuel est ainsi ok jusqu'au 15 octobre  2023


