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

Fill your server information and other options in .env.yml and set correct permissions to move.sh (the process is explained within the script).

**WARNING**: The bot's API key or the TeamSpeak3 user who requested it need to have permissions to control the bot (mainly its playback functions).
If these permissions are missing, refer to the [bot's documentation](https://github.com/Splamy/TS3AudioBot/wiki/Rights) for setting up these permissions.

If Server Status images are not working, you can fix it by copying the images from TS3 PHP Framework into the root directory. This is a problem due to
the library having paths for the server viewer object messed up somehow.

```
cp -r vendor/planetteamspeak/ts3-php-framework/images .
```

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
* Parametrized / Database-stored audiobot command list
