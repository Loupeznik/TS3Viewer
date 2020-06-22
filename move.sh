#!/bin/sh

## Script created by Loupeznik
## This script is intended for use with the mp3 uploader of the ts3viewer-php app
## It moves the uploaded file from the temporary upload dir located in the app's root dir
## To the directory from which the TS3AudioBot fetches music files
## For this script to work properly, both directories have to be owned by the www server user/group
## For example www-data with Apache webserver

userinput="$1"

move(){ 
	local arg="$1"
	mv /var/www/html/ts3/upload_temp/"$arg" /opt/teamspeak/musicbot/music/"$arg"
}

move "$userinput"
