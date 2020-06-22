<?php

//PARAMS

$pageTitle = "TS3Server Dashboard"; //html head title
$serverName = "Some server"; //hero title text
$pageLinks = ['main', 'upload', 'connect', 'status', 'cmds']; //links correspond with filenames inside pages/ directory
$menuOptions = [$pageLinks[0] => 'Main page', 
                $pageLinks[1] => 'Song upload', 
                $pageLinks[2] => 'Connect to the server', 
                $pageLinks[3] => 'Server status', 
                $pageLinks[4] => 'Commands'
            ]; //menu item names
$pageHeaders = [$pageLinks[0] => 'Current server and bot status', 
                $pageLinks[1] => 'Music upload', 
                $pageLinks[2] => 'Server connection dialog', 
                $pageLinks[3] => 'Detailed server status', 
                $pageLinks[4] => 'AudioBot commands'
            ]; //title of each page
$status = ['active' => 'Active', 'inactive' => 'Inactive']; //server status

$apiLibPath = "api/lib/TeamSpeak3/TeamSpeak3.php"; //path to the TeamSpeak 3 PHP Framework api (https://docs.planetteamspeak.com/ts3/php/framework/)
$serverqueryLogin = "yourserverquerylogin";
$serverqueryPw = "yourserverquerypassword";

//FUNCTIONS

class Func {
    public function alert($text,$type) {
        
    }
}