# Instalación WordPress Custom

Esta instalación WordPress está hecha con:
- johnpbloch/wordpress
- Composer
- Parcel JS
- wp-cli
- Wpackagist


## 1. Clonar el proyecto y renombrar el nombre del proyecto
```
git clone https://github.com/Zzor/wordpress-custom-install.git
```

## 2. Recuperar las dependencias

Las dependencias están gestionadas con Composer, para descargarlas:

```
composer install
```

## 3. Modificar el composer.json
- Modificar "name"
- Modificar "author"
- Modificar "email"
- Modificar "scripts" con el nombre de la plantilla que se va a usar
  ```
    "scripts": {
        "build-assets":  "cd wp-content/themes/safo/assets && parcel build main.js --no-minify --public-url=./"
    }
  ```

# 4. Preparar la configuración WordPress
- Copiar el archivo `wp-config-sample.php` y nombrar la copia `wp-config.php`
- En el archivo `wp-config.php`:
  - Insertar los datos de la Base de Datos (DB_NAME, DB_USER y DB_PASSWORD)
  - Generar los salts (https://api.wordpress.org/secret-key/1.1/salt/)
  - Definir la URL hacia la página de inicio de WordPress en local
    - En `WP_HOME`, reemplazar `put_your_home_url_here` por tu URL (ejemplo: `http://localhost:8000/wordpress-custom-install`)

# 5. Instalar WordPress con wp-cli

`wp core install --prompt` 

```
1/6 --url=<url>:[poner la misma URL que se insertó anteriormente en WP_HOME]
2/6 --title=<site-title>: Demo WP
3/6 --admin_user=<username>: admin
4/6 [--admin_password=<password>]: password
5/6 --admin_email=<email>: say@hello.com
6/6 [--skip-email] (Y/n): <= Le damos a entrar directamente para validar el Y por defecto
```

# 6. Instalación completada

- Si la instalación ha funcionado, aparecerá el siguiente mensaje:
`Success: WordPress installed successfully.`

- Ahora puedes ir a `http://localhost:8000/wordpress-custom-install/wp/wp-login.php` para conectarte a tu WordPress

# 7. Plugins y/o Temas
Para ver los temas y plugins del proyecto y saber cuales están activados tienes 2 opciones:
- Conectandote al Dashboard de tu WordPress
- Verificarlo en línea de comandos
  - Temas: `wp theme list`
  - Plugins: `wp plugin list`
  

Tienes 2 opciones:
- Activarlos de manera clásica desde el Dashboard de WordPress
- Activarlos en línea de comandos (es la que utilizo yo):
  - Tema: `wp theme activate nombreDelTema`
  - Plugin: `wp plugin activate nombreDelPlugin`
  - Si deseas activar todos los plugins de golpe `wp plugin activate --all`


# 8. Parcel JS : assets Css y Javascript
Los assets en esta configuración son generados por Parcel JS.
Para generarlos (ya que no están versionados), este es el script que tienes que escribir en línea de comandos:
`composer build-assets`.

Listo, ya tienes instalado este Custom WordPress de base, y lo podrás versionar facilmente !
Vé a tu Dashboard WordPress para rellenar contenidos (no olvides sincronizar los Advanced Custom Fields)

## 9. Lenguages
- Esta página esta hecha con:
  - PHP
  - jQuery 3.6.0
  - SASS (scss)

## 10. Plugins
- Advanced Custom Fields
- Contact Form 7
- Socials Editor (plugin personal)
- Variaition Swatches for WooCommerce
- WooCommerce
- Yoast SEO
- Active Campaign