# Une stack Docker Wordpress

Il y a 3 modules : 
- WordPress sur le port 5555
- MariaDB
- PhpMyAdmin sur le port 8080

La stack expose deux volumes : 
- un pour la BDD, histoire de facilement persister les données
- un pour les fichiers de WordPress pour facilement les explorer et les modifier
- un dump pour avoir accès à toutes les pages

### Pour run
````
docker-compose up -d
````

