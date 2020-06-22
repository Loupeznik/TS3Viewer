# ts3viewer-php
Simple dashboard which displays TS3 server info and partially controls an instance of TS3AudioBot

## Dependencies
* [TS3AudioBot](https://github.com/Splamy/TS3AudioBot)
* [TeamSpeak 3 PHP Framework](https://github.com/planetteamspeak/ts3phpframework)

## Installation

In order for the app to work properly, 
it is imperative to rewrite some values in the configuration files to be compliant with your instance of the TS3AudioBot as well as your TeamSpeak server.<br>
That are mainly the serverquery credentials and TS3AudioBot API token.

## Functions
* Complete server status with periodical refresh as well as minified server status on the main page
* TS3AudioBot playback controls
* Music upload
* List of music available to the bot locally with the option to have this music played through the bot
* Showcase of basic TS3AudioBot commands
