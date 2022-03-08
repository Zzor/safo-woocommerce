# Installation custom de WordPress

## procédure d'installation : 

1. initialiser le projet composer : `composer init` => On valide avec entrée tout du long sauf pour les questions :
```
Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
```
ce `composer init` crée notre fichier `composer.json`.

2. 

On demande à composer d'installer le code de WordPress dans un répertoire `wp` (pas obligatoire) : 

_dans composer.json :_
```
"extra": {
        "wordpress-install-dir": "wp"
},
```
On définit une option dans le fichier composer.json pour gérer (si on veut le faire) le nom du dossier dans lequel on installera WordPress

Installer le package _johnpbloch/wordpress_ : `composer require johnpbloch/wordpress`

:warning:  **gitignore** : Il ne faut pas oublier d'ajouter au .gitignore (ou de le créer) :

```
/vendor
/wp
```

3. On récupère index.php et wp-config-sample.php depuis les fichiers de WordPress (installé dans le répertoire `wp `) et on place ces copies à la racine du projet. L'intérêt est de forcer WP à se servir de notre propre fichier de configuration. Il faut adapter le chemin du require présent dans index.php : `require __DIR__ . '/wp/wp-blog-header.php';`

:warning:  **gitignore** : Il ne faut pas oublier d'ajouter `wp-config.php` au .gitignore. On conservera un `wp-config-sample.php` pour le partage.

4. On ajoute nos identifiants de base de données dans une **copie** du fichier `wp-config-sample.php` que l'on nomme `wp-config.php`. On y génère aussi les clés de hashage en suivant le lien : https://api.wordpress.org/secret-key/1.1/salt/

On a maintenant accès à un formulaire nous permettant d'installer WP (on ne va pas l'utiliser)

5. Config custom :

on ajoute des constantes à notre wp-config ; 

```
// Je définis l'URL vers la page d'accueil de mon site
define(
    'WP_HOME',
    rtrim ( 'put_your_home_url_here', '/' )
);

// Je définis l'URL vers le dossier source de WordPress
define(
    'WP_SITEURL',
    WP_HOME . '/wp'
);

// Je définis l'URL vers le dossier wp-content
define(
    'WP_CONTENT_URL',
    WP_HOME . '/wp-content'
);

// Je définis le path (chemin côté serveur) vers le dossier wp-content
define(
    'WP_CONTENT_DIR',
    __DIR__ . '/wp-content'
);
```

6. Installation de WP

On utilise WP-CLI pour installer WP en LDC :

`wp core install --prompt` => démarrer l'installation en mode interactif
La commande nous demande des infos :
```
1/6 --url=<url>:[mettre la même url que dans la constante WP_HOME plus haut]
2/6 --title=<site-title>: Demo WP
3/6 --admin_user=<username>: demowp_admin
4/6 [--admin_password=<password>]: demowp
5/6 --admin_email=<email>: hey@truc.com
6/6 [--skip-email] (Y/n): <= On appuie direct sur entrée pour valider le Y par défaut
```

Si succès on aura la réponse :
`Success: WordPress installed successfully.`

7. On utilise wpackagist avec Composer pour récupérer des thèmes et des plugin : 

_dans composer.json_ :
```
"repositories":[
        {
            "type":"composer",
            "url":"https://wpackagist.org",
            "only": ["wpackagist-plugin/*", "wpackagist-theme/*"]
        }
    ]
```

Par exemple, pour installer un thème : `composer require wpackagist-theme/twentytwenty`   
Pour installer un plugin : `composer require wpackagist-plugin/akismet`

Attention, quand on installer un plugin, il faut l'activer (et on le fait avec wp-cli) :
`wp plugin activate [nomduplugin]`

:warning: **gitignore** : On ne doit pas versionner le code des plugins ou des thèmes qui ne sont pas spécifiques au projet