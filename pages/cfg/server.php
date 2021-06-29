<?php
require 'init.php';
use Symfony\Component\Yaml\Yaml;

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

    public function __construct()
    {
        $env = Yaml::parseFile(__DIR__ . '/../../.env.yml');

        $this->serverName = $env['server_name'];
        $this->serverIp = $env['server_ip'];
        $this->serverPort = $env['server_port'];
        $this->serverAddress = $this->serverIp . ':' . $this->serverPort;
        $this->links = $env['links'];
        $this->audiobotPath = $env['ts3audiobot_music_path'];

        $this->queryUsername = $env['query_username'];
        $this->queryPassword = $env['query_password'];

        try 
        {
            $this->virtualServer = TeamSpeak3::factory(
                'serverquery://' . $this->queryUsername . ':' . $this->queryPassword . '@' . 
                $this->serverIp . ':10011/?server_port=' . $this->serverPort
            );
            $this->serverStatus = 1;
        }
        catch (TeamSpeak3_Exception $e) 
        {
            $this->serverStatus = 0;
            error_log($e);
        }
    }

    public function connect(string $name)
    {
        return header('Location: ts3server://' . $this->serverIp . '/?port=' . $this->serverPort . '&nickname=' . $name);
    }

}
