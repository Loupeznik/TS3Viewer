<?php
require 'init.php';
use Symfony\Component\Yaml\Yaml;
use TeamSpeak3;

class Server {
    public $serverName;
    public $serverIp;
    public $serverPort;
    public $serverAddress;
    public $virtualServer; // TS3 Framework Server Object
    public $links;
    public $serverStatus;
    public $audiobotPath;

    private $queryUsername;
    private $queryPassword;

    private function __construct()
    {
        $env = Yaml::parseFile('/.env.yml');

        $this->serverName = $env['server_name'];
        $this->serverIp = $env['server_ip'];
        $this->serverPort = $env['server_port'];
        $this->serverAddress = $this->serverIp . ':' . $this->serverPort;
        $this->virtualServer = new TeamSpeak3();
        $this->links = $env['links'];
        $this->audiobotPath = $env['ts3audiobot_music_path'];

        $this->queryUsername = $env['query_username'];
        $this->queryPassword = $env['query_password'];
    }

    public function serverQueryInit() 
    {
        $server = $this->virtualServer
            ->factory('serverquery://' . $this->queryUsername . ':' . $this->queryPassword . '@' . $this->serverIp . ':10011/?server_port=' . $this->serverPort . '');
        $this->serverStatus = $server != null ? 1 : 0;
        return $server;
    }

    public function connect(string $name)
    {
        return header('Location: ts3server://' . $this->serverIp . '/?port=' . $this->serverPort . '&nickname=' . $name);
    }

}
