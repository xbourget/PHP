# Utilisez une image PHP avec Composer préinstallé
FROM composer:2 AS build

WORKDIR /app

# Copiez uniquement les fichiers nécessaires pour installer les dépendances
COPY composer.json composer.json
COPY composer.lock composer.lock

# Installez les dépendances dans le répertoire du projet
RUN composer install --no-scripts --no-autoloader

# Copiez tous les fichiers restants du projet
COPY . .

# Chargez les dépendances avec l'autoloader généré
RUN composer dump-autoload --optimize --classmap-authoritative

# Utilisez une image PHP/Apache pour exécuter l'application
FROM php:8-apache

WORKDIR /var/www/html

# Copiez les fichiers du premier build (avec les dépendances installées)
COPY --from=build /app .

# Définissez les variables d'environnement pour Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
ENV APACHE_LOG_DIR /var/log/apache2

# Activez le module Apache Rewrite
RUN a2enmod rewrite

# Exposez le port 80 pour accéder à l'application Laravel
EXPOSE 88

# Démarrez le serveur Apache
CMD ["apache2-foreground"]
