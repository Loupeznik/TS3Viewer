# ts3viewer-php
Simple dashboard which displays TS3 server info and partially controls an instance of TS3AudioBot

## Dependencies
* [TS3AudioBot](https://github.com/Splamy/TS3AudioBot)
* [TeamSpeak 3 PHP Framework](https://github.com/planetteamspeak/ts3phpframework)
* php-curl (may require manual download on some Linux distros, needs to be enabled in php.ini)

## Installation

In order for the app to work properly, 
it is imperative to rewrite some values in the configuration files to be compliant with your instance of the TS3AudioBot as well as your TeamSpeak server.<br>
That are mainly the serverquery credentials and TS3AudioBot API token.

TS3 PHP Framework can be installed with Composer or by cloning the linked repo. PHP-CURL can be installed via your distro's package manager.<br>
For TS3AudioBot installation, see documentation in it's GitHub repository.

## Functions
* Complete server status with periodical refresh as well as minified server status on the main page
* TS3AudioBot playback controls
* Music upload
* List of music available to the bot locally with the option to have this music played through the bot
* Showcase of basic TS3AudioBot commands
