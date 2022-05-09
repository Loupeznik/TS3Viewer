FROM php:7.4-apache-bullseye

RUN ["apt", "update"]
RUN ["apt", "install", "-y", "zip", "unzip", "git"]
RUN ["mkdir", "-p", "/opt/teamspeak/music"]

COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 80

WORKDIR /var/www/html
RUN ["composer", "install"]

VOLUME /opt/teamspeak/music
VOLUME /var/www/html/env.yml

RUN ["cp", "-r", "/var/www/html/vendor/planetteamspeak/ts3-php-framework/images", "/var/www/html"]

CMD ["apache2-foreground"]
