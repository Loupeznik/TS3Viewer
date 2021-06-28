# TS3Viewer
Simple dashboard which displays TS3 server info and partially controls an instance of TS3AudioBot.

## Dependencies
* PHP7
* Composer

* [TS3AudioBot](https://github.com/Splamy/TS3AudioBot)
* [TeamSpeak 3 PHP Framework](https://github.com/planetteamspeak/ts3phpframework)
* [Symfony-Yaml](https://symfony.com/doc/current/components/yaml.html#using-the-symfony-yaml-component)
* php-curl (may require manual download on some Linux distros, might need to be enabled in php.ini)

TeamSpeak3 PHP Framework and Symfony YAML dependencies are managed by Composer.

## Installation

```
git clone https://github.com/Loupeznik/ts3viewer-php.git .
sudo apt install php-curl composer
composer install
cp .env.example.yml .env.yml
```

Fill your server information and other options in .env.yml and set correct permissions to move.sh according to the commented text inside it.

## Functions
* Complete server status with periodical refresh as well as minified server status on the main page
* TS3AudioBot playback controls
* Music upload
* List of music available to the bot locally with the option to have this music played through the bot
* Showcase of basic TS3AudioBot commands

## Feature roadmap
* Server admin section
* Better AudioBot API interaction
* Improved server viewer
