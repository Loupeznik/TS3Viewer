<?php

//PARAMS

$pageTitle = "TS3Server Dashboard"; //html head title
$serverName = "Some server"; //hero title text
$pageLinks = ['main', 'upload', 'connect', 'status', 'cmds']; //links correspond with filenames inside pages/ directory
$menuOptions = [$pageLinks[0] => 'Hlavní strana', 
                $pageLinks[1] => 'Upload songů', 
                $pageLinks[2] => 'Připojit se', 
                $pageLinks[3] => 'Status server', 
                $pageLinks[4] => 'Commandy pro bota'
            ]; //menu item names
$pageHeaders = [$pageLinks[0] => 'Aktuální status serveru a bota', 
                $pageLinks[1] => 'Upload songů botovi', 
                $pageLinks[2] => 'Připojení se k serveru', 
                $pageLinks[3] => 'Podrobný status serveru', 
                $pageLinks[4] => 'Commandy pro JihadBox'
            ]; //title of each page
$status = ['active' => 'Aktivní', 'inactive' => 'Neaktivní']; //server status

$apiLibPath = "api/lib/TeamSpeak3/TeamSpeak3.php"; //path to the TeamSpeak 3 PHP Framework api (https://docs.planetteamspeak.com/ts3/php/framework/)
$serverqueryLogin = "yourserverquerylogin";
$serverqueryPw = "yourserverquerypassword";
$maxclients = '64'; //max 

//FUNCTIONS

class Func {
    public function alert($text,$type) {
        
    }
}